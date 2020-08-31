<?php
  require_once("App/Database.php");
  $con=new Database();
  $sql=$con->getpdo()->query("SELECT * FROM offres ORDER BY id_o DESC LIMIT 1");
  $fetch= $sql->fetchAll();

  $query=$con->getpdo()->query("SELECT * FROM (SELECT * FROM offres ORDER BY id_o DESC LIMIT 2) AS loffre ORDER by id_o ASC LIMIT 1");
  $before= $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>VIAJE-Home</title>
    <style>
        body{
          background-color: #e6e6e6;
        }
        .title{
            margin-top: 15%;
            color: white;
            width: 43%;
        }
        .title h1{
            font-family: poppins;
            font-style: italic;
        }
        section{
          margin-top: 2%;
        }
        .bt{
            padding-top: 7%;
            width: 10%;
        }
        #bt{
            padding: 10%;
            background-color: #FE6825;
            border-radius: 30px;
            color: white;
        }
        .sr h3{
            font-family: poppins;
            font-weight: bold;
        }
        .rr{
            display: flex;
            justify-content: center;
            
        }
        .cardd{
            width: 80%;
            padding: 1%;
            margin-left: 10%;
        }
        .cardd h3{
            text-align: center;
            font-family: poppins;
        }
        .card-content h3, p{
          padding: 10px;
        }
        .icc{
          border-radius: 44px;
          width: 80px;
          height: 80px;
          box-shadow: rgb(110, 110, 110) 1px 1px 1px 1px;
        }
        .icc .ic{
            font-size: 40px;
            color: #FE6825;
            line-height: 80px;
        }
        .us{
            background-image: linear-gradient(to bottom, rgba(32 32 32 / 52%), rgba(38 33 37 / 87%)),url('img/swiming.jpg');
            background-size: cover;
            height: 800px;
        }
        .cardd2{
            padding-top: 8%;
            width: 90%;
        }
        .cardd2 .ic{
            color: #FE6825;
        }
        .cardd2 h3{
            font-size: 20px;
            color: black;
            font-weight: bold;
        }
        .pic{
          width: 70%;
          
        }
        .package h3{
            font-family: poppins;
            font-weight: bold;
            text-align: center;
        }
        .package p{
          text-align: center;
        }
        .pk{
          width: 81%;
        }
        .rr1{
          display: flex;
          margin-left: 27%;
        }
        .deals h1{
          font-family: poppins;
          font-size: 30px;
          font-weight: bold;
          text-align: center;
        }
        .deals p{
          text-align: center;
        }
        #book{
          margin-right: 2%;
          background-color: white;
          padding: 2% 5% 2% 5%;
          border-radius: 30px;
          color: black;
        }
        #register{
          margin-left: 2%;
          background-color: #FE6825;
          padding: 2%;
          border-radius: 30px;
          color: white;
        }
        .ico{
          margin-left: 4%;
        
        }
        .foo{
          background-color: black;
        }
        
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" id="nav" style="background:transparent; box-shadow: none !important; background-color: black;">
        <a style="margin-left: 5%" class="navbar-brand"><img style="width: 40%; " src="imgs/logo.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span style="color: white" class="navbar-toggler-icon"></span>
        </button>
        <div style="margin-left: 40%;" class="collapse navbar-collapse"  id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active" >
                    <a class="nav-link" style="color: #FE6825; font-family: 'Poppins Light'; margin-left: -5%;" href="Home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: white; font-family: 'Poppins Light'; margin-left: -5%;" href="about.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: white; font-family: 'Poppins Light'; margin-left: -5%;" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: white; font-family: 'Poppins Light'; margin-left: -5%;" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: white; font-family: 'Poppins Light'; margin-left: -5%;" href="offre.php">Offers</a>
                </li>
            </ul>
            <button id="btn" type="button" class="btn" style="margin-left: 2%; border: 2px solid #FE6825; border-radius: 50px; background-color: #FE6825;"><a style="color: white; padding: 10px 20px 10px 20px; font-family: 'Poppins Medium'; text-decoration: none;" href="login.php">Registration</a></button>
        </div>
    </nav>


    <section style="background-image:url('imgs/9.jpg');background-repeat: no-repeat;background-size: cover;max-width: 100%;height: 500px; margin-top: -2px;">
        <div style="text-align: center;">
            <h1 style="padding-top: 8%; color: white;font-family: 'Poppins Medium'; font-weight: bold; font-style: italic;">WE MAKE AWESOME TOURS</h1>
            <p style="padding-top: 2%;color: white;font-family: 'Poppins light';">Discover the best deals for a special holiday full of adventure. Discover the world with us.</p>
            <button type="button" class="btn" style="margin-top: 2%; border: 2px solid #FE6825; border-radius: 50px; background-color: #FE6825;"><a style="color: white; padding: 10px 20px 10px 20px; font-family: 'Poppins Medium'; text-decoration: none;" href="offre.php">View More</a></button>
        </div>
    </section>
