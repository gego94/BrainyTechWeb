<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php 
  	include_once ('functions.php');
  	getHead("Personalize");
  ?>
  <link rel="stylesheet" type="text/css" href="Personalize/slideshow.css">
  <script src="Personalize/sliderChanger.js"></script>
</head>

<body>
	<?php 
    	getMenu("Personalize");
      	getBreadcumbs("Shop > Personalize");
     ?>
	<div class="dark-theme" id="configurator">
		<div class="content">
			<div class="col-10 sm-v-offset-5">
				<div id="confLayout">
					<div class="col-5 col-sm-5 center">
						<div class="col-10 col-sm-5">
							<div id="slideshow_container">
								<div class="csslider infinity" id="slider1">
								  <input type="radio" name="slides" checked="checked" id="slides_1"/>
								  <input type="radio" name="slides" id="slides_2"/>
								  <input type="radio" name="slides" id="slides_3"/>
								  <ul>
								    <li id="firstBg">
								        <div id="bg_1">
								        <div>
								          <h2>Discover all colours</h2>
								        </div>
								      </div>
								    </li>
								    <li id="secondBg">
								    	<div id="bg_2">
								        <div>
								          <h2>Add some technology</h2>
								        </div>
								      </div>
								    </li>
								    <li class="scrollable">
								      <h1>PUmbrella</h1>
								      <h2>Personalize your Umbrella</h2>
								      <p>
								        If you don't like our stock product, or you just want to modify them a bit, we let us personalize your custom features for your BRainy.Add favolus Technological skill to your umbrella.
								      </p>
								      <p>PROMO Free Shipping</p>
								    </li>
								  </ul>
								  <div class="arrows">
								    <label for="slides_1"></label>
								    <label for="slides_2"></label>
								    <label for="slides_3"></label>
								    <label class="goto-first" for="slides_1"></label>
								    <label class="goto-last" for="slides_3"></label>
								  </div>
								  <div class="navigation"> 
								    <div>
								      <label for="slides_1"></label>
								      <label for="slides_2"></label>
								      <label for="slides_3"></label>
								    </div>
								  </div>
								</div>
							  </div>							
						</div>
					</div>
					<form action="/addItem.php" method="POST">
						<div class="col-5 col-sm-5 left sm-center">
							<div class="col-10 col-sm-5" id="handle_colour">
								<h3>Handle colour:</h3>
								<div class="col-10 col-sm-5">
									
									<input <?php tabIndex(); ?> type="radio" name="options_handle" id="h1" class="input_handle" checked="checked" value="carbon_cherry_tree" onchange="dynamicPrice(this.value, 7, oldvalue)"/>
									<label  for="h1" onmouseenter="window.oldvalue=$('.input_handle:checked').val()" onclick="selectColourHandle('C')" >Carbon Cherry Tree</label>
									<input <?php tabIndex(); ?> type="radio" name="options_handle" id="h2" class="input_handle" value="millenary_beech" onchange="dynamicPrice(this.value, 7, oldvalue)"/>
									<label for="h2" onmouseenter="window.oldvalue=$('.input_handle:checked').val()" onclick="selectColourHandle('M')">Millenary Beech</label>
								</div>
							</div>
							<div class="col-9 col-sm-5" id="leather_colour">
								<h3>Leather colour:</h3>
								<div class="col-10 col-sm-5">
									<div class="col-10 col-sm-5">
										<input <?php tabIndex(); ?> type="radio" name="options_colour" id="c1" class="input_colour" checked="checked" value="pure_black" onchange="dynamicPrice(this.value, 0, oldvalue)"/>
										<label for="c1" onclick="selectColour('P')" onmouseenter="window.oldvalue=$('.input_colour:checked').val()" >Pure Black</label>
										<input <?php tabIndex(); ?> type="radio" name="options_colour" id="c2" class="input_colour" value="obsidian_blue" onchange="dynamicPrice(this.value, 0, oldvalue)"/>
										<label for="c2" onclick="selectColour('O')" onmouseenter="window.oldvalue=$('.input_colour:checked').val()">Obsidian Blue</label>
										<input type="radio" name="options_colour" id="c3" class="input_colour" value="indigo_blue" onchange="dynamicPrice(this.value, 0, oldvalue)"/>
										<label for="c3" onclick="selectColour('I')" onmouseenter="window.oldvalue=$('.input_colour:checked').val()" >Indigo Blue</label>
										<input type="radio" name="options_colour" id="c4" class="input_colour" value="amber_yellow" onchange="dynamicPrice(this.value, 0, oldvalue)"/>
										<label for="c4" onclick="selectColour('A')" onmouseenter="window.oldvalue=$('.input_colour:checked').val()">Amber Yellow</label>
										<input type="radio" name="options_colour" id="c5" class="input_colour" value="emerald_green" onchange="dynamicPrice(this.value, 0, oldvalue)"/>
										<label for="c5" onclick="selectColour('E')" onmouseenter="window.oldvalue=$('.input_colour:checked').val()" >Emerald Green</label>
										<input type="radio" name="options_colour" id="c6" class="input_colour" value="lava_red" onchange="dynamicPrice(this.value, 0, oldvalue)"/>
										<label for="c6" onclick="selectColour('L')" onmouseenter="window.oldvalue=$('.input_colour:checked').val()">Lava Red</label>
									</div>
								</div>
							</div>
							<div class="col-10 col-sm-5">
								<h3 id="leather">Leather:</h3>
								<div class="col-10 col-sm-5" data-toggle="buttons">
									<input type="radio" name="options_leather" id="l1" class="input_leather" checked="checked" value="caiman" onchange="dynamicPrice(this.value, 1, oldvalue)"/>
									<label for="l1" onmouseenter="window.oldvalue=$('.input_leather:checked').val()">Caiman</label>
									<input type="radio" name="options_leather" id="l2" class="input_leather" value="tarantula" onchange="dynamicPrice(this.value, 1, oldvalue)"/>
									<label for="l2" onmouseenter="window.oldvalue=$('.input_leather:checked').val()">Tarantula (limited edition)</label>
									<input type="radio" name="options_leather" id="l3" class="input_leather" value="cobra" onchange="dynamicPrice(this.value, 1, oldvalue)"/>
									<label for="l3" onmouseenter="window.oldvalue=$('.input_leather:checked').val()">Cobra</label>
									<input type="radio" name="options_leather" id="l4" class="input_leather" disabled="disabled" value="kevlar" onchange="dynamicPrice(this.value, 1, oldvalue)"/>
									<label for="l4" class="disabled" onmouseenter="window.oldvalue=$('.input_leather:checked').val()">Kevlar (out of stock)</label>
									<input type="radio" name="options_leather" id="l5" class="input_leather" value="himalayan_sheep" onchange="dynamicPrice(this.value, 1, oldvalue)"/>
									<label for="l5" onmouseenter="window.oldvalue=$('.input_leather:checked').val()">Himalayan Sheep</label>
								</div>
							</div>
							<div class="col-5 col-sm-2">
								<h3>Bluetooth:</h3>
								<div class="col-10 col-sm-5" data-toggle="buttons">
								    <input type="radio" name="options_bt" id="b1" checked="checked" value="1"  onchange="dynamicPrice(this.value, 2)"/>
									<label for="b1">Yes</label>
									<input type="radio" name="options_bt" id="b2" value="0" onchange="dynamicPrice(this.value, 2)"/>
									<label for="b2">No</label>
								</div>
							</div>
							<div class="col-5 col-sm-2 offset-sm-1">
								<h3>PH analyzer:</h3>
								<div class="col-10 col-sm-5" data-toggle="buttons">
								    <input type="radio" name="options_ph" id="p1" checked="checked" value="1" onchange="dynamicPrice(this.value, 3)"/>
									<label for="p1">Yes</label>
									<input type="radio" name="options_ph" id="p2" value="0" onchange="dynamicPrice(this.value, 3)"/>
									<label for="p2">No</label>
								</div>
							</div>
							<div class="col-5 col-sm-2">
								<h3>GPS:</h3>
								<div class="col-10 col-sm-5" data-toggle="buttons">
								    <input type="radio" name="options_gps" id="g1" checked="checked" value="1" onchange="dynamicPrice(this.value, 4)"/>
									<label for="g1">Yes</label>
									<input type="radio" name="options_gps" id="g2" value="0" onchange="dynamicPrice(this.value, 4)"/>
									<label for="g2">No</label>
								</div>
							</div>
							<div class="col-5 col-sm-2 offset-sm-1">
								<h3>Solar panels:</h3>
								<div class="col-10 col-sm-5" data-toggle="buttons">
								    <input type="radio" name="options_solar" id="s1" checked="checked" value="1" onchange="dynamicPrice(this.value, 5)"/>
									<label for="s1">Yes</label>
									<input type="radio" name="options_solar" id="s2" value="0" onchange="dynamicPrice(this.value, 5)"/>
									<label for="s2">No</label>
								</div>
							</div>
                            <div class="col-5 col-sm-2">
								<h3>Touch ID:</h3>
								<div class="col-10 col-sm-5" data-toggle="buttons">
								    <input type="radio" name="options_id" id="id1" checked="checked" value="1" onchange="dynamicPrice(this.value, 6)"/>
									<label for="id1">Yes</label>
									<input type="radio" name="options_id" id="id2" value="0" onchange="dynamicPrice(this.value, 6)"/>
									<label for="id2">No</label>
								</div>
							</div>
                            <div class="col-5 col-sm-2 offset-sm-1">
								<h3>Total amount:</h3>
								<div class="col-10 col-sm-5">
								    <input type="radio" name="name" id="name" checked="checked" value="PUmbrella" />
                            		<input type="radio" name="price" id="price" checked="checked" value="295" />
                            		<label for="price" id="price_label">295 $</label>
								</div>
							</div>
						</div>
						<?php 
							if(isset($_SESSION['loggedin'])){
								echo"
									<div class=\"col-2 col-offset-1 col-sm-2 right\">
										<input type=\"submit\" value=\"add_cart\" id=\"basket\" >
										<label for=\"basket\" id=\"label_basket\">Add to cart</label>
									</div>
								";
							}else{
								echo "<div class=\" dark-theme center col-10 col-sm-5\">
      								    <p>Cannot add to cart<br /><a href=\"register.php\">Register</a> or <a href=\"login.php\">Login</a> and try again.</p>
    								  </div>";
							}
						?>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php getFooter("Personalize");?>
    <script type="text/javascript" src="Personalize/dynPrice.js"></script>
</body>
</html>
