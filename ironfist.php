<?php
 session_start();
 if(isset($_GET['logout']))
 {
     session_destroy();
     unset($_SESSION['username']);
     header( "location: ironfist.php" );
 }
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
		<div id="news1" onclick="currentSlide(1);" style="cursor:pointer;"><b><br>Marvel's The Punisher  Official Trailer</br></b></div>
		<div id="news2" onclick="currentSlide(2);" style="cursor:pointer;"><b><h5>Marvel’s Iron Fist: Season 2 | Official Trailer</b></h5></div>
		<div id="news3" onclick="currentSlide(3);" style="cursor:pointer;"><b><h5>Top 10 Facts</b></div>
		<div id="news4" onclick="currentSlide(4);" style="cursor:pointer;"><b><h5>Iron Fist Season 2 Finale Breakdown!</br></b></div>
		
		<div id="gallery">GALLERY</div>
	</div>
	<div id="gallery_black"></div>	
</div>

<div id="marvel_logo"><img src="/site/images/logo.jpg" width="5.7%" height="100%">
	<div id="shield_logo"><img src="/site/images/shield.png" width="15%" height="100%">
		<div id="sign_in"><?php  if (!isset($_SESSION['username'])) : ?><b><h5><a href="login.php">SIGN IN</a></h5></b><?php else :?><b><h5><a href="ironfist.php?logout='1'">LOGOUT</a></h5></b><?php endif?></div>
		<div id="search_logo">
			<div id="vertical_yellow_bar2"></div>
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
								<iframe width="1290" height="725" src="https://www.youtube.com/embed/kvvWB0GwCek?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>

						<div class="hidden fade">
							<div id="ytvid2">
								<iframe width="1290" height="725" src="https://www.youtube.com/embed/f9OKL5no-S0?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>

						<div class="hidden fade">
							<div id="ytvid3">
								<iframe width="1290" height="725" src="https://www.youtube.com/embed/x1Ve_Y63jvM?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>
	
						<div class="hidden fade">
							<div id="ytvid4">
								<iframe width="1290" height="725" src="https://www.youtube.com/embed/Vrk4bhGlzhA?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>
					</div>	
			</div>
	</div>
	<div id="vertical_yellow_bar1">
		<div id="my_cart"></div>
			<div id="mycart"><b></b></div>
		</div>
	</div>
</div>

<div id="dd1"><img src="/site/images/IronFist/wallpaper.jpg" width="100%" height="100%">
	<div id="overview">OVERVIEW</div>
	<div id="series_icon"><img src="/site/images/IronFist/icon.jpg" width="350px" height="550px"></div>
	<div id="series_text"><b>MARVEL'S IRON FIST</b></div>
	<div id="series_text1">Danny Rand and Colleen Wing are trying to keep the peace among the many <br>warring gangs. With the help of Misty Knight, they discover that the crime ring <br>in the city goes far deeper than 
	they had ever anticipated and hanging up their <br>swords is no longer an option.
	<div id="series_text2"><b>NETWORK</b></div>
	<div id="series_text3"><b>Netflix</b></div>
	<div id="series_text4"><b>RATING</b></div>
	<div id="series_text5"><b>TV-MA</b></div>
	<div id="featured">FEATURED VIDEOS</div>
</div>

<div id="poze" class="w3-container">
	<div class="w3-content w3-display-container">

	<div id="pic1" class="w3-display-container mySlides">
		<img src="/site/images/IronFist/i1.jpg" style="width:100%">
	</div>

	<div id="pic2" class="w3-display-container mySlides">
		<img src="/site/images/IronFist/i2.jpg" style="width:100%">
	</div>

	<div id="pic3" class="w3-display-container mySlides">
		<img src="/site/images/IronFist/i3.jpg" style="width:100%">
	</div>

</div>

<button id="buton1" class="prev" onclick="plusDivs(-1)">&#10094;</button>
<button id="buton2" class="next" onclick="plusDivs(1)">&#10095;</button>
</div>


<figure id="comic1" class="snip1418"><img src="images/IronFist/1.jpg" width="250px" height="350px" alt="sample85"/>
  <div class="add-to-cart"> <i class="ion-android-add"></i><span></span></div>
  <figcaption>
    <h3>Immortal Iron Fist Vol. 3: Book of the Iron Fist</h3>
    <p>Ed Brubaker, Matt Fraction</p>
  </figcaption><a href="#"></a>
</figure>

<figure id="comic2" class="snip1418"><img src="/site/images/IronFist/2.jpg" width="250px" height="350px" alt="sample85"/>
  <div class="add-to-cart"> <i class="ion-android-add"></i><span></span></div>
  <figcaption>
    <h3>Immortal Iron Fist Vol. 4: The Mortal Iron Fist</h3>
    <p>Duane Swierczynski</p>
  </figcaption><a href="#"></a>
</figure>

<figure id="comic3" class="snip1418"><img src="/site/images/IronFist/3.jpg" width="250px" height="350px" alt="sample85"/>
  <div class="add-to-cart"> <i class="ion-android-add"></i><span></span></div>
  <figcaption>
    <h3>Iron Fist Vol. 2: Sabretooth - Round Two</h3>	
    <p>Ed Brisson</p>
  </figcaption><a href="#"></a>
</figure>

<figure id="comic4" class="snip1418"><img src="/site/images/IronFist/4.jpg" width="250px" height="350px" alt="sample85"/>
  <div class="add-to-cart"> <i class="ion-android-add"></i><span></span></div>
  <figcaption>
	<h3>Iron Fist: The Living Weapon Vol. 1: Rage</h3>
    <p>Kaare Kyle Andrews</p>
  </figcaption><a href="#"></a>
</figure>

<figure id="comic5" class="snip1418"><img src="/site/images/IronFist/5.jpg" width="250px" height="350px" alt="sample85"/>
  <div class="add-to-cart"> <i class="ion-android-add"></i><span></span></div>
  <figcaption>
    <h3>Immortal Iron Fist Vol. 5: Escape From The Eighth City</h3>
    <p>Duane Swierczynski</p>
  </figcaption>
</figure>

<script type="text/javascript" src="js/daredevil.js"></script>
	
</body>
</html>