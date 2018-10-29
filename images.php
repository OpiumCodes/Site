<?php
 session_start();
 if(isset($_GET['logout']))
 {
     session_destroy();
     unset($_SESSION['username']);
     header( "location: movies.php" );
 }
 $mysqli = new mysqli('127.0.0.1', 'root', '', 'login_information');
 $root=0;
 if(isset($_SESSION['username']))
 {
     if($_SESSION['username']=="root")
        $root=1;
 }
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php if($root==1):?>
    <form action="images.php" method="post" enctype="multipart/form-data">
        <h3>Insert a new movie.</h3>
        <input type="text" name="movietitle" placeholder="Insert movie title" maxlenght="20">
        <br>
        <br>
        <h3>Choose a picture for the movie.</h3>
        <input type="file" name="photo">
        <br>
        <h3>Give the movie a short description.</h3>
        <textarea rows="5" cols="50" name="description" maxlenght="200"></textarea>
        <br>
        <input type="submit" name="insert_movie">
    </form>
    <?php endif?>
</body>
</html>
<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'login_information');
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
if(isset($_POST['insert_movie']))
{
    $image=addslashes(file_get_contents($_FILES['photo']['tmp_name']));
    $file_type = $_FILES['photo']['type'];
    $allowed = array("image/jpeg", "image/gif", "image/png");
    if(!in_array($file_type, $allowed)) {
        echo "Only images allowed";
    }
    else
    {
        $title=$_POST['movietitle'];
        $description=$_POST['description'];
        $query="INSERT INTO movies (Name,Image,Description) VALUES ('$title','$image','$description')";
        if(mysqli_query($mysqli,$query)==FALSE)
        {
            echo "Upload failed!";
        }
    }

}
$mysqli->close();
?>