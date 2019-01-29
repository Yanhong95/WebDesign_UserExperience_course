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

<style>
a:link {text-decoration:none;}    /* unvisited link */
a:visited {text-decoration:none;} /* visited link */
a:hover {text-decoration:underline;}   /* mouse over link */
a:active {text-decoration:underline;}  /* selected link */
.nextpages{
	width:500px;
	margin:0 auto
}
.nextpage{
	float:left;
	padding-right:50px
}
.clear{
	clear:both;
	}
.nextpage a{color:#393e46}
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
.lefts{
	float:left;
	width:50%;
	height:200px;
		background:white;
}
.rights{
	float:left;
	width:50%;
	height:200px;
	clear:right;
}
.showphoto{
}
.conts{
	text-align:center
}
.header{
	margin-top:50px;
	font-size:30px;
	color:black;
	font-weight:bold
}
img{
	height:200px
}
</style>


</head>
<body id="top">
  
		
		<section class="showphoto">
				<div class="lefts">
					<div class="conts">
						<div class="header">Seasonal Maintenance</div>
						<div>take care of your car as well as your friend to make things easier, make life easier...</div>
						<div><a href="car_maintenance.php">>>viewMore</a></div>
					</div>
				
				</div>
				<div class="rights">
					<img class="d-block w-100" src="images/service_pic01_meitu_1_meitu_1.jpg" alt="First slide">
				</div>
				<div style="clear:both"></div>
				<div style="width:100%;height:30px"></div>
				<div class="lefts">
					<div class="conts">
						<div class="header">Original Parts</div>
						<div>Different Parts from original factories, offers you with better options... </div>
						<div><a href="service_originparts.php">>>viewMore</a></div>
					</div>
				</div>
				<div class="rights">
					<img class="d-block w-100" src="images/service_pic02_meitu_2_meitu_1.jpg" alt="First slide">
				</div>
				<div style="clear:both"></div>
				<div style="width:100%;height:30px"></div>
				<div class="lefts">
					<div class="conts">
						<div class="header">Car Aid</div>
						<div>Gives you convinent aid at anytime anyplace...</div>
						<div><a href="car_aid.php">>>viewMore</a></div>
					</div>
				</div>

				<div class="rights">
					<img class="d-block w-100" src="images/service_pic05_meitu_4_meitu_4.jpg" alt="First slide">
				</div>
				<div style="clear:both"></div>
				<div style="width:100%;height:30px"></div>
				<div class="lefts">
					<div class="conts">
						<div class="header">Car Classes</div>
						<div>Knowing more about your loved one, also make your travelling safer.....</div>
					
					</div>
				</div>
				<div class="rights">
					<img class="d-block w-100" src="images/service_pic04_meitu_3_meitu_3.jpg" alt="First slide">
				</div>
				<div style="clear:both"></div>
				<div style="width:100%;height:30px"></div>
				<div class="lefts">
					<div class="conts">
						<div class="header">Sales Info</div>
						<div>Detailed and transparent Informations avaliable anytime with your request...</div>
					
					</div>
				</div>
				<div class="rights">
					<img class="d-block w-100" src="images/service_pic06_meitu_5_meitu_5.jpg" alt="First slide">
				</div>
				<br><br><br>
			</section>
	
	<section style="width:100%">
	<div class="nextpages">
	</div>	
		
		
		
		
	
		
		<a href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
		
		</section>
  </div>
	
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
</div>
<div id="back-top"> 
	<a title="Top of Page" href="#top"><span></span></a> 
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
