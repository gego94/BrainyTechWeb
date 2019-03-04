<?php 
	//add item to database and redirect to cart
	//POST method variables
	//adding...

include_once('server.php');

	$handle = $_POST['options_handle'];
	$colour = $_POST['options_colour'];
	$leather = $_POST['options_leather'];
	$bt = $_POST['options_bt'];
	$ph = $_POST['options_ph'];
	$gps = $_POST['options_gps'];
	$solar = $_POST['options_solar'];
	$touch_id = $_POST['options_id'];
	$price = $_POST['price'];
	$name= $_POST['name'];
	$user_id=$_SESSION['id_user'];
	echo $handle ." ".$colour ." ".$leather ." ".$bt ." ".$ph ." ".$gps ." ".$solar ." ".$touch_id ." ".$price ." ".$name." ".$user_id;
	$order_check_query = "SELECT * FROM Orders WHERE id_user='$user_id' AND completed='0' LIMIT 1";
	$res_order_check = mysqli_query($db, $order_check_query);
	$order = mysqli_fetch_assoc($res_order_check);
	$product_query = "INSERT INTO Products(name ,price, handle, colour, leather, bluetooth, gps, solar_panel, touch_id, ph_reader) VALUES ('$name','$price', '$handle','$colour','$leather','$bt','$gps','$solar','$touch_id','$ph')";
	$insertitem = mysqli_query($db, $product_query);
	$last_id = mysqli_insert_id($db);
	if ($order){
		$id_order=$order['id_order'];
		$purchase_query="INSERT INTO Purchases(id_order,id_product,amount) VALUES ('$id_order','$last_id','1')";
		$insertpurchase2 = mysqli_query($db, $purchase_query);
		echo "IP".$insertpurchase2;
	}else{
		$order_query="INSERT INTO Orders(id_user,completed) VALUES ('$user_id','0')";
		$insertorder = mysqli_query($db, $order_query);
		$id_order = mysqli_insert_id($db);
		$purchase_query="INSERT INTO Purchases(id_order,id_product,amount) VALUES ('$id_order','$last_id','1')";
		$insertpurchase1 = mysqli_query($db, $purchase_query);
		echo "O".$insertorder." P".$insertpurchase1;
	}

header("location: cart.php");
?>