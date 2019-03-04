<?php
$p = $_GET['p']; //product
$c = intval($_GET['c']); //category
$l = $_GET['l']; //last_product
$con = mysqli_connect('localhost', 'brainytecweb', 'rJda7TZudq5m', 'my_brainytecweb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
$total=0;
$sql="SELECT * FROM ComponentsPrices WHERE Type = '".$p."' OR Type = '".$l."'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
	if($row['Type']==$p){
    	$total += intval($row['Price']);
    }else{
    	$total -= intval($row['Price']);
    }
}
echo $total;
mysqli_close($con);
?>