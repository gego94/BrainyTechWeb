<?php 
    include_once("functions.php");
	if(isset($_SESSION['loggedin']))
    {
    	header("Location :index.php");
        exit;
    }
?>
<!DOCTYPE html>
	<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
			<?php 
            	getHead2Pars("Register","LoginRegisterModify");
            ?>
		</head>
	<body class="dark-theme">
		<?php
		  	getMenu("Register");
		  	getBreadcumbs("Register");
		?>
		<div class="content">
			<div id="regPage" class="page col-10 col-sm-5 col-esm-5">
				<div class="col-4 col-sm-2 offset-05 offset-sm-005 col-esm-5">
					<h1 class="col-10 col-sm-5 col-esm-4 center offset-sm-005">Sign up</h1>
					<form method="post" action="register.php" class="col-9 col-sm-5 col-esm-5">						
						<div class="col-10 col-sm-5 col-esm-5">
							<label for="userRegister" class="col-10 col-sm-5 col-esm-4 label">Username</label>
							<input <?php tabIndex(); ?> id="userRegister" type="text" name="username" class="input col-10 col-sm-5 col-esm-4" placeholder="Username">
							<p class="error"><?php getRegistrationUsernameError($errors); ?></p>
						</div>
						<div class="col-10 col-sm-5 col-esm-5">
							<label for="emailRegister" class="col-10 col-sm-5 col-esm-4 label">Personal E-Mail</label>
							<input <?php tabIndex(); ?> id="emailRegister" type="text" name="email" class="input col-10 col-sm-5 col-esm-4" placeholder="E-mail">
							<p class="error"><?php getRegistrationEmailError($errors); ?></p>
						</div>
						<div class="col-10 col-sm-5 col-esm-5">
							<label for="passwordRegister" class="col-10 col-esm-4 label">Password</label>
							<input <?php tabIndex(); ?> id="passwordRegister" type="password" name="password" class="input col-sm-5 col-10 col-esm-4" placeholder="********">
							<p class="col-10 col-sm-4 col-esm-4 offset-esm-05" >Password must contain at least 8 characters,an uppercase letter and a number.</p>
							<p class="error"><?php getRegistrationPasswordError($errors); ?></p>
						</div>
						<div class="col-10 col-sm-5 col-esm-5">
							<label for="passwordRepeatRegister" class="col-10 col-esm-4 label">Repeat Password</label>
							<input <?php tabIndex(); ?> id="passwordRepeatRegister" type="password" name="passwordRepeat" class="input col-sm-5 col-10 col-esm-4" placeholder="********">
							<p class="error"><?php getRegistrationPasswordRepeatError($errors); ?></p>
						</div>
						<button type="submit" <?php tabIndex(); ?> class="button dark btn col-esm-1" name="registration_user">Sign Up</button>
					</form>
				</div>
				<div id="regSeparator"></div>
		  		<div class="center col-5 col-sm-2 col-esm-4 floatRight offset-sm-r-005 offset-esm-r-05">
			  		<h1>Join us and start to be<br/>brainy under the rain </h1>
					<p>What are you waiting for??<br/> By joining Us you can start buy Our Technological umbrella and try 
                    	the comfort and the big advantages they give when it's raining.<br/>Already billion of users tried them 
                        and now they are happy even in sad days !!
                    </p>
                    <img id="robot" src="img/robot.png" class="col-10" alt="Robot with Umbrella Image" />
		  		</div>
			</div>
		</div>
		<div id="popup1" class="overlay center">
			<div class="popup">
				<h2>Registration Succesfull!</h2>
				<div class="cont">
					Now you need to login and change your personal data to complete registration process.
				</div>
				<a <?php tabIndex(); ?> class="button" href="login.php">Proceed</a>
			</div>
		</div>
		<?php
			getFooter("Register");
		?>
	</body>
</html>