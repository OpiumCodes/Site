<?php
 session_start();
 if(isset($_GET['logout']))
 {
     session_destroy();
     unset($_SESSION['username']);
     header( "location: antman.php" );
 }
 $mysqli = new mysqli('127.0.0.1', 'root', '', 'login_information');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/default1.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/generic.js"></script>
</head>

<body>

<div id="butoane">
	<span class="dots"></span> 
	<span class="dots"></span> 
	<span class="dots"></span> 
	<span class="dots"></span> 
	<div id="separator">
		<div id="news1" onclick="currentSlide(1);" style="cursor:pointer;"><b><br>Ant-Man and the Wasp - Official Trailer #1</br></b></div>
		<div id="news2" onclick="currentSlide(2);" style="cursor:pointer;"><b><h5>Ant-Man and the Wasp - Official Trailer #2</b></h5></div>
		<div id="news3" onclick="currentSlide(3);" style="cursor:pointer;"><b><h5>Ant-Man and the Wasp - Sneak Peek - School Scene</b></div>
		<div id="news4" onclick="currentSlide(4);" style="cursor:pointer;"><b><h5>ANT-MAN & WASP Breakdown! </br></b></div>
		
		<div id="gallery">GALLERY</div>
	</div>
	<div id="gallery_black"></div>	
</div>

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
			<div id="sign_in"><?php  if (!isset($_SESSION['username'])) : ?><b><h5><a href="login.php">SIGN IN</a></h5></b><?php else :?><b><h5><a href="antman.php?logout='1'">LOGOUT</a></h5></b><?php endif?></div>
					<div id="vertical_yellow_bar2">
				</div>
		</div>
 	<div id="filler">
		<div id="movies" onclick="location.href='movies.php';" style="cursor:pointer;">  <b>MOVIES</b></div>
		<div id="series" onclick="location.href='series.php';" style="cursor:pointer;">  <b>SERIES</b></div>
		<div id="comics" onclick="location.href='comics.php';" style="cursor:pointer;">  <b>COMICS</b></div>
		<div id="games" onclick="location.href='games.php';"style="cursor:pointer;">  <b>GAMES</b></div>
		<div id="characters" onclick="location.href='characters.php';" style="cursor:pointer;">  <b>CHARACTERS</b></div>
		<div id="home_button" onclick="location.href='basic.php';" style="cursor:pointer;">  <b>HOME</b></div>
	</div>
	<div id="horizontal_yellow_bar1">	
			<div id="horizontal_yellow_bar2">
					<div class="slideshow-container">
						<div class="hidden fade">
							<div id="ytvid1">
								<iframe width="1290" height="725" src="https://www.youtube.com/embed/8_rTIAOohas?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>

						<div class="hidden fade">
							<div id="ytvid2">
								<iframe width="1290" height="725" src="https://www.youtube.com/embed/UUkn-enk2RU?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>

						<div class="hidden fade">
							<div id="ytvid3">
								<iframe width="1290" height="725" src="https://www.youtube.com/embed/SeAgqTzp1nE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>
	
						<div class="hidden fade">
							<div id="ytvid4">
								<iframe width="1290" height="725" src="https://www.youtube.com/embed/4QZfNDkuYeA?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>
					</div>	
			</div>
	</div>
	<div id="vertical_yellow_bar1">
		<div id="my_cart">
        <div id="mycart"></div>
		</div>
	</div>
</div>

<div id="dd1"><img src="/site/images/AntMan/wp.jpg" width="100%" height="100%">
	<div id="overview">OVERVIEW</div>
	<div id="series_icon"><img src="/site/images/AntMan/icon.jpg" width="350px" height="550px"></div>
	<div id="series_text"><b>ANT MAN AND THE WASP</b></div>
	<div id="series_text1">From the Marvel Cinematic Universe comes a new chapter featuring heroes with<br> the astonishing ability to shrink: "Ant-Man and The Wasp." In the aftermath of <br>"Captain America: Civil War", 
	Scott Lang grapples with the consequences of his <br>choices as both a Super Hero and a father.
	<div id="series_text2"><b>DIRECTED BY</b></div>
	<div id="series_text3"><b>Peyton Reed</div>
	<div id="series_text4"><b>RATING</b></div>
	<div id="series_text5"><b>PG-13</b></div>
	<div id="featured">FEATURED VIDEOS</div>
