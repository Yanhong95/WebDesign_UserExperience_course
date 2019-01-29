<?php 
session_start();
include ('header.html');

if(isset($_GET['hid'])) 
{
$alpha=$_GET['hid']; 
require_once ('mysql_connect.php'); 

 $query3 = "DELETE FROM shoppingcard WHERE car_id=$alpha";

 $result = @mysql_query ($query3); // Run the query.
}
?>
<!DOCTYPE html>
<html lang="en">
   <script>
  $(document).ready(function(){

    $('.carInfo').on('click','button',function(){     
        //$('.pull-right').click(function(){
        //gain the value from next sibling of 'pull-right'
        var task = $(this).parent().siblings("th").text();
        console.log(task);
        $(this).parent().parent().remove();
        //add the content to the second 'list-group'
    })

})
  function foo(){
        var frm = window.event.srcElement;
        frm.hid.value = $(frm.hid).attr("index");
        return true;
    }
</script>

<style type="text/css">
.shoppingCart{
  border: 0px;
 /* min-height: 425px;*/
  min-height: 712px;
  background: linear-gradient(to right, rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url(images/shoppingCartBackground.jpg)repeat-y;
  background-size:100% 100%;
}
.rightComponent{
  float: right;
  margin-right: 70px;
  width:300px;

}
.leftComponent{
  float: left;
  margin-left: 70px;
  width: 900px;
}
.infoList{
  padding-right: 350px;
}
.checkout{
  margin-bottom: 20px;
  margin-top: 20px;
}
.information{
  padding-left: 20px;
}
.informationTable{
  width: 250px;

}
.img-responsive{
  height:130px; 
  width:200px;
}
tbody tr td{
   vertical-align: middle !important;
}
th{
  vertical-align: middle !important;
}
</style>
<body>  
   <content>
    <div class="shoppingCart jumbotron-fluid card text-center">
      <div class="card-header display-4 text-light">
        Shopping Cart
      </div>
      <div class="card-body">
        <h3 class="infoList card-title text-light">Car Information</h3>
        <div class="leftComponent">
        <table class="table table-striped table-secondary">
          <thead>
            <tr>
              <th scope="col" style="width: 15%">Index</th>
              <th scope="col" style="width: 30%">Car image</th>
              <th scope="col" style="width: 30%">Car name</th>
              <th scope="col" style="width: 15%">Car price</th>
              <th scope="col" style="width: 10%">Delete</th>
            </tr>
          </thead>
          <tbody class="carInfo">
            <?php
            global $totalprice;
            require_once ('mysql_connect.php'); 

            $query = "SELECT car_id, car_image, car_name, car_price,user_name
            FROM shoppingcard ";

            $result = @mysql_query ($query); // Run the query.


          while ($row = mysql_fetch_array($result)) {
              if($_SESSION['username']==$row['user_name']){
              echo '
              <tr>
                <form name = "frm" method = "get" action = "shoppingCart.php" onsubmit = "return foo()" style = "position:relative;">
                  <input type="hidden"  name="hid"  index = "' .$row['car_id']. '"> 
                    <th scope="row">' .$row['car_id']. '</th>
                      <td><img src="' .$row['car_image']. '" class="img-responsive rounded mx-auto d-block" alt="..."></td>
                      <td>' .$row['car_name']. '</td>
                      <td>$  ' .$row['car_price']. ' </td>
                      <td><input type = "submit" href="#" class="btn btn-secondary" value="Delete"></td>
                  </form>
              </tr>';
            $totalprice=$totalprice+$row['car_price'];
            }
          }
            ?>
          </tbody>
        </table>
       </div>
        <div class="rightComponent">
        <div class="card text-white bg-dark mb-3" style="border:0px; max-width: 40rem; ">
          <div class="card-header">Info summary</div>
          <div class="card-body ">
            <table class="informationTable">
        <?php
            $query2 = "SELECT user_id, email, password, city,state,zip
            FROM users ";

            $result2 = @mysql_query ($query2); // Run the query.
             while ($row = mysql_fetch_array($result2)) {
              if($_SESSION['username']==$row['email']){
              echo '<tr>
              <th scope="row">EMAIL:</th>
              <td class="information" >' .$row['email']. '</td>
            </tr>
            <tr>
              <th scope="row">CITY:</th>
              <td class="information" >' .$row['city']. '</td>
            </tr>
            <tr>
              <th scope="row">STATE:</th>
              <td class="information" >' .$row['state']. '</td>
            </tr>
            <tr>
              <th scope="row">ZIP:</th>
              <td class="information" >' .$row['zip']. '</td>
            </tr>
            <tr>
              <th scope="row">Total:</th>
              <td class="information" >$  '.$totalprice.'</td>
            </tr>';
            }
          }
        ?>
      </table>
          </div>
      <div class="card-footer">
           <a href="http://localhost:8888/checkout.php" >checkout</a>
          </div>
        </div>
      </div>
    </script>

      </div>
      <div class="card-footer text-light">
        Welcome again !!!
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
