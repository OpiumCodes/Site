<?php
 session_start();
 if(isset($_GET['logout']))
 {
     session_destroy();
     unset($_SESSION['username']);
     header( "location: venom2.php" );
 }
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/venom2.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/generic.js"></script>
</head>

<body>

<div id="home" onclick="location.href='basic.php';" style="cursor:pointer;"></div>

<div id="marvel_logo"><img src="/site/images/logo.jpg" width="5.7%" height="100%">
	<div id="shield_logo">
	<div id="sign_in"><?php  if (!isset($_SESSION['username'])) : ?><b><h5><a href="login.php">SIGN IN</a></h5></b><?php else :?><b><h5><a href="venom2.php?logout='1'">LOGOUT</a></h5></b><?php endif?></div>
		<div id="search_logo"><img src="/site/images/search.png" width="15.7%" height="100%"/>
			<div id="vertical_yellow_bar2"></div>
		</div>
	</div>
	<div id="filler">
		<div id="movies" onclick="location.href='movies.php';" style="cursor:pointer;">  <b>MOVIES</b></div>
		<div id="series" onclick="location.href='series.php';" style="cursor:pointer;">  <b>SERIES</b></div>
		<div id="comics" onclick="location.href='comics.php';" style="cursor:pointer;">  <b>COMICS</b></div>
		<div id="games" onclick="location.href='games.php';" style="cursor:pointer;">  <b>GAMES</b></div>
		<div id="characters" onclick="location.href='characters.php';" style="cursor:pointer;">  <b>CHARACTERS</b></div>
		<div id="mycart"></div>
	</div>
	<div id="horizontal_yellow_bar1">	
		<div id="horizontal_yellow_bar2">
		</div>	
	</div>
	<div id="vertical_yellow_bar1">
		<div id="my_cart">
	</div>
</div>

<div id="pic1"><img src="/site/images/venom1.jpg">
	<div id="venom_text1"><b>VENOM</b></div>

	<div id="facts">FACTS</div>
	
	<div id="venom_premise">Following a scandal, journalist Eddie Brock attempts to revive his career by investigating the Life Foundation, but comes into contact with an alien symbiote that bonds with Brock, 
	giving him superpowers as long as they share the same body</div>
	
	<div id="venom_text2">Venom is a fictional character appearing in American comic books published by Marvel Comics, commonly in association with Spider-Man. The character is a sentient alien Symbiote 
	with an amorphous, liquid-like form, who requires a host, usually human, to bond with for its survival. After bonding with a human host, the Symbiote bestows its enhanced powers upon the host. When the 
	Venom Symbiote bonds with a human, that new dual-life form usually refers to itself as "Venom". The Symbiote was originally introduced as a living alien costume in The Amazing Spider-Man #252 (May 1984), 
	with a full first appearance as Venom in The Amazing Spider-Man #300 (May 1988).
	</div>
	
	<div id="venom_text3">The Venom Symbiote's first known host was Spider-Man, who eventually separated himself from the creature when he discovered its true nefarious nature. The Symbiote went on to merge with other 
	hosts, most notably Eddie Brock, its second and most infamous host, with whom it first became Venom and one of Spider-Man's archenemies. According to S.H.I.E.L.D., it is considered one of the greatest threats to 
	humanity, alongside Magneto, Doctor Doom, and Red Skull.</div>
</div>

	<div id="venom_text4">Comics journalist and historian Mike Conroy writes of the character: "What started out as a replacement costume for Spider-Man turned into one of the Marvel web-slinger's greatest nightmares."
	Venom was ranked as the 22nd Greatest Comic Book Villain of All Time in IGN's list of the top 100 comic villains. IGN also ranked Mac Gargan's incarnation of Venom as #17 in their list of "The Top 50 Avengers", 
	while the Flash Thompson incarnation was ranked as #27. The character was listed as #33 on Empire's 50 Greatest Comic Book Characters</div>

	<div id="venom_text5">Sony began developing a Venom film after the character made his cinematic debut in Spider-Man 3 (2007). After various iterations, work on a new version began in March 2017 to start a new shared 
	universe featuring the Marvel characters to which Sony possessed the film rights, though Sony also intends for the film to share the world of Spider-Man: Homecoming, which is set in the MCU after a deal between Sony 
	and Marvel Studios. Rosenberg and Pinkner were set to write, with Fleischer and Hardy added in May 2017. Principal photography began in October 2017, taking place in Atlanta, New York City, and San Francisco.
	<br>Venom is set to be released in the United States on October 5, 2018.</div>
</body>
</html>