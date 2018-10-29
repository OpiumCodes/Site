<?php
 session_start();
 if(isset($_GET['logout']))
 {
     session_destroy();
     unset($_SESSION['username']);
     header( "location: comics.php" );
 }
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/comics.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/generic.js"></script>
</head>

<body>

<div id="home" onclick="location.href='basic.php';" style="cursor:pointer;"></div>

<div id="marvel_logo"><img src="/site/images/logo.jpg" width="5.7%" height="100%">
	<div id="shield_logo" ><img src="/site/images/shield.png" width="15%" height="100%">
    <div id="sign_in"><?php  if (!isset($_SESSION['username'])) : ?><b><h5><a href="login.php">SIGN IN</a></h5></b><?php else :?><b><h5><a href="comics.php?logout='1'">LOGOUT</a></h5></b><?php endif?></div>
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
<div id="pic1"><img src="/site/images/AntMan/c4.jpg" width="100%" height="100%"></div>

<figure id="comic1" class="snip1418"><img src="images/Avengers/1.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Avengers Vol. 2: The Last White Event</h3>
    <p>Jonathan Hickman</p>
  </figcaption>
</figure>

<figure id="comic2" class="snip1418"><img src="images/BlackPanther/1.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Black Panther: A Nation Under Our Feet Vol. 1</h3>
    <p>Ta-Nehisi Coates, Stan Lee</p>
  </figcaption>
</figure>

<figure id="comic3" class="snip1418"><img src="images/TheDefenders/1.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Defenders Vol.1: Diamonds Are Forever</h3>
    <p>Brian Michael Bendis</p>
  </figcaption>
</figure>

<figure id="comic4" class="snip1418"><img src="/site/images/CaptainMarvel/5.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Captain Marvel: Carol Danvers – The Ms. Marvel Years Vol. 2</h3>
    <p>Brian Reed</p>
  </figcaption>
</figure>

<figure id="comic5" class="snip1418"><img src="images/Daredevil/3.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Marvel Knights #65</h3>
    <p>Soule, Milla, Garney</p>
  </figcaption>
</figure>

<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->

<figure id="comic11" class="snip1418"><img src="/site/images/JessicaJones/3.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Jessica Jones: The Pulse</h3>
    <p>Brian Michael Bendis</p>
  </figcaption>
</figure>

<figure id="comic21" class="snip1418"><img src="/site/images/Punisher/2.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Punisher Noir</h3>
    <p>Frank Tieri</p>
  </figcaption>
</figure>

<figure id="comic31" class="snip1418"><img src="images/Thor/1.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Thor: Ragnarok</h3>
    <p>Roy Thomas</p>
  </figcaption>
</figure>

<figure id="comic41" class="snip1418"><img src="images/Punisher/1.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Punisher By Greg Rucka Vol. 1</h3>
    <p>Greg Rucka</p>
  </figcaption>
</figure>

<figure id="comic51" class="snip1418"><img src="/site/images/AntMan/5.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>The Astonishing Ant-Man Vol. 1: Everybody Loves Team-Ups</h3>
    <p>Nick Spencer</p>
  </figcaption>
</figure>

<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->

<figure id="comic12" class="snip1418"><img src="/site/images/AntMan/c1.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
	<h3>Edge of Spider-Geddon</h3>
    <p>Aaron Kuder</p>
  </figcaption>
</figure>

<figure id="comic22" class="snip1418"><img src="/site/images/BlackPanther/2.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Secret Invasion: Black Panther</h3>
    <p>Jason Aaron</p>
  </figcaption>
</figure>

<figure id="comic32" class="snip1418"><img src="/site/images/LukeCage/5.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Luke Cage Vol. 2: Caged!</h3>
    <p>David F. Walker</p>
  </figcaption>
</figure>

<figure id="comic42" class="snip1418"><img src="/site/images/AntMan/c2.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
	<h3>Spider-Geddon</h3>
    <p>Christos N. Gage</p>
  </figcaption>
