<?php
 session_start();
 if(isset($_GET['logout']))
 {
     session_destroy();
     unset($_SESSION['username']);
     header( "location: movies.php" );
 }
 $mysqli = new mysqli('127.0.0.1', 'root', '', 'login_information');
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/movies.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/generic.js"></script>
</head>

<body>

  <div id="home" onclick="location.href='basic.php';" style="cursor:pointer;"></div>

<div id="marvel_logo"><?php
$sql="SELECT * FROM HeaderImages WHERE Name='marvel_logo'";
$query=mysqli_query($mysqli,$sql);
$row=mysqli_fetch_array($query);
    echo '
        <tr>
            <td>
                <img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="5.7%" height="100%">
            </td>
        </tr>
    ';
 ?>
		<div id="shield_logo"><?php
		$sql="SELECT * FROM HeaderImages WHERE Name='shield'";
		$query=mysqli_query($mysqli,$sql);
		$row=mysqli_fetch_array($query);
    echo '
        <tr>
            <td>
                <img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="15%" height="100%">
            </td>
        </tr>
    ';
 ?>
			<div id="sign_in"><?php  if (!isset($_SESSION['username'])) : ?><b><h5><a href="login.php">SIGN IN</a></h5></b><?php else :?><b><h5><a href="basic.php?logout='1'">LOGOUT</a></h5></b><?php endif?></div>
					<div id="vertical_yellow_bar2">
				</div>
		</div>
	<div id="filler">
		<div id="movies" onclick="location.href='movies.php';" style="cursor:pointer;">  <b>MOVIES</b></div>
		<div id="series" onclick="location.href='series.php';" style="cursor:pointer;">  <b>SERIES</b></div>
		<div id="comics" onclick="location.href='comics.php';" style="cursor:pointer;">  <b>COMICS</b></div>
		<div id="games" onclick="location.href='games.php';" style="cursor:pointer;">  <b>GAMES</b></div>
		<div id="characters" onclick="location.href='characters.php';" style="cursor:pointer;">  <b>CHARACTERS</b></div>
	</div>
	<div id="horizontal_yellow_bar1">	
		<div id="horizontal_yellow_bar2">
		</div>	
	</div>
	<div id="vertical_yellow_bar1">
		<div id="my_cart"></div>
	</div>	
</div>

<figure id="char11" class="snip1423" onclick="location.href='antman.php';" style="cursor:pointer;">
<?php
		$sql="SELECT * FROM moviesimages WHERE Name='antmanicon'";
		$query=mysqli_query($mysqli,$sql);
		$row=mysqli_fetch_array($query);
    echo '
        <tr>
            <td>
                <img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="260px" height="280px" alt="sample85"/>
            </td>
        </tr>
    ';
 ?>
  <figcaption>
    <h3>Ant-Man and the Wasp</h3>
  </figcaption>
  <a href="#"></a>
</figure>

<figure id="char21" class="snip1423" onclick="location.href='avengers.php';" style="cursor:pointer;">
<?php
		$sql="SELECT * FROM moviesimages WHERE Name='avengersicon'";
		$query=mysqli_query($mysqli,$sql);
		$row=mysqli_fetch_array($query);
    echo '
        <tr>
            <td>
                <img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="250px" height="280px" alt="sample85"/>
            </td>
        </tr>
    ';
 ?>
  <figcaption>
    <h3>Avengers: Infinity War</h3>
  </figcaption>
  <a href="#"></a>
</figure>

<figure id="char31" class="snip1423" onclick="location.href='blackpanther.php';" style="cursor:pointer;">
<?php
		$sql="SELECT * FROM moviesimages WHERE Name='blackpanthericon'";
		$query=mysqli_query($mysqli,$sql);
		$row=mysqli_fetch_array($query);
    echo '
        <tr>
            <td>
                <img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="250px" height="280px" alt="sample85"/>
            </td>
        </tr>
    ';
 ?>
  <figcaption>
    <h3>Black Panther</h3>
  </figcaption>
  <a href="#"></a>
</figure>

<figure id="char41" class="snip1423" onclick="location.href='cptmarvel.php';" style="cursor:pointer;">
<?php
		$sql="SELECT * FROM moviesimages WHERE Name='captainmarvelicon'";
		$query=mysqli_query($mysqli,$sql);
		$row=mysqli_fetch_array($query);
    echo '
        <tr>
            <td>
                <img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="250px" height="280px" alt="sample85"/>
            </td>
        </tr>
    ';
 ?>
  <figcaption>
    <h3>Captain Marvel</h3>
  </figcaption>
  <a href="#"></a>
</figure>

<figure id="char51" class="snip1423" onclick="location.href='drstrange.php';" style="cursor:pointer;">
<?php
		$sql="SELECT * FROM moviesimages WHERE Name='drstrangeicon'";
		$query=mysqli_query($mysqli,$sql);
		$row=mysqli_fetch_array($query);
    echo '
        <tr>
            <td>
                <img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="250px" height="280px" alt="sample85"/>
            </td>
        </tr>
    ';
 ?>
  <figcaption>
    <h3>Doctor Strange</h3>
  </figcaption>
  <a href="#"></a>
</figure>

<figure id="char61" class="snip1423" onclick="location.href='thor.php';" style="cursor:pointer;">
<?php
		$sql="SELECT * FROM moviesimages WHERE Name='thoricon'";
		$query=mysqli_query($mysqli,$sql);
		$row=mysqli_fetch_array($query);
    echo '
        <tr>
            <td>
                <img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="250px" height="280px" alt="sample85"/>
            </td>
        </tr>
    ';
 ?>
  <figcaption>
    <h3>Thor: Ragnarok</h3>
  </figcaption>
  <a href="#"></a>
</figure>

<div id="pic1"><?php
		$sql="SELECT * FROM moviesimages WHERE Name='moviesimg'";
		$query=mysqli_query($mysqli,$sql);
		$row=mysqli_fetch_array($query);
    echo '
        <tr>
            <td>
                <img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="100%" height="100%">
            </td>
        </tr>
    ';
 ?>
</div>

</body>
</html>