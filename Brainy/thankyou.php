<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
  		include_once 'functions.php';
     	getHead("Thank You");
    ?>
  </head>
  <body>
    <?php 
    	getMenu("Thank You");
    	getBreadcumbs("Cart");
    	orderPaid();
    ?>
    <div class="content container light-theme">
      <div class="col-10 center">
        <p>Thank you for your purchase!</p>
      </div>
      <div class="col-10 center">
        <a <?php tabIndex(); ?> href="orders.php" class="button light">View order details</a>
      </div>
    </div>
    <?php getFooter("Thank You");?>
</body>
</html>
