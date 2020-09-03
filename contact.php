<?php
  session_start();
    require_once("App/Database.php");
    $con=new Database();
    $con->getpdo();
    if(isset($_POST["submit"])){
        $con->contact($_POST["name"], $_POST["email"], $_POST["message"]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>VIAJE-Contact us</title>
</head>
<body style="background-color: #E6E6E6;">
<?php require_once("./header/nav.php") ?>
    <section style="background-image:url('imgs/5.jpg');background-repeat: no-repeat;background-size: cover;max-width: 100%;height: 500px; margin-top: -2px;">
        <div style="text-align: center;">
            <h1 style="padding-top: 8%; color: white;font-family: 'Poppins Medium'; font-weight: bold; font-style: italic;">WE MAKE AWESOME TOURS</h1>
            <p style="padding-top: 2%;color: white;font-family: 'Poppins light';">Discover the best deals for a special holiday full of adventure. Discover the world with us.</p>
            <button type="button" class="btn" style="margin-top: 2%; border: 2px solid #FE6825; border-radius: 50px; background-color: #FE6825;"><a style="color: white; padding: 10px 20px 10px 20px; font-family: 'Poppins Medium'; text-decoration: none;" href="offre.php">View More</a></button>
        </div>
    </section>

    <div>
        <?php echo $con->validation(); ?>
    </div>
    <div class="container">
        <div style="text-align: center; margin-top: 10%;">
            <h3 style="color: black; font-family: 'Poppins Medium'; font-weight: bold;">Contact us</h3>
        </div>
        <center>
            <div style="border: 2px solid #FE6825;  border-width: 5px 50px 5px; width: 5%"></div>
        </center>
        <div class="row" style="margin-top: 8%;">
            <div class="col-sm" style="margin-top: 5%;">
                <form method="POST">
                    <div class="form-group">
                        <label for="inputEmail4">Name :</label>
                        <input type="text" name="name" class="form-control" id="inputEmail4" required>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword4">Email Address :</label>
                        <input type="email" name="email" class="form-control" id="inputPassword4" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Your Message :</label>
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Write your message here..." required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn" style="background-color: #FE6825; color: white;">Send</button>
                </form>
            </div>
            <div class="col-sm">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d108702.95044123002!2d-8.078064434912875!3d31.634748396997026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafee8d96179e51%3A0x5950b6534f87adb8!2sMarrakech!5e0!3m2!1sfr!2sma!4v1598359202885!5m2!1sfr!2sma" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
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