<section class="services">
<center>
    <div class="sr" style="margin-top: 7%;">
        <h3>OUR SERVICES</h3>
        <center>
          <div style="border: 2px solid #FE6825;  border-width: 5px 50px 5px; width: 5%; margin-top: 1%;"></div>
        </center>
    </div>
</center>
    <div class="cardd text-center" style="margin-top: 5%;">
        <div class="row rr">
            <div class="col s12 m3">
              <div class="card">
                <center>
                <div class="icc" style="margin-top: 3%;">
                  <i class="fas fa-bed ic"></i>
                </div>
                </center>
                <div class="card-content" style="margin-top: 4%;">
                    <h4>HOTEL BOOKING</h4>
                  <p>our website facilitates tourist activities, the site is translated into more than 20 languages. We offer a wide selection of hotels, apartments and hostels, over 3,000 properties in all destinations around the world.</p>
                </div>
              </div>
            </div>
            <div class="col s12 m3">
                <div class="card">
                  <center>
                  <div class="icc" style="margin-top: 3%;">
                    <i class="fas fa-plane ic"></i>
                  </div>
                  </center>
                  <div class="card-content" style="margin-top: 4%;">
                      <h4>FLIGHT BOOKING</h4>
                    <p>we offers the lowest airfare for your flight booking. we have become synonymous with on-time travel and with every flight ticket you book on the website, we strive to deliver a hassle-free experience to you.</p>
                  </div>
                </div>
              </div>
              <div class="col s12 m3">
                <div class="card">
                  <center>
                  <div class="icc" style="margin-top: 3%;">
                    <i class="fas fa-ticket-alt ic"></i>
                  </div>
                  </center>
                  <div class="card-content" style="margin-top: 4%;">
                      <h4>TICKET BOOKING</h4>
                    <p>you can tailor your trip from end-to-end by scouring suitable flights and making your flight booking before proceeding with your hotel bookings. viaje hotel repository will see you through this process seamlessly. </p>
                  </div>
                </div>
              </div>
          </div>
    </div>
    <div class="cardd text-center">
        <div class="row rr">
            <div class="col s12 m3">
              <div class="card">
                <center>
                <div class="icc" style="margin-top: 3%;">
                  <i class="fas fa-ship ic"></i>
                </div>
                </center>
                <div class="card-content" style="margin-top: 4%;">
                    <h4>CRUISES BOOKING</h4>
                  <p>viaje is a leading online cruise travel company dedicated to providing customers with better deals than any other cruise website and access to great deals on cruise vacations.</p>
                </div>
              </div>
            </div>
            <div class="col s12 m3">
                <div class="card">
                  <center>
                  <div class="icc" style="margin-top: 3%;">
                    <i class="fas fa-bus ic"></i>
                  </div>
                  </center>
                  <div class="card-content" style="margin-top: 4%;">
                      <h4>RAIL BOOKING</h4>
                    <p>You can book trains for any destination, class or train type with us. Check out the details such as the train departure & arrival time between two particular destinations.</p>
                  </div>
                </div>
              </div>
              <div class="col s12 m3">
                <div class="card">
                  <center>
                  <div class="icc" style="margin-top: 3%;">
                    <i class="fas fa-home ic"></i>
                  </div>
                  </center>
                  <div class="card-content" style="margin-top: 4%;">
                      <h4>AMAZING TOUR</h4>
                    <p>We are a leading Tour Operator and Destination Management Company based in Morocco and specialized in tourist activities. We create customized incentive programs and corporate events.</p>
                  </div>
                </div>
              </div>
          </div>
    </div>
