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
  <link rel="stylesheet" href="css/brand.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style type="text/css">
      #map1 {
        height: 400px;
        width: 100%;
      }
      #map2 {
        height: 400px;
        width: 100%;
      }
      #map3 {
        height: 400px;
        width: 100%;
      }
      #map4 {
        height: 400px;
        width: 100%;
      }
      #map5 {
        height: 400px;
        width: 100%;
      }

  </style>
</head>
<body>
  <div class="row">
    <div class="col-3" id="leftsideBar">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <div class="nav-link model" id="v-pills-BENZ-tab" data-toggle="pill" href="#v-pills-BENZ" role="tab" aria-controls="v-pills-profile" aria-selected="false"><img src="images/mercedes-benz.svg"></div>
        <div class="nav-link model" id="v-pills-BMW-tab" data-toggle="pill" href="#v-pills-BMW" role="tab" aria-controls="v-pills-profile" aria-selected="false"><img src="images/bmw.svg"></div>
        <div class="nav-link model" id="v-pills-volkswagen-tab" data-toggle="pill" href="#v-pills-volkswagen" role="tab" aria-controls="v-pills-profile" aria-selected="false"><img src="images/volkswagen.svg"></div>
        <div class="nav-link model" id="v-pills-cadillac-tab" data-toggle="pill" href="#v-pills-cadillac" role="tab" aria-controls="v-pills-profile" aria-selected="false"><img src="images/cadillac.svg"></div>
        <div class="nav-link model" id="v-pills-TESLA-tab" data-toggle="pill" href="#v-pills-TESLA" role="tab" aria-controls="v-pills-profile" aria-selected="false"><img src="images/tesla.svg"></div>
      </div>
    </div>
    <div class="col-9" id="rightsideBar">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-BENZ" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div id="INFO">
                <div class="heading-wrapper shadow">
                  <button type="button" class="btn btn-Secondary" data-toggle="modal" data-target="#exampleModal">Mercedes-Benz</button>
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Mercedes-Benz Headquarters</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div id="map1"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="hr"></div>
                  <div class="sub-heading font-italic">A global automobile marque and a division of the German company Daimler AG. The brand is known for luxury vehicles, buses, coaches, and lorries. The headquarters is in Stuttgart, Baden-Württemberg.
                  </div>
                </div>
                <div class="card-gropu">
                    <div class="card shadow-sm">
                    <img class="card-img-top" src="images/benz-S-Class.png">
                    <div class="card-body">
                    <h4>S-Class</h4>
                    <p class="card-text">Every mountain range has its pinnacle.Every breakthrough, its inventor. In the history of the automobile, one car makes history time and again, not just by raising the standard, but advancing it in ways you never imagined possible.</p>
                    </div>
                    </div>

                    <div class="card shadow-sm">
                    <div class="card-body">
                    <h4>AMG</h4>
                    <p class="card-text">As the performance division of Mercedes-Benz, AMG creates some of the most sought-after vehicles in the world. They're the product of skilled craftsmen, designers and engineers who live to test the limits.</p>
                    </div>
                    <img class="card-img-bottom" src="images/benz-AMG.png">
                    </div>
                    
                    <div class="card shadow-sm">
                    <img class="card-img-top" src="images/benz-GLSSUV.png">
                    <div class="card-body">
                    <h4>GLS SUV</h4>
                    <p class="card-text">The GLS is engineered and equipped to set the bar for 7-passenger luxury SUVs. It's eager to lead your family anywhere in bold and brilliant style, from it LED lighting, to a body that's at once muscular and aerodynamic.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-BMW" role="tabpanel" aria-labelledby="v-pills-profile-tab">            
          <div id="INFO">
                <div class="heading-wrapper shadow">
                  <button type="button" class="btn btn-Secondary " data-toggle="modal" data-target="#exampleModal2">BMW</button>
                  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">BMW Headquarters</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div id="map2"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="hr"></div>
                  <div class="sub-heading font-italic">Bavarian Motor Works is a German multinational company which currently produces luxury automobiles and motorcycles. The company has significant motorsport history, especially in touring cars and Formula 1.
                  </div>
                </div>
                <div class="card-gropu">
                    <div class="card shadow-sm">
                    <img class="card-img-top" src="images/BMW-7.png">
                    <div class="card-body">
                    <h4>BMW 7-series</h4>
                    <p class="card-text">The breath of performance, the expectation of infinite luxury, the experience of live well lived. Discover the ultimate evolution of technology. In this purebred performer, every moment is one to savor.</p>
                    </div>
                    </div>

                    <div class="card shadow-sm">
                    <div class="card-body">
                    <h4>BMW-M3</h4>
                    <p class="card-text">Packed with power normally reserved for the track, M generates performance unlike anything else. And after four decades of delivering hair-raising thrills, it’s still pushing the limits.</p>
                    </div>
                    <img class="card-img-bottom" src="images/BMW-M3.png">
                    </div>
                    
                    <div class="card shadow-sm">
                    <img class="card-img-top" src="images/BMW-i8.png">
                    <div class="card-body">
                    <h4>BMW i8</h4>
                    <p class="card-text">The future of mobility is moving beyond combustion to a place where performance, design, and efficiency define the new normal. Where high-performance electric mobility is not just attainable, but sustainable. That’s the world of the future – the world of BMW i.</p>
                    </div>
                    </div>
                </div>
            </div>
          </div>
        <div class="tab-pane fade" id="v-pills-volkswagen" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <div id="INFO">
                <div class="heading-wrapper shadow">
                  <button type="button" class="btn btn-Secondary" data-toggle="modal" data-target="#exampleModal3">Volkswagen</button>
                  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Cadillac Headquarters</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div id="map3"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="hr"></div>
                  <div class="sub-heading font-italic">Volkswagen, shortened to VW, Volkswagen literally in German means "people's car", and the company's current international advertising slogan is just "Volkswagen", a reference of the name's meaning.
                  </div>
                </div>
                <div class="card-gropu">
                    <div class="card shadow-sm">
                    <img class="card-img-top" src="images/Volkswagen-BEETLE.png">
                    <div class="card-body">
                    <h4>BEETLE</h4>
                    <p class="card-text">A compact car, introduced by Volkswagen in 1997, drawing heavy inspiration from the exterior design of the original Beetle. Many special editions have been released, such as the Malibu Barbie New Beetle.</p>
                    </div>
                    </div>

                    <div class="card shadow-sm">
                    <div class="card-body">
                    <h4>PHIDEON</h4>
                    <p class="card-text">The Volkswagen Phideon is a mid-size luxury sedan manufactured by the German automobile manufacturer Volkswagen, described by Volkswagen as their "premium class" vehicle.</p>
                    </div>
                    <img class="card-img-bottom" src="images/Volkswagen-PHIDEON.png">
                    </div>
                    
                    <div class="card shadow-sm">
                    <img class="card-img-top" src="images/Volkswagen-TOUAREG.png">
                    <div class="card-body">
                    <h4>TOUAREG</h4>
                    <p class="card-text">Touareg is a mid-size luxury crossover SUV produced by German automaker Volkswagen since 2002 at the Volkswagen Bratislava Plant. The vehicle was named after the nomadic Tuareg people, inhabitants of the Saharan interior in North Africa.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-cadillac" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          <div id="INFO">
                <div class="heading-wrapper shadow">
                  <button type="button" class="btn btn-Secondary" data-toggle="modal" data-target="#exampleModal4">Cadillac</button>
                  <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Cadillac Headquarters</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div id="map4"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="hr"></div>
                  <div class="sub-heading font-italic">Cadillac is a division of the U.S.-based General Motors (GM) that markets luxury vehicles worldwide.  Historically, Cadillac automobiles have always held a place at the top of the luxury field within the United States.
                  </div>
                </div>
                <div class="card-gropu">
                    <div class="card shadow-sm">
                    <img class="card-img-top" src="images/Cadillac-CTS-V.png">
                    <div class="card-body">
                    <h4>CTS-V</h4>
                    <p class="card-text">An achievement in precision with near-perfect balance. Where track-capable, supercharged power meets refined daily driver. This is the sport sedan redefined.</p>
                    </div>
                    </div>
                    
                    <div class="card shadow-sm">
                    <div class="card-body">
                    <h4>CT6 PLUG-IN</h4>
                    <p class="card-text">Experience the efficiency of a hybrid sedan with the performance and acceleration comparable to our 3.0L Twin Turbo V6. This is a hybrid like no other. This is the 2018 Cadillac CT6 PLUG-IN.</p>
                    </div>
                    <img class="card-img-bottom" src="images/Cadillac-CT6.png">
                    </div>

                    <div class="card shadow-sm">
                    <img class="card-img-top" src="images/Cadillac-ESCALADE.png">
                    <div class="card-body">
                    <h4>ESCALADE</h4>
                    <p class="card-text">Exceeds every expectation, Ambition on a grand scale. Iconic design, innovative technology and craftsmanship elevated to a higher degree. The 2019 Cadillac Escalade.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-TESLA" role="tabpanel" aria-labelledby="v-pills-profile-tab">           
         <div id="INFO">
                <div class="heading-wrapper shadow">
                  <button type="button" class="btn btn-Secondary" data-toggle="modal" data-target="#exampleModal5">Tesla</button>
                  <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tesla Headquarters</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div id="map5"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="hr"></div>
                  <div class="sub-heading font-italic">Tesla is a technology company and independent automaker, aimed at eventually offering electric cars at prices affordable to the average consumer.
                  </div>
                </div>
                <div class="card-gropu">
                    <div class="card shadow-sm">
                    <img class="card-img-top" src="images/Tesla-Model3.png">
                    <div class="card-body">
                    <h4>Model 3</h4>
                    <p class="card-text">A compact executive luxury all-electric four-door sedan manufactured and sold by Tesla, Inc. Since January 2018, the Model 3 has remained the top-selling plug-in car in the U.S. every month</p>
                    </div>
                    </div>

                    <div class="card shadow-sm">
                    <div class="card-body">
                    <h4>Model X</h4>
                    <p class="card-text">A mid-size all-electric luxury crossover utility vehicle made by Tesla, Inc. The Model X ranked in 2016 seventh among the world's best-selling plug-in cars.</p>
                    </div>
                    <img class="card-img-bottom" src="images/Tesla-ModelX.png">
                    </div>
                    
                    <div class="card shadow-sm">
                    <img class="card-img-top" src="images/Tesla-Roadster.jpg">
                    <div class="card-body">
                    <h4>Roadster</h4>
                    <p class="card-text">An upcoming all-electric battery-powered sports car made by Tesla, Inc. Tesla has said it will be capable of 0 to 60 mph in 1.9 seconds, quicker than any street legal production car to date at its announcement in November 2017.</p>
                    </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
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
<script>
      function initMap(){
        var options1 = {
          zoom:13,
          center:{lat:48.788331,lng:9.233999}
        }
        var map1 = new google.maps.Map(document.getElementById('map1'),options1);
        var marker1 = new google.maps.Marker({
          position:{lat:48.788331,lng:9.233999},
          map:map1
        });

        var options2 = {
          zoom:13,
          center:{lat:48.187930,lng:11.572427}
        }
        var map2 = new google.maps.Map(document.getElementById('map2'),options2);
        var marker2 = new google.maps.Marker({
          position:{lat:48.187930,lng:11.572427},
          map:map2
        });

        var options3 = {
          zoom:13,
          center:{lat:52.433783,lng:10.777214}
        }
        var map3 = new google.maps.Map(document.getElementById('map3'),options3);
        var marker3 = new google.maps.Marker({
          position:{lat:52.433783,lng:10.777214},
          map:map3
        });

        var options4 = {
          zoom:13,
          center:{lat:42.531518,lng:-83.027278}
        }
        var map4 = new google.maps.Map(document.getElementById('map4'),options4);
        var marker4 = new google.maps.Marker({
          position:{lat:42.531518,lng:-83.027278},
          map:map4
        });

        var options5 = {
          zoom:13,
          center:{lat:37.395969,lng:-122.147787}
        }
        var map5 = new google.maps.Map(document.getElementById('map5'),options5);
        var marker5 = new google.maps.Marker({
          position:{lat:37.395969,lng:-122.147787},
          map:map5
        });
      }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDigNcrPXLsCrfWlQE99AaRxwSQ7WT-tKU&callback=initMap" async defer></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
