
<?php
        session_start();
        if(isset($_GET['logout']))
        {
            session_destroy();
            unset($_SESSION['username']);
            header( "location: login.php" );
        }
        $mysqli = new mysqli('127.0.0.1', 'root', '', 'login_information');
        $error=0;
        $wrong=0;
        if ($mysqli->connect_error) {
            die('Connect Error (' . $mysqli->connect_errno . ') '
                    . $mysqli->connect_error);
        }
        if(isset($_POST['login_user']))
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
            if(empty($username)||empty($password))
            {
                $error=1;
            }
            if($error==0)
            {
                $sql="SELECT * FROM login WHERE username='$username' AND password='$password'";
                $user=mysqli_query($mysqli,$sql);
                if(mysqli_num_rows($user)==1)
                {
                    $_SESSION['username']=$username;
                    $_SESSION['succes']="You have successfully logged in";
                    header( "location: basic.php" );
                }
                else
                {
                    $wrong=1;
                }
            }
        }
        $mysqli->close();
        ?>

<!DOCTYPE html>

<html>

    <head>
        <title>Sign In	</title>
		<link rel="stylesheet" type="text/css" href="css/signin.css">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/generic.js"></script>
    </head>
    


    <body>
	
		<div id="home" onclick="location.href='basic.php';" style="cursor:pointer;"></div>

	<div id="marvel_logo"><img src="/site/images/logo.jpg" width="5.7%" height="100%">
		<div id="shield_logo"><img src="/site/images/shield.png" width="15%" height="100%">
        <div id="sign_in"><?php  if (!isset($_SESSION['username'])) : ?><b><h5><a href="login.php">SIGN IN</a></h5></b><?php else :?><b><h5><a href="login.php?logout='1'">LOGOUT</a></h5></b><?php endif?></div>
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
			<div id="horizontal_yellow_bar2"></div>	
		</div>
		<div id="vertical_yellow_bar1">
			<div id="my_cart"></div>
		</div>
	</div>
	
	
	
        <div class="form-wrap">     
            <form action="login.php" method="POST">        
                <h1>Sign in</h1>
                <input type="text" placeholder="Username" name="username" maxlength="20">
                <?php if(isset($_POST['login_user'])):?>
                <?php if(empty($username)):?><div id="u_req"><p>Username is required</p></div><br><?php endif?><?php endif?>
                <input type="password" placeholder="Password" name="password" id="myInput" maxlength="20">
                <?php if(isset($_POST['login_user'])):?>
                <?php if(empty($password)):?><p>Password is required!</p><?php endif?><?php endif?>
                <br>
                <p>Show Password</p><input id="checc" type="checkbox" onclick="myFunction()">
                <script>
                function myFunction() 
                {
                    var x = document.getElementById("myInput");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }                    
                }
                </script>
                <?php if(isset($_POST['login_user'])):?>
                <?php if($wrong==1):?><p>Wrong username/password combination!</p><?php endif?><?php endif?>
                <center><button class="button" type="submit" name="login_user">Login</button></center>
				<div id="sign"><br>Don't have an account?</div>
				<div id="sign_hyper" onclick="location.href='register.php';" style="cursor:pointer;"><br>Create a Marvel Account</div>            </form>
        </div>
    </body>

</html>
     