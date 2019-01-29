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
	.lis{
		margin-top:50px;
		width:100%
	}
	  .lis li{
		width:33%;
		list-style-type:none;
		display:inline-block;
		padding-bottom:30px;
		over-flow:hidden;
	  }
	  .lis li a img{
	  width:80%;
		height:150px;
	  }
	  .lis li a h1{
			color:#4f5762;
			font-size:19px;
			text-align:center;
			width: 73%;
			padding-top:20px;
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
<body id="top" >
<div class="main-wrapper">
 <div class="warp restelement">
        <div class="content">
			<div class="main_cont createCarclub">
				<div class="prefInfo">
					<div class="detail">
						<ul class="lis">
							<li>
							<a href="http://www.autoho.com/">                                
								<img src="images/restelement_pic_meitu_8.jpg">
								<h1>
									restelement
								</h1>
							</a>
						</li>
						<li>
							<a href="http://www.autoho.com/">                                
								<img src="images/good_sparkplug_meitu_7.jpg">
								<h1>
									sparkplug
								</h1>
							</a>
						</li>
							<li>
								<a href="http://www.autoho.com/">                                
									<img src="images/good_shockabsorber_meitu_6.jpg">
									<h1>
										shockabsorber
									</h1>
								</a>
							</li>
							<li>
								<a href="http://www.autoho.com/">                                
									<img src="images/good_discbrakepads_meitu_4.jpg">
									<h1>
										discbrakepads
									</h1>
								</a>
							</li>
							<li>
								<a href="http://www.autoho.com/">                                
									<img src="images/good_brakedisc_meitu_2.jpg">
									<h1>
										brakedisc
									</h1>
								</a>
							</li>
							<li>
								<a href="http://www.autoho.com/">                                
									<img src="images/good_timingbelt_meitu_9.jpg">
									<h1>
										timingbelt
									</h1>
								</a>
							</li>

							<li>
								<a href="http://www.autoho.com/">                                
									<img src="images/good_lamp_meitu_5.jpg">
									<h1>
										lamp
									</h1>
								</a>
							</li>
							<li>
								<a href="http://www.autoho.com/">                                
									<img src="images/good_battery_meitu_1.jpg">
									<h1>
										battery
									</h1>
								</a>
							</li>

							<li>
								<a href="http://www.autoho.com/">                                
									<img src="images/good_brakefluid_meitu_3.jpg">
									<h1>
										brakefluid
									</h1>
								</a>
							</li>

						</ul>
				</div>
	<div id="back-top"> 
		<a title="Top of Page" href="#top"><span></span></a> 
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
