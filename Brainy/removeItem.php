<?php 
include_once('server.php');
if ($_GET['item'] != null) {
	$id = $_GET['item'];
	$product_query = "DELETE FROM Purchases WHERE id_purchase='$id'";
	mysqli_query($db, $product_query);
}
header("location: cart.php");
?>