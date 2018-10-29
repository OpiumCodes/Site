<html>
    <body>
    <?php
     session_start();
        if(isset($_GET['logout']))
        {
            session_destroy();
             unset($_SESSION['username']);
             header( "location: register.php" );
        }
        $error=0;
        $pass_not_match=0;
        $mysqli = new mysqli('127.0.0.1', 'root', '', 'login_information');

        if ($mysqli->connect_error) {
            die('Connect Error (' . $mysqli->connect_errno . ') '
                    . $mysqli->connect_error);
        }
        if(isset($_POST['reg_user']))
        {
            $username=$_POST['username'];
            $email=$_POST['email'];
            $password1=$_POST['password1'];
            $password2=$_POST['password2'];
            if(empty($username) || empty($email) || empty($password1) || empty($password2)) 
            {
                $error=1;
            }
            if($password1!=$password2)
            {
                $pass_not_match=1;
                $error=1;
            }
        
        $sql="SELECT * FROM login WHERE username='$username' OR email='$email' LIMIT 1";
        $check=mysqli_query($mysqli,$sql);
        $user=mysqli_fetch_assoc($check);
        $username_registered=0;
        $email_registered=0;
        if($user)
        {
            if($user['username']==$username)
            {
                $username_registered=1;
                $error=1;
            }
            if($user['email']==$email)
            {
                $email_registered=1;
                $error=1;
            }
        }
        $reg_failed=0;
        if($error==0)
        {
            $query="INSERT INTO login (username,email,password)
                    VALUES ('$username','$email','$password1')";
            if(mysqli_query($mysqli,$query)==FALSE)
            {
                $reg_failed=1;
            }
            $_SESSION['username']=$username;
            $_SESSION['success']="You have successfully logged in";
        }
        }
        $mysqli->close();
    ?>
<!DOCTYPE html>

<html>

    <head>
        <title>Sign Up</title>
		<link rel="stylesheet" type="text/css" href="css/signup.css">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/generic.js"></script>
    </head>
    


    <body>
	
	<div id="home" onclick="location.href='basic.php';" style="cursor:pointer;"></div>

	<div id="marvel_logo"><img src="/site/images/logo.jpg" width="5.7%" height="100%">
		<div id="shield_logo"><img src="/site/images/shield.png" width="15%" height="100%">
			<div id="sign_in"><?php  if (!isset($_SESSION['username'])) : ?><b><h5><a href="login.php">SIGN IN</a></h5></b><?php else :?><b><h5><a href="register.php?logout='1'">LOGOUT</a></h5></b><?php endif?></div>
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
        <form method="post" action="register.php">
            <h1>Register</h1>
            <input type="text" name="username" placeholder="Username" maxlength="20"><br>
            <?php if(isset($_POST['reg_user'])):?>
            <?php if(empty($username)):?><p>Username is required!</p><br><?php else:?>
            <?php if($username_registered==1):?><p>Username is already registered</p><br>
            <?php endif?>
            <?php endif?>
            <?php endif?>
            <input type="text" name="email" placeholder="Email" maxlength="40"><br>
            <?php if(isset($_POST['reg_user'])):?>
            <?php if(empty($email)):?><p>Email is required!</p><br><?php else:?>
            <?php if($email_registered==1):?><p>Email is already registered</p><br>
            <?php endif?>
            <?php endif?>
            <?php endif?>
            <input type="password" name="password1" placeholder="Password" maxlength="20"><br>
            <?php if(isset($_POST['reg_user'])):?>
            <?php if(empty($password1)):?><p>Password is required!</p><br><?php endif?><?php endif?>
            <input type="password" name="password2" placeholder="Confirm Password" maxlength="20"><br>
            <?php if(isset($_POST['reg_user'])):?>
            <?php if(empty($password2)):?><p>Password is required!</p><br><?php else:?>
            <?php if($pass_not_match==1):?><p>Passwords don't match</p><br>
            <?php endif?>
            <?php endif?>
            <?php endif?>
            <?php if(isset($_POST['reg_user'])):?>
            <?php if($error==0):?><p>Registered with succes, you will be able to log in now!<p>
            <?php header( "refresh:3;url=login.php" ); ?><?php endif?>
            <?php endif?>
            <br>
            <br>
            <center><button class="button" type="submit" name="reg_user">Register</button></center>
            <?php if(isset($_POST['reg_user'])):?>
            <?php if($reg_failed==1):?><p>Registration failed</p><br>
            <?php endif?>
            <?php endif?>
            <br>
			<div id="sign">Already have an account?</div>
			<div id="sign_hyper" onclick="location.href='login.php';" style="cursor:pointer;">Sign In</div>
            </form>
        </div>
    </body>

</html>