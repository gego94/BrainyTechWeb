<?php
include_once 'server.php';

$tabindex=22;
function tabIndex() {
	global $tabindex;
	echo "tabindex=\"$tabindex\" ";
    $tabindex=$tabindex+1;
}

function makeItRainHead() {
	echo "
    <link rel=\"stylesheet\" href=\"Rain/style.css\">
    <script  src=\"Rain/index.js\"></script>
    ";
}

function makeItRainBody() {
	echo "
    <canvas id=\"canvas\"></canvas>
    ";
}
function getHead2Pars($title,$css) {
	echo "
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
	<meta name=\"title\" content=\"Brainy\" />
	<meta name=\"description\" content=\"Smart Umbrellas\" />
	<meta name=\"keywords\" content=\"Umbrellas, Technology, PH, Bluetooth, TouchID, GPS, Solar Panels\" />
	<meta name=\"language\" content=\"English\" />
	<meta name=\"author\" content=\"Dalla Bà Marco, Donè Francesco, Ghiotto Davide, Mazzalovo Diego\" />
	<meta name=\"viewport\" content=\"width=device-width, initial-scale = 1.0\" /> 
	<title>$title</title>
  <link rel=\"shortcut icon\" href=\"img/favicon.ico\">
	<link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
	<link rel=\"stylesheet\" type=\"text/css\" href=\"menu.css\">
	<script src=\"js/loadCSS.js\"></script>
	<link rel=\"stylesheet\" type=\"text/css\" href=\"BrainyEngine/BrainyEngine.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"$css/style.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"print.css\" media=\"print\">
	<!-- <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"> -->
	<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/solid.css\" integrity=\"sha384-rdyFrfAIC05c5ph7BKz3l5NG5yEottvO/DQ0dCrwD8gzeQDjYBHNr1ucUpQuljos\" crossorigin=\"anonymous\">
	<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/regular.css\" integrity=\"sha384-z3ccjLyn+akM2DtvRQCXJwvT5bGZsspS4uptQKNXNg778nyzvdMqiGcqHVGiAUyY\" crossorigin=\"anonymous\">
	<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/brands.css\" integrity=\"sha384-QT2Z8ljl3UupqMtQNmPyhSPO/d5qbrzWmFxJqmY7tqoTuT2YrQLEqzvVOP2cT5XW\" crossorigin=\"anonymous\">
	<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/fontawesome.css\" integrity=\"sha384-u5J7JghGz0qUrmEsWzBQkfvc8nK3fUT7DCaQzNQ+q4oEXhGSx+P2OqjWsfIRB8QT\" crossorigin=\"anonymous\">
	<script src=\"BrainyEngine/BrainyEngine.js\"></script>
	<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
	";
    makeItRainHead();
}

function getHead($title) {
	echo "
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
	<meta name=\"title\" content=\"Brainy\" />
	<meta name=\"description\" content=\"Smart Umbrellas\" />
	<meta name=\"keywords\" content=\"Umbrellas, Technology, PH, Bluetooth, TouchID, GPS, Solar Panels\" />
	<meta name=\"language\" content=\"English\" />
	<meta name=\"author\" content=\"Dalla Bà Marco, Donè Francesco, Ghiotto Davide, Mazzalovo Diego\" />
	<meta name=\"viewport\" content=\"width=device-width, initial-scale = 1.0\" /> 
	<title>$title</title>
  <link rel=\"shortcut icon\" href=\"img/favicon.ico\">
	<link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
	<link rel=\"stylesheet\" type=\"text/css\" href=\"menu.css\">
	<script src=\"js/loadCSS.js\"></script>
	<link rel=\"stylesheet\" type=\"text/css\" href=\"BrainyEngine/BrainyEngine.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"$title/style.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"print.css\" media=\"print\">
	<!-- <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"> -->
	<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/solid.css\" integrity=\"sha384-rdyFrfAIC05c5ph7BKz3l5NG5yEottvO/DQ0dCrwD8gzeQDjYBHNr1ucUpQuljos\" crossorigin=\"anonymous\">
	<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/regular.css\" integrity=\"sha384-z3ccjLyn+akM2DtvRQCXJwvT5bGZsspS4uptQKNXNg778nyzvdMqiGcqHVGiAUyY\" crossorigin=\"anonymous\">
	<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/brands.css\" integrity=\"sha384-QT2Z8ljl3UupqMtQNmPyhSPO/d5qbrzWmFxJqmY7tqoTuT2YrQLEqzvVOP2cT5XW\" crossorigin=\"anonymous\">
	<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/fontawesome.css\" integrity=\"sha384-u5J7JghGz0qUrmEsWzBQkfvc8nK3fUT7DCaQzNQ+q4oEXhGSx+P2OqjWsfIRB8QT\" crossorigin=\"anonymous\">
	<script src=\"BrainyEngine/BrainyEngine.js\"></script>
	<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
	";
    makeItRainHead();
}

