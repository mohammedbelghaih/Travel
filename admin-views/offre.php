<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header('location: ../login.php');
  } 
  require_once("../App/Database.php");
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
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>VIAJE-Offers</title>
</head>
<body style="background-color: #E6E6E6;">

    <nav style="background:transparent; box-shadow: none !important; background-color: black;" class="navbar navbar-light">
        <a class="navbar-brand" href="#" style="margin-left: 5%">
            <img src="../imgs/logo.png" style="width: 40%;" loading="lazy">
        </a>
    </nav>

    
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
                        <img src="uploads/<?php echo $element['photo'];?>" class="card-img-top" height="300px">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #fe6825;"><?php echo $element['nom'];?></h5>
                            <h6 class="card-title" style="color: rgb(169 99 27);"><span style="color: black;">Transport :</span> <?php echo $element['transport'];?></h6>
                            <h6 class="card-title" style="color: rgb(169 99 27);"><span style="color: black;">Price :</span> <?php echo $element['prix'];?> MAD</h6>
                            <h6 class="card-title" style="color: rgb(169 99 27);"><span style="color: black;">Place of departure :</span> <?php echo $element['depart'];?></h6>
                            <h6 class="card-title" style="color: rgb(169 99 27);"><span style="color: black;">Destination :</span> <?php echo $element['destination'];?></h6>
                            <h6 class="card-title" style="color: rgb(169 99 27);"><span style="color: black;">Hotel :</span> <?php echo $element['nom_h'];?></h6>
                            <h6 class="card-title" style="color: rgb(169 99 27);"><span style="color: black;">Start Date :</span> <?php echo $element['date_debut'];?></h6>
                            <h6 class="card-title" style="color: rgb(169 99 27);"><span style="color: black;">End Date :</span> <?php echo $element['date_fin'];?></h6>
                            
                            <a href="edit-offre.php?edit=<?php echo $element['id_o'] ?>" class="btn" style="color: white; background-color: #FE6825; margin-top: 3%;">Edit</a>
                            <a href="edit-pic.php?edit=<?php echo $element['id_o'] ?>" class="btn" style="color: white; background-color: #FE6825; margin-top: 3%;">edit picture</a>
                            <a href="reservation.php?book=<?php echo $element['id_o'] ?>" class="btn" style="color: white; background-color: #FE6825; margin-top: 3%;">bookings</a>
                            <a href="delete-offre.php?edit=<?php echo $element['id_o'] ?>" class="btn" style="color: white; background-color: red; margin-top: 3%;">Delete</a>
                        </div>
                    </div>
                </div>
            <?php }; ?>
        </div>
    </div>

    <center>
      <a href="add-offre.php"><input type="submit" name="submit" value="Add New Offres" class="btn btn-lg" style="color: white; background-color: #FE6825; margin-top: 3%;"></a>
    </center>
    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>