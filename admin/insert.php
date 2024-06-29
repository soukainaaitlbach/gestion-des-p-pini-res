<?php

include('config.php');


if(isset($_POST['send'])){
    $name=$_POST['nom'];
    $addresse=$_POST['addresse'];
    $select = mysqli_query($con, "SELECT * FROM `pépinière` WHERE nom='$name' AND adresse ='$addresse'") or die('query failed');

    if(mysqli_num_rows($select) > 0){
      $message[] ='Déja existe!';  
      header('location: admin.php');
    }
    else{
      $inser = "INSERT INTO pépinière (nom,adresse) VALUES ('$name','$addresse')";
      mysqli_query($con, $inser);
      header('location: admin.php');}}
  
 ?>

<?php

include('config.php');

if(isset($_POST['upload'])){
    $idp = $_POST['id-pepiniere'];
    $nom  = $_POST['nom'];
    $Prenom = $_POST['prenom'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'. $image_name);
    $image_up = "images/".$image_name;
   
    $insertt = "INSERT INTO  `responsables`(nom, Prenom ,email,password,image,pepiniere) VALUES ('$nom',' $Prenom','$Email','$Password','$image_up','$idp')";
    mysqli_query($con, $insertt);

  header('location:admin.php');}
    
    ?>
         <?php

include('config.php');
if(isset($_POST['update'])){
    $ID = $_POST['id'];
    $NAME  = $_POST['name'];
    $Prenom = $_POST['prenom'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'.$image_name);
    $image_up = "images/".$image_name;
    $idp= $_POST['idp'];
    $update = "UPDATE `responsables` SET nom='$NAME', Prenom='$Prenom', image='$image_up' ,email='$email',pepiniere='$idp',password='$password' WHERE id='$ID'";
    mysqli_query($con, $update);
    header('location: afficherresponsable.php');
}
?>