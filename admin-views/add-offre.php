<?php
    session_start();
    require_once("../App/Database.php");
    $con=new Database();
    $con->getpdo();
    $sql=$con->getpdo()->query("select * from hotels");
    $fetch=$sql->fetchAll();
        if(isset($_POST["submit"])){
            


            $image=$_FILES['photo']['name'];
            $tmp_dir=$_FILES['photo']['tmp_name'];
            $imgsize=$_FILES['photo']['size'];
            $uploads="uploads/";
            $imgExt=strtolower(pathinfo($image,PATHINFO_EXTENSION));
            $extension=["jpeg","jpg","png","gif","pdf"];
            $pic=rand(1000,10000).".".$imgExt;
            move_uploaded_file($tmp_dir,$uploads.$pic);
            $stm=$con->getpdo()->prepare("insert into offres (nom, description, photo, transport, prix, depart, destination, date_debut, date_fin, hotel) values (:nom, :description, :photo, :transport, :prix, :depart, :destination, :date_debut, :date_fin, :hotel)");
            $stm->bindParam("photo",$pic);
            $stm->bindParam("nom",$_POST["nom"]);
            $stm->bindParam("description",$_POST["description"]);
            $stm->bindParam("transport",$_POST["transport"]);
            $stm->bindParam("prix",$_POST["prix"]);
            $stm->bindParam("depart",$_POST["depart"]);
            $stm->bindParam("destination",$_POST["destination"]);
            $stm->bindParam("date_debut",$_POST["date_debut"]);
            $stm->bindParam("date_fin",$_POST["date_fin"]);
            $stm->bindParam("hotel",$_POST["hotel"]);

            
            if($stm->execute()){
               
            }else{
             echo 'error';
          }
        }

        
          
        
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Add-offre</title>
</head>
<body style="">


<?php require_once("../header/nav.php") ?>
    
    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <form method="POST" class="col" enctype="multipart/form-data">
                <input type="hidden" name="id">
                <div class="form-group row">
                    <label class="col-2 col-form-label" style="color: rgb(31, 95, 133);"><strong>Title :</strong></label>
                    <div class="col-10">
                        <input type="text" name="nom" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label" style="color: rgb(31, 95, 133);"><strong>Description :</strong></label>
                    <div class="col-10">
                        <input type="text" name="description" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label" style="color: rgb(31, 95, 133);"><strong>Image :</strong></label>
                    <div class="col-10">
                        <input type="file" name="photo">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label" style="color: rgb(31, 95, 133);"><strong>Transport :</strong></label>
                    <div class="col-10">
                        <input type="text" name="transport" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label" style="color: rgb(31, 95, 133);"><strong>Price :</strong></label>
                    <div class="col-10">
                        <input type="number" name="prix" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label"style="color: rgb(31, 95, 133);"><strong>Start :</strong></label>
                    <div class="col-10">
                        <input type="text" name="depart" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label"style="color: rgb(31, 95, 133);"><strong>Destination :</strong></label>
                    <div class="col-10">
                        <input type="text" name="destination" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label"style="color: rgb(31, 95, 133);"><strong>Start Date :</strong></label>
                    <div class="col-10">
                        <input type="date" name="date_debut" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label"style="color: rgb(31, 95, 133);"><strong>End Date :</strong></label>
                    <div class="col-10">
                        <input type="date" name="date_fin" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label"style="color: rgb(31, 95, 133);"><strong>Hotel :</strong></label>
                    <div class="col-10">
                        <select name="hotel">
                            <?php foreach($fetch as $elem){ ?>
                            <option value="<?php echo $elem["id"]; ?>"><?php echo $elem["nom_h"]; ?></option>
                            <?php }; ?>
                        </select>
                        <a href="add-hotel.php"><input type="button" value="Add New Hotels" class="btn btn-lg" style="color: white; background-color: #FE6825; margin-left: 5%;"></a>
                    </div>
                </div>
                <div class="form-group row" style="margin-left: 16%; margin-top: 4%;">
                    <div class="col-10">
                        <input type="submit" name="submit" value="Post" class="btn btn-lg" style="color: white; background-color: #FE6825;">
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