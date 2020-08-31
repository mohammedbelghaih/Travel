<?php
    session_start();
    require_once("../App/Database.php");
    $con=new Database();
    $con->getpdo();
    $id_p=$_GET["edit"];
    $sql=$con->getpdo()->query("select * from offres, hotels where hotels.id = offres.hotel and id_o = $id_p");
    $fetch=$sql->fetchAll();

    $ht=$con->getpdo()->query("select * from hotels");
    $fetchHt=$ht->fetchAll();




    if(isset($_POST["submit"])){

        $title = $_POST["nom"];
        $description = $_POST["desc"];
        $transport = $_POST["transport"];
        $prix = $_POST["prix"];
        $depart = $_POST["depart"];
        $destination = $_POST["destination"];
        $start = $_POST["date_debut"];
        $end = $_POST["date_fin"];
        $hotel = $_POST["hotel"];

        $query= "update offres set nom = '$title', description = '$description',  transport = '$transport', prix = '$prix', depart = '$depart', destination = '$destination', date_debut = '$start', date_fin = '$end', hotel = '$hotel' where id_o = $id_p";
        $prepare=$con->getpdo()->prepare($query);
        $execute=$prepare->execute();
        if($execute){
            header("location: offre.php");
        }else{
            echo "no";
        }
    }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Edit-offre</title>
</head>
<body style="">


    <nav style="background-color: black;" class="navbar navbar-light">
        <a class="navbar-brand"  style="margin-left: 5%">
            <img src="../imgs/logo.png" style="width: 40%;" loading="lazy">
        </a>
    </nav>
    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <form method="POST" class="col">
                <?php foreach($fetch as $element) ?>
                <div class="form-group row">
                    <label class="col-2 col-form-label" style="color: rgb(31, 95, 133);"><strong>Title :</strong></label>
                    <div class="col-10">
                        <input type="text" name="nom" value="<?php echo $element["nom"] ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label" style="color: rgb(31, 95, 133);"><strong>Description :</strong></label>
                    <div class="col-10">
                        <input type="text" name="desc" value="<?php echo $element["description"] ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label" style="color: rgb(31, 95, 133);"><strong>Transport :</strong></label>
                    <div class="col-10">
                        <input type="text" name="transport" value="<?php echo $element["transport"] ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label" style="color: rgb(31, 95, 133);"><strong>Price :</strong></label>
                    <div class="col-10">
                        <input type="number" name="prix" value="<?php echo $element["prix"] ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label"style="color: rgb(31, 95, 133);"><strong>Departure :</strong></label>
                    <div class="col-10">
                        <input type="text" name="depart" value="<?php echo $element["depart"] ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label"style="color: rgb(31, 95, 133);"><strong>Destination :</strong></label>
                    <div class="col-10">
                        <input type="text" name="destination" value="<?php echo $element["destination"] ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label"style="color: rgb(31, 95, 133);"><strong>Start Date :</strong></label>
                    <div class="col-10">
                        <input type="date" name="date_debut" value="<?php echo $element["date_debut"] ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label"style="color: rgb(31, 95, 133);"><strong>End Date :</strong></label>
                    <div class="col-10">
                        <input type="date" name="date_fin" value="<?php echo $element["date_fin"] ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label"style="color: rgb(31, 95, 133);"><strong>Hotel :</strong></label>
                    <div class="col-10">
                    <?php echo $element["nom_h"] ?>
                    <select name="hotel">
                            <?php foreach($fetchHt as $elem){ ?>
                            <option value="<?php echo $elem["id"]; ?>"><?php echo $elem["nom_h"]; ?></option>
                            <?php }; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row" style="margin-left: 16%; margin-top: 4%;">
                    <div class="col-10">
                        <input type="submit" name="submit" value="Edit" class="btn btn-lg" style="color: white; background-color: #FE6825; margin-top: 3%;">
                    </div>
                </div>
            </form>
        </div>
    </div>


    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>