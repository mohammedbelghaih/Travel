<?php
    session_start();
    require_once("../App/Database.php");
    $con=new Database();
    $con->getpdo();
    $id_c=$_GET['msg'];
    $query=$con->getpdo()->query("select * from contact where contact_id = $id_c");
    $fetsh=$query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
      .mobile{
          display: none;
        }
        .tb{
          display: block;
        }
      @media screen and (max-width: 990px) {
        .mobile{
          display: block;
          margin:2% 5% 2% 5%
        }
        .tb{
          display: none;
        }
      }
    </style>
    <title>VIAJE-Contact us</title>
</head>
<body style="background-color: #E6E6E6;">
    
    <?php require_once("../header/nav.php") ?>
    <div  class="tb" style="padding-left: 3%;">
      <table class="table" style="margin-top: 2%;">
        <thead>
          <tr>
            <th scope="col" style="color:#FE6825;">message:</th>
            <th scope="col" style="color:#FE6825;margin-right: 50%;">Name:</th>
            <th scope="col" style="color:#FE6825;">email:</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($fetsh as $ele){ ?>
            <tr>
              <td><p class="msg" style="max-width: 90%;"><?php echo $ele["message"] ?></p></td>
              <th style="padding-right: 16%;"><?php echo $ele["name"] ?></th>
              <th ><?php echo $ele["email"] ?></th>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <div  Class="mobile" style="padding-left: 3%;">
          <?php foreach($fetsh as $ele){ ?>
            
            <h5>Name: <?php echo $ele["name"] ?></h5>
            <h5>email: <?php echo $ele["email"] ?></h5>
            <h5>message:</h5>
            <p class="msg" style="max-width: 90%;"><?php echo $ele["message"] ?></p>
          <?php } ?>
    </div>
    <footer id="mu-footer" style="margin-top: 17.5%;">
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