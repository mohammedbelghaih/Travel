<?php
    session_start();
    require_once("../App/Database.php");
    $con=new Database();
    $con->getpdo();
    $id_p=$_GET["edit"];

        $query= "delete from offres where id_o = $id_p";
        $prepare=$con->getpdo()->prepare($query);
        $execute=$prepare->execute();
        if($execute){
            header("location: offre.php");
        }else{
            echo "no";
        }
  
?>
