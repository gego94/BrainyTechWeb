<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php 
    	include_once 'functions.php';
     	getHead("Partners");
    ?>
  </head>
  <body>
  	<?php 
    	getMenu("Partners");
      	getBreadcumbs("About Us > Partners");
    ?>
    <div class="dark-theme indigo">
    	<div class="content container">
        	<div class="col-10 title thin"><h1>Partners</h1></div>
        	<div class="col-10 col-sm-5 center">
        	    <div class="col-8 offset-1 paragraph">To ensure that our software operates effectively for all your digital media needs, Brainy has formed relationships with a host of industry leaders and technology pioneers in the multimedia, digital video, and broadcast industries.</div>
        	</div>
	
          <div class="col-10 center">
            <div class="col-8 offset-1">
                <h1>Rihanna</h1>
                <div class="col-10">
                    <iframe <?php tabIndex(); ?> src="https://www.youtube.com/embed/CvBfHwUxHIk" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen title="Umbrella video"></iframe>
                </div>
            </div>
          </div>

          <div class="col-10 v-offset-5" id="partners_list">
            <div class="col-2 col-sm-2 center">
                <a href="https://www.paypal.com/it/home" <?php tabIndex(); ?> >
                <i class="col-10 fab fa-paypal"></i>
                <h2 class="v-offset-5">Paypal</h2>
                </a>
            </div>
            <div class="col-2 col-sm-2 offset-sm-1 center" >
                <a href="https://www.amazon.it/" <?php tabIndex(); ?> >
                <i class="col-10 fab fa-amazon"></i>
                <h2 class="v-offset-5">Amazon</h2>
                </a>
            </div>
            <div class="col-2 col-sm-2 center">
                <a href="https://codepen.io/" <?php tabIndex(); ?> >
                <i class="col-10 fab fa-codepen"></i>
                <h2 class="v-offset-5">Codepen</h2>
                </a>
            </div>
            <div class="col-2 col-sm-2 offset-sm-1 center">
                <a href="https://stackoverflow.com/" <?php tabIndex(); ?> >
                <i class="col-10 fab fa-stack-overflow"></i>
                <h2 class="v-offset-5">Stack Overflow</h2>
                </a>
            </div>
            <div class="col-2 col-sm-2 center">
                <a href="https://www.hackerrank.com/" <?php tabIndex(); ?> >
                <i class="col-10 fab fa-hackerrank"></i>
                <h2 class="v-offset-5">Hackerrank</h2>
                </a>
            </div>    
            <div class="col-2 col-sm-2 offset-sm-1 center">
                <a href="https://jenkins.io/" <?php tabIndex(); ?> >
                <i class="col-10 fab fa-jenkins"></i>
                <h2 class="v-offset-5">Jenkins</h2>
                </a>
            </div>  
            <div class="col-2 col-sm-2 center">
                <a href="https://apple.com" <?php tabIndex(); ?> >
                <i class="col-10 fab fa-apple"></i>
                <h2 class="v-offset-5">Apple</h2>
                </a>
            </div> 
            <div class="col-2 col-sm-2 offset-sm-1 center">
                <a href="https://www.gitkraken.com/" <?php tabIndex(); ?> >
                <i class="col-10 fab fa-gitkraken"></i>
                <h2 class="v-offset-5">GitKraken</h2>
                </a>
            </div> 
            <div class="col-2 col-sm-2 center">
                <a href="https://www.nintendo.com/switch/" <?php tabIndex(); ?> >
                <i class="col-10 fab fa-nintendo-switch"></i>
                <h2 class="v-offset-5">Nintendo Switch</h2>
                </a>
            </div> 
            <div class="col-2 col-sm-2 offset-sm-1 center">
                <a href="https://www.strava.com/" <?php tabIndex(); ?> >
                <i class="col-10 fab fa-strava"></i>
                <h2 class="v-offset-5">Strava</h2>
                </a>
            </div> 
      	</div>
     </div>
  </div>
  <?php getFooter("Partners");?>
</body>
</html>
