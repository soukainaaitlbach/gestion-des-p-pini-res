<?php

include('config.php');

if(isset($_POST['update'])){
    // $ID = $_POST['id'];
    // $NAME  = $_POST['name'];
    // $Prenom = $_POST['prenom'];
    // $email = $_POST['email'];
    // $Pass = $_POST['password'];
    // $IMAGE = $_FILES['image'];
    // $image_location = $_FILES['image']['tmp_name'];
    // $image_name = $_FILES['image']['name'];
    // move_uploaded_file($image_location,'images/'.$image_name);
    // $image_up = "images/".$image_name;
    // $update = "UPDATE responsables SET NOM='$NAME' , Prenom='$Prenom',Email='$email',Password='$Pass', image='$image_up' WHERE id=$ID";
    // mysqli_query($con, $update);
    $ID = $_POST['id'];
    $NAME  = $_POST['name'];
    $Prenom = $_POST['prenom'];
   
     $update = "UPDATE pépiniére SET nom='$NAME' ,addresse='$Prenom' WHERE id='$ID'";
     mysqli_query($con, $update);
    header('location: index.php');
}
if(isset($_POST['updatee']))
{
       $ID = $_POST['id'];
    $NAME  = $_POST['name'];
     $Prenom = $_POST['prenom'];
   $email = $_POST['email'];
    $Pass = $_POST['password'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
     $image_name = $_FILES['image']['name'];
   move_uploaded_file($image_location,'images/'.$image_name);
     $image_up = "images/".$image_name;
     $updatee = "UPDATE responsables SET nom='$NAME' , Prenom='$Prenom',email='$email',password='$Pass', image='$image_up' WHERE id='$ID'";
     mysqli_query($con, $updatee);  
}
if(isset($_POST['upda'])){
    $ID = $_POST['id'];
    $NAME  = $_POST['name'];
    $update = "UPDATE bloc SET idpepiniere='$NAME'  WHERE id='$ID'";
    mysqli_query($con, $update);
   header('location: index.php');


}
if(isset($_POST['updat'])){
    $ID = $_POST['id'];
    $desc  = $_POST['description'];
    $nom  = $_POST['name'];
    $update = "UPDATE plante SET nom='$NAME', description='$desc' WHERE id='$ID'";
    mysqli_query($con, $update);
   header('location: index.php');


}
?>
       <?php
       session_start();
if(isset($_POST['upd']))
{
       $ID =  $_SESSION['user_id'];
    $NAME  = $_POST['nom'];
     $Prenom = $_POST['prenom'];
   $email = $_POST['email'];
    
     $updatee = "UPDATE responsables SET nom='$NAME' , Prenom='$Prenom',email='$email'  WHERE id='$ID'";
     mysqli_query($con, $updatee); 
     header('location:inde.php');
}
?>