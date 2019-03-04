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
    	getMenu("Home");
    	getBreadcumbs("Home");
     ?> 
    <div class="dark-theme"> 
      <div class="content center container" id="intro" >
        <div class="col-8 offset-1">
          <div class="col-8 offset-2"><div class="floating1"></div></div>
          <div class="title thin fade-in">
          	<h1>"Some people walk in the rain,
            others just get wet."</h1>
		      </div>          
          <a href="#about_us" <?php tabIndex(); ?> class="button fade-in">Learn more</a>
        </div>
        <div class="col-10">
          <div class="floating2"></div>
        </div>
        <div class="col-4 offset-6 offset-sm-1">
          <div class="floating3"></div>
        </div>  
      </div>
    </div>

     <div class="light-theme">
      <div class="content center container" id="about_us">
        <div class="col-10">
          <div class="light col-10">
            <h4>Don't you know that...</h4>
          </div> <!-- end pre-title-->
          <div class="title thin col-10">
            <h3>We love the rain?</h3>
          </div> <!-- end title-->
          <div class="col-8 offset-1 col-esm-3 offset-esm-1">
            <p> People can't decide for <strong>Nature</strong>. The rain is a natural needed process to make the life goes on. We just 
            	see opportunities when normal people abandon many hopes. Why content of hawker's products findable in stations?? 
                What differences <strong>intelligent</strong> people from normal people is to get opportunities in every condition.
            </p>
          </div>
          <div class="col-10">
        	<img class="col-5 col-sm-5" src="http://www.brainytecweb.altervista.org/Home/img/homeph.png" alt="leather example" title="Demonstration of our technology"/>
          </div>
          <a <?php tabIndex(); ?> href="about_us.php" class="button">More about us</a>
        </div>
      </div>
    </div>
    
	<div class="dark-theme indigo">
    <div class="content center container" id="our_technology">
      <div class="col-10">
        <div class="light col-10">
          <h4>Discover what lies behind...</h4>
        </div>
        <div class="title thin col-10">
          <h3>Our Technology</h3>
        </div>
        <div class="col-8 offset-1 col-esm-3 offset-esm-1">
          <p>
          	The technology we have, applied to our umbrellas. <strong>No excuses</strong> not to love the rain now.
          	Explore our technology asset and choose which feature you want in your unique craft.
          </p>
        </div>

        <div class="col-10 v-offset-5" id="technology_list">

        	<div class="item col-2 col-esm-5">
            	<a <?php tabIndex(); ?> href="our_technology.php#bluetooth">
              		<i class="col-10 fab fa-bluetooth-b"></i>
              	</a>
              	<p class="col-8 offset-1 col-esm-3 offset-esm-1">Comunicate with your smartphone through <strong>bluetooth</strong> connection.</p>
            </div>
          
            <div class="col-2 col-esm-5">
            	<a <?php tabIndex(); ?> href="our_technology.php#solar_panel">
              		<i class="col-10 fas fa-solar-panel"></i>
              	</a>
              	<p class="col-8 offset-1 col-esm-3 offset-esm-1">Zero energy costs, <strong>the Sun</strong> is our recharger.</p>
            </div>
          
            <div class="col-2 col-esm-5">
            	<a <?php tabIndex(); ?> href="our_technology.php#gps">
              		<i class="col-10 fas fa-map-marker-alt"></i>
              	</a>
              	<p class="col-8 offset-1 col-esm-3 offset-esm-1">Keep track of your journeys with <strong>Gps</strong> sensor nested in.</p>
            </div>
          
            <div class="col-2 col-esm-5">
            	<a <?php tabIndex(); ?> href="our_technology.php#fingerprints">
              		<i class="col-10 fas fa-fingerprint"></i>
              	</a>
              	<p class="col-8 offset-1 col-esm-3 offset-esm-1">Fingerprints unlocking system. Upgrade your <strong>security</strong>.</p>
            </div>
          
            <div class="col-2 col-esm-5">
            	<a <?php tabIndex(); ?> href="our_technology.php#ph">
              		<i class="col-10 fas fa-flask"></i>
              	</a>
              	<p class="col-8 offset-1 col-esm-3 offset-esm-1">Analyze the <strong>ph</strong> of the water that is raining over your head.</p>
            </div>
          
        </div>
        </div>
        <a <?php tabIndex(); ?> href="our_technology.php" class="button">Tech me there</a>
      </div> 
    </div>

    <div class="light-theme">
      <div class="content center container" id="shop">
        <div class="col-10">
          <div class="light col-10">
            <h4>we proudly present...</h4>
          </div>
          <div class="title thin col-10">
            <h3>Our Products</h3>
          </div>
          <div class="col-8 offset-1 col-esm-3 offset-esm-1">
            <p>People normally think that rainy days are bad. Instead, we think that they are an <strong>opportunity</strong> to stay in contact
            	with other people and make the world great again. By using Brainy products you can save the world, because 
                you will produce and use 0 pollution energy. Make the right choice. Be Brainy. </p>
          </div>

          <div class="col-10 v-offset-5">
            
          		<div class="item col-2-5 col-esm-5">
              		<a <?php tabIndex(); ?> href="stock.php#tech">
                		<i class="col-10 fas fa-microchip"></i>
                	</a>
                	<p class="col-8 offset-1 col-esm-3 offset-esm-1">Our technology can change your perspective about rainy days</p>
                	<div class="price_tag col-10">
                  		<h3>From <strong>190€</strong></h3>
                	</div>
              	</div>
            
            
              	<div class="item col-2-5 col-esm-5">
              		<a <?php tabIndex(); ?> href="stock.php#comfort">
                		<i class="col-10 fas fa-couch"></i>
                	</a>
                	<p class="col-8 offset-1 col-esm-3 offset-esm-1">Rain should be comfortable, explore Comfortable Umbrella</p>
                	<div class="price_tag col-10">
                  		<h3>From <strong>150€</strong></h3>
                	</div>
              	</div>
            
            
              	<div class="item col-2-5 col-esm-5">
              		<a <?php tabIndex(); ?> href="stock.php#elegance">
                		<i class="col-10 fas fa-gem"></i>
                	</a>
                	<p class="col-8 offset-1 col-esm-3 offset-esm-1">Not an ordinary object but a jewel of Elegance</p>
                	<div class="price_tag col-10">
                  		<h3>From <strong>200€</strong></h3>
                	</div>
              	</div>
            
            
              	<div class="item col-2-5 col-esm-5">
              		<a <?php tabIndex(); ?> href="stock.php#personalize">
                		<i class="col-10 fas fa-paint-brush"></i>
                	</a>
                	<p class="col-8 offset-1 col-esm-3 offset-esm-1">Create your own Umbrella! Become a designer and buy your handmade craft. </p>
                	<div class="price_tag col-10">
                  		<h3>From <strong>120€</strong></h3>
                	</div>
              	</div>
            
          </div>
          <a <?php tabIndex(); ?> href="stock.php" class="button">Shopping time</a>
        </div>
      </div>
    </div>

    <div class="dark-theme wenge">
      <div class="content center container" id="stats">
        <div class="col-10">
          <div class="light col-10">
            <h4>numbers, numbers, numbers...</h4>
          </div>
          <div class="title thin col-10">
            <h3>A few stats</h3>
          </div>
          <i class="col-10 fas fa-chart-line"></i>
          <div class="col-8 offset-1 col-esm-3 offset-esm-1">
            <p>If you want to see our work worldwide just click on the button below and make yours our <strong>fantastic</strong> numbers.</p>
          </div>
          <a <?php tabIndex(); ?> href="statistics.php" class="button">Show me data</a>
        </div>
      </div>
    </div>
    
    <div class="dark-theme indigo">
      <div class="content center container" id="contact_us">
        <div class="text col-10">
          <div class="light col-10">
            <h4>any doubt or just curios?</h4>
          </div>
          <div class="title thin col-10">
            <h3>Questions are vital</h3>
          </div>
          <div class="col-8 offset-1 col-esm-3 offset-esm-1">
            <p>If you don't know yet how to find us, just visit our contact page. You can contact us 24/24 every day, an
            	operator will <strong>always answer</strong> your mail or phone. For more enterprising people, we periodically  organize some fantastic 
            	cruises to our island to visit our seat and have a great time in our Home. </p>
          </div> 
          <a <?php tabIndex(); ?> href="contact_us.php" class="button">Contact us</a>
        </div> 
      </div> 
    </div>

	<?php getFooter("Home");?> 
  </body>
</html>
