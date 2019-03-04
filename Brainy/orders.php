<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php 
    	include_once 'functions.php';
    	getHead("Orders");
    ?>
  </head>
  <body>
  	<?php 	
    	getMenu("Orders");
    	getBreadcumbs("Orders");
    	getOrdersList();
    	getFooter("Orders");
    ?>
<script src="Cart/cartList.js"></script>
</body>
</html>
