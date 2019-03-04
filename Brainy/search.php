<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php 
    	include_once 'functions.php';
    	getHead("Search");
    ?>
  </head>
  <body>
  	<?php 
    	getMenu("Search");
    	getBreadcumbs("Search");
    ?>
	<script src="js/Search.js"></script>
    <div class="dark-theme">
      <div class="content" id="searchContainer">
		  <input <?php tabIndex(); ?> onkeyup="filter()" id="searchBox" type="text" class="col-8 offset-1" placeholder="Search..">
		  <?php require("Search/search.php");?>
			<div id="searchNoResults" class="dark-theme offset-1">No results for your search.</div>
      </div> <!-- end intro-->
	</div>
    
	<?php getFooter("Home");?>
    <script src="js/smoothScroll.js"></script> 
</body>
</html>
