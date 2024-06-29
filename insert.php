<?php
   /*plants*/
include('config.php');
 if(isset($_POST['wass'])){
    $pep=$_POST['id-pepiniere'];
    $nom = $_POST['nam'];
   $description=$_POST['description'];
   $IMAGE = $_FILES['image'];
   $image_location = $_FILES['image']['tmp_name'];
   $image_name = $_FILES['image']['name'];
   move_uploaded_file($image_location,'images/'. $image_name);
   $image_up = "images/".$image_name;
   $ion = "INSERT INTO `plants`(nom,`description`,`image`,idpepiniere)VALUES ('$nom','$description','$image_up','$pep')";
    mysqli_query($con,$ion) ;
    header('location:inde.php');
    }
   
    ?> 
     /*equipe*/
             <?php

include('config.php');
if (isset($_POST['envo'])) {
    $date = $_POST['date'];
    $id = $_POST['idch'];
    $idou = $_POST['idou'];
    $idouv = $_POST['idouv'];

    $insertt = "INSERT INTO `equipe`  (dateaffectation, idchefbloc, idouvrier,idouvrierr) VALUES ( '$date','$id','$iii',' $ig')";
    mysqli_query($con, $insertt);
    header('location: chefbloc.php');}

    ?>