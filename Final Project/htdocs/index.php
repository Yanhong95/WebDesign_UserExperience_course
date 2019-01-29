<?php 
session_start();
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

</head>
<body>
  <div class="main-wrapper">
	<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="index.php">HOME</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               MODEL
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="SUV.php">SUV</a>
              <a class="dropdown-item" href="Sedan.php">SEDAN</a>
              <a class="dropdown-item" href="Sportscar.php">SPORTSCAR</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="brand.php">BRAND</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="news.php">NEWS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="events.php">EVENT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service.php">SERVICE</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">

          <?php
          if($_SESSION['username']!=null){
          echo ' 
          <li class="nav-item">
            <a class="nav-link" href="shoppingCart.php"><i class="fas fa-shopping-cart"></i></a >
          </li>
           <li class="nav-item">
            <a class="nav-link" href="logout.php"}">logout</a>
          </li>
          '; 
          }else{
            echo ' 
           <li class="nav-item">
            <a class="nav-link" href="login.php">login</a>
           </li>
            <li class="nav-item">
            <a class="nav-link" href="register.php">register</a>
          </li>
          '; 
          }
          echo ' 
          <li class="nav-item">
            <a class="nav-link" href="shoppingList.php">' . $_SESSION['username'] . '</a>
          </li>
          '; 
          ?>
        </ul>
      </div>
    </nav>


		<div id="banner">
            <div class="inner">
                <h1>SPPED</h1>
                <p>One person's car is another person's scenery.</p> 
                <button onclick="javascript:window.location.'login.php';">Beginning </button>   
                <div class="more">
                
                </div>
            </div>  
        </div>
	</header>

	<div class="content">
		<section class="green-section">
          <div class="wrapper">
          	<div>
          		<h2>Safer, stronger, more stylish, more comfortable.</h2>
          		<div class="hr"></div>
          		<p class="sub-heading"> Let every family own a better car.</p>
          	</div>
          </div>		
		</section>

		<section class="gray-section">
      <div class="article-preview">
        
        <div class="img-section">
          <img src="images/image1.jpg"alt="">
        </div>
        <div class="text-section">
          <h2> What we are up to  </h2><br><br><br><br>
          <p> Provides you with the latest auto quotes, auto pictures, auto prices, and the most exciting auto news, 
              races, evaluation, and shopping guide content.</p>
              <br>
          <p calss="sub-text"> We are the most convenient and most comprehensive auto website. We know you better. </p>
        </div>

      </div>      
    </section>
    <section class="carousel">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/image2.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/image3.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/image4.jpg" alt="Third slide">
          </div>
           <div class="carousel-item">
            <img class="d-block w-100" src="images/image5.jpg" alt="Third slide">
          </div>
           <div class="carousel-item">
            <img class="d-block w-100" src="images/image6.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </section>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<?php 
  include ('footer.html');
?>
</body>
</html>







