<?php 
    include_once('functions.php');
	if(isset($_SESSION['loggedin']))
    {
    	header("Location :index.php");
    }
?>
<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
			<?php		
                getHead2Pars("Login","LoginRegisterModify");
        	?>        
		</head>
        <body class="dark-theme">
			<?php
              	getMenu("Login");
               	getBreadcumbs("Login");
			?>
   			<div class="page content">
				<div id="loginPage" class="col-10 col-sm-5 col-esm-5">
					<div class="col-4 col-sm-2 offset-05 offset-sm-005 col-esm-5">
						<h1 class="col-10 col-sm-5 col-esm-4 floatMiddle offset-sm-005">Customers Login</h1>
						<form method="post" action="login.php" class="col-9 col-sm-5 col-esm-5">						
							<div class="col-10 col-sm-5 col-esm-5">
								<label for="userLogin" class="col-10 col-sm-5 col-esm-4 label">Username</label>
								<input id="userLogin" <?php tabIndex(); ?> type="text" name="username" class="input col-10 col-sm-5 col-esm-4" placeholder="Username">
							</div>
                       		<p class="error"><?php getLoginUsernameErrors($errors); ?></p>
							<div class="col-10 col-sm-5 col-esm-5">
								<label for="passwordLogin" class="col-10 col-esm-4 label">Password</label>
								<input id="passwordLogin" <?php tabIndex(); ?> type="password" name="password" class="input col-sm-5 col-10 col-esm-4" placeholder="********">
							</div>
							<p class="error"><?php getLoginPasswordErrors($errors);?></p>
							<button type="submit" <?php tabIndex(); ?> class="button dark btn" name="login_user">Login</button>
						</form>
					</div>
					<div id="loginSeparator"></div>
					<div id="loginToRegistration" class="center col-5 col-sm-2 col-esm-5 floatRight offset-sm-r-005 col-esm-5">
						<h1 class="col-esm-5">Not a member yet?</h1>
						<h2>Register now for only 2.000$</h2>
						<a <?php tabIndex(); ?> class="button dark" href="register.php">Register</a>
					</div>
				</div>	
			</div>
   			<?php
   				getFooter("Login");
			?>
	</body>
</html>




