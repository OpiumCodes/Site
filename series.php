<?php
 session_start();
 if(isset($_GET['logout']))
 {
     session_destroy();
     unset($_SESSION['username']);
     header( "location: series.php" );
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

<div id="marvel_logo"><img src="/site/images/logo.jpg" width="5.7%" height="100%">
	<div id="shield_logo"><img src="/site/images/shield.png" width="15%" height="100%">
		<div id="sign_in"><?php  if (!isset($_SESSION['username'])) : ?><b><h5><a href="login.php">SIGN IN</a></h5></b><?php else :?><b><h5><a href="series.php?logout='1'">LOGOUT</a></h5></b><?php endif?></div>
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
	</div>
	<div id="horizontal_yellow_bar1">	
		<div id="horizontal_yellow_bar2">
		</div>	
	</div>
	<div id="vertical_yellow_bar1">
		<div id="my_cart"></div>
	</div>	
</div>

<!--//////////////////////////////////////////////////// -->

<figure id="char11" class="snip1423" onclick="location.href='daredevil.php';" style="cursor:pointer;">
  <img src="/site/images/daredevil_icon.jpg" width="260px" height="280px" alt="sample85"/>
  <figcaption>
    <h3>MARVEL'S DAREDEVIL</h3>
  </figcaption>
</figure>

<figure id="char21" class="snip1423" onclick="location.href='punisher.php';" style="cursor:pointer;">
  <img src="/site/images/Punisher/icon.jpg" width="260px" height="280px" alt="sample85"/>
  <figcaption>
    <h3>MARVEL'S THE PUNISHER</h3>
  </figcaption>
</figure>

<figure id="char31" class="snip1423" onclick="location.href='jessica_jones.php';" style="cursor:pointer;">
  <img src="/site/images/JessicaJones/icon.jpg" width="260px" height="280px" alt="sample85"/>
  <figcaption>
    <h3>MARVEL'S JESSICA JONES</h3>
  </figcaption>
</figure>

<figure id="char41" class="snip1423" class="snip1423" onclick="location.href='lukecage.php';" style="cursor:pointer;">
  <img src="/site/images/LukeCage/icon.jpg" width="260px" height="280px" alt="sample85"/>
  <figcaption>
    <h3>MARVEL'S LUKE CAGE</h3>
  </figcaption>
</figure>

<figure id="char51" class="snip1423" class="snip1423" onclick="location.href='ironfist.php';" style="cursor:pointer;">
  <img src="/site/images/IronFist/icon.jpg" width="260px" height="280px" alt="sample85"/>
  <figcaption>
    <h3>MARVEL'S IRON FIST</h3>
  </figcaption>
</figure>

<figure id="char61" class="snip1423" class="snip1423" onclick="location.href='defenders.php';" style="cursor:pointer;">
  <img src="/site/images/TheDefenders/icon.jpg" width="260px" height="280px" alt="sample85"/>
  <figcaption>
    <h3>MARVEL'S THE DEFENDERS</h3>
  </figcaption>
</figure>

<div id="pic1"><img src="/site/images/tvshows.jpg" width="100%" height="100%">

</body>
</html>