</figure>

<figure id="comic52" class="snip1418"><img src="/site/images/Daredevil/6.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Daredevil #175</h3>
    <p>Soule, Garney</p>
  </figcaption>
</figure>

<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->

<figure id="comic13" class="snip1418"><img src="/site/images/JessicaJones/4.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
	<h3>Jessica Jones Vol. 3</h3>
    <p>Brian Michael Bendis</p>
  </figcaption>
</figure>

<figure id="comic23" class="snip1418"><img src="/site/images/Avengers/2.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Avengers Vol. 5: Adapt Or Die</h3>
    <p>Jonathan Hickman</p>
  </figcaption>
</figure>

<figure id="comic33" class="snip1418"><img src="/site/images/Thor/2.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Thor: Ragnaroks</h3>
    <p>Dan Berman</p>
  </figcaption>
</figure>

<figure id="comic43" class="snip1418"><img src="/site/images/Punisher/3.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>The Punisher Vol. 1: Black and White</h3>	
    <p>Nathan Edmondson</p>
  </figcaption>
</figure>

<figure id="comic53" class="snip1418"><img src="/site/images/IronFist/5.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Immortal Iron Fist Vol. 5: Escape From The Eighth City</h3>
    <p>Duane Swierczynski</p>
  </figcaption>
</figure>

<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->
<figure id="comic14" class="snip1418"><img src="/site/images/DoctorStrange/5.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Doctor Strange Masterworks Vol. 2</h3>
    <p>Stan Lee</p>
  </figcaption>
</figure>

<figure id="comic24" class="snip1418"><img src="/site/images/CaptainMarvel/4.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
	<h3>The Mighty Captain Marvel Vol. 3: Dark Origins</h3>
    <p>Margaret Stohl</p>
  </figcaption>
</figure>

<figure id="comic34" class="snip1418"><img src="/site/images/TheDefenders/2.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Fearless Defenders Vol. 2: The Most Fabulous Team</h3>
    <p>Cullen Bunn</p>
  </figcaption>
</figure>

<figure id="comic44" class="snip1418"><img src="/site/images/AntMan/4.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
	<h3>The Astonishing Ant-Man Vol. 3: The Trial of Ant-Man</h3>
    <p>Paul Scheer</p>
  </figcaption>
</figure>

<figure id="comic54" class="snip1418"><img src="/site/images/BlackPanther/3.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Black Panther: The Man Without Fear Vol. 1: Urban Jungle</h3>	
    <p>David Liss</p>
  </figcaption>
</figure>

<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->

<figure id="comic15" class="snip1418"><img src="/site/images/Daredevil/4.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Daredevil #186</h3>
    <p>Soule</p>
  </figcaption>
</figure>

<figure id="comic25" class="snip1418"><img src="/site/images/JessicaJones/5.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Jessica Jones: Avenger</h3>
    <p>Brian Michael Bendis</p>
  </figcaption>
</figure>

<figure id="comic35" class="snip1418"><img src="/site/images/LukeCage/4.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
	<h3>Luke Cage: Second Chances Vol. 2</h3>
    <p>D.G. Chichester, Marc McLaurin, Gregory Wright</p>
  </figcaption>
</figure>

<figure id="comic45" class="snip1418"><img src="/site/images/Punisher/4.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
	<h3>Punisher: War Zone - The Resurrection of Ma Gnucci</h3>
    <p>Garth Ennis</p>
  </figcaption>
</figure>

<figure id="comic55" class="snip1418"><img src="/site/images/Punisher/5.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Punisher: Franken-Castle</h3>
    <p>Rick Remender</p>
  </figcaption>
</figure>
<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->
<figure id="comic16" class="snip1418"><img src="/site/images/Punisher/5.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Punisher: Franken-Castle</h3>
    <p>Rick Remender</p>
  </figcaption>
</figure>

