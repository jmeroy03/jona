<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
	
	require 'DBConnect/pdo.php';
	require 'classes/customers.php';


	?>

<!DOCTYPE html>
<html>
<header><title>gfdsg</title></header>
<body>
<h1>Main Page</h1>

<!-- 	/*$costumer = new customers();//open connection
	$result= $costumer->list_customer("","");
	foreach ($result as $row) {
		echo $row['first_name'];
	}
*/

 -->


 <?php
 	$customer = new Customers;
 	$list = $customer->list_customer();


foreach ($list as $row) {
	//var_dump($list);
	echo $row['first_name'].' '.$row['last_name'] . '<br>';
}







?>

</body>



</html>