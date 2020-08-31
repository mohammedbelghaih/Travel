<?php
    session_start();
  require_once("App/Database.php");
  $con=new Database();
  $con->getpdo();
  if(isset($_POST["signup"])){
  $con->register($_POST['username'], $_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['pass'], $_POST['tel']);
  }
  if(isset($_POST["submit"])){
      $con->login($_POST["username"], $_POST["pass"]);
  }
  if(isset($_POST["submit"])){
    $con->loginn($_POST["username"], $_POST["pass"]);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Login</title>
</head>
<body style="background-image: url(imgs/3.jpg); background-repeat: no-repeat;background-size: cover;max-width: 100%;">


    <nav style="background:transparent; box-shadow: none !important;" class="navbar navbar-light">
        <a class="navbar-brand" href="#" style="margin-left: 5%">
            <img src="imgs/logo.png" style="width: 40%;" loading="lazy">
        </a>
    </nav>

    <section style="background-color: #f1f1f1; margin-left: 20%; margin-right: 20%; height: 700px; padding-top: 3%; margin-top: 3%;">
        <div class="col" style="text-align: center;">
            <h4 style="color: black; font-family: 'Poppins Medium'; font-weight: bold;text-align: center; ">Connect to VIAJE</h4<>
        </div>
        <center>
            <div style="border: 2px solid #FE6825;  border-width: 5px 50px 5px; width: 5%;"></div>
            <div>
                <p style="padding-top: 2%;color: black;font-family: 'Poppins light';">Discover the best deals for a special holiday full of adventure.<br> Discover the world with us.</p>
            </div>
        </center>
        <div class="row justify-content-md-center" style="margin-left: 1px; margin-right: 1px; margin-top: 3%;">
            <div class="col">
                <h5 style="margin-left: 5%;">Login :</h5>
                <form method="post" style="margin-top: 7%; margin-left: 5%;">
                    <div class="form-group">
                        <label for="exampleInputEmail1">UserName :</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="username" style="width: 65%;">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password :</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass" style="width: 65%;">
                    </div>
                    <button type="submit" name="submit" class="btn" style="background-color: #FE6825; color: white; font-family: 'Poppins Medium';">Login</button>
                </form>
            </div>
            <div class="col">
                <h5 style="color: black;">Signup :</h5>
                <form  method="post" style="margin-top: 7%;">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="inputEmail4" name="fname" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="inputPassword4" name="lname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="tel" class="form-control" id="inputEmail4" name="tel" placeholder="Télé">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="inputAddress" name="username" placeholder="Username">   
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="inputAddress2" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="inputAddress2" name="pass" placeholder="Password">
                    </div>
                    <button type="submit" name="signup" class="btn" style="background-color: white; color: #FE6825; font-family: 'Poppins Medium';">Sign up</button>
                </form>
            </div>
        </div>
    </section>
    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>