</div>

<div id="poze" class="w3-container">
	<div class="w3-content w3-display-container">

	<div id="pic1" class="w3-display-container mySlides">
		<img src="/site/images/AntMan/a1.jpg" style="width:100%">
	</div>

	<div id="pic2" class="w3-display-container mySlides">
		<img src="/site/images/AntMan/a2.jpg" style="width:100%">
	</div>

	<div id="pic3" class="w3-display-container mySlides">
		<img src="/site/images/AntMan/a3.jpg" style="width:100%">
	</div>

	<div id="pic4" class="w3-display-container mySlides">
		<img src="/site/images/AntMan/a4.jpg" style="width:100%">
	</div>
	
</div>

<button id="buton1" class="prev" onclick="plusDivs(-1)">&#10094;</button>
<button id="buton2" class="next" onclick="plusDivs(1)">&#10095;</button>
</div>


<figure id="comic1" class="snip1418">
	<?php
		$sql="SELECT * FROM Antman WHERE Name='antman1'";
		$query=mysqli_query($mysqli,$sql);
		$row=mysqli_fetch_array($query);
    echo '
        <tr>
            <td>
                <img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="250px" height="350px" alt="sample85">
            </td>
        </tr>
    ';
 ?>
  <div class="add-to-cart"> <i class="ion-android-add"></i><span>Add to Cart</span></div>
  <figcaption>
    <h3>Ant-Man and Wasp: Small World</h3>
    <p>Tim Seeley</p>
  </figcaption><a href="#"></a>
</figure>

<figure id="comic2" class="snip1418"><?php
		$sql="SELECT * FROM Antman WHERE Name='antman2'";
		$query=mysqli_query($mysqli,$sql);
		$row=mysqli_fetch_array($query);
    echo '
        <tr>
            <td>
                <img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="250px" height="350px" alt="sample85">
            </td>
        </tr>
    ';
 ?>
  <div class="add-to-cart"> <i class="ion-android-add"></i><span>Add to Cart</span></div>
  <figcaption>
    <h3>Marvel's Ant-Man and the Wasp Prelude</h3>
    <p>Roberto Aguirre-Sacasa, David Michelinie</p>
    </figcaption><a href="#"></a>
</figure>

<figure id="comic3" class="snip1418"><?php
		$sql="SELECT * FROM Antman WHERE Name='antman3'";
		$query=mysqli_query($mysqli,$sql);
		$row=mysqli_fetch_array($query);
    echo '
        <tr>
            <td>
                <img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="250px" height="350px" alt="sample85">
            </td>
        </tr>
    ';
 ?>
  <div class="add-to-cart"> <i class="ion-android-add"></i><span>Add to Cart</span></div>
  <figcaption>
    <h3>Irredeemable Ant-Man Vol. 1: Low-Life</h3>	
    <p>Robert Kirkman</p>
  </figcaption><a href="#"></a>
</figure>

<figure id="comic4" class="snip1418"><?php
		$sql="SELECT * FROM Antman WHERE Name='antman4'";
		$query=mysqli_query($mysqli,$sql);
		$row=mysqli_fetch_array($query);
    echo '
        <tr>
            <td>
                <img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="250px" height="350px" alt="sample85">
            </td>
        </tr>
    ';
 ?>
  <div class="add-to-cart"> <i class="ion-android-add"></i><span>Add to Cart</span></div>
  <figcaption>
	<h3>The Astonishing Ant-Man Vol. 3: The Trial of Ant-Man</h3>
    <p>Paul Scheer</p>
  </figcaption><a href="#"></a>
</figure>

<figure id="comic5" class="snip1418"><?php
		$sql="SELECT * FROM Antman WHERE Name='antman5'";
		$query=mysqli_query($mysqli,$sql);
		$row=mysqli_fetch_array($query);
    echo '
        <tr>
            <td>
                <img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="250px" height="350px" alt="sample85">
            </td>
        </tr>
    ';
 ?>
  <div class="add-to-cart"> <i class="ion-android-add"></i><span>Add to Cart</span></div>
  <figcaption>
    <h3>The Astonishing Ant-Man Vol. 1: Everybody Loves Team-Ups</h3>
    <p>Nick Spencer</p>
  </figcaption>
</figure>

<script type="text/javascript" src="js/daredevil.js"></script>
	
</body>
</html>