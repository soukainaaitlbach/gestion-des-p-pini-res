<?php
/* L'insertion d un chef de bloc*/ 
include('config.php');

if(isset($_POST['up'])){
    $idp = $row['id-pepiniere'];
    $nom  = $_POST['nom'];
    $Prenom = $_POST['prenom'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'. $image_name);
    $image_up = "images/".$image_name;
    $insertt = "INSERT INTO `chefs blocs` (`nom`, `prenom`, `email`, `password`, `image`, `idpepiniere`) VALUES ('$nom','$Prenom','$Email','$Password','$image_up','$idp')";
    mysqli_query($con, $insertt);
    header('location: inde.php');}
   
    ?>
<?php

include('config.php') ;
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
};?>

        <?php
    /* reunion*/
include 'config.php';
  if(isset($_POST['send'])){
    $date=$_POST['date'];
    $tim=$_POST['time'];
    $time=date("H:i",strtotime($tim));
    $respoid=$_POST['respoid'];
    $titre=$_POST['titre'];
    $lien=$_POST['lien'];
    $lieu=$_POST['lieu'];

    $chefid = $_POST['chefid'];

    $insert = "INSERT INTO  reunion (date,time, titre,lien,lieu,idchefbloc,idresponsable) VALUES ('$date','$time','$titre',' $lien','$lieu','$chefid','$respoid')";
    mysqli_query($con, $insert);
    header('location: inde.php');
}
?>
   <?php
    /* chef-bloc*/
include ('config.php');
  if(isset($_POST['upp'])){
    $date=$_POST['date'];
    $chefid=$_POST['id-chef'];
    $blocid=$_POST['nom-bloc'];
              
    $insert = "INSERT INTO  affectationbloc (dateaffectation,idchefbloc,nombloc) VALUES ('$date','  $chefid',' $blocid')";
    mysqli_query($con, $insert);
    
    header('location: inde.php');} 


?>
<?php
/* projet*/
include ('config.php');
if(isset($_POST['sendd'])){
  $date=$_POST['date'];
  
  $respoid=$_POST['respoid'];
  $titre=$_POST['titre'];
  $duree=$_POST['duree'];
  $description=$_POST['description'];
  $chefid = $_POST['chefid'];

  $insert = "INSERT INTO  `projet` (titre,debut,date_fin ,description,idchefbloc,idresponsable) VALUES ('$titre','$date',' $duree',' $description','$chefid','$respoid')";
  mysqli_query($con, $insert);
  header('location: inde.php');
}
?>
     <?php
   /*plants*/
include('config.php');
 if(isset($_POST['wass'])){
  
    $nom = $_POST['name'];
   $description=$_POST['description'];
   $IMAGE = $_FILES['image'];
   $image_location = $_FILES['image']['tmp_name'];
   $image_name = $_FILES['image']['name'];
   move_uploaded_file($image_location,'images/'. $image_name);
   $image_up = "images/".$image_name;
   $ion = " INSERT INTO `plants`  ( `nom`, `description`, `image`)  VALUES ( '$nom',' $description',' $image_up')";
    mysqli_query($con, $ion) ;
    header('location: inde.php'); }
   
    ?>
      <?php
   /*bloc*/
include('config.php');
if(isset($_POST['uploadd'])){
    $nom = $_POST['nom'];
   $de=$_POST['id-pepinier'];
   $ioo = "INSERT INTO `bloc` (nom, idpepinier) VALUES ('$nom','$de')";
    mysqli_query($con, $ioo) ;
    header('location: inde.php'); }
   
    ?>
     <!-- /*ouvrier*/ -->
    <?php
include('config.php');

if(isset($_POST['env'])){
    $nom = $_POST['nom'];
   $prenom=$_POST['prenom'];
   $grade = $_POST['grade'];
   $date = $_POST['date'];
   $id = $_POST['id'];
   $email = $_POST['email'];
   $pass = $_POST['password'];
   $IMAGE = $_FILES['image'];
   $image_location = $_FILES['image']['tmp_name'];
   $image_name = $_FILES['image']['name'];
   move_uploaded_file($image_location,'images/'. $image_name);
   $image_up = "images/".$image_name;
   if( $grade=="stagaire" || $grade=="employé"||$grade=="employée" ){
    $insertt = "INSERT INTO `ouvrier`  (nom, prenom, grade,datedebut,idpepinier,email,password,image) VALUES ( '$nom','$prenom','$grade','$date', '$id','$email','$pass','$image_up')";
    mysqli_query($con, $insertt);
    // header('location: chefbloc.php'); 
    }
else{echo "le grade de l ouvrier est incorrect! ";}
}
    ?>
