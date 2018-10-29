<?php
 session_start();
 ob_start();
 if(isset($_GET['logout']))
 {
     session_destroy();
     unset($_SESSION['username']);
     header( "location: characters.php" );
 }
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
	<link rel="stylesheet" type="text/css" href="css/characters.css">
	<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/generic.js"></script>
    
</head>

<body>

<div id="home" onclick="location.href='basic.php';" style="cursor:pointer;"></div>

<div id="marvel_logo"><img src="/site/images/logo.jpg" width="5.7%" height="100%">
	<div id="shield_logo"><img src="/site/images/shield.png" width="15%" height="100%">
		<div id="sign_in"><?php  if (!isset($_SESSION['username'])) : ?><b><h5><a href="login.php">SIGN IN</a></h5></b><?php else :?><b><h5><a href="characters.php?logout='1'">LOGOUT</a></h5></b><?php endif?></div>
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

<div id="pic1"><img src="images/universe.jpg" width="100%" height="100%"></div>
<br>
    <br>
    <br>
    <?php if($root==1):?>
    <form action="characters.php" method="post" enctype="multipart/form-data">
        <h3>Insert a new character.</h3>
        <input type="text" name="name" placeholder="Insert the name" maxlenght="20">
        <br>
        <br>
        <h3>Choose a picture of the character</h3>
        <input type="file" name="photo">
        <br>
        <h3>Insert a link to a video about the character.</h3>
        <input type="text" name="link" placeholder="Insert the link" maxlenght="100">
        <br>
        <h3>Give the character a short description.(up to 300 characters)</h3>
        <textarea rows="5" cols="50" name="description" maxlenght="300"></textarea>
        <br>
        <button type="submit" name="insert_character">Submit</button>
    </form>
    <?php endif?>
    <?php
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'login_information');
    if ($mysqli->connect_error) {
      die('Connect Error (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
    }
if(isset($_POST['insert_character']))
{
    $file_type = $_FILES['photo']['type'];
    $file_size= $_FILES['photo']['size'];
    $allowed = array("image/jpeg", "image/gif", "image/png","image/jpg");
    $max=2097152;
    if(!in_array($file_type, $allowed) || $file_size>=$max) {
        echo 'Only images with sizes lower then 2MB allowed! <br>';
        header( "refresh:3;url=characters.php" );
    }
    else
        if(strlen($_POST['description'])>300)
            {
                echo "Description is over 300 characters!";
                header( "refresh:3;url=characters.php" );
            }
        else
        {

            $image=addslashes(file_get_contents($_FILES['photo']['tmp_name']));
            $name=$_POST['name'];
            $description=$_POST['description'];
            $link=$_POST['link'];
            $final_link=preg_replace("#.*youtube\.com/watch\?v=#","","$link");
            $query="INSERT INTO characters (Name,Image,Description,Link) VALUES ('$name','$image','$description','$final_link')";
            if(mysqli_query($mysqli,$query)==FALSE)
            {
                echo "Upload failed!";
                header( "refresh:3;url=characters.php" );

            }
            else
            {
                while (ob_get_status()) 
                {
                    ob_end_clean();
                }
                header( "Location: characters.php" );
            }
        }
}

?>
<br>
<br>

    <?php
        $sql="SELECT * FROM characters";
        $query=mysqli_query($mysqli,$sql);
        $show=1;
        while($show==1)
        if($row=mysqli_fetch_array($query))
        {
            echo '
            <div class="gallery">
            <img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="240px" height="250px" alt="sample85"/>
            <div class="desc"><p style="text-align:center;font-size:20px;">'.$row['Name'].'
            <span style="float: left"><a href="blank.php?id='.$row['Id'].'">Read More!</a></span>
            ';
            
            if($root==1)
            {
                echo '<span style="float: right"><a href="delete.php?id='.$row['Id'].'">Delete</a></span>';
            }
            echo '</p>
            </div>
            </div>
            ';
            $show=1;
        }
        else
            $show=0;
        if($show==0)
            echo '<br>';
    $mysqli->close();
    ?>
</body>
</html>
