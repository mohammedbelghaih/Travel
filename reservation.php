<?php
    session_start();
    require_once("App/Database.php");
    $con=new Database();
    $con->getpdo();
    $id_p=$_GET['edit'];
    $query=$con->getpdo()->query("select * from offres, hotels where id_o = $id_p and hotels.id = offres.hotel");
    $fetch=$query->fetchAll();

    if(isset($_POST["submit"])){
        $persons=$_POST["persons"];
        $hotel_id=$_SESSION["hotel_id"];
        $arr= array("hotel_id" =>"", "offre_id" =>"", "email" =>"", "persons" =>"", "f_name" =>"", "l_name" =>"", "tel" =>"");
        $arr["hotel_id"]=$_SESSION["hotel_id"];
        $arr["offre_id"]=$_SESSION["offre_id"];
        $arr["email"]=$_POST["email"];
        $arr["persons"]=$_POST["persons"];
        $arr["f_name"]=$_POST["f_name"];
        $arr["l_name"]=$_POST["l_name"];
        $arr["tel"]=$_POST["tel"];

        $sel=$con->getpdo()->query("select * from hotels where id= $hotel_id");
        $ss=$sel->fetchAll();
        foreach($ss as $rm){
            if($rm["room"] >= $arr["persons"]){
                $sql="insert into reservation (hotel_id, offre_id, email, persons, f_name, l_name, tel) values(:hotel_id, :offre_id, :email, :persons, :f_name, :l_name, :tel)";
                $prepare=$con->getpdo()->prepare($sql);
                $execute=$prepare->execute([":hotel_id"=>$_SESSION["hotel_id"], ":offre_id"=>$_SESSION["offre_id"], ":email"=>$_POST["email"], ":persons"=>$_POST["persons"], ":f_name"=>$_POST["f_name"], ":l_name"=>$_POST["l_name"], ":tel"=>$_POST["tel"]]);
                    if($execute){
                        $update="update hotels set room = room - $persons";
                        $pr=$con->getpdo()->prepare($update);
                        $ex=$pr->execute();
                            if($ex){
                                echo " <script> alert('Your reservation has been successful. You will be contacted. Thank you') </script> ";
                                header("location: offre.php");
                            }else{
                            echo "nn";
                            }
                    }else{
                        echo "no";
                    }
            }else{
                echo " <script> alert('romms are not enough for this number of persons') </script> ";
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>VIAJE-Booking</title>
</head>
<body style="background-image: url(imgs/12.jpg); background-repeat: no-repeat;background-size: auto;max-width: 100%;">
<?php require_once("./header/nav.php") ?>
    <?php foreach($fetch as $elem){ 
        $_SESSION["hotel_id"]=$elem["id"];
        $_SESSION["offre_id"]=$elem["id_o"];
    ?>
    <section style="margin-left: 20%; margin-right: 20%; height: 200px; padding-top: 3%; margin-top: 5%;">
        <div class="col" style="text-align: center;">
            <h4 style="color: white; font-family: 'Poppins Medium'; font-weight: bold;text-align: center; ">BOOKING</h4<>
        </div>
        <center>
            <div style="border: 2px solid #FE6825;  border-width: 5px 50px 5px; width: 5%;"></div>
            <div><h4 class="center" style="margin-top: 3%; color: white;"><?php echo $elem["nom"]; ?></h4></div>
            <div><h5 style="color: white; "><span style="color: black; text-align: left;">Departure : </span><?php echo $elem["depart"]?></h5></div>
            <div><h5 style="color: white; "><span style="color: black; text-align: left;">To : </span><?php echo $elem["destination"]?></h5></div>
            <div><h5 style="color: white; "><span style="color: black; text-align: left;">Price : </span><?php echo $elem["prix"]?> MAD / for 1 person</h5></div>
        </center>
<?php } ?>
        <form method="POST" style="margin-top: 7%;">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="f_name" placeholder="First Name" style="margin-top: 3%;">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="l_name" placeholder="Last Name" style="margin-top: 3%;">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="number" class="form-control" name="tel" placeholder="Télé" style="margin-top: 3%;">
                </div>
                <div class="col">
                    <input type="email" class="form-control" name="email" placeholder="Email Address" style="margin-top: 3%;">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="number" class="form-control" name="persons" placeholder="N° Of People" style="margin-top: 3%;">
                </div>
            </div>
            <center>
                <button type="submit" class="btn" name="submit" value="BOOK" style="background-color: #FE6825; color: white; font-family: 'Poppins Medium'; margin-top: 4%;">Submit</button>
            </center>
        </form>
    </section>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>