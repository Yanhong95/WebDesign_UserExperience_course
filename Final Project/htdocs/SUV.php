<?php 
session_start();
include ('header.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SUV</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/model.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <section class="SUVContent jumbotron jumbotron-fluid text-center" style="height:713px;
  background: linear-gradient(to right, rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url(images/model-SUV-background.jpg);
  background-size:100% 100%;">
       <div class="container text-white">
        <h1 class="display-3">SUV</h1>
          <p class="lead ">Sport-utility (vehicle), SUV or sport-ute is an automotive classification, typically a kind of station wagon / estate car with off-road vehicle features like raised ground clearance and ruggedness, and available four-wheel drive. Many SUVs are built on a light-truck chassis but operated as a family vehicle, and though designed to be used on rougher surfaces, most often used on city streets or highways.</p>
          <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/A42CiYCpxNg" allowfullscreen></iframe>
          </div>
      </div>
    </section>
        <section>
    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active text-secondary" id="Economys-tab" data-toggle="tab" href="#Economy" role="tab" aria-controls="Economy" aria-selected="true"><h2 class="display-4">Economy</h2></a>
      </li>
      <li class="nav-item text-secondary">
        <a class="nav-link" id="Comfort-tab" data-toggle="tab" href="#Comfort" role="tab" aria-controls="Comfort" aria-selected="false"><h2 class="display-4">Comfort</h2></a>
      </li>
      <li class="nav-item text-secondary">
        <a class="nav-link" id="Luxury-tab" data-toggle="tab" href="#Luxury" role="tab" aria-controls="Luxury" aria-selected="false"><h2 class="display-4">Luxury</h2></a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="Economy" role="tabpanel" aria-labelledby="Economy-tab">
        
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="images/collection/Honda-CR-V.jpg" alt="Honda-CR-V.jpg">
            <div class="card-header">
              <div class="model">
              <form name = "frm" method = "get" action = "CarDetails.php" onsubmit = "return foo()" style = "position:relative;">
              <input type="hidden"  name="hid"  index = "1"> 
              <h5 class="card-title text-left">Honda CR-V</h5>
              <h6 class="text-muted">Compact sport utility vehicle</h6>
             </div>
             <div class="seeMore">
              <input type = "submit" href="#" class="btn btn-secondary" value="DETAILS"></a>
             </div>
            </div>
            <div class="card-body">
              <p class="card-text text-left">MPG:<small> Up to 28 city / 34 highway</small><br>
                Dimensions:: <small>181″ L x 73″ W x 66-67″ H</small><br>
                Cargo volume: <small> 37.6 to 39.2 ft³, 75.8 ft³ with seat area</small><br>
                Engine: <small> 37.6 to 39.2 ft³, 75.8 ft³ with seat area</small></p>
            </div>
            <div class="card-footer">
              <p class="card-text text-right">MSRP :       <small class="text-muted">From $24,250</small></p>
            </form>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/collection/Toyota-RAV4-Hybrid.jpg" alt="Toyota-RAV4-Hybrid.jpg">
            <div class="card-header">
              <div class="model">
              <form name = "frm" method = "get" action = "CarDetails.php" onsubmit = "return foo()" style = "position:relative;">
              <input type="hidden"  name="hid"  index = "2"> 
              <h5 class="card-title text-left">Toyota RAV4 Hybrid</h5>
              <h6 class="text-muted">Hybrid utility vehicle</h6>
             </div>
             <div class="seeMore">
             <input type = "submit" href="#" class="btn btn-secondary" value="DETAILS"></a>
             </div>
            </div>
            <div class="card-body">
              <p class="card-text text-left">MPG:<small> 34 city / 30 highway</small><br>
                Towing capacity: <small>1,750 lbs</small><br>
                Horsepower: <small>194 hp</small><br>
                Fuel tank capacity: <small>14.8 gal</small></p>
            </div>
            <div class="card-footer">
              <p class="card-text text-right">MSRP :       <small class="text-muted">From $27,385</small></p>
            </div>
            </form>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/collection/Lexus-NX.jpg" alt="Lexus-NX.jpg">
            <div class="card-header">
              <div class="model">
              <form name = "frm" method = "get" action = "CarDetails.php" onsubmit = "return foo()" style = "position:relative;">
              <input type="hidden"  name="hid"  index = "3"> 
              <h5 class="card-title text-left">Lexus NX</h5>
              <h6 class="text-muted">Compact sport utility vehicle</h6>
             </div>
             <div class="seeMore">
              <input type = "submit" href="#" class="btn btn-secondary" value="DETAILS"></a>
             </div>
            </div>
            <div class="card-body">
              <p class="card-text text-left">Dimensions: <small>182″ L x 74″ W x 65″ </small><br>
                MPG:<small> Up to 33 city / 30 highway</small><br>
                Cargo volume: <small>16.8 to 17.7 ft³, 53.7 to 54.6 ft³ with seat area</small><br>
                Horsepower: <small>194 to 235 hp</small></p>
            </div>
            <div class="card-footer">
              <p class="card-text text-right">MSRP :       <small class="text-muted">From $35,985</small></p>
            </div>
            </form>
          </div>               
      </div>
    </div>
    <div class="tab-pane fade" id="Comfort" role="tabpanel" aria-labelledby="Comfort-tab">
        <div class="card-deck">
           <div class="card">
            <img class="card-img-top" src="images/collection/AudiQ5.jpg" alt="AudiQ5.jpg">
            <div class="card-header">
              <div class="model">
              <form name = "frm" method = "get" action = "CarDetails.php" onsubmit = "return foo()" style = "position:relative;">
              <input type="hidden"  name="hid"  index = "4"> 
              <h5 class="card-title text-left">Audi Q5</h5>
              <h6 class="text-muted">Compact sport utility vehicle</h6>
             </div>
             <div class="seeMore">
              <input type = "submit" href="#" class="btn btn-secondary" value="DETAILS"></a>
             </div>
            </div>
            <div class="card-body">
              <p class="card-text text-left">MPG:<small> 23 city / 27 highway</small><br>
                Dimensions: <small> 184″ L x 75″ W x 65″ H</small><br>
                Cargo volume: <small>26.8 ft³, 60.4 ft³ with seat area</small><br>
                Horsepower: <small> 252 hp</small></p>
            </div>
            <div class="card-footer">
              <p class="card-text text-right">MSRP :       <small class="text-muted">From $42,950</small></p>
            </div>
            </form>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/collection/bmw-x3.jpg" alt="bmw-x3.jpg">
            <div class="card-header">
              <div class="model">
              <form name = "frm" method = "get" action = "CarDetails.php" onsubmit = "return foo()" style = "position:relative;">
              <input type="hidden"  name="hid"  index = "5"> 
              <h5 class="card-title text-left">BMW X3</h5>
              <h6 class="text-muted">Compact sport utility vehicle</h6>
             </div>
             <div class="seeMore">
              <input type = "submit" href="#" class="btn btn-secondary" value="DETAILS"></a>
             </div>
            </div>
            <div class="card-body">
              <p class="card-text text-left"><p class="card-text">Dimensions: <small>186″ L x 74-75″ W x 66″ H </small><br>
                MPG:<small> Up to 23 city / 30 highway</small><br>
                Cargo volume: <small>28.7 ft³, 62.7 ft³ with seat area</small><br>
                Horsepower: <small>248 to 355 hp</small></p>
            </div>
            <div class="card-footer">
              <p class="card-text text-right">MSRP :       <small class="text-muted">From $41,000</small></p>
            </div>
            </form>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/collection/Porsche-Macan.jpg" alt="Porsche-Macan.jpg">
            <div class="card-header">
              <div class="model">
              <form name = "frm" method = "get" action = "CarDetails.php" onsubmit = "return foo()" style = "position:relative;">
              <input type="hidden"  name="hid"  index = "6"> 
              <h5 class="card-title text-left">Porsche Macan</h5>
              <h6 class="text-muted">Compact sport utility vehicle</h6>
             </div>
             <div class="seeMore">
              <input type = "submit" href="#" class="btn btn-secondary" value="DETAILS"></a>
             </div>
            </div>
            <div class="card-body">
              <p class="card-text text-left">MPG:<small> Up to 20 city / 25 highway</small><br>
                Dimensions: <small>184-185″ L x 76″ W x 63-64″ H</small><br>
                Horsepower: <small>252 to 440 hp</small><br>
                Engine: <small> 2.0 L 4-cylinder, 3.0 L V6, 3.6 L V6</small></p>
            </div>
            <div class="card-footer">
              <p class="card-text text-right">MSRP :       <small class="text-muted">From $47,800</small></p>
            </div>
            </form>
          </div>               
      </div>
    </div>
    <div class="tab-pane fade" id="Luxury" role="tabpanel" aria-labelledby="Luxury-tab">
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="images/collection/LandRover-Range-Rover.jpg" alt="LandRover-Range-Rover.jpg">
            <div class="card-header">
              <div class="model">
              <form name = "frm" method = "get" action = "CarDetails.php" onsubmit = "return foo()" style = "position:relative;">
              <input type="hidden"  name="hid"  index = "7"> 
              <h5 class="card-title text-left">Land Rover Range Rover</h5>
              <h6 class="text-muted">Compact sport utility vehicle</h6>
             </div>
             <div class="seeMore">
              <input type = "submit" href="#" class="btn btn-secondary" value="DETAILS"></a>
             </div>
            </div>
            <div class="card-body">
              <p class="card-text text-left">MPG:<small> Up to 22 city / 28 highway</small><br>
                Dimensions: <small>197-205″ L x 78″ W x 72-74″ H</small><br>
                Curb weight: <small>4,958 to 5,745 lbs</small><br>
                Warranty: <small> 4 yr/50,000 mi basic, 4 yr/50,000 mi powertrain</small></p>
            </div>
            <div class="card-footer">
              <p class="card-text text-right">MSRP :       <small class="text-muted">From $88,860</small></p>
            </div>
            </form>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/collection/Maserati-Levante.jpg" alt="Maserati-Levante.jpg">
            <div class="card-header">
              <div class="model">
              <form name = "frm" method = "get" action = "CarDetails.php" onsubmit = "return foo()" style = "position:relative;">
              <input type="hidden"  name="hid"  index = "8"> 
              <h5 class="card-title text-left">Maserati Levante</h5>
              <h6 class="text-muted">Luxury vehicle</h6>
             </div>
             <div class="seeMore">
              <input type = "submit" href="#" class="btn btn-secondary" value="DETAILS"></a>
             </div>
            </div>
            <div class="card-body">
              <p class="card-text text-left">Horsepower:<small> 345 to 590 hp</small><br>
                Dimensions: <small>197″ L x 78″ W x 66″ H</small><br>
                Gross vehicle weight rating: <small> 6,116 lbs</small><br>
                Engine: <small> 3.0 L V6, 3.8 L V8</small></p>
            </div>
            <div class="card-footer">
              <p class="card-text text-right">MSRP :       <small class="text-muted">From $75,980</small></p>
            </div>
            </form>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/collection/Model-X.jpg" alt="Model-X.jpg">
            <div class="card-header">
              <div class="model">
              <form name = "frm" method = "get" action = "CarDetails.php" onsubmit = "return foo()" style = "position:relative;">
              <input type="hidden"  name="hid"  index = "9"> 
              <h5 class="card-title text-left">Tesla Model X</h5>
              <h6 class="text-muted">Electric vehicle</h6>
             </div>
             <div class="seeMore">
              <input type = "submit" href="#" class="btn btn-secondary" value="DETAILS"></a>
             </div>
            </div>
            <div class="card-body">
              <p class="card-text text-left">Range: <small>237 to 289 mi battery-only</small><br>
                Curb weight:<small> 5,185 to 5,531 lbs</small><br>
                Horsepower:<small> 518 hp</small><br>
                Towing capacity:<small> 4,980 lbs</small></p>
            </div>
            <div class="card-footer">
              <p class="card-text text-right">MSRP :       <small class="text-muted">From $83,000</small></p>
            </div>
            </form>
          </div>               
      </div>
    </div>
    </div>
    </section> 
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
<script>
    function foo(){
        var frm = window.event.srcElement;
        frm.hid.value = $(frm.hid).attr("index");
        return true;
    }
</script>