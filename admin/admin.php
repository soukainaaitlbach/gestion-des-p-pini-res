<?php
          session_start();
          $user_id= $_SESSION['id'];
        if(!isset($user_id)){
   header('location:admi.php');
}?>
<?php
 
      if(isset($_GET['logout'])){
        $idd = $_SESSION['user_id'];
        unset( $idd);
        session_destroy();
        header('location:admi.php');
      }
   ?>

  
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="index.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        
body {
    background-image: url('C:/Users/HP/Downloads/istockphoto-1211565306-1024x1024.jpg');
padding:0; margin:0;
 font-style:'cairo';
}
.mainn label{ top:6rem;position:relative;}




.navbar {
    
  background-color: black;
  color: #fff;
  padding: 15px 0;
}

.container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  color: #fff;
  text-decoration: none;
  font-size: 24px;
}

.nav-links {
  list-style: none;
  margin: 0;
  padding: 0;
}

.nav-links li {
  display: inline-block;
  margin-left: 20px;
}

.nav-links li a {
  color: #fff;
  text-decoration: none;
  transition: color 0.3s ease;
}

.nav-links li a:hover {
  color: #ffc107;
}

  .card {
   
}
.a {
    border: 2px solid black;
    border-radius: 20px 20px;
    width: 210px;
    height: 50px;
    padding: 80px 30px;
    font-style:'cairo';
    cursor: pointer;
    font-size: 16px;
    transition: all 0.3s ease;
}
.button-container {
  margin-top: 20px;
  
}

.button-container button {
  margin: 10px 10px;
  padding: 10px 10px;
  border-radius:10px 10px ;
  background-color: green;
  color: #fff;
  
  cursor: pointer;
}

.button-container button:hover {
  background-color: #0056b3;
}



.btn-primary {
  background-color: #007bff;
  color: #fff;}




body{background-image:url('pepiniere-.png');
background-repeat:no-repeat;
background-size:cover; }
img{width:100px; height:100px;}
.pepin{
    position:absolute;
    border:2px solid black;
    border-radius:10px 50px ;
    width:24%;
    height:50%;
    left:39%;
    box-shadow: 1px 1px 10px black;
    top:30%;
    backdrop-filter:blur(1px); z-index: -1;
}
.mainn{
    position:absolute;
    border:2px solid black;
    border-radius:10px 50px ;
    width:25%;
    height: 430px;;
    left:39%;
    box-shadow: 1px 1px 10px silver;
    top:15%;
    backdrop-filter:blur(1px); z-index: -1;
}
.mainn label{ top:4.5rem;position:relative; background:transparent;  border:none; font-style:'cairo'; font-weight:bold;  }

  
.pepin input{  
    position:relative;top:3rem;  border:2px solid black;
    border-radius:10px 10px ;
padding:0.5rem;  width:70%;
margin-bottom:0.5rem;
}
.mainn input,.we{  
    position:relative;top:3rem;  border:2px solid black;
    border-radius:10px 10px ; width:70%;
padding:0.5rem;
margin-bottom:0.5rem;

}
.we{ font-size:'cairo'; }
.pepin a{ position:relative; top:5rem; text-decoration:none; color:white; font-weight:bold; font-size:18px; font-family:'cairo'}

.mainn a{ position:relative; top:5rem; text-decoration:none; color:white; font-weight:bold; font-size:16px; font-family:'cairo'}

.pepin button{position:relative; top:4.5rem;background:transparent;   border:2px solid black;  font-size:16px;
  font-style:'cairo';
    border-radius:8px 8px ; width:45%; padding:0.5rem;}
.pepin button:hover{box-shadow:1px 1px 10px green;}
   
    .mainn button{position:relative; top:4.5rem;background:transparent;   border:2px solid black;
    border-radius:8px 8px ; width:30%; padding:0.5rem; color:white;}
     h2{position:relative; top:1.5rem; text-align:center; color:white; font-weight:bold;}
     span{font-weight:bold; font-size:23px; margin-left:0.4rem;}
     .log{left:69rem;position:relative; top:2px;}
     .message{ border-radius:10px 10px; padding:7px 9px; width:360px; background-color:#EF5350;margin-bottom:0.3rem;}
   
        </style>
        </head>
        <body>

  
        <nav class="navbar">
  
    <span onclick="home()">Home</span> 
  
 
</nav> 
<center>
<div class="card" id="card">
 
  <div class="button-container">
    

<button class="a" id="aa" onclick="ajouterpépinier()"> Ajouter Une Pépinière </button>
<button class="a"id="aa" onclick="responsables()">Ajouter Un Responsable</button> 



  </div>
</div>
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
} 
?>
       <div class="main" id="main">
        <div class="pepin">
          
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>Ajouter Une Pépinière</h2>
                <input type="text" name='nom' placeholder="Nom" required>
                <br>
                <input type="text" name='addresse' placeholder="adresse" required>
              <br>

                <button name='send'>Envoyer</button>
                <br><br>
                <a href="afficherpepiniere.php">afficher la liste des pépinières</a>
            </form>
            </div>
            </div> 
            
          
        <div class="mainn" id="mainn"> 
            <form action="" method="post" enctype="multipart/form-data">
                <h2>Ajouter Un Responsable</h2>
                <input type="text" name='nom' placeholder="NOM" required>
                <br>
                <input type="text" name='prenom' placeholder="Prenom" required>
                <br>
                <input type="email" name='email' placeholder="Email" required>
                <input type="password" name='password' placeholder="Password" required>
                <br>
               <center>
                <select  name='id-pepiniere' class="we" id="id-">
                <?php
                  include('config.php');
  $seeee="SELECT * FROM `pépinière`";
  $re=mysqli_query($con,$seeee);
  while($row=mysqli_fetch_assoc($re)){
    echo"<option value='$row[id]' name='id'>$row[nom]</option>";
  }
  ?>            </select></center>
                <input type="file" id="file" name='image' style='display:none;' required>
                <label for="file">Select une image</label>
                <button name='uploadd'>Envoyer</button>
                <br><br>
                <a href="afficherresponsable.php">afficher la liste des responsables</a>
            </form>
        </div>
        <?php

include('config.php');

if(isset($_POST['uploadd'])){
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
  }
    
    ?>
           

    <script>
   document.getElementById('main').style.display='none';


         function home()
      { document.getElementById('main').style.display='none';
         document.getElementById('mainn').style.display = "none";

 document.getElementById('card').style.display = "block";}
      
 document.getElementById('main').style.display='none';
         document.getElementById('mainn').style.display = "none";

 document.getElementById('card').style.display = "block";
   

        

 function ajouterpépinier() {
     document.getElementById('card').style.display = "none";

     document.getElementById('main').style.display = "block";
     document.getElementById('mainn').style.display = "none";
 }

 function responsables() {
     document.getElementById('card').style.display = "none";

    document.getElementById('main').style.display = "none";
     document.getElementById('mainn').style.display = "block";
 }
    </script>
        </body>
      </html>
