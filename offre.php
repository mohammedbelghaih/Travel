<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header('location:login.php');
  }
  require_once("App/Database.php");
  $con=new Database();
  $con->getpdo();
  $sql=$con->getpdo()->query("select * from offres, hotels where hotels.id = offres.hotel");
  $fetch=$sql->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>VIAJE-Offers</title>
</head>
<body style="background-color: #E6E6E6;">

    <nav class="navbar navbar-expand-lg navbar-light" id="nav" style="background:transparent; box-shadow: none !important; background-color: black;">
        <a style="margin-left: 5%" class="navbar-brand"><img style="width: 40%; " src="imgs/logo.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span style="color: white" class="navbar-toggler-icon"></span>
        </button>
        <div style="margin-left: 40%;" class="collapse navbar-collapse"  id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active" >
                    <a class="nav-link" style="color: white; font-family: 'Poppins Light'; margin-left: -5%;" href="Home.php">Home</a>
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
                    <a class="nav-link" style="color: #FE6825; font-family: 'Poppins Light'; margin-left: -5%;" href="offre.php">Offers</a>
                </li>
            </ul>
            <button id="btn" type="button" class="btn" style="margin-left: 2%; border: 2px solid #FE6825; border-radius: 50px; background-color: #FE6825;"><a style="color: white; padding: 10px 20px 10px 20px; font-family: 'Poppins Medium'; text-decoration: none;" href="logout.php">Logout</a></button>
        </div>
    </nav>

    <section style="background-image:url('imgs/1.jpg');background-repeat: no-repeat;background-size: cover;max-width: 100%;height: 500px; margin-top: -2px;">
        <div style="text-align: center;">
            <h1 style="padding-top: 8%; color: white;font-family: 'Poppins Medium'; font-weight: bold; font-style: italic;">WE MAKE AWESOME TOURS</h1>
            <p style="padding-top: 2%;color: white;font-family: 'Poppins light';">Discover the best deals for a special holiday full of adventure. Discover the world with us.</p>
        </div>
    </section>

    
    <section>
        <div style="text-align: center; margin-top: 5%;">
            <h3 style="color: black; font-family: 'Poppins Medium'; font-weight: bold;">OFFERS</h3>
        </div>
        <center>
            <div style="border: 2px solid #FE6825;  border-width: 5px 30px 5px; width: 5%"></div>
        </center>
    </section>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2" style="margin-top: 6%;">
            <?php  foreach($fetch as $element){ 
            ?>
                <div class="col mb-4">
                    <div class="card">
                        <img src="admin-views/uploads/<?php echo $element['photo'];?>" class="card-img-top" height="300px">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #fe6825;"><?php echo $element['nom'];?></h5>
                            <h6 class="card-title" style="color: rgb(169 99 27);"><span style="color: black;">Transport :</span> <?php echo $element['transport'];?></h6>
                            <h6 class="card-title" style="color: rgb(169 99 27);"><span style="color: black;">Price :</span> <?php echo $element['prix'];?> MAD / 1Person</h6>
                            <h6 class="card-title" style="color: rgb(169 99 27);;"><span style="color: black;">Place of departure :</span> <?php echo $element['depart'];?></h6>
                            <h6 class="card-title" style="color: rgb(169 99 27);;"><span style="color: black;">Destination :</span> <?php echo $element['destination'];?></h6>
                            <h6 class="card-title" style="color: rgb(169 99 27);;"><span style="color: black;">Hotel :</span> <?php echo $element['nom_h'];?></h6>
                            <h6 class="card-title" style="color: rgb(169 99 27);;"><span style="color: black;">Start Date :</span> <?php echo $element['date_debut'];?></h6>
                            <h6 class="card-title" style="color: rgb(169 99 27);;"><span style="color: black;">End Date :</span> <?php echo $element['date_fin'];?></h6>
                            
                            <a href="reservation.php?edit=<?php echo $element['id_o'] ?>" class="btn" style="color: white; background-color: #FE6825;">Booking</a>
                        </div>
                    </div>
                </div>
            <?php }; ?>
        </div>
    </div>

    <footer id="mu-footer" style="margin-top: 10%;">
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="">HOME</a></li>
                  <li><a href="">Gallery</a></li>
                  <li><a href="">Contact</a></li>
                  <li><a href="">Offres</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Help</h4>
                <ul>
                  <li><a href="contact.html">Booking</a></li>
                  <li><a href="contact.html">Registration</a></li>                 
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
</body>
</html>