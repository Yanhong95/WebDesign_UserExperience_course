<?php
session_start();
include ('header.html');

require_once ('mysql_connect.php'); 

?>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
.historyCard{
  height:200px; 
  width:604px;
  margin-top: 25px;
}
.historyList{
  padding-left: 100px;
  padding-right: 100px;
  padding-top: 50px;
  padding-bottom: 50px;
  margin-bottom: 0px!important; 
}
.CarImage{
  height:200px; 
  width:304px;
}
.card-body{
  padding-left: 20px;
}
.history{
  min-height: 422px;
  background: linear-gradient(to right, rgba(0,0,0,0.3), rgba(0,0,0,0.3)),url(images/shoppingListBackgroud.png)repeat-y;
  background-size:100% 100%;
}
.carInfo{
  padding-left: 50px;
}
.money{
  margin-top: 10px;
}
.carName{
  margin-top: 30px;
}
</style>
<body>
<content>
<div class="history">
  	<div class="historyList row mb-2">
	<?php
	$query = "SELECT car_name, car_price, car_image, user_name
	FROM carbought
	";

	$result = @mysql_query ($query); // Run the query.

	while ($row = mysql_fetch_array($result)) {
		if($_SESSION['username']==$row['user_name']){
  			echo '
        		<div class="historyCard col-md-6">
          			<div class="card flex-md-row mb-4 box-shadow h-md-250">
            			<div class="carInfo card-body d-flex flex-column align-items-start">
              				<strong class="d-inline-block mb-2 text-primary"></strong>
              					<h3 class="carName mb-0">
                					<a class="text-dark" href="#">' .$row['car_name']. '</a>
              					</h3>
              						<p class="money card-text mb-auto">$' .$row['car_price']. '</p>
            			</div>
            			<img class="CarImage card-img-right flex-auto d-none d-md-block rounded" src="' .$row['car_image']. '" alt="Card image cap">
          			</div>
        		</div>
      		';
      	}
	}
  
    ?>
	</div>
 </div>
</content>

  <footer> 
    <ul class="share-group col-12 col-sm-12 col-md-12">
      <li><a href="https://www.facebook.com/" class="fab fa-facebook fa-2x"></a></li>
      <li><a href="https://www.twitter.com/" class="fab fa-twitter fa-2x"></a></li>
      <li><a href="https://www.instagram.com/" class="fab fa-instagram fa-2x"></a></li>
      <li><a href="https://www.wechat.com/" class="fab fa-weixin fa-2x"></a></li>
    </ul>
     <div class="copy">
     Copyright &copy; 2018<br>
     <a href="mailto:@husky.neu.edu">@husky.neu.edu</a>
   </div>
  </footer> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
