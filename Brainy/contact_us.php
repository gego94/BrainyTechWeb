<?php
    include_once('functions.php');
?>
<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>				
    	<?php
    		getHead2Pars("Contact Us","LoginRegisterModify");
    	?>
  	</head>
  	<body>
    	<?php           
          	getMenu("Contact Us");
          	getBreadcumbs("Contact Us");
    	?>
    	<div class="content dark-theme">
	        <div id="contactContainer" class="col-10 col-sm-5 col-esm-5">
              	<div class="col-2 offset-1 col-esm-4 offset-esm-05 center">
                	<a id="maplink" href="#map" <?php tabIndex(); ?>  title="Scroll to map section"><i class="fas fa-map-marked-alt"></i></a>
                	<h3>ADDRESS</h3>
                	<p>TDCU <br/>1ZZ, Sant'Elena</p>
              	</div>
              	<div class="col-2 offset-1 col-esm-4 offset-esm-05 center">
                	<a href="#contactTitle" <?php tabIndex(); ?>  title="Scroll to send e-mail section"><i class="fas fa-envelope"></i></a>
                	<h3>Email</h3>
                	<h5>Technical Assistance</h5>
                	<p>support@brainy.td</p>
                	<h5>Recruitment</h5>
                	<p>joinus@brainy.td</p>
                	<p>Or click on image for a generic message</p>
              	</div>	
              	<div class="col-2 offset-1 col-esm-4 offset-esm-05  center">
	                <i id="contactPhone" class="fas fa-phone"></i>
                	<h3>TELEPHONE</h3>
                	<p>TDCU 1ZZ, Sant'Elena<br/>+290 828 3829104</p>
              	</div>
      		</div>
      		<div id="map" class="col-10"></div>
          	<div class="col-10">
        		<h1 id="contactTitle">Send us a question</h1>
        			<form method="post" action="contact_us.php" class="col-10 col-sm-5 col-esm-5">
          				<div class="col-5 col-sm-5 col-esm-5">
            				<div class="col-10 col-sm-5 col-esm-5">
              					<h4 class=" offset-sm-01 offset-esm-05">Name : </h4>
              					<input type="text" name="nameMail" <?php tabIndex(); ?> class="input col-4 col-sm-3 offset-sm-010 col-esm-4 offset-esm-05" placeholder="Insert your Name">
              					<p class="error offset-sm-01 offset-esm-05"><?php getNameMailErrors($errors); ?></p>
            				</div>
            				<div class="col-10 col-sm-5 col-esm-5">
              					<h4 class=" offset-sm-01 offset-esm-05">Surname : </h4>
                      			<input type="text" name="surnameMail" <?php tabIndex(); ?> class="input col-4 col-sm-3 col-esm-4 offset-esm-05" placeholder="Insert your Surname">
              					<p class="error offset-sm-01 offset-esm-05"><?php getSurnameMailErrors($errors); ?></p>
            				</div>
            				<div class="col-10 col-sm-5 col-esm-5">
              					<h4 class=" offset-sm-01 offset-esm-05">Mail : </h4>
              					<input type="email" name="mail" <?php tabIndex(); ?> class="input col-4 col-sm-3 col-esm-4 offset-esm-05" placeholder="Insert your Email">
              					<p class="error offset-sm-01 offset-esm-05"><?php getMailErrors($errors); mailNotSent($errors); ?></p>
            				</div>
          				</div>
        				<textArea name="textAreaMail" rows="4" cols="50" <?php tabIndex(); ?> class="col-4 col-sm-4 offset-sm-01 col-esm-4 offset-esm-05">Enter here your message....</textArea>
        				<div class="col-9 offset-05 offset-sm-01">
                        	<button id="mailButton"  type="submit" <?php tabIndex(); ?> class="button dark offset-sm-010 col-esm-4" name="mail_user">Send
                            </button>
                        </div>	
          			</form>
                    <p class="error success offset-sm-01 offset-esm-05"><?php mailSent($errors); ?></p>
                    </div>
          			<script src="js/contactMap.js"></script>
	    		</div>
	    	<?php
		    		getFooter("Contact Us");
    		?>
    	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCObg10MD9ZkcuUlak_DdW8zxKjMJhtPyA&callback=initMap"></script>
    <script src="Home/scripts/smoothScroll.js"></script> 
  	</body>
</html>
