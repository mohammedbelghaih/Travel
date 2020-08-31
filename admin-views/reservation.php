<?php
    session_start();
    require_once("../App/Database.php");
    $con=new Database();
    $id_o=$_GET["book"];
    $sql=$con->getpdo()->query("select * from reservation, offres where offre_id = $id_o and id_o = offre_id");
    $fetch=$sql->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Booking</title>
</head>
<body style="background-image: url(imgs/img-login/2.jpg); background-repeat: no-repeat;background-size: cover;max-width: 100%;">


    <nav style="background:transparent; box-shadow: none !important; background-color: black;" class="navbar navbar-light">
        <a class="navbar-brand" href="#" style="margin-left: 5%">
            <img src="../imgs/logo.png" style="width: 40%;" loading="lazy">
        </a>
    </nav>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">offre</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">email</th>
      <th scope="col">tel</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($fetch as $ele){ ?>
    <tr>
      <th scope="row"><?php echo $ele["nom"] ?></th>
      <td><?php echo $ele["f_name"] ?></td>
      <td><?php echo $ele["l_name"] ?></td>
      <td><?php echo $ele["email"] ?></td>
      <td><?php echo $ele["tel"] ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>