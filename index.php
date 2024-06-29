<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .card{border-radius:10px 10px;
        border:1px solid black;
         float: left;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;}
            img{ width: 100%; 
            height: 200px;  }
            .main{ position:absolute;
            top:0.5rem; right:0.9rem;
          width: 74%; height:100%;
        border:1px solid silver;
      background-color:silver; border-radius:10px 10px;}
      .side{
      position: fixed;
        top:0px;
        width:20%; height:100%; left:0px;
        border:1px solid silver;
      background-color:silver; border-radius:10px 10px;box-shadow: 1px 1px 10px silver;
      }
      .mainn{
    width: 40%;
    box-shadow: 1px 1px 10px silver;
    margin-top: 45px;
    padding: 10px;
}
h2{
    font-family: 'Cairo', sans-serif;
}
input{
    margin-bottom: 10px;
    width: 60%;
    padding: 5px;
    font-family: 'Cairo', sans-serif;
    font-size: 15px;
    font-weight: bold;
}
.ca{border-radius:10px 10px;
        border:1px solid black;
         float: left;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;}
    </style>
</head>
<body>
<div class='main'>
<?php

include('config.php');

if(isset($_POST['up'])){
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
   
    $insertt = "INSERT INTO `chefs blocs`  (nom, prenom ,email,password,image) VALUES ('$nom',' $Prenom','$Email','$Password','$image_up')";
    mysqli_query($con, $insertt);
    header('location: index.php');}
   
    ?>
<?php
include 'config.php';




  if(isset($_POST['send'])){
    $date=$_POST['date'];
    $chefid=$_POST['chefid'];
    $respoid=$_POST['respoid'];
    $titre=$_POST['titre'];
    $virtuelle=$_POST['virtuelle'];
    $lien=$_POST['lien'];
    $lieu=$_POST['lieu'];
    $physique=$_POST['physique'];
   
    $insert = "INSERT INTO  reunion (date, titre ,virtuelle,lien,lieu,physique,idchefbloc,idresponsable) VALUES ('$date',' $titre',' $virtuelle',' $lien','$lieu','$physique','$chefid','$respoid')";
    mysqli_query($con, $insert);
    header('location: index.php');
}
if(isset($_POST['sende'])){
  $date=$_POST['date'];
  $chefid=$_POST['chefid'];
  $respoid=$_POST['respoid'];
  $titre=$_POST['titre'];
  $duree=$_POST['duree'];
  $description=$_POST['description'];
 
  $insert = "INSERT INTO  projet (titre,debut,durée ,description,idchefbloc,idresponsable) VALUES (' $titre','$date',' $duree',' $description','$chefid','$respoid')";
  mysqli_query($con, $insert);
  header('location: index.php');
}

      ?>
      
      
      
                <h2>planifier une reunion</h2>
      
             
                <input type="date" name='date' placeholder="date" required>
                <br>
                <input type="text" name='chefid' placeholder="id du chef" required><br>
                <input type="text" name='respoid' placeholder="id du responsable" required>
                <br>
                <input type="text" name='titre' placeholder="titre" required>
                <input type="texte" name='virtuelle' placeholder="virtuelle" required>
                <input type="texte" name='lien' placeholder="lien" required>
                <input type="texte" name='lieu' placeholder="lieu" required>
                <input type="text" name='physique' placeholder="physique" required>
                <br>
                <button name='send'>Envoyer</button>
            </form></div>
            <div class="projet" id="projet">
       <form action="" method="post" enctype="multipart/form-data">
                <h2>affecter un projet</h2>
      
                 <input type="text" name='titre' placeholder="titre" required>
                <input type="date" name='date' placeholder="date de debut" required>
                <br>
                <input type="text" name='chefid' placeholder="id du chef" required><br>
                <input type="text" name='respoid' placeholder="id du responsable" required>
                <br>
                <input type="date" name='duree' placeholder="durée" required><br>
                <input type="text" name='description' placeholder="description" required>
                <button name='sende'>Envoyer</button>
            </form>
       </div>
       <div class="main" id="main">
            <form action="" method="post" enctype="multipart/form-data">
                <h2>ajouter un chef</h2>
      
                <img src="logo.png" alt="logo" width="450px">
                <input type="text" name='nom' placeholder="NOM" required>
                <br>
                
                <input type="text" name='prenom' placeholder="Prenom" required>
                <br>
                <input type="email" name='email' placeholder="Email" required>
                <input type="password" name='password' placeholder="Password" required>
                <br>
                <input type="text" name='id-pepiniere' placeholder="id-pépinière" required><br>
                <input type="file" id="file" name='image' style='display:none;' required>
                <label for="file">select une image</label>
                <button name='up'>up✅</button>
                <br><br>
                <a href="affichierrespo.php">afficher la liste des responsables</a>
            </form>
      <div class="side">
      <button onclick="profile()">mon profile</button>
      
      <button onclick="reunion()">reunion</button>
      <button onclick="affecter()">affecter</button>
      </div>
     </body>
     </html>
   