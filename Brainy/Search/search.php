<?php 
	//add item to database and redirect to cart
	//POST method variables
	//adding...

include_once('server.php');

$keywords = array(
	"About Us" => "about_us.php",
	"Home" => "index.php",
	"Our Technology" => "our_technology.php",
	"Contact Us" => "contact_us.php",
	"Login" => "login.php",
	"Register" => "register.php",
	"Cart" => "cart.php",
	"Bluetooth" => "our_technology.php#bluetooth",
	"Solar Panels" => "our_technology.php#solar_panel",
	"GPS" => "our_technology.php#gps",
	"Fingerprint" => "our_technology.php#fingerprints",
	"PH" => "our_technology.php#ph",
	"Personalize" => "personalize.php",
	"Leather" => "personalize.php",
	"Handle" => "personalize.php",
	"Colors" => "personalize.php",
	"Stock" => "stock.php",
	"TUmbrella" => "stock.php#tech",
	"HUmbrella" => "stock.php#comfort",
	"SUmbrella" => "stock.php#elegance",
	"Gallery" => "gallery.php",
	"The Team" => "about_us#team",
	"Partners" => "partners.php",
	"Privacy Policy" => "privacy_policy.php",
	"Address" => "contact_us.php",
	"E-Mail" => "contact_us.php",
	"Phone" => "contact_us.php",
	"Map" => "contact_us.php#map",
	"Write To Us" => "contact_us.php#contactTitle",
	"Statistics" => "statistics.php",
	"Numbers" => "statistics.php#numbers",
	"Social" => "index.php#footerSeparator"
);
$themes=array("dark-theme","light-theme","indigo","wenge");
$i=0;
foreach($keywords as $x => $xv){
	echo "<p "; tabIndex(); echo " class=\"col-8 offset-1 $themes[$i]\"><a href=\"$xv\">$x</a></p>";
	$i=$i+1;
	if($i==4){
		$i=0;
	}
}

?>