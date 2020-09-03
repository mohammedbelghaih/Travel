<?php
session_start();
require_once("../App/Database.php");
$con=new Database();
$con->getpdo();

  if(isset($_POST["submit"])){
        $prepare=$con->getpdo()->prepare("insert into hotels (nom_h, room) values (:nom, :room)");
            $execute=$prepare->execute(["nom"=>$_POST["hotel"], "room"=>$_POST["room"]]);
        if($execute){
            header("location: add-offre.php");
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
    <title>Add-hotel</title>
</head>
<body style="">

<?php require_once("../header/nav.php") ?>
    <div class="container" style="margin-top: 15%;">
        <div class="row">
            <form method="POST" class="col" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-2 col-form-label"style="color: rgb(31, 95, 133);"><strong>Hotel :</strong></label>
                    <div class="col-10">
                        <input type="text" name="hotel" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label"style="color: rgb(31, 95, 133);"><strong>rooms :</strong></label>
                    <div class="col-10">
                        <input type="number" name="room" class="form-control">
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