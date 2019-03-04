<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php 
    	include_once 'functions.php'; 
    	getHead("Gallery");
    ?>
  </head>
  <body>
    <?php 
    	getMenu("Gallery");
    	getBreadcumbs("Shop > Gallery");
    ?>
    <div class="dark-theme">
      
      <div class="content container center fade-in">
        
        <div class="col-10 v-offset-10">
          <div class="col-10 title"><h1>Umbrella x Style</h1></div>
        </div>        
        
        <img class="img col-6 col-sm-5 v-offset-5" alt="Ancient Elegant Umbrellas" src="Gallery/img/img1.jpg">
        <img class="img col-6 col-sm-5" alt="Appreciate Rainy Days" src="Gallery/img/img2.jpg">
        <img class="img col-6 col-sm-5" alt="Style and Utility" src="Gallery/img/img3.jpg">
        <img class="img col-6 col-sm-5" alt="Waterproof Material" src="Gallery/img/img4.jpeg">
        
      </div>
      
	</div>
    
    <?php getFooter("Gallery");?>
</body>
</html>