<figure id="comic26" class="snip1418"><img src="/site/images/DoctorStrange/4.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
	<h3>Doctor Strange Vol. 4: Mr. Misery</h3>
    <p>Jason Aaron</p>
  </figcaption>
</figure>

<figure id="comic36" class="snip1418"><img src="/site/images/AntMan/3.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Irredeemable Ant-Man Vol. 1: Low-Life</h3>	
    <p>Robert Kirkman</p>
  </figcaption>
</figure>


<figure id="comic46" class="snip1418"><img src="/site/images/Thor/3.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>The Unworthy Thor</h3>
    <p>Jason Aaron</p>
  </figcaption>
</figure>

<figure id="comic56" class="snip1418"><img src="/site/images/LukeCage/3.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Luke Cage: Second Chances Vol. 2</h3>	
    <p>Marc McLaurin</p>
  </figcaption>
</figure>

<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->
<figure id="comic17" class="snip1418"><img src="/site/images/CaptainMarvel/3.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>The Mighty Captain Marvel Vol. 1: Alien Nation</h3>
    <p>Margaret Stohl</p>
  </figcaption>
</figure>

<figure id="comic27" class="snip1418"><img src="/site/images/Avengers/3.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>New Avengers Vol. 2: Infinity</h3>	
    <p>Jonathan Hickman</p>
  </figcaption>
</figure>

<figure id="comic37" class="snip1418"><img src="/site/images/Daredevil/5.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Daredevil #10</h3>
    <p>Soule, Milla, Garney</p>
  </figcaption>
</figure>

<figure id="comic47" class="snip1418"><img src="/site/images/TheDefenders/4.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Defenders By Matt Fraction Vol. 1</h3>	
    <p>Matt Fraction</p>
  </figcaption>
</figure>

<figure id="comic57" class="snip1418"><img src="/site/images/Thor/4.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
	<h3>Thor: God of Thunder Vol. 1: The God Butcher</h3>
    <p>Jason Aaron</p>
  </figcaption>
</figure>

<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->
<figure id="comic18" class="snip1418"><img src="/site/images/DoctorStrange/3.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Doctor Strange Vol. 3: Blood In The Aether</h3>
    <p>Jason Aaron, Kathryn Immonen</p>
  </figcaption>
</figure>

<figure id="comic28" class="snip1418"><img src="/site/images/AntMan/2.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Marvel's Ant-Man and the Wasp Prelude</h3>
    <p>Roberto Aguirre-Sacasa, David Michelinie</p>
  </figcaption>
</figure>

<figure id="comic38" class="snip1418"><img src="/site/images/BlackPanther/4.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
	<h3>Black Panther by Christopher Priest:Vol. 3</h3>
    <p>Christopher Priest</p>
  </figcaption>
</figure>


<figure id="comic48" class="snip1418"><img src="/site/images/IronFist/4.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
	<h3>Iron Fist: The Living Weapon Vol. 1: Rage</h3>
    <p>Kaare Kyle Andrews</p>
  </figcaption>
</figure>

<figure id="comic58" class="snip1418"><img src="/site/images/IronFist/3.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Iron Fist Vol. 2: Sabretooth - Round Two</h3>	
    <p>Ed Brisson</p>
  </figcaption>
</figure>


<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->
<figure id="comic19" class="snip1418"><img src="/site/images/CaptainMarvel/2.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Captain Marvel Vol. 1: In Pursuit of Flight</h3>
    <p>Kelly Sue DeConnick</p>
  </figcaption>
</figure>

<figure id="comic29" class="snip1418"><img src="/site/images/Punisher/5.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Punisher: Franken-Castle</h3>
    <p>Rick Remender</p>
  </figcaption>
</figure>

<figure id="comic39" class="snip1418"><img src="images/AntMan/1.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Ant-Man and Wasp: Small World</h3>
    <p>Tim Seeley</p>
  </figcaption>
</figure>

<figure id="comic49" class="snip1418"><img src="/site/images/LukeCage/2.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Luke Cage: Avenger</h3>
    <p>John Arcudi, Mike Benson, Adam Glass, Frank Miller</p>
  </figcaption>
</figure>

<figure id="comic59" class="snip1418"><img src="/site/images/Avengers/5.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Avengers By Brian Michael Bendis Vol. 1</h3>
    <p>Brian Michael Bendis</p>
  </figcaption>
</figure>


<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->

<figure id="comic110" class="snip1418"><img src="/site/images/Daredevil/1.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Daredevil #606</h3>
    <p>Soule, Noto</p>
  </figcaption>
</figure>

<figure id="comic210" class="snip1418"><img src="images/JessicaJones/1.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Jessica Jones #1</h3>
    <p>Brian Michael Bendis</p>
  </figcaption>
</figure>

<figure id="comic310" class="snip1418"><img src="/site/images/DoctorStrange/2.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Doctor Strange Vol. 1: The Way of the Weird</h3>
    <p>Jason Aaron</p>
  </figcaption>
</figure>

<figure id="comic410" class="snip1418"><img src="/site/images/TheDefenders/3.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
	<h3>Defenders By Matt Fraction Vol. 2</h3>
    <p>Matt Fraction</p>
  </figcaption>
</figure>

<figure id="comic510" class="snip1418"><img src="/site/images/IronFist/2.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Immortal Iron Fist Vol. 4: The Mortal Iron Fist</h3>
    <p>Duane Swierczynski</p>
  </figcaption>
</figure>

<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->

<figure id="comic111" class="snip1418"><img src="/site/images/Thor/5.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Thor: The World Eaters</h3>
    <p>Dan Abnett</p>
  </figcaption>
</figure>

<figure id="comic211" class="snip1418"><img src="images/IronFist/1.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Immortal Iron Fist Vol. 3: Book of the Iron Fist</h3>
    <p>Ed Brubaker, Matt Fraction</p>
  </figcaption>
</figure>

<figure id="comic311" class="snip1418"><img src="/site/images/Punisher/5.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Punisher: Franken-Castle</h3>
    <p>Rick Remender</p>
  </figcaption>
</figure>

<figure id="comic411" class="snip1418"><img src="images/LukeCage/1.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Luke Cage: Sins of the Father Vol. 1</h3>
    <p>David F. Walker</p>
  </figcaption>
</figure>

<figure id="comic511" class="snip1418"><img src="/site/images/BlackPanther/5.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Rise of the Black Panther</h3>
    <p>Ta-Nehisi Coates, Evan Narcisse</p>
  </figcaption>
</figure>

<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->

<figure id="comic112" class="snip1418"><img src="images/CaptainMarvel/1.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Captain Marvel Vol. 2: Civil War II</h3>
    <p>Christos N. Gage, Ruth Fletcher Gage</p>
  </figcaption>
</figure>

<figure id="comic212" class="snip1418"><img src="/site/images/TheDefenders/5.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>New Excalibur Vol. 1: Defenders of the Realm</h3>
    <p>Chris Claremont, Christopher Yost</p>
  </figcaption>
</figure>

<figure id="comic312" class="snip1418"><img src="/site/images/JessicaJones/2.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Jessica Jones Vol. 2</h3>
    <p>Brian Michael Bendis</p>
  </figcaption>
</figure>

<figure id="comic412" class="snip1418"><img src="/site/images/Avengers/4.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
	<h3>Avengers: Time Runs Out Vol. 4</h3>
    <p>Jonathan Hickman</p>
  </figcaption>
</figure>

<figure id="comic512" class="snip1418"><img src="images/DoctorStrange/1.jpg" width="250px" height="350px" alt="sample85"/>
  <figcaption>
    <h3>Doctor Strange: The Oath</h3>
    <p>Brian K. Vaughan</p>
  </figcaption>
</figure>


</body>
</html>