<?php
include_once 'functions.php';
if(!isset($_SESSION['loggedin'])){
	header("Location: index.php");
    exit;
}
?>

<!DOCTYPE>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
    	<?php 
        	getHead("Personal Area");
        ?>
     	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      	<script type="text/javascript" src="scripts/findOthers.js"> </script>
    </head>
    <body>
    	<?php
			getMenu("Personal Area");
	    	getBreadcumbs("Personal Area");
   		?>
    	<div class="content container dark-theme indigo">
          <div class="col-10">
            
            <div class="col-5 center col-sm-5 col-esm-5" id="profile_pic_container">
	            <div class="col-10">
	              <h1>Welcome <?php getUsername(); ?></h1>
	            </div>
              <img id="profile_pic" src="images/<?php getImage()?>">
              <div class="col-10 v-offset-5">
              	<a <?php tabIndex(); ?>  href="modify_data.php">Modify Data</a>
              </div>
            </div>
            
            <div class="col-5 col-sm-5">
              <div class="title col-10">
                <h3>Personal Information</h3>
              </div>
              <div class="value col-10">
                <div class="col-3 bold"><p>Name:</p></div>
                <div class="col-7"><p><?php getName(); ?></p></div>
              </div>
              <div class="value col-10">
                <div class="col-3 bold"><p>Surname:</p></div>
                <div class="col-7"><p><?php getSurname(); ?></p></div>
              </div>
              <div class="value col-10">
                <div class="col-3 bold"><p>Sex:</p></div>
                <div class="col-7"><p><?php getSex(); ?></p></div>
              </div>
              <div class="value col-10">
                <div class="col-3 bold"><p>Birthdate:</p></div>
                <div class="col-7"><p><?php getBirth(); ?></p></div>
              </div>
              <div class="value col-10">
                <div class="col-3 bold"><p>Nationality:</p></div>
                <div class="col-7"><p><?php getNationality(); ?></p></div>
              </div>            
            </div>
          </div>
          
          <div class="center col-5 col-sm-5">
            <div class="title col-10">
              <h3>Contact Information</h3>
            </div>
            <div class="value col-10">
              <div class="col-3 bold"><p>Email:</p></div>
              <div class="col-7"><p><?php getMail(); ?></p></div>
            </div>
            <div class="value col-10">
              <div class="col-3 bold"><p>Phone:</p></div>
              <div class="col-7"><p><?php getPhone(); ?></p></div>
            </div>
            <div class="value col-10">
              <div class="col-3 bold"><p>Address:</p></div>
              <div class="col-7"><p><?php getAddress(); ?></p></div>
            </div>
            <div class="value col-10">
              <div class="col-3 bold"><p>Zip Code:</p></div>
              <div class="col-7"><p><?php getZipCode(); ?></p></div>
            </div>
          </div>
          
          <div class="center col-5  col-sm-5" id="extra">
            <div class="title col-10">
              <h3>Extra Information</h3>
            </div>
            <div class="value col-10">
              <div class="col-3 bold"><p>Height:</p></div>
              <div class="col-7"><p><?php getHeight(); ?>m</p></div>
            </div>
            <div class="value col-10">
              <div class="col-3 bold"><p>Weight:</p></div>
              <div class="col-7"><p><?php getWeight()?>kg</p></div>
            </div>         
          </div>
          
      	</div>
        
    <?php getFooter("Personal Area");?>
  </body>
</html>
