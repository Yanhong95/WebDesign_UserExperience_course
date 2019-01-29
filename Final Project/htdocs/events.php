<?php 
session_start();
include ('header.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Events</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/model.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  
  <div class="container-fluid" style="padding: 0px;height: 719px!important;">
  <div id="myCarousel" class="carousel slide bg-inverse w-100 px-100" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/race1.jpg" alt="First slide" style="height: 719px;">
          <div class="carousel-caption">
            <h3 style="color: white;font-style: italic;">-Successful closure of F1 Abu Dhabi race-</h3>
            <p style="color: white;font-style: italic;">The last race ended in Abu Dhabi, United Arab Emirates, and Mercedes' British driver Hamilton won the championship.</p>
            <a href="learn1.php"><button type="button" class="btn btn-danger btn-lg btn-block"  style="color: white;font-style: italic;" >Learn more</button></a>
          </div>
      </div>
      <div class="carousel-item">
        <img class="d-block px-auto mx-auto w-100" src="images/race2.png" alt="Second slide" style="height: 719px;">
          <div class="carousel-caption">
            <h3 style="color: white;font-style: italic;">-2018 Dakar Rally finished-</h3>
            <p style="color: white;font-style: italic;">TDakar Rally 2018 concluded in Cordoba, Argentina on the 20th in January, 2018</p>
            <a href="learn2.php"><button type="button" class="btn btn-danger btn-lg btn-block" href="https://www.facebook.com/" style="color: white;font-style: italic;" >Learn more</button></a>
          </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/race3.jpg" alt="Third slide" style="height: 719px;">
        <div class="carousel-caption">
          <h3 style="color: white;font-style: italic;">-Annual regret: the world championship battle has not come to an end-</h3>
          <p style="color: white;font-style: italic;">Regrettably, even though Raikkonen was in excellent form this year, the first Finnish driver to finish the race failed to perform</p>
          <a href="learn1.php"><button type="button" class="btn btn-danger btn-lg btn-block"  href="brand.php" style="color: white;font-style: italic;" >Learn more</button></a>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<section>
<div class="row" >
    <div class="col-sm-6" style="padding: 0px;" >
      <div class="media">
        <div class="media-body text-center">
          <br>
          <h3 style="font-style: italic;">2018 F1 Championship</h3>
          <p>The 2018 World Formula One Championship is the 69th World Formula One Championship. The season opens on March 25, 2018 at Albert Park in Melbourne, Australia. There are 21 races in this season. The final race has been held for the fifth consecutive year at Yas Wharf in Abu Dhabi, United Arab Emirates.</p>
          <br>
          <h5>View the 2018 race results below: </h5>
            <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#F1Team" aria-expanded="false" aria-controls="F1Team">F1 teams Rank of 2018 </button>
        
            <div class="collapse" id="F1Team">
                  <h4>Vodaphone McLaren-Mercedes</h4>
                  <br>
                  <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">655</div>
                  </div>
                  <h4>Ferrari</h4>
                  <br>
                  <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 87%">571</div>
                  </div>
                  <h4>Red Bull</h4>
                  <br>
                  <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 64%">419</div>
                </div>
            </div>
            <br>
            <br>




            <button class="btn btn-info bg-success" type="button" data-toggle="collapse" data-target="#F1Rank" aria-expanded="false" aria-controls="F1Rank">F1 Racer Rank of 2018</button>
        
            <div class="collapse" id="F1Rank">
                  <h4>Hamilton --Mercedes</h4>
                  <br>
                  <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">408</div>
                  </div>
                  <h4>Vettel --Ferrari</h4>
                  <br>
                  <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 78%">320</div>
                  </div>
                  <h4>Raikkonen --Ferrari</h4>
                  <br>
                  <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 62%">251</div>
                </div>
            </div>


   </div>
  </div>
</div>
    <div class="col-sm-6 " style="padding: 0px;">
      <div class="embed-responsive embed-responsive-16by9">
          <iframe width="966" height="543" src="https://www.youtube.com/embed/xvnlbZliBZs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
    </div>
</div>
</section>

<section>

<div class="row" >
    <div class="col-sm-6" style="padding: 0px;">
      <div class="embed-responsive embed-responsive-16by9">
          <iframe width="966" height="543" src="https://www.youtube.com/embed/-eVd6ap83To" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
    </div>
    <div class="col-sm-6" style="padding: 0px;">
       <div class="media">
          <div class="media-body">
          <h3 style="font-style:italic;padding: 10px;">The Perfect Closing of the Dakar Rally 2018</h3>
          <p style="padding: 10px;">The Dakar Rally in 2018 ended in Cordoba, Argentina on the 20th. Peugeot's Spanish driver Saynes and KTM's Austrian driver Walker won the championship of the automobile and motorcycle teams.</p>

          <!-- Start Nested Media Object -->
          <div class="media" style="margin: 15px;">
          <img class="mr-3" src="images/moto.png" width=300px height=200px alt="Sample photo">
          <div class="media-body">
          <p>On the same day, the Dakar Rally held its 14th stage competition in Cordoba, covering 284 kilometers, including 119 kilometers of special stage. In the motorcycle group, Walker won the first Dakar Rally Championship in his career, which is also the 17th consecutive championship of the KTM motorcycle team.</p>
          </div>
          </div>
          <!-- End Nested Media Object -->

          </div>
          </div>


    </div>

</div>

</section>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Initialize Bootstrap functionality -->
<script>
// Initialize tooltip component
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
<?php 
  include ('footer.html');
?>
</body>
</html>
