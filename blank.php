<?php
 session_start();
 if(isset($_GET['logout']))
 {
     session_destroy();
     unset($_SESSION['username']);
     header( "location: basic.php" );
 }
 $mysqli = new mysqli('127.0.0.1', 'root', '', 'login_information');
 if(isset($_GET['id']))
 {
    $id=$_GET['id'];
    $sql="SELECT * FROM characters WHERE Id='$id'";
	$query=mysqli_query($mysqli,$sql);
	$row=mysqli_fetch_array($query);
 }
 else
 {
    header( "location: basic.php" );
 }
 
?>
 <?php header('X-Frame-Options: GOFORIT'); ?>
 <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/rofl.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/generic.js"></script>
</head>

<body>

<div id="home" onclick="location.href='basic.php';" style="cursor:pointer;"></div>

<div id="marvel_logo"><img src="images/logo.jpg" width="5.7%" height="100%">
	<div id="shield_logo" onclick="location.href='basic.php';" style="cursor:pointer;"><img src="images/shield.png" width="15%" height="100%">
		<div id="sign_in"><?php  if (!isset($_SESSION['username'])) : ?><b><h5><a href="login.php">SIGN IN</a></h5></b><?php else :?><b><h5><a href="basic.php?logout='1'">LOGOUT</a></h5></b><?php endif?></div>
		<div id="search_logo">
			<div id="vertical_yellow_bar2"></div>
		</div>
	</div>
	<div id="filler">
		<div id="movies" onclick="location.href='movies.php';" style="cursor:pointer;">  <b>MOVIES</b></div>
		<div id="series" onclick="location.href='series.php';" style="cursor:pointer;">  <b>SERIES</b></div>
		<div id="comics" onclick="location.href='comics.php';" style="cursor:pointer;">  <b>COMICS</b></div>
		<div id="games" onclick="location.href='games.php';" style="cursor:pointer;">  <b>GAMES</b></div>
		<div id="characters" onclick="location.href='characters.php';" style="cursor:pointer;">  <b>CHARACTERS</b></div>
		<div id="mycart"><b></b></div>
	</div>
	<div id="horizontal_yellow_bar1">	
		<div id="horizontal_yellow_bar2">
		</div>	
	</div>
	<div id="vertical_yellow_bar1">
		<div id="my_cart"></div>
	</div>
	
	<div id="overview">OVERVIEW
		<div id="series_text"><b><?php echo $row['Name']?></b></div>
		<div id="series_text1"><?php echo $row['Description']?></div>
		<div id="featured">FEATURED VIDEO
			<div class="hidden fade">
						<div id="ytvid1">
                        <iframe width="1290" height="725" src="https://www.youtube.com/embed/<?php echo $row['Link']?>?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
			</div>	
		</div>
        <div id="series_icon"><?php
        echo '
        <tr>
            <td>
                <img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="350px" height="450px">
            </td>
        </tr>
        ';
        ?></div>
    </div>
</div>
    <br>
    <br>
    <?php echo $row['Link']?>
</body>
</html>