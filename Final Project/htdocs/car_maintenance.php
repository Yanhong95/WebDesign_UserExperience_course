<?php 
session_start();
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
  <style type="text/css">
    .linklists a{
    color:#ffffff;
    }
    #back-top {
      position: fixed;
      bottom: 15px;
      right: 25px;
  }
  #back-top a {
      width: 64px;
      display: block;
      text-align: center;
      font: 11px/100% Arial, Helvetica, sans-serif;
      text-transform: uppercase;
      text-decoration: none;
      color: #bbb;
      -webkit-transition: 1s;
      -moz-transition: 1s;
      transition: 1s;
  }
  #back-top span {
      width: 64px;
      height: 62px;
      display: block;
      margin-bottom: 7px;
      background: url(images/up-arrow.png) no-repeat center center;
      -webkit-transition: 1s;
      -moz-transition: 1s;
      transition: 1s;
      opacity: 0.5;
  }
    </style>
</head>

<body style="background:#cacaca">
  <div class="main-wrapper" style="background-image:url(images/Carparts.jpg)">
    <div class="img-section ">
          <img src="images/carMaintenance.png">
        </div>
        <div class="text-section text-light">
          <h2 > Enjoy Tips and Knowledege of your Car  </h2><br><br><br><br>
          <p> Provides you with all-dimensions care, correct driving habits and attentions in different situations from the moment you meet your car up with profession and protection .</p>
              <br>
      <p class="linklists"><a href="http://www.autoho.com/" target="_blank">&bull;Regular Scheduled Maintenance</a></p><br />
      <p class="linklists"><a href="http://www.autoho.com/" target="_blank">&bull;Driving in Winter Tips</a></p><br />
      <p class="linklists"><a href="http://www.autoho.com/" target="_blank">&bull;Driving in Fog/Storm Tips</a></p><br />
      <p class="linklists"><a href="http://www.autoho.com/" target="_blank">&bull;Road With Ice</a></p><br />
      <p class="linklists"><a href="http://www.autoho.com/" target="_blank">&bull;Summer Tips</a></p><br />
          
        </div>
    <div id="back-top"> 
      <a title="Top of Page" href="service.php"><span></span></a> 
    </div>
  
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
	</body>
</html>
