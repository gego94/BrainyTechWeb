<!DOCTYPE html>
<html lang="en">
	<head>
	    <?php include_once 'functions.php'; ?>
	    <?php getHead("Home");?>
        
    	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </head>
  <body>
  	<?php 	getMenu("Home");
    		getBreadcumbs("Home");
    ?> 
	<div id="intro">
      <!-- Flying Letters  -->
      <ul class="fly-in-text hidden">
          <li>B</li>
          <li>r</li>
          <li>a</li>
          <li>i</li>
          <li>n</li>
          <li>y</li>
      </ul>
      
      <a href="#about_us" class="go_btn hidden">Learn more</a>
    </div> <!-- end intro-->

    <div class="container hidden" id="about_us">
      <div class="text">
        <div class="pre-title">
          <h4>Don't you know that...</h4>
        </div> <!-- end pre-title-->
        <div class="title">
          <h3>We love the rain?</h3>
        </div> <!-- end title-->
        <div class="paragraph" id="paragraph_about_us">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ornare eros sit amet massa gravida, quis consectetur massa finibus. Quisque sodales ligula et lorem consequat elementum. Maecenas velit risus, aliquet sit amet nisl vitae, sollicitudin sollicitudin nisl. Praesent hendrerit ligula eget ex interdum porta. Curabitur et ante gravida, consectetur ante vitae, vulputate augue. Sed varius sed neque quis ultricies. Nullam vel nunc sit amet velit laoreet tincidunt vel facilisis turpis. Curabitur in mauris vel nibh euismod fermentum a sed enim. Donec lobortis volutpat fringilla.</p>
        </div> <!-- end paragraph-->
        <a href="#our_technology" class="go_btn hidden sections">More about us</a>
      </div> <!-- end text-->
    </div> <!-- end about_us-->

    <div class="container hidden" id="our_technology">

      <!-- <div id="img_technology"></div> -->

      <div class="text">

        <div class="pre-title">
          <h4>Discover what lies behind...</h4>
        </div> <!-- end pre-title-->
        <div class="title">
          <h3>Our Technology</h3>
        </div> <!-- end title-->
        <div class="paragraph">
          <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean sit amet euismod mauris. Mauris at orci non dolor lobortis pellentesque ut eu felis. Nunc luctus tempus laoreet. Donec et faucibus augue. Duis dapibus ligula non dignissim aliquet. Proin sit amet quam elit.</p>
        </div> <!-- end paragraph-->

        <div class="list" id="technology_list">

          <a href="#our_technology#bluetooth">
            <div class="item">
              <div class="image" id="bluetooth"></div>
              <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
            </div>
          </a>
          <a href="#our_technology#solar_panel">
            <div class="item">
              <div class="image" id="solar_panel"></div>
              <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
            </div>
          </a>
          <a href="#our_technology#gps">
            <div class="item">
              <div class="image" id="gps"></div>
              <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
            </div>
          </a>
        </div> <!-- end technology_list-->

        <a href="#shop" class="go_btn hidden sections">Discover</a>
      </div> <!-- end text-->
    </div> <!-- end our_technology-->

    <div class="container hidden" id="shop">
      <div class="text">
        <div class="pre-title">
          <h4>we proudly present...</h4>
        </div> <!-- end pre-title-->
        <div class="title">
          <h3>Our Products</h3>
        </div> <!-- end title-->
        <div class="paragraph">
          <p>Aenean pretium viverra risus, in auctor dui gravida vel. Ut dapibus placerat risus, a venenatis lectus tempus vitae. Phasellus eget nisi at erat sagittis venenatis. Aliquam sed tincidunt magna. Orci varius natoque penatibus et magnis.</p>
        </div> <!-- end paragraph-->

        <div class="list" id="product_list">
          <a href="#product_list">
            <div class="item">
              <div class="image" id="bluetooth"></div>
              <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
              <div class="price_tag">
                <h3>From <strong>40€</strong></h3>
              </div>
            </div>
          </a>
          <a href="#product_list">
            <div class="item">
              <div class="image" id="solar_panel"></div>
              <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
              <div class="price_tag">
                <h3>From <strong>50€</strong></h3>
              </div>
            </div>
          </a>
          <a href="#product_list">
            <div class="item">
              <div class="image" id="gps"></div>
              <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
              <div class="price_tag">
                <h3>From <strong>60€</strong></h3>
              </div>
            </div>
          </a>
          <a href="#product_list">
            <div class="item">
              <div class="image" id="green_energy"></div>
              <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
              <div class="price_tag">
                <h3>From <strong>75€</strong></h3>
              </div>
            </div>
          </a>
          <a href="#product_list">
            <div class="item">
              <div class="image" id="blueprints"></div>
              <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
              <div class="price_tag">
                <h3>From <strong>90€</strong></h3>
              </div>
            </div>
          </a>
        </div> <!-- end product_list-->

        <a href="#stats" class="go_btn hidden sections">Shopping time</a>
      </div> <!-- end text-->

    </div> <!-- end shop-->

    <div class="container" id="stats">
      <div class="text">
        <div class="pre-title">
          <h4>Let us show you...</h4>
        </div> <!-- end pre-title-->
        <div class="title">
          <h3>A Few Stats</h3>
        </div> <!-- end title-->
        <div class="image" id="stats_img"></div>
        <div class="paragraph">
          <p>Aenean pretium viverra risus, in auctor dui gravida vel. Ut dapibus placerat risus, a venenatis lectus tempus vitae. Phasellus eget nisi at erat sagittis venenatis. Aliquam sed tincidunt magna. Orci varius natoque penatibus et magnis.</p>
        </div> <!-- end paragraph-->

        <a href="#contact_us" class="go_btn hidden sections">Show me data</a>
      </div> <!-- end text-->
    </div> <!-- end stats-->
    
    <div class="container" id="contact_us">
      <div class="text">
        <div class="title">
          <h3>Questions are vital</h3>
        </div> <!-- end title-->
        <div class="paragraph">
          <p>Aenean pretium viverra risus, in auctor dui gravida vel. Ut dapibus placerat risus, a venenatis lectus tempus vitae. Phasellus eget nisi at erat sagittis venenatis. Aliquam sed tincidunt magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras massa nisi, porta non fringilla sed, tincidunt in nibh. Proin et ante in mauris malesuada tincidunt eu sed lacus. Nunc et sagittis nibh. Vivamus pretium viverra nisi sit amet ultrices. Nulla tempus sollicitudin sapien et feugiat. Proin commodo purus eu ante maximus, vestibulum gravida nibh commodo. Cras ipsum neque, vestibulum et fermentum nec, mollis ac turpis. Proin ut felis vel eros fermentum vulputate. Sed et nunc a sem sagittis mattis in non metus. Etiam fermentum nisi nibh, nec pharetra dolor finibus quis. Integer dignissim, nunc sed accumsan condimentum, massa mauris dignissim libero, vitae ornare arcu dolor ut purus.</p>
        </div> <!-- end paragraph-->
        <a href="#intro" class="go_btn hidden sections">Contact us</a>
      </div> <!-- end text-->
    </div> <!-- end contact_us-->
    
    
    <script type="text/javascript">
        
        $(function() {
            
            setTimeout(function() {
                $('.fly-in-text').removeClass('hidden');
            }, 250);
            setTimeout(function() {
                $('.go_btn').removeClass('hidden');
            }, 250);
            setTimeout(function() {
                $('.container').removeClass('hidden');
            }, 250);
        })
    </script> <!--end flying scripts-->
    <!-- deve essere in fondo per poter vedere tutti gli elementi -->
    <script type="text/javascript" src="scripts/smoothScroll.js"></script> 
	<?php getFooter();?> 
  </body>
</html>
