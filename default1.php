<?php
 session_start();
 if(isset($_GET['logout']))
 {
     session_destroy();
     unset($_SESSION['username']);
     header( "location: default1.php" );
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
		<div id="news1" onclick="currentSlide(1);" style="cursor:pointer;"><b><br>Fisk Spotlight</br></b></div>
		<div id="news2" onclick="currentSlide(2);" style="cursor:pointer;"><b><h5>Wilson Fisk returns</b></h5></div>
		<div id="news3" onclick="currentSlide(3);" style="cursor:pointer;"><b><h5>The last resort of the Avengers</b></div>
		<div id="news4" onclick="currentSlide(4);" style="cursor:pointer;"><b><h5>Marvel's Spiderman <br>on PS4</br></b></div>
		<div id="gallery">GALLERY</div>
	</div>
	<div id="gallery_black"></div>	
</div>

<div id="marvel_logo"><img src="/site/images/logo.jpg" width="5.7%" height="100%">
	<div id="shield_logo" ><img src="/site/images/shield.png" width="15%" height="100%">
    <div id="sign_in"><?php  if (!isset($_SESSION['username'])) : ?><b><h5><a href="login.php">SIGN IN</a></h5></b><?php else :?><b><h5><a href="default1.php?logout='1'">LOGOUT</a></h5></b><?php endif?></div>
			<div id="vertical_yellow_bar2">
		</div>
	</div>
	<div id="filler">
		<div id="movies" onclick="location.href='movies.php';" style="cursor:pointer;">  <b>MOVIES</b></div>
		<div id="series" onclick="location.href='series.php';" style="cursor:pointer;">  <b>SERIES</b></div>
		<div id="comics" onclick="location.href='comics.php';" style="cursor:pointer;">  <b>COMICS</b></div>
		<div id="games" onclick="location.href='games.php';" style="cursor:pointer;">  <b>GAMES</b></div>
        <div id="characters" onclick="location.href='characters.php';" style="cursor:pointer;">  <b>CHARACTERS</b></div>
        <div id="home_button" onclick="location.href='basic.php';" style="cursor:pointer;">  <b>HOME</b></div>
	</div>
	<div id="horizontal_yellow_bar1">	
			<div id="horizontal_yellow_bar2">
					<div class="slideshow-container">
						<div class="hidden fade">
							<div id="ytvid1">
								<iframe width="1290" height="725" src="https://www.youtube.com/embed/hA1Hhs0gZI8?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>

						<div class="hidden fade">
							<div id="ytvid2">
								<iframe width="1290" height="725" src="https://www.youtube.com/embed/hA1Hhs0gZI8?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>

						<div class="hidden fade">
							<div id="ytvid3">
								<iframe width="1290" height="725" src="https://www.youtube.com/embed/hA1Hhs0gZI8?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>
	
						<div class="hidden fade">
							<div id="ytvid4">
								<iframe width="1290" height="725" src="https://www.youtube.com/embed/hA1Hhs0gZI8?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>-->
					</div>	
			</div>
	</div>
	<div id="vertical_yellow_bar1">
		<div id="my_cart" ></div>
	</div>
</div>

<div id="dd1"><img src="/site/images/daredevils1.jpg" width="100%" height="100%">
	<div id="overview">OVERVIEW</div>
	<div id="series_icon"><img src="/site/images/daredevil_icon.jpg" width="350px" height="550px"></div>
	<div id="series_text"><b>MARVEL'S DAREDEVIL</b></div>
	<div id="series_text1">The first season sees lawyer-by-day Matt Murdock use his heightened senses <br>from being blinded as a young boy to fight crime at night on the streets of <br>New York City's Hell's 
	Kitchen neighborhood as Daredevil, while uncovering <br> a conspiracy of the criminal underworld being led by Wilson Fisk.<br> In the second season, Murdock continues to balance life as a lawyer <br>and Daredevil, 
	while crossing paths with Frank Castle / Punisher, a vigilante <br> with far deadlier methods, as well as the return of an ex-girlfriend—Elektra <br>Natchios. When Fisk is released from prison, Murdock, who 
	has been missing <br>for months following the events of The Defenders, reemerges a broken man <br>and must decide between hiding from the world as a lawyer, or embracing <br>his life as a hero vigilante.</div>
	<div id="featured">FEATURED VIDEOS</div>
</div>

<div id="poze" class="w3-container">
	<div class="w3-content w3-display-container">

	<div id="pic1" class="w3-display-container mySlides">
		<img src="/site/images/fisk.jpg" style="width:100%">
	</div>

	<div id="pic2" class="w3-display-container mySlides">
		<img src="/site/images/venom.jpg" style="width:100%">
	</div>

	<div id="pic3" class="w3-display-container mySlides">
		<img src="/site/images/fisk.jpg" style="width:100%">
	</div>

	<div id="pic4" class="w3-display-container mySlides">
		<img src="/site/images/venom.jpg" style="width:100%">
	</div>
	
</div>

<button id="buton1" class="prev" onclick="plusDivs(-1)">&#10094;</button>
<button id="buton2" class="next" onclick="plusDivs(1)">&#10095;</button>
</div>


<figure id="comic1" class="snip1418"><img src="/site/images/daredevil_icon.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Pudol Doux</h3>
    <p>All this modern technology just makes people try to do everything at once.</p>
  </figcaption>
</figure>

<figure id="comic2" class="snip1418"><img src="/site/images/daredevil_icon.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Pudol Doux</h3>
    <p>All this modern technology just makes people try to do everything at once.</p>
  </figcaption>
</figure>

<figure id="comic3" class="snip1418"><img src="/site/images/daredevil_icon.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Pudol Doux</h3>
    <p>All this modern technology just makes people try to do everything at once.</p>
  </figcaption>
</figure>

<figure id="comic4" class="snip1418"><img src="/site/images/daredevil_icon.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Pudol Doux</h3>
    <p>All this modern technology just makes people try to do everything at once.</p>
  </figcaption>
</figure>

<figure id="comic5" class="snip1418"><img src="/site/images/daredevil_icon.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Pudol Doux</h3>
    <p>All this modern technology just makes people try to do everything at once.</p>
  </figcaption><a href="https://www.w3schools.com/cssref/css3_pr_opacity.asp"></a>
</figure>

<script type="text/javascript">	
	var slideIndex = 1;
	var flag=0;

	showSlide(slideIndex);

	function plusSlides(n){
		showSlide(slideIndex += n);
	}

	function plusSlides1(n){
		showSlide(slideIndex += n);
		flag=1;
	}
	
	function currentSlide(n) {
		showSlide(slideIndex = n);
		flag=1;
	}
	
	function showSlide(n){
		var i;
		var slides = document.getElementsByClassName("hidden");
		var dots = document.getElementsByClassName("dots");
		
		if(n==1){
			document.getElementById("news1").style.color = "red";
			document.getElementById("news2").style.color = "white";
			document.getElementById("news3").style.color = "white";
			document.getElementById("news4").style.color = "white";
		}
		if(n==2){
			document.getElementById("news1").style.color = "white";
			document.getElementById("news2").style.color = "red";
			document.getElementById("news3").style.color = "white";
			document.getElementById("news4").style.color = "white";
		}
		if(n==3){
			document.getElementById("news1").style.color = "white";
			document.getElementById("news2").style.color = "white";
			document.getElementById("news3").style.color = "red";
			document.getElementById("news4").style.color = "white";
		}
		if(n==4){
			document.getElementById("news1").style.color = "white";
			document.getElementById("news2").style.color = "white";
			document.getElementById("news3").style.color = "white";
			document.getElementById("news4").style.color = "red";
		}
		
		if (n > slides.length) { 
			slideIndex = 1
		};
		if (n < 1) { 
			slideIndex = slides.length
		};
		for (i=0;i<slides.length;i++) {
			slides[i].style.display = "none";
		};
		for (i=0;i<dots.length;i++) {
			dots[i].className = dots[i].className.replace(" active","");
		};

		slides[slideIndex-1].style.display = "block";
		dots[slideIndex-1].className += " active";
	}

</script>

<script>
	var time=4000;
	function roflmfaolol()
	{
		if(flag==0){
			plusSlides(1);
			setTimeout("roflmfaolol()",time);
		};
	}
</script>

<script>
 function changeImg(){
	setTimeout("roflmfaolol()",4000);
}
window.onload=changeImg;
</script>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>