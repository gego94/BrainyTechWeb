<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php 
    	include_once 'functions.php';
    	getHead("Stock");
    ?>
  </head>
  <body>
  	<?php 
    	getMenu("Stock");
    	getBreadcumbs("Shop > Stock");
    ?>
    <div class="dark-theme">
      <div class="content container center" id="intro">
          <div class="col-8 offset-1">
            <h4>We <strong>proudly</strong> present:</h4>
          </div>
        <div class="title fade-in col-10 thin">Our Products</div>
        <div class="col-10 center" id="choice">
          <div class="col-8 offset-1">
            <h4>Ask yourself what you love most:</h4>
          </div>
          <a <?php tabIndex(); ?> href="#tech" class="button col-2 col-esm-2">Technology</a>
          <a <?php tabIndex(); ?> href="#comfort" class="button col-2 col-esm-2">Comfort</a>
          <a <?php tabIndex(); ?> href="#elegance" class="button col-2 col-esm-2">Elegance</a>
        </div>  
      </div>
	</div>
    
    <div class="dark-theme indigo">      
      <div class="content container center" id="tech">
        <div class="col-10 v-offset-5">
          <div class="col-4 col-sm-5" id="tech_img"></div>
          <div class="col-6 col-sm-5">
            <div class="col-6 offset-2">
              World's most innovative
            </div>
            <div class="title col-10 col-sm-5">
              TUmbrella
            </div>
            <div class="paragraph col-10 col-sm-5">
              <p>Also known as Technonogy Umbrella ... What really differences us from other companies is that
              	we don't sell umbrellas, we sell the best solutions to have your life improved. Our technology 
                Umbrellas are full of all possible optional a person can want in all situation.
                And if you don't wasnt all possible solution(even if we can't imagine why) you can also personalize
                your reality to have only what you want.</p><br />
              <p>From 295 $</p>
            </div> 
            <a <?php tabIndex(); ?> href="tumbrella.php" class="button col-2">Buy it</a>
          </div> 
        </div>      
        <div class="product col-3 col-esm-5 center">
          <div class="img col-10" id="img_tech1"></div>
          <div class="name col-10">Premium handle</div>
          <div class="description col-10">
              <p class="col-8 offset-1 v-offset-5">Carbon cherry tree is one of the most luxury type of wood in the world.</p>
          </div>
        </div>      
        <div class="product col-4 col-esm-5 center">        	
              <div class="img col-10" id="img_tech2"></div>
              <div class="name col-10">Two minimal colours</div>            
            <div class="description col-10">
              <p class="col-8 offset-1 v-offset-5">The world is divided by a simple choice: Obsidian Blue or Pure Black?</p>
            </div>

        </div>
        <div class="product col-3 col-esm-5 center">
          <div class="img col-10" id="img_tech3"></div>
          <div class="name col-10">Modularity</div>
          <div class="description col-10">
              <p class="col-8 offset-1 v-offset-5">All of the technology you need, don't let your umbrella be boring. Discover all of the features.</p>
          </div>
        </div>
      </div>
	</div>
    
    <div class="dark-theme wenge">
      <div class="content container center" id="comfort">
        <div class="col-10 v-offset-5">
          <div class="col-4 col-sm-5" id="comfort_img"></div>
          <div class="col-6 col-sm-5">
            <div class="pre-title col-6 offset-2">
              Enjoy the sensations coming from our
            </div>
            <div class="title col-10">
              HUmbrella
            </div>
            <div class="paragraph col-10">
              <p>Handy Umbrella is the most comfortable umbrella in the world... If you just want all possible 
              comfort givable from an umbrella, special material we offer to you will give the real Aeden.
              You can find ergonimical grips if you have any issue. Or, if you just like vintage style, umbrella 
              shown here is what you really want...</p><br />
              <p>From 150 $</p>
            </div> 
            <a <?php tabIndex(); ?> href="humbrella.php" class="button col-2">Gimme it</a>
          </div> 
        </div>      
        <div class="product col-3 col-esm-5 center">
          <div class="img col-10" id="img_comfort1"></div>
          <div class="name col-10">Comfortable handle</div>
          <div class="description col-10">
              <p class="col-8 offset-1 v-offset-5">Wet hands? Don't worry, there is a special grip on the handle.</p>
          </div>
        </div>      
        <div class="product col-4 col-esm-5 center">
          <div class="img col-10" id="img_comfort2"></div>
          <div class="name col-10">Easy to keep close to you</div>
          <div class="description col-10">
              <p class="col-8 offset-1 v-offset-5">Strap is.. Lots of study for improve the way to keep close to you the umbrella: you can simply stick it to your bagpack.</p>
          </div>
        </div>
        <div class="product col-3 col-esm-5 center">
          <div class="img col-10" id="img_comfort3"></div>          
          <div class="name col-10">Bluetooth and Touch ID</div>
          <div class="description col-10">
              <p class="col-8 offset-1 v-offset-5">Are you in late? Is still it raining? Don't worry, you can call your office manager without touch your phone.</p>
          </div>
        </div>
      </div>
	</div>
    
    <div class="light-theme">
      <div class="content container center" id="elegance">
        <div class="col-10 v-offset-5">
          <div class="col-4 col-sm-5" id="elegance_img"></div>
          <div class="col-6 col-sm-5">
            <div class="pre-title col-6 offset-2">
              Beauty is in the eye of the beholder, and in...
            </div>
            <div class="title col-10">
              SUmbrella
            </div>
            <div class="paragraph col-10">
              <p>Seductive Umbrella doesn't follow the fashion, it's the fashion! No one can resist to this style.
              	Do you have problems with girls/boys?? We even resolve this problem for You. You are an important person
                in your work and when it rains you were forced to show an ugly umbrella??? When you will have your own 
                SUmbrella other people will just recognize your style and position.</p><br />
              <p>From 75 $</p>
            </div> 
            <a <?php tabIndex(); ?> href="sumbrella.php" class="button col-2">I want it now</a>
          </div> 
        </div>      
        <div class="product col-3 col-esm-5 center">
          <div class="img col-10" id="img_elegance1"></div>
          <div class="name col-10">Choose your handle</div>
          <div class="description col-10">
              <p class="col-8 offset-1 v-offset-5">Two different types of premium wood.</p>
          </div>
        </div>      
        <div class="product col-4 col-esm-5 center">
          <div class="img col-10" id="img_elegance2"></div>          
          <div class="name col-10">Leather is THE way</div>
          <div class="description col-10">
              <p class="col-8 offset-1 v-offset-5">Our scientists discovered lots of new types of leather: choose it, but be Brainy!</p>
          </div>
        </div>
        <div class="product col-3 col-esm-5 center">
          <div class="img col-10" id="img_elegance3"></div>
          <div class="name col-10">Make your friends amazed</div>
          <div class="description col-10">
              <p class="col-8 offset-1 v-offset-5">Rihanna is also amazed about it! You'll literally impress your friends with SUmbrella.</p>
          </div>
        </div>
      </div>
	</div>
    
    <div class="dark-theme indigo">      
      <div class="content container center" id="personalize">
        <div class="title col-10 light v-offset-5"> Personalize Your Umbrella </div> <!-- end title-->
        <div class="col-10">
          <i class="col-10 fas fa-paint-brush v-offset-5"></i>
          <div class="paragraph col-8 offset-1">
            	If you don't like our stock product, or you just want to modify them a bit, we let us personalize
                your custom features for your BRainy.Add favolus Technological skill to your umbrella.
          </div>
          <a <?php tabIndex(); ?> href="personalize.php" class="button">Become your Artist</a>
        </div>
      </div>
    </div>
    <?php getFooter("Stock");?>
    <script src="js/smoothScroll.js"></script> 
</body>
</html>
