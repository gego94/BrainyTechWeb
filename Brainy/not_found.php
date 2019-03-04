<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Home");
     ?>        
  </head>
  <body>
  	<?php 	
    	getMenu("404");
    	getBreadcumbs("404");
     ?> 
    <div class="dark-theme content">
    	<p>
        	OOOOOPS the page you are looking for seems not to exist...
        </p>
        <a href="search.php">If you need something go to our search page.</a>
	</div>
	<?php getFooter("404");?> 
  </body>
</html>
