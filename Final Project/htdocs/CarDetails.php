<?php
session_start();

if(isset($_GET['hid'])) 
{
$alpha=$_GET['hid']; 
}
include ('header.html');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Car</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/lion/css/ionicons.css" rel="stylesheet">
    <link href="lib/blockbox.css" rel="stylesheet">
    <style>
    .main-wrapper
    {
        background: #444 url(images/detailPage.jpg);
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        background-position:  center;
    }
    .carinfo{
      padding-top: 30px;
      padding-right: 30px;
    }
    .cardetail{
      max-height: 513px;
    }
    .carText{
      padding-right: 20px;
  	  text-overflow: -o-ellipsis-lastline;
  	  overflow: hidden;
  	  text-overflow: ellipsis;
  	  display: -webkit-box;
  	  -webkit-line-clamp: 6;
  	  -webkit-box-orient: vertical;
    }
    .detailContant{
      margin-bottom: 18px;
    }
    .carImageDIV{
      min-height: 743;
      min-width: 514;
    }
    .carImage{
      height: 100%;
      width:100%;
    }
 /*   .carTags{
    	margin-top: 20px;
    }*/
    .tags{
    	margin-bottom: 40px;
    }
   </style>
</head>
<body>
  <div class="main-wrapper" >

      <div class="bb-mainpanel text-left">

          <div class="pd-y-60">
            <?php
            require_once ('mysql_connect.php'); 
            $query = "SELECT  car_id, car_name, car_price, car_picture, car_discription, car_highlight, car_tag
            FROM cargalary
            ";

            $result = @mysql_query ($query); 

            while ($row = mysql_fetch_array($result)) {
              if($alpha==$row['car_id']){
                $date = "04/30/1973";  
                list($h1, $h2, $h3) = split ('[,]', $row['car_highlight']); 
                list($t1, $t2, $t3) = split ('[,]', $row['car_tag']); 
             echo '<div class="container">
                    <h3 class="tx-size-24 tx-size-xs-32 tx-size-sm-40 tx-inverse tx-bold">' .$row['car_name']. '</h3>
                   </div>
          </div>

          <div class="detailContant container pd-b-80">
              <div class=" row no-gutters ">
                  <div class="carImageDIV col-lg-8">
                      <img src="' .$row['car_picture']. '" class="carImage img-fluid" alt="">
                  </div><!-- col-8 -->
                  <div class="cardetail col-lg-4 mg-t-40 mg-lg-t-0 bg-white">
                      <div class="carinfo pd-lg-l-30 tx-size-xs">
                          <h4 class="tx-inverse mg-b-5 tx-size-neg-2">' .$row['car_name']. '</h4>
                          <h6 class="tx-inverse tx-size-14 tx-uppercase tx-bold mg-t-30 mg-b-20">Product Overview</h6>
                          <p class="carText lh-8">' .$row['car_discription']. '</p>

                          <h6 class="tx-inverse tx-size-14 tx-uppercase tx-bold mg-b-10 mg-t-30">Highlights</h6>
                          <ul class="list-unstyled lh-9">
                              <li><i class="fa fa-check tx-success mg-r-5"></i>' .$h1. '</li>
                              <li><i class="fa fa-check tx-success mg-r-5"></i>' .$h2.'</li>
                              <li><i class="fa fa-check tx-success mg-r-5"></i>' .$h3.'</li>
                          </ul>

                          <h6 class="carTags tx-inverse tx-size-14 tx-uppercase tx-bold mg-b-20 mg-t-40">Tags</h6>
                          <p class="tags tx-size-12">
                              <span class="bg-gray-lighter pd-10">' .$t1. '</span>
                              <span class="bg-gray-lighter pd-10 mg-l-5">' .$t2. '</span>
                              <span class="bg-gray-lighter pd-10 mg-l-5">' .$t3. '</span>
                          </p>';
              }
            }
            ?>
                  
                      </div>
                  </div>
              </div>
          </div>
             
 <?php
  if(isset($_SESSION['username'])){
  echo '
          <div class="container-wrapper bg-gray-lighter pd-y-20 pd-sm-y-30 pd-lg-y-40">
              <div class="container">
                  <div class="d-lg-flex justify-content-between align-items-center">
                      <div class="mg-b-20 mg-lg-b-0">
                      </div>
                      <form name = "frm" method = "get" action = "Addintocart.php" onsubmit = "return foo()" style = "position:relative;">

                       <input type="hidden"  name="hid"  index = "'.$alpha.'""> 
                         <input type = "submit" href="#" class="btn btn-inverse tx-uppercase tx-size-11 " value="BUY"></a>
                         
                      </form>
                  </div><!-- d-flex -->
              </div><!-- container -->
          </div><!-- container-wrapper -->
      </div>';
     }
  ?>

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
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>
    function foo(){
        var frm = window.event.srcElement;
        frm.hid.value = $(frm.hid).attr("index");
        return true;
    }
</script>
</body>
</html>
