<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	    <?php 
        	include_once 'functions.php'; 
	    	getHead("Cart");
        ?>
  </head>
  <body>
  	<?php 	getMenu("Cart");
    		getBreadcumbs("Cart");
    		getCartList();
          	getFooter("Cart");?> 
  <script src="Cart/cartList.js"></script>
  </body>
</html>
