<?php 
    include_once('functions.php');
    include_once('server.php');
	if(!isset($_SESSION['loggedin']))
    {
    	header("Location :index.php");
    }
?>
<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			getHead2Pars("Modify Data","LoginRegisterModify");
		?>
	</head>
	<body class="dark-theme">
		<?php
			getMenu("modify_data");
			getBreadcumbs("Modify Data");
		?>
		<div class="content">
			<h1 class="col-10">Modify your data</h1>
			<form method="post" enctype="multipart/form-data" action="modify_data.php" class="col-8 offset-1 col-sm-4 col-esm-4">
				<fieldset>
                	<legend>Account Information</legend>
                  	<div class="col-10 col-sm-5 col-esm-5">
                      	<label for="userModify" class="label offset-1 offset-sm-0">Username : </label>
                      	<input <?php tabIndex(); ?> id="userModify" type="text" name="usernameModify" class="input col-4 col-sm-2 col-esm-4 offset-esm-05" placeholder="<?php getUsername();?>">
                      	<p class="error offset-esm-05 offset-1"><?php getModifyUsernameError($errors); ?></p>
                  	</div>
					<div class="col-10 col-sm-5 col-esm-5">
						<label for="img"  class="label col-esm-4 offset-1 offset-esm-05">Image : </label>
						<input <?php tabIndex(); ?> id="img" type="file" name="imageModify" class="inputFile col-4 col-sm-2 col-esm-4 offset-esm-05">
						<label for="img" id="imgLbl" class="button dark col-esm-4 offset-esm-05">Choose an image</label>
						<p id="imgText" class="col-3 col-sm-2 offset-sm-05 col-esm-4 offset-esm-05">Choose your image</p>
						<p class="error offset-esm-05 offset-1"><?php getModifyImageError($errors); ?></p>
					</div>
					<div class="col-10 col-sm-5 col-esm-5">
						<label for="mailModify" class="offset-esm-05 label offset-1">Email : </label>
						<input <?php tabIndex(); ?> id="mailModify" type="mail" name="emailModify" class="input col-4 col-sm-2 col-esm-4 offset-esm-05" placeholder="<?php getMail();?>">
						<p class="error offset-esm-05 offset-1"><?php getModifyEmailError($errors); ?></p>
					</div>
                    <div class="col-10 col-sm-5 col-esm-5">
						<label for="passModify" class="offset-esm-05 label offset-1">Password : </label>
                    	<input <?php tabIndex(); ?> id="passModify" type="password" name="password" class="input col-sm-2 col-4 col-esm-4 offset-esm-05" placeholder="&#8226&#8226&#8226&#8226&#8226&#8226&#8226&#8226">
                    	<p class="col-10 col-sm-4 offset-1 col-esm-4" offset-esm-05 >Password must contain at least 8 characters,an uppercase letter and a number.</p>
                    	<p class="error offset-esm-05 offset-1"><?php getModifyPasswordError($errors); ?></p>
                	</div>
                	<div class="col-10 col-sm-5 col-esm-5">
						<label for="passRepeatModify" class="offset-esm-05 label offset-1">Repeat Password : </label>
                  		<input <?php tabIndex(); ?> id="passRepeatModify" type="password" name="passwordRepeat" class="input col-sm-2 col-4 col-esm-4  offset-esm-05" placeholder="&#8226&#8226&#8226&#8226&#8226&#8226&#8226&#8226">
                  		<p class="error offset-esm-05 offset-1"><?php getModifyPasswordRepeatError($errors); ?></p>
                	</div>
                </fieldset>
                <fieldset>
                	<legend>Personal Information</legend>
					<div class="col-10 col-sm-5 col-esm-5">
						<label for="nameModify" class="offset-esm-05 label offset-1">Name : </label>
						<input <?php tabIndex(); ?> id="nameModify" type="text" name="nameModify" class="input col-4 col-sm-2 col-esm-4 offset-esm-05" placeholder="<?php getName();?>">
					</div>
					<div class="col-10 col-sm-5 col-esm-5">
						<label for="surnameModify" class="offset-esm-05 label offset-1">Surname : </label>
						<input <?php tabIndex(); ?> id="surnameModify" type="text" name="surnameModify" class="input col-4 col-sm-2 col-esm-4 offset-esm-05" placeholder="<?php getSurname();?>">
					</div> 
					<div class="col-10 col-sm-5 col-esm-5">
						<label for="dateModify" class="offset-esm-05 label offset-1">Date of Birth : </label>
						<input <?php tabIndex(); ?> id="dateModify" type="date" name="dateModify" class="input col-4 col-sm-2 col-esm-4 offset-esm-05" value="<?php getBirth();?>">
					</div>
					<div class="col-10 col-sm-5 col-esm-5">
						<label for="sexModify" class="offset-esm-05 label offset-1">Sex : </label>
						<select id="sexModify" name="sex" <?php tabIndex(); ?> class="col-esm-4 offset-esm-05">
	                    	<?php getSexSelected(); ?>
						</select>
					</div>
              	</fieldset>
                <fieldset>
                	<legend>Contact Information</legend>
					<div class="col-10 col-sm-5 col-esm-5">			
						<label for="nationalityModify" class="offset-esm-05 label offset-1">Nationality : </label>		
						<select <?php tabIndex(); ?> id="nationalityModify" name="nationality" class="col-esm-4 offset-esm-05">
							<?php
								getCountriesNat($db);
							?>
						</select>
					</div>				
					<div class="col-10 col-sm-5 col-esm-5">
						<label for="addressModify" class="offset-esm-05 label offset-1">Address : </label>
						<input id="addressModify" type="text" name="addressModify" <?php tabIndex(); ?> class="input col-4 col-sm-2 col-esm-4 offset-esm-05" placeholder="<?php getAddress();?>">
					</div>
					<div class="col-10 col-sm-5 col-esm-5">
						<label for="zipModify" class="offset-esm-05 label offset-1">Zip Code : </label>
						<input id="zipModify" type="number" name="zipModify" <?php tabIndex(); ?> class="input col-4 col-sm-2 col-esm-4 offset-esm-05" placeholder="<?php getZipCode();?>">
					</div>
					<div class="col-10 col-sm-5 col-esm-5">
						<label for="phoneModify" class="offset-esm-05 label offset-1">Phone : </label>
						<input id="phoneModify" type="number" name="phoneModify" <?php tabIndex(); ?> class="input col-4 col-sm-2 col-esm-4 offset-esm-05" placeholder="<?php getPhone();?>">
					</div> 
                </fieldset>
                <fieldset>
                	<legend>Extra Information</legend>                  
					<div class="col-10 col-sm-5 col-esm-5">
						<label for="heightModify" class="offset-esm-05 label offset-1">Height : </label>
						<input <?php tabIndex(); ?> id="heightModify" type="number" name="heightModify" min="0" max="5" step="0.01" class="input col-4 col-sm-2 col-esm-4 offset-esm-05" placeholder="<?php getHeight();?>">
					</div>
					<div class="col-10 col-sm-5 col-esm-5">
						<label for="weightModify" class="offset-esm-05 label offset-1">Weight : </label>
						<input <?php tabIndex(); ?> id="weightModify" type="number" name="weightModify" min="0" max="1000" step="0.01" class="input col-4 col-sm-2 col-esm-4 offset-esm-05" placeholder="<?php getWeight();?>">
					</div>
					<div class="col-10 col-sm-5 col-esm-5">
						<label for="fiscalCodeModify" class="offset-esm-05 label offset-1">Fiscal Code : </label>
						<input <?php tabIndex(); ?> id="fiscalCodeModify" type="text" name="fiscalCodeModify" class="input col-4 col-sm-2 col-esm-4 offset-esm-05" placeholder="<?php getFiscalCode();?>">
						<p class="error offset-esm-05 offset-1"><?php getModifyFiscalCodeError($errors); ?></p>
					</div>	
                </fieldset>
				<button type="submit" <?php tabIndex(); ?> class="btnMargin button dark col-esm-4 offset-1 offset-sm-01 offset-esm-05" name="modify_user">Confirm changes</button>
			</form>
		</div>   
		<?php
			getFooter("Modify Data");
		?>
		<script src="js/ModifyImage.js"></script>
	</body>
</html>

<?php
function getModifyUsernameError($errors) {	
	
    if(isset($errors['usernameP'])){
    	echo $errors['usernameP'];
    }
}
function getModifyEmailError($errors){	
	
    if(isset($errors['emailP'])){
    	echo $errors['emailP'];
    }   
}
function getModifyPasswordError($errors) {
	
    if(isset($errors['passwordE'])){
    	echo $errors['passwordE'];
    }
}
function getModifyPasswordRepeatError($errors){
	if (isset($errors['passwordRepeatE'])){
    	echo $errors['passwordRepeatE'];
    }
}
function getModifyFiscalCodeError($errors){
	if (isset($errors['fiscalCodeE'])){
    	echo $errors['fiscalCodeE'];
    }
}
function getModifyImageError($errors){
	if (isset($errors['imageE'])){
    	echo $errors['imageE'];
    }
   
}

?>