</section>
<section class="us" style="margin-top: 7%;">
    <center>
        <div class="why-us" style="padding-top: 5%;">
            <h3 style="font-family: poppins; color: white;">WHY CHOOSE US</h3>
            <center>
              <div style="border: 2px solid #FE6825;  border-width: 5px 50px 5px; width: 5%; margin-top: 1%;"></div>
            </center>
        </div>
        <div class="cardd2">
            <div class="row rr">
                <div class="col s12 m3">
                  <div class="card">
                    <center>
                    <div class="icc" style="margin-top: 3%;">
                      <i class="fas fa-star ic"></i>
                    </div>
                    </center>
                    <div class="card-content" style="margin-top: 3%;">
                        <h3>HANDPICKED HOTELS</h3>
                      <p>our website facilitates tourist activities, the site is translated into more than 20 languages. We offer a wide selection of hotels, apartments and hostels, over 3,000 properties in all destinations around the world.</p>
                    </div>
                  </div>
                </div>
                <div class="col s12 m3">
                    <div class="card">
                      <center>
                      <div class="icc" style="margin-top: 3%;">
                        <i class="fas fa-globe-africa ic"></i>
                      </div>
                      </center>
                      <div class="card-content" style="margin-top: 3%;">
                          <h3>WORLD CLASS SERVICE</h3>
                        <p>Don’t have time to plan your next trip? Trust us. Our travel agency has helped book flights, make accommodations, and plan tours for customers traveling </p>
                      </div>
                    </div>
                  </div>
                  <div class="col s12 m3">
                    <div class="card">
                      <center>
                      <div class="icc" style="margin-top: 3%;">
                        <i class="fas fa-check ic"></i>
                      </div>
                      </center>
                      <div class="card-content" style="margin-top: 3%;">
                          <h3>BEST PRICE GUARANTEE</h3>
                        <p>Our Best Price Guarantee means that you can be sure of booking at the best rate. If you find a lower price elsewhere within 24 hours of booking, we will match the lower rate.</p>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
    </center>
</section>
<section class="package" style="margin-top: 7%;">
    <div>
        <h3>SPECIAL PACKAGE</h3>
        <center>
          <div style="border: 2px solid #FE6825;  border-width: 5px 50px 5px; width: 5%; margin-top: 1%;"></div>
        </center>
    </div>
    <div class="pk" style="margin-top: 5%;">
    <div class="row rr1 pic">
      <?php foreach($fetch as $package){ ?>
      <div class="col s12 m3">
        <div class="card ">
          <div class="card-image">
            <a href="offre.php"><img src="admin-views/uploads/<?php echo $package['photo'] ?>" width="100%" height="300px"></a>
          </div>
          <div class="card-content" style="background-color: #FE6825;">
            <p style="color: white; font-weight: bold;"><?php echo $package['nom'] ?></p>
          </div>
        </div>
      </div>
      <?php } ?>
      <?php foreach($before as $bfr){ ?>
      <div class="col s12 m3">
        <div class="card ">
          <div class="card-image">
            <a href="offre.php"><img src="./admin-views/uploads/<?php echo $bfr['photo'] ?>" width="100%" height="300px"></a>
          </div>
          <div class="card-content">
            <p style="font-weight: bold; color: #FE6825;;"><?php echo $bfr['nom'] ?></p>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    </div>
</section>

<footer id="mu-footer" style="margin-top: 10%;">
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="Home.php">HOME</a></li>
                  <li><a href="gallery.php">Gallery</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  <li><a href="offre.php">Offres</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Help</h4>
                <ul>
                  <li><a href="offre.php">Booking</a></li>
                  <li><a href="loginn.php">Registration</a></li>                 
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">       
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  <p>Phone: (415) 617-495-7777 </p>
                  <p>Website: www.Viaje.com</p>
                  <p>Email: ithelp@viaje.come</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>© Copyright 2020 | ALL RIGHT RESERVED</p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" data-auto-replace-svg="nest"></script>
</body>
</html>