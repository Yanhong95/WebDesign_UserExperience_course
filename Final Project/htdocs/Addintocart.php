<?php  
session_start();

if(isset($_GET['hid'])) 
{
$alpha=$_GET['hid']; 
require_once ('mysql_connect.php'); 

$query = "SELECT  car_id, car_name, car_price, car_picture, car_discription, car_highlight, car_tag
FROM cargalary
";

$result = @mysql_query ($query); // Run the query.
 	while ($row = mysql_fetch_array($result)) {
		if($alpha==$row['car_id']){
			$car_id=$row['car_id'];
			$car_image=$row['car_picture'];
			$car_name=$row['car_name'];
			$car_price=$row['car_price'];
			$username=$_SESSION['username'];
		$query2 = "INSERT INTO shoppingcard (car_id, car_image, car_name, car_price, user_name) VALUES ( '$car_id' , '$car_image' , '$car_name', '$car_price','$username')";

		$result = @mysql_query ($query2); // Run the query.
		}
	}
  header('Location: http://localhost:8888/shoppingCart.php');
}


?>