function getMenu($current) {
    makeItRainBody();
	echo"
	
    <div id=\"pageTop\"></div>
	<div id=\"fullColored\"></div>
	<nav id=\"myTopNav\" class=\"content dark-theme topnav col-sm-5\">
    		<button id=\"hamburgerMenu\">
				<span></span>
    			<span></span>
    			<span></span>
			</button>
			<div class=\"col-10 col-sm-5 menuDiv\" >
			
                <a href=\"";if($current==="Cart"){echo "#";}else{echo "cart.php";}echo "\" title=\"Cart\" 
                	id=\"basketImg\" tabindex=\"7\" class=\"fas fa-shopping-cart floatRight ";
                    	if($current==="Cart"){echo "active ";}echo "\" accesskey=\"q\"></a>
                ";
                if(!isset($_SESSION['loggedin'])){
    	            echo " 
                          <a href=\"";if($current==="Register"){echo "#";}else{echo "register.php";}echo "\" title=\"Register\" 
                          		tabindex=\"3\" class=\"";if($current==="Register"){echo "active ";}echo "floatRight col-sm-5\" accesskey=\"i\">Register</a>
                          <a href=\"";if($current==="Login"){echo "#";}else{echo "login.php";}echo "\" title=\"Login\" 
                          tabindex=\"2\" class=\"";if($current==="Login"){echo "active ";}echo "floatRight col-sm-5\" accesskey=\"l\">Login</a>
						  
                          ";
                }
                else{
                	echo "
                      <a href=\"";if($current==="Orders"){echo "#";}else{echo "orders.php";}echo "\" title=\"Orders\" 
                      tabindex=\"6\" class=\"floatRight ";if($current==="Orders"){echo "active ";}echo " col-sm-5\" accesskey=\"o\">Orders</a>
					  
                    	<a href=\"";if($current==="Personal Area"){echo "#";}else{echo "personal_area.php";}echo "\" title=\"Personal Area\" 
                        tabindex=\"5\" class=\"floatRight ";if($current==="Personal Area"){echo "active ";}echo " col-sm-5\" accesskey=\"n\">Personal Area</a>
                        <a href=\"";if($current==="Logout"){echo "#";}else{echo "logout.php";}echo "\" title=\"Logout\" class=\"floatRight col-sm-5\" 
                        tabindex=\"4\" title=\"Logout\">Logout</a>
                    	<a id=\"welcome\" title=\"Welcome\" class=\"floatRight col-sm-5\"><i class=\"fas fa-user\"></i> ".$_SESSION['username']."</a>
                    ";
                }
            echo "
			
					  <a href=\"";if($current==="Search"){echo "#";}else{echo "search.php";}echo "\" title=\"Search\" 
                		id=\"searchImg\" tabindex=\"1\" class=\"fas fa-search floatRight ";
                    	if($current==="Search"){echo "active ";}echo "\" accesskey=\"z\"></a>
			</div>
			<div id=\"sep\" class=\"col-10 col-sm-5\"></div>
			<div class=\"col-10 menuDiv col-sm-5\">
			<a id=\"homeLink\" title=\"Home\" href=\"";if($current==="Home"){echo "#";}else{echo "index.php";}echo "\" 
            	tabindex=\"8\" class=\"floatLeft col-sm-5 ";if($current==="Home"){echo "active ";}echo "\" >Home</a>
			<a href=\"";if($current==="Our Technology"){echo "#";}else{echo "our_technology.php";}echo "\" title=\"Our Technology\" 
            	tabindex=\"9\" class=\"floatLeft col-sm-5 ";if($current==="Our Technology"){echo "active ";}echo "\" >Our Technology</a>
				<div class=\"dropdown col-sm-5\">
					<a tabindex=\"10\" title=\"Shop\" class=\"drFocus floatLeft col-sm-5 ";if($current==="Shop"){echo "active ";}echo "\" >Shop ⌄</a>
					<div class=\"dropdownContent col-sm-5\">
						<a href=\"";if($current==="Personalize"){echo "#";}else{echo "personalize.php";}echo "\" title=\"Personalize\" 
                        	tabindex=\"11\" class=\"col-sm-5 ";if($current==="Personalize"){echo "active ";}echo "\">Personalize</a>
						<a href=\"";if($current==="Stock"){echo "#";}else{echo "stock.php";}echo "\" title=\"Stock\" 
                        	tabindex=\"12\" class=\"col-sm-5 ";if($current==="Stock"){echo "active ";}echo "\">Stock</a>
						<a href=\"";if($current==="Gallery"){echo "#";}else{echo "gallery.php";}echo "\" title=\"Gallery\" 
                        	tabindex=\"13\" class=\"col-sm-5 ";if($current==="Gallery"){echo "active ";}echo "\">Gallery</a>
					</div>
				</div>
				<a id=\"logoImg\" href=\"";if($current==="Home"){echo "#";}else{echo "index.php";}echo "\" title=\"Logo\" 
                	tabindex=\"14\" class=\"col-sm-5 ";if($current==="Home"){echo "active ";}echo "\"></a>
				<img id=\"drop\" src=\"img/drop.png\" title=\"DropImage\" class=\"col-sm-5\" alt=\"Drop\" />
                <a href=\"";if($current==="Statistics"){echo "#";}else{echo "statistics.php";}echo "\" 
                	tabindex=\"20\" class=\"floatRight col-sm-5 ";if($current==="Statistics"){echo "active ";}echo "\" >Statistics</a>
				<a href=\"";if($current==="Contact Us"){echo "#";}else{echo "contact_us.php";}echo "\" title=\"Contact Us\" 
                	tabindex=\"21\" class=\"floatRight col-sm-5 ";if($current==="Contact Us"){echo "active ";}echo "\" >Contact Us</a>
				<div class=\"dropdown floatRight col-sm-5\">
				<a tabindex=\"15\" title=\"About Us\" class=\"drFocus floatRight col-sm-5\">About Us ⌄</a>
					<div class=\"dropdownContent col-sm-5\">
						<a href=\"";if($current==="About Us"){echo "#";}else{echo "about_us.php";}echo "\" 
                        	title=\"Our Legacy\" tabindex=\"16\" class=\"col-sm-5 ";if($current==="About Us"){echo "active ";}echo "\">Our Legacy</a>
						<a href=\"";if($current==="Partners"){echo "#";}else{echo "partners.php";}echo "\" 	
                        	title=\"Partners\" tabindex=\"17\" class=\"col-sm-5 ";if($current==="Partners"){echo "active ";}echo "\">Partners</a>
                        <a href=\"";if($current==="Privacy Policy"){echo "#";}else{echo "privacypolicy.php";}echo "\" 
                        	title=\"Privacy Policy\" tabindex=\"18\" class=\"col-sm-5 ";if($current==="Privacy Policy"){echo "active ";}echo "\">Privacy Policy</a>
					</div>
				</div>
			</div>
		</nav>
	";
}
function getBreadcumbs($name)
{
  echo "
  		<div class=\"content\">
			<p id=\"breadcumb\" class=\"col-10 col-sm-5 col-esm-5 dark-theme\">You are in :".$name."</p>
        </div>
  ";
}

