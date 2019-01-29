<?php  
session_start();
            require_once ('mysql_connect.php'); 
             $query = "SELECT car_id, car_image, car_name, car_price, user_name
              FROM shoppingcard ";

            $result = @mysql_query ($query);
         
            while ($row = mysql_fetch_array($result)) {
              if($_SESSION['username']==$row['user_name']){
                $car_name=$row['car_name'];
                $car_price=$row['car_price'];
                $car_image=$row['car_image'];
                $user_name=$row['user_name'];
                $query1 = "INSERT INTO carbought( car_name,car_price,car_image,user_name) VALUES('$car_name','$car_price','$car_image','$user_name')"; 
                $result1 = @mysql_query ($query1); // Run the query.
              }
            }
$name=$_SESSION['username'];
$query2 = "DELETE FROM shoppingcard WHERE user_name='$name'"; 
$result2 = @mysql_query ($query2);           

header('Location: http://localhost:8888/shoppingList.php');

 ?>