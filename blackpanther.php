<?php
 session_start();
 if(isset($_GET['logout']))
 {
     session_destroy();
     unset($_SESSION['username']);
     header( "location: blackpanther.php" );
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
		<div id="news1" onclick="currentSlide(1);" style="cursor:pointer;"><b><br>Marvel Studios' Black Panther - Official Trailer</br></b></div>
		<div id="news2" onclick="currentSlide(2);" style="cursor:pointer;"><b><h5>Funniest Moments</b></h5></div>
		<div id="news3" onclick="currentSlide(3);" style="cursor:pointer;"><b><h5>Car Chase Scene</b></div>
		<div id="news4" onclick="currentSlide(4);" style="cursor:pointer;"><b><h5>Museum Scene </br></b></div>
		
		<div id="gallery">GALLERY</div>
	</div>
	<div id="gallery_black"></div>	
</div>

<div id="marvel_logo"><img src="/site/images/logo.jpg" width="5.7%" height="100%">
	<div id="shield_logo"><img src="/site/images/shield.png" width="15%" height="100%">
    <div id="sign_in"><?php  if (!isset($_SESSION['username'])) : ?><b><h5><a href="login.php">SIGN IN</a></h5></b><?php else :?><b><h5><a href="blackpanther.php?logout='1'">LOGOUT</a></h5></b><?php endif?></div>
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
								<iframe width="1290" height="725" src="https://www.youtube.com/embed/xjDjIWPwcPU?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>

						<div class="hidden fade">
							<div id="ytvid2">
								<iframe width="1290" height="725" src="https://www.youtube.com/embed/Q5Su1S4ZVoI?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>

						<div class="hidden fade">
							<div id="ytvid3">
								<iframe width="1290" height="725" src="https://www.youtube.com/embed/gVpWZCSqQEA?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>
	
						<div class="hidden fade">
							<div id="ytvid4">
								<iframe width="1290" height="725" src="https://www.youtube.com/embed/Z2KJxdvckEk?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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

<div id="dd1"><img src="/site/images/blackpanther/wp.jpg" width="100%" height="100%">
	<div id="overview">OVERVIEW</div>
	<div id="series_icon"><img src="/site/images/blackpanther/icon.jpg" width="350px" height="550px"></div>
	<div id="series_text"><b>Black Panther</b></div>
	<div id="series_text1">After the death of his father, T'Challa returns home to the African nation of <br>Wakanda to take his rightful place as king.When a powerful enemy suddenly <br>reappears, T'Challa's mettle 
	as king, and as Black Panther gets tested when he's <br>drawn into a conflict that puts the fate of Wakanda and the entire world at risk.
	<div id="series_text2"><b>DIRECTED BY</b></div>
	<div id="series_text3"><b>Ryan Coogler</div>
	<div id="series_text4"><b>RATING</b></div>
	<div id="series_text5"><b>PG-13</b></div>
	<div id="featured">FEATURED VIDEOS</div>
</div>

<div id="poze" class="w3-container">
	<div class="w3-content w3-display-container">

	<div id="pic1" class="w3-display-container mySlides">
		<img src="/site/images/blackpanther/b1.jpg" style="width:100%">
	</div>

	<div id="pic2" class="w3-display-container mySlides">
		<img src="/site/images/blackpanther/b2.jpg" style="width:100%">
	</div>

	<div id="pic3" class="w3-display-container mySlides">
		<img src="/site/images/blackpanther/b3.jpg" style="width:100%">
	</div>	
</div>

<button id="buton1" class="prev" onclick="plusDivs(-1)">&#10094;</button>
<button id="buton2" class="next" onclick="plusDivs(1)">&#10095;</button>
</div>


<figure id="comic1" class="snip1418"><img src="images/BlackPanther/1.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Black Panther: A Nation Under Our Feet Vol. 1</h3>
    <p>Ta-Nehisi Coates, Stan Lee</p>
</figcaption>
</figure>

<figure id="comic2" class="snip1418"><img src="/site/images/BlackPanther/2.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Secret Invasion: Black Panther</h3>
    <p>Jason Aaron</p>
  </figcaption>
</figure>

<figure id="comic3" class="snip1418"><img src="/site/images/BlackPanther/3.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Black Panther: The Man Without Fear Vol. 1: Urban Jungle</h3>	
    <p>David Liss</p>
  </figcaption>
</figure>

<figure id="comic4" class="snip1418"><img src="/site/images/BlackPanther/4.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
	<h3>Black Panther by Christopher Priest:Vol. 3</h3>
    <p>Christopher Priest</p>
  </figcaption>
</figure>

<figure id="comic5" class="snip1418"><img src="/site/images/BlackPanther/5.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Rise of the Black Panther</h3>
    <p>Ta-Nehisi Coates, Evan Narcisse</p>
  </figcaption>
</figure>

<script type="text/javascript" src="js/daredevil.js"></script>
	
</body>
</html>