function getFooter($current) {
	echo "
		<a href=\"#pageTop\" class=\"button\" id=\"topButton\" title=\"Go to top\">Top</a>
        <div class=\"dark-theme\" id=\"pre-footer\">
          <footer class=\"content\">
              <div id=\"footerSeparator\" class=\"col-10\"></div>
              <div class=\"col-10\">
                  <div class=\"col-6 col-sm-5 floatMiddle\">
                      <a "; tabIndex(); echo " title=\"Home\" href=\"";if($current==="Home"){echo "#";}else{echo "index.php";}echo "\" 
                      	 ";if($current==="Home"){echo "class=\"active\" ";}echo " accesskey=\"h\">HOME</a>
                      <a "; tabIndex(); echo " title=\"Our Technology\" href=\"";if($current==="Our Technology"){echo "#";}else{echo "our_technology.php";}echo "\" 
                      	 ";if($current==="Our Technology"){echo "class=\"active\" ";}echo " accesskey=\"u\">OUR TECHNOLOGY</a>
                      <div class=\"footerDropdown\">
                          <a "; tabIndex(); echo " title=\"Shop\">SHOP</a>
                          <a "; tabIndex(); echo " title=\"Personalize\" href=\"";if($current==="Personalize"){echo "#";}else{echo "personalize.php";}echo "\" 
                          	class=\"footerDropdownContent ";if($current==="Personalize"){echo "active ";}echo "\" accesskey=\"p\">Personalize</a>
                          <a "; tabIndex(); echo " title=\"Stock\" href=\"";if($current==="Stock"){echo "#";}else{echo "stock.php";}echo "\" 
                          	class=\"footerDropdownContent ";if($current==="Stock"){echo "active ";}echo "\" accesskey=\"s\">Stock</a>
                          <a "; tabIndex(); echo " title=\"Gallery\" href=\"";if($current==="Gallery"){echo "#";}else{echo "gallery.php";}echo "\" 
                          	class=\"footerDropdownContent ";if($current==="Gallery"){echo "active ";}echo "\" accesskey=\"g\">Gallery</a>
                      </div>
                      <div class=\"footerDropdown\">
                          <a "; tabIndex(); echo " title=\"About Us\">ABOUT US</a>
                          <a "; tabIndex(); echo " title=\"Our Legacy\" href=\"";if($current==="About Us"){echo "#";}else{echo "about_us.php";}echo "\" 
                          	class=\"footerDropdownContent  ";if($current==="About Us"){echo "active ";}echo "\" accesskey=\"a\">Our Legacy</a>
                          <a "; tabIndex(); echo " title=\"Partners\" href=\"";if($current==="Partners"){echo "#";}else{echo "partners.php";}echo "\" 
                          	class=\"footerDropdownContent ";if($current==="Partners"){echo "active ";}echo "\" accesskey=\"r\">Partners</a>
                           <a "; tabIndex(); echo " title=\"Privacy Policy\" href=\"";if($current==="Privacy Policy"){echo "#";}else{echo "privacypolicy.php";}echo "\" 
                          	class=\"footerDropdownContent ";if($current==="Privacy Policy"){echo "active ";}echo "\" accesskey=\"y\">Privacy Policy</a>
                      </div>
                      <a "; tabIndex(); echo " title=\"Contact Us\" href=\"";if($current==="Contact Us"){echo "#";}else{echo "contact_us.php";}echo "\" 
                      	 ";if($current==="Contact Us"){echo "class=\"active\" ";}echo " accesskey=\"c\">CONTACT US</a>
                      <a "; tabIndex(); echo " title=\"Statistics\" href=\"";if($current==="Statistics"){echo "#";}else{echo "statistics.php";}echo "\" 
                      	 ";if($current==="Statistics"){echo "class=\"active\" ";}echo " accesskey=\"t\">STATISTICS</a>
                  </div>
                  <div class=\"col-4 col-sm-5\">
                      <p>Find Us on:</p>
                      <div id=\"footerSocial\" class=\"center col-10\">
                          <a "; tabIndex(); echo " title=\"Facebook\" href=\"http://www.facebook.com\" class=\"fab fa-facebook\"></a>
                          <a "; tabIndex(); echo " title=\"YouTube\" href=\"http://www.youtube.com\" class=\"fab fa-youtube\"></a>
                          <a "; tabIndex(); echo " title=\"LinkedIn\" href=\"http://www.linkedin.com\" class=\"fab fa-linkedin\"></a>
                          <a "; tabIndex(); echo " title=\"Twitter\" href=\"http://www.twitter.com\" class=\"fab fa-twitter\"></a>
                          <a "; tabIndex(); echo " title=\"Google\" href=\"http://www.google.com\" class=\"fab fa-google\"></a>
                      </div>
                  </div>
              </div>
              <div class=\"col-10\">
                  <p><br/>&#xa9;1845-2018 BRainy Corporation </p><p>All Rights Reserved.</p>
              </div>
          </footer>
        </div>
		<script src=\"js/FadeMenu.js\"></script>
		<script src=\"js/smoothScroll.js\"></script>
	";
}

function getTotalUsers(){
	$db = mysqli_connect('localhost', 'brainytecweb', 'rJda7TZudq5m', 'my_brainytecweb');
    $query_users="SELECT * FROM Users";    
    $res = mysqli_query($db,$query_users);
    $totalUsers = mysqli_num_rows($res);
    echo $totalUsers;
}
function getTotalUmbrellas(){
	$db = mysqli_connect('localhost', 'brainytecweb', 'rJda7TZudq5m', 'my_brainytecweb');    
    $query_users="SELECT * FROM Purchases";    
    $res = mysqli_query($db,$query_users);
    $totalOrders = mysqli_num_rows($res);
	echo $totalOrders;
}

function getWeekShips(){
	$db = mysqli_connect('localhost', 'brainytecweb', 'rJda7TZudq5m', 'my_brainytecweb');    
    $query_users="SELECT * FROM Orders WHERE dataora BETWEEN '2018-12-20 00:00:00' AND '2018-12-27 00:00:00'"; 
    $res = mysqli_query($db,$query_users);
    $weekShips = mysqli_num_rows($res);
	echo $weekShips;
}

function getPeopleByNationality(){
    $db = mysqli_connect('localhost', 'brainytecweb', 'rJda7TZudq5m', 'my_brainytecweb');    
    $query="SELECT `nationality`,`country`, Count(*) as total FROM `Users` Group By `nationality`"; 
    $results = mysqli_query($db,$query);
    $limit = mysqli_num_rows($results);
    $data = array();
    $i = 0;
    while ($i < $limit) {
    	// output data of each row
    	$row = mysqli_fetch_assoc($results);
        $single_row = array(); //brand new array
        //info
        $nationality = $row["nationality"];
        $country = $row["country"];
        $total = $row["total"];
        //first push
        array_push($single_row,$nationality,$country,$total);
        //second push
        array_push($data,$single_row);
        $i++;
    }
	return $data;
}

function getCartList() {
	/*for each element retrieved from database*/
	/*example with user-defined variables, simulate 3 items*/
    if(isset($_SESSION['loggedin'])){
	   $total = 0;
  
  	$user_id=$_SESSION['id_user'];
    $db = mysqli_connect('localhost', 'brainytecweb', 'rJda7TZudq5m', 'my_brainytecweb');
    
    $query_p = "SELECT * FROM Orders o, Purchases p, Products pr WHERE o.id_order=p.id_order AND p.id_product=pr.id_product AND o.completed=0 AND o.id_user='$user_id';";
    $res = mysqli_query($db, $query_p);	
    $cont = mysqli_num_rows($res);
    while ($cont > 0) {
    // output data of each row
    	$row = mysqli_fetch_assoc($res);		
        $product_id =  $row["id_product"];
        $product_name = $row["name"];
        $product_handle = $row["handle"];
        $product_colour = $row["colour"];
        $product_leather = $row["leather"];
        $product_bluetooth = $row["bluetooth"];
        $product_ph = $row["ph_reader"];
        $product_gps = $row["gps"];
        $product_solar = $row["solar_panel"];
        $product_price = $row["price"];
        $purchase=$row["id_purchase"];
		echo "
		<div class=\"";if ($cont % 2 == 0){echo "dark-theme wenge";}else{echo "dark-theme indigo";} echo"\">
          <div class=\"content container col-10 col-sm-5 product_resume\">
              <div class=\"col-5 col-sm-3\">".$product_name."</div>
              <div class=\"col-4 col-sm-1\">".$product_price." $</div>
              <div class=\"col-1 col-sm-1 right\"><a href=\"#\" class=\"arrow fas fa-angle-down\"></a></div>
              <div class=\"col-5 col-sm-5\">Handle colour: ".$product_handle."</div>
              <div class=\"col-5 col-sm-5\">Leather colour: ".$product_colour."</div>
              <div class=\"col-5 col-sm-5\">Leather type: ".$product_leather."</div>
              <div class=\"col-5 col-sm-5\">Bluetooth: ".$product_bluetooth."</div>
              <div class=\"col-5 col-sm-5\">PH analyzer: ".$product_ph."</div>
              <div class=\"col-5 col-sm-5\">GPS: ".$product_gps."</div>
              <div class=\"col-5 col-sm-5\">Solar panels: ".$product_solar."</div>
              <div class=\"col-10 col-sm-5 right\"><a href=\"removeItem.php?item=".$purchase."\">Remove</a></div>
          </div>
        </div>
		";
		$total += $product_price;
		$cont--;
    }
	echo"
    <div class=\"dark-theme wenge\">
      <div class=\"content container\">
        <div class=\"col-10 col-sm-5 sm-center\" id=\"total_price\"><strong>Total: ".$total." $</strong></div>
        <div class=\"col-10 col-sm-5 sm-center\" id=\"checkout\">
            <form action=\"thankyou.php\" method=\"POST\">
                <input type=\"radio\" name=\"id_user\" style=\"display:none!important;\" checked=\"checked\" value=\"$user_id\">
                <input type=\"submit\" id=\"checkout_btn\" class=\"button fade-in\" value=\"Proceed to checkout\" />
            </form>
        </div>
      </div>
    </div>
	";
    }else{
    echo "<div class=\" dark-theme center \">
      <p>Nothing here :(<br /><a href=\"register.php\">Register</a> or <a href=\"login.php\">Login</a></p>

    </div>";
  }
}

function getOrdersList() {
	/*for each element retrieved from database*/
	/*example with user-defined variables, simulate 3 items*/
  if(isset($_SESSION['loggedin'])){
	  $total = 0;
  	$user_id=$_SESSION['id_user'];
    $db = mysqli_connect('localhost', 'brainytecweb', 'rJda7TZudq5m', 'my_brainytecweb');
    $query_p = "SELECT * FROM Orders o, Purchases p, Products pr WHERE o.id_order=p.id_order AND p.id_product=pr.id_product AND o.completed=1 AND o.id_user='$user_id';";
    $res = mysqli_query($db, $query_p);	
    $cont = mysqli_num_rows($res);
    $temp = $cont;
    $order=-1;
    $already_print = false;
    $products_in_order =0;
    $change_theme=true;
    while ($cont > 0) {
    // output data of each row
    	$row = mysqli_fetch_assoc($res);		
      $product_id =  $row["id_product"];
      $product_name = $row["name"];
      $product_price = $row["price"];
      $purchase=$row["id_purchase"];
      $last_checked = $order;
      $order=$row["id_order"];
      if($order==$last_checked){$already_print=true;}
      else{$already_print=false;$products_in_order = 0;
        if($change_theme==true){$change_theme=false;}
        else{$change_theme=true;}
      }
      if($already_print==false){
    		echo "
    		<div class=\"";if ($change_theme==true){echo "dark-theme wenge";}else{echo "dark-theme indigo";} echo"\">
              <div class=\"content container col-10 col-sm-5 product_resume\">
                  <div class=\"col-5 col-sm-3\">Order #".$order."</div>
                  <div class=\"col-4 col-sm-1\">";
                  //printing total
                  $cont2=$temp;
                  $total=0;
                  $res2 = mysqli_query($db, $query_p);	
                  while ($cont2 > 0) {
                  // output data of each row
                      $row2 = mysqli_fetch_assoc($res2);
                      $order2=$row2["id_order"];
                      if($order2==$order){
                        $product_price2 = $row2["price"];
                        $total += $product_price2;
                        $products_in_order++; 
    				          }
                      $cont2--;
                  }
                  echo $total." $</div>
                  <div class=\"col-1 col-sm-1 right\"><a href=\"#\" class=\"arrow fas fa-angle-down\"></a></div>";
      }
      echo "
                  <div class=\"col-5 col-sm-5\">".$product_name."</div>
                  <div class=\"col-5 col-sm-5\">".$product_price." $</div>";
      $products_in_order--;
      if($products_in_order==0){
        echo"

              </div>
            </div>
    		";
    }
  	$cont--;
    }
  }else{
    echo "<div class=\" dark-theme center \">
      <p>Nothing here :(<br /><a href=\"register.php\">Register</a> or <a href=\"login.php\">Login</a></p>

    </div>";
  }
}

function orderPaid() {
  include_once('server.php');
  $user = $_POST['id_user'];
  $db = mysqli_connect('localhost', 'brainytecweb', 'rJda7TZudq5m', 'my_brainytecweb');
  $query_p = "UPDATE Orders SET completed=1 WHERE id_user='$user';";
  $res = mysqli_query($db, $query_p);
}


function randomTheme(){
    $a=array("light-theme","dark-theme","dark-theme indigo","dark-theme wenge");
    echo $a[rand(0,3)];
}


?>









