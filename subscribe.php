<?php
 session_start();
 if(isset($_GET['logout']))
 {
     session_destroy();
     unset($_SESSION['username']);
     header( "location: subscribe.php" );
 }
 ?>
 
<!DOCTYPE html>
<html>

    <head>
        <title>Sign In	</title>
		<link rel="stylesheet" type="text/css" href="css/subscribe.css">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/generic.js"></script>
    </head>
    


    <body>
	
	<div id="home" onclick="location.href='basic.php';" style="cursor:pointer;"></div>

	<div id="marvel_logo"><img src="/site/images/logo.jpg" width="5.7%" height="100%">
		<div id="shield_logo"><img src="/site/images/shield.png" width="15%" height="100%">
			<div id="sign_in"onclick="location.href='login.php';" style="cursor:pointer;"><b><h5>SIGN IN</h5></b></div>
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
			<div id="mycart"><b></b></div>
		</div>
		<div id="horizontal_yellow_bar1">	
			<div id="horizontal_yellow_bar2"></div>	
		</div>
		<div id="vertical_yellow_bar1">
			<div id="my_cart"></div>
		</div>
	</div>
	
	
	
        <div class="form-wrap">     
            <form>        
                <h1>Subscribe to our newsletter</h1>
                <input type="text" placeholder="Name" id="myInput">
				<input type="text" placeholder="Email" id="myInput">
                <input type="button" value="SUBSCRIBE">
            </form>
        </div>
    </body>

</html>