<?php
 session_start();
 if(isset($_GET['logout']))
 {
     session_destroy();
     unset($_SESSION['username']);
     header( "location: basic.php" );
 }
 $mysqli = new mysqli('127.0.0.1', 'root', '', 'login_information');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/basic.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/generic.js"></script>
</head>

<body>

<div id="home" onclick="location.href='basic.php';"style="cursor:pointer;"></div>

<div id="butoane">
	<span class="dots" onclick="currentSlide(1) "></span> 
	<span class="dots" onclick="currentSlide(2)"></span> 
	<span class="dots" onclick="currentSlide(3)"></span> 
	<span class="dots" onclick="currentSlide(4)"></span> 
	<!--<div id="loading_bar" class="loader"></div>-->
	<div id="separator">
		<div id="news1" onclick="currentSlide(1);" style="cursor:pointer;"><b><br>New on Venom</br></b></div>
		<div id="news2" onclick="currentSlide(2);" style="cursor:pointer;"><b><h5>Wilson Fisk returns</b></h5></div>
		<div id="news3" onclick="currentSlide(3);" style="cursor:pointer;"><b><h5>The last resort of the Avengers</b></div>
		<div id="news4" onclick="currentSlide(4);" style="cursor:pointer;"><b><h5>Marvel's Spiderman <br>on PS4</br></b></div>
	</div>
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
					<div class="slideshow-container">
						<div class="hidden fade">
							<div id="pic1"><?php
								$sql="SELECT * FROM mainpageimages WHERE Name='venom'";
								$query=mysqli_query($mysqli,$sql);
								$row=mysqli_fetch_array($query);
									echo '
										<tr>
											<td>
												<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="100%" height="100%">
											</td>
										</tr>
									';
								?>
								<div id="watchnow1" onclick="location.href='venom1.php';" style="cursor:pointer;"><?php
																													$sql="SELECT * FROM mainpageimages WHERE Name='watch_now'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																														echo '
																															<tr>
																																<td>
																																	<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="100%" height="100%">
																																</td>
																															</tr>
																														';
																													?></div>
								<div id="readmore1" onclick="location.href='venom2.php';" style="cursor:pointer;"><?php
																													$sql="SELECT * FROM mainpageimages WHERE Name='read_more'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																														echo '
																															<tr>
																																<td>
																																	<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="100%" height="100%">
																																</td>
																															</tr>
																														';
																													?></div>
								<div id="venom_eyes"><?php
																													$sql="SELECT * FROM mainpageimages WHERE Name='tom_venom'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																														echo '
																															<tr>
																																<td>
																																	<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="100%" height="100%">
																																</td>
																															</tr>
																														';
																													?></div>
								<div id="venom_text1"><b>MEET MARVEL'S MOST</b></div>
								<div id="venom_text2"><b>TERRIFYING SUPERVILLAIN<b></div>
								<div id="venom_text3">The world has enough superheroes.</div>
							</div>
						</div>

						<div class="hidden fade">
							<div id="pic2"><?php
																													$sql="SELECT * FROM mainpageimages WHERE Name='fisk'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																														echo '
																															<tr>
																																<td>
																																	<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="100%" height="100%">
																																</td>
																															</tr>
																														';
																													?>
								<div id="watchnow2" onclick="location.href='daredevil1.php';" style="cursor:pointer;"><?php
																													$sql="SELECT * FROM mainpageimages WHERE Name='watch_now'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																														echo '
																															<tr>
																																<td>
																																	<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="100%" height="100%">
																																</td>
																															</tr>
																														';
																													?></div>
								<div id="readmore2" onclick="location.href='daredevil.php';" style="cursor:pointer;"><?php
																													$sql="SELECT * FROM mainpageimages WHERE Name='read_more'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																														echo '
																															<tr>
																																<td>
																																	<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="100%" height="100%">
																																</td>
																															</tr>
																														';
																													?></div>
								<div id="daredevil_text1"><b>WILSON FISK RETURNS</b></div>
								<div id="daredevil_text2"><b>Check out the newest teaser trailer for Season 3!<br>Debuting October 19 on Netflix.</b></div>
							</div>
						</div>

						<div class="hidden fade">
							<div id="pic3"><?php
																													$sql="SELECT * FROM mainpageimages WHERE Name='avengers6'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																														echo '
																															<tr>
																																<td>
																																	<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="100%" height="100%">
																																</td>
																															</tr>
																														';
																													?></div>
						</div>
	
						<div class="hidden fade">
							<div id="pic4"><?php
																													$sql="SELECT * FROM mainpageimages WHERE Name='spoderman'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																														echo '
																															<tr>
																																<td>
																																	<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="100%" height="100%">
																																</td>
																															</tr>
																														';
																													?>
							</div>
							<!--<div class="caption">Text 4</div>-->
						</div>
		
					<a class="prev" onclick="plusSlides1(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides1(1)">&#10095;</a>
					</div>	
			</div>
	</div>
	<div id="vertical_yellow_bar1">
		<div id="my_cart"></div>
	</div>
</div>

<div id="follow"><h5>FOLLOW MARVEL</h5></div>
																													<?php
																													$sql="SELECT * FROM mainpagelinks WHERE Name='facebook'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																													$link=$row['Link'];
																													?>
<div id="fb" onclick="location.href='<?php echo $link?>';" style="cursor:pointer;"><?php
																													$sql="SELECT * FROM mainpageimages WHERE Name='fb'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																														echo '
																															<tr>
																																<td>
																																	<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="24px" height="24px">
																																</td>
																															</tr>
																														';
																													?></div>
																													<?php
																													$sql="SELECT * FROM mainpagelinks WHERE Name='instagram'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																													$link=$row['Link'];
																													?>
<div id="ig" onclick="location.href='<?php echo $link?>';" style="cursor:pointer;"><?php
																													$sql="SELECT * FROM mainpageimages WHERE Name='ig'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																														echo '
																															<tr>
																																<td>
																																	<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="24px" height="24px">
																																</td>
																															</tr>
																														';
																													?></div>
																													<?php
																													$sql="SELECT * FROM mainpagelinks WHERE Name='twitter'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																													$link=$row['Link'];
																													?>
<div id="tw" onclick="location.href='<?php echo $link?>';" style="cursor:pointer;"><?php
																													$sql="SELECT * FROM mainpageimages WHERE Name='tw'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																														echo '
																															<tr>
																																<td>
																																	<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="39px" height="24px">
																																</td>
																															</tr>
																														';
																													?></div>
																													<?php
																													$sql="SELECT * FROM mainpagelinks WHERE Name='youtube'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																													$link=$row['Link'];
																													?>
<div id="yt" onclick="location.href='<?php echo $link?>';" style="cursor:pointer;"><?php
																													$sql="SELECT * FROM mainpageimages WHERE Name='yt'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																														echo '
																															<tr>
																																<td>
																																	<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="46px" height="36px">
																																</td>
																															</tr>
																														';
																													?></div>
																													<?php
																													$sql="SELECT * FROM mainpagelinks WHERE Name='pinterest'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																													$link=$row['Link'];
																													?>
<div id="pt" onclick="location.href='<?php echo $link?>';" style="cursor:pointer;"><?php
																													$sql="SELECT * FROM mainpageimages WHERE Name='pinterest'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																														echo '
																															<tr>
																																<td>
																																	<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="24px" height="24px">
																																</td>
																															</tr>
																														';
																													?></div>
																													<?php
																													$sql="SELECT * FROM mainpagelinks WHERE Name='tumblr'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																													$link=$row['Link'];
																													?>
<div id="tlr" onclick="location.href='<?php echo $link?>';" style="cursor:pointer;"><?php
																													$sql="SELECT * FROM mainpageimages WHERE Name='tumblr'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																														echo '
																															<tr>
																																<td>
																																	<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="25px" height="25px">
																																</td>
																															</tr>
																														';
																													?></div>
<div id="nl"></div>
<div id="marvel_text"><b>MARVEL MASTERCARD</b></div>
<div id="marvel_cash"><b>Earn Unlimited Cashback</b></div>
<div id="customer"><b>Costumer Service</b></div>
<div id="contact">Contact us</div>
<div id="track">Order tracking</div>
<div id="marvel_card"><?php
																													$sql="SELECT * FROM mainpageimages WHERE Name='marvel_card'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																														echo '
																															<tr>
																																<td>
																																	<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="65%" height="65%">
																																</td>
																															</tr>
																														';
																													?>
<div id="marvel_card2"><?php
																													$sql="SELECT * FROM mainpageimages WHERE Name='card2'";
																													$query=mysqli_query($mysqli,$sql);
																													$row=mysqli_fetch_array($query);
																														echo '
																															<tr>
																																<td>
																																	<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="45%" height="45%">
																																</td>
																															</tr>
																														';
																													?>

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
		
		if(n==2){
			document.getElementById("news1").style.color = "black";
			document.getElementById("news2").style.color = "red";
			document.getElementById("news3").style.color = "black";
			document.getElementById("news4").style.color = "black";
		}
		else
			if(n==3){
				document.getElementById("news1").style.color = "black";
				document.getElementById("news2").style.color = "black";
				document.getElementById("news3").style.color = "red";
				document.getElementById("news4").style.color = "black";
			}
			else
				if(n==4){
					document.getElementById("news1").style.color = "black";
					document.getElementById("news2").style.color = "black";
					document.getElementById("news3").style.color = "black";
					document.getElementById("news4").style.color = "red";
				}
				else{
					document.getElementById("news1").style.color = "red";
					document.getElementById("news2").style.color = "black";
					document.getElementById("news3").style.color = "black";
					document.getElementById("news4").style.color = "black";
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
		}
		
		if(flag==1){
			flag=0;
			setTimeout("roflmfaolol()",4000);
		};
	}
</script>

<script>
 function changeImg(){
	setTimeout("roflmfaolol()",4000);
}
window.onload=changeImg;
</script>

</body>
</html>