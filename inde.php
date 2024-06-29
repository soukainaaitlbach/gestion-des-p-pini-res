<?php
 include('config.php');
      session_start();
     $idd = $_SESSION['user_id'];
      $select_user = mysqli_query($con, "SELECT * FROM `responsables` WHERE id= '$idd'") or die('query failed');
      if(mysqli_num_rows($select_user) > 0){
         $fetch = mysqli_fetch_assoc($select_user);
      };
      if(isset($_GET['logout'])){
        $idd = $_SESSION['user_id'];
        unset( $idd);
        session_destroy();
        header('location:login.php');
      }
   ?>

  
<!DOCTYPE html>
<html>
<head>
	<title>Responsable</title>
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
.projet button {
  border: 2px solid black;
    width: 35%;
    height: 45px;
    background: rgba(255, 255, 255, .2);
   position:relative;
    outline: none;
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: black;
    font-weight: 600;
   top: 7rem;
    text-align: center;
}
 .projet{border-radius: 12px;width: 400px; height:500px; 
                background: transparent;
                border: 2px solid rgba(255, 255, 255, .2);
                backdrop-filter: blur(9px); background-color:rgba(0,0,0,0.5); left:30%;}
                .projet h2{color: whitesmoke;}
                .projet input{ position:relative; border:none; accent-color: #fff;background: #fff;
    margin-right: 3px; margin-top:1rem; margin-bottom: 1px; padding:7px 9px; width:75%; top:4rem;border-radius: 12px; }
    .projet .wa{top:4rem; position:relative; padding:0.9rem; border:2px solid black; border-radius:10px 10px 10px; }
    .projet label{top:4rem; position:relative; color:white;}
    .pro{border-radius: 12px;width: 400px; height:78%;
    background: transparent;box-shadow: 0 0 10px black;
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(9px); background-color:#fff; left:30%;}
    .pro input{ position:relative; ; box-shadow: 0 0 10px black; border:none; accent-color: #fff;background: #fff;
    margin-right: 3px; margin-top:2rem; margin-bottom: 1px; padding:9px 9px; width:75%; top:4rem;border-radius: 12px; }
    .pro img{position:relative; box-shadow: 0 0 10px black;margin-top:2.8rem; border:2px solid black;}
    .chef{border-radius: 12px;width: 400px; height:500px;
    background: transparent;box-shadow: 0 0 10px black;
    border: 2px solid rgba(255, 255, 255, .2);font-family: arial, sans-serif;
    backdrop-filter: blur(9px); background-color:rgba(0,0,0,0.5); left:40%;}
    .chef input{ position:relative; ; box-shadow: 0 0 10px black; border:none; accent-color: #fff;background: #fff;
    margin-right: 3px; color:black; margin-top:2rem; margin-bottom: 1px; padding:9px 9px; width:75%; top:4rem;border-radius: 12px; }
   
    .chef  a{  top:4em;
     position:relative;}
     .plante  a{  top:2.5em;
     position:relative;}
     .reunion input {
    position: relative;
    accent-color: #fff;
    margin-right: 3px;
    padding: 7px;
    width: 75%;
    margin-bottom: 1rem;
    top: 9rem;
    border-radius: 12px;
}
     
    .div input{ position:relative; ; box-shadow: 0 0 10px black; border:none; accent-color: #fff;background: #fff;
    margin-right: 3px; margin-top:2rem; margin-bottom: 1px; padding:7px 9px; width:75%; top:4rem;border-radius: 12px; }
   
    .chef input{ position:relative; ; box-shadow: 0 0 10px black; border:none; accent-color: #fff;background: #fff;
    margin-right: 3px; margin-top:2rem; margin-bottom: 1px; padding:9px 9px; width:75%; top:4rem;border-radius: 12px; }
    .chef button{    text-align:center;
      width: 35%;
      height: 45px;
      background-color:rgba(0,0,0,0.5);
      border: none;
      outline: none;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, .1);
      cursor: pointer;
      font-size: 16px;
      color: whitesmoke;
    top:5rem;
     position:relative; 
     border: 2px solid rgba(255, 255, 255, .2);
    }
    .chef .RR{   top:5rem;
                position:relative; margin-right:0.3rem;    border-radius: 12px; background-color:rgba(0,0,0,0.5);
                box-shadow: 0 0 10px rgba(0, 0, 0, .1);border: 2px solid rgba(255, 255, 255, .2);padding:11px
               }
               .chef .ihop{border:none; top:5.6rem; position:relative;}
               .profile-sidebar{border-radius: 12px;background-color: #fff; height:400px;width:25%;  top:3rem; }  
               .waa{padding:0.9rem; border:2px solid black; border-radius:10px 10px 10px;top:7rem; position:relative; }
               .reunion label {
    color: white;top:7rem; position:relative;
}
.chef .we{padding:0.9rem; border:2px solid black; border-radius:10px 10px 10px;top:5.6rem; position:relative; color:black; }
.wi{padding:0.9rem; border:2px solid black; width:40%; border-radius:10px 10px 10px;top:4rem; margin-bottom:1rem; position:relative; color:black; }
   .div label{top:4rem; position:relative; color:white; }
   .bloc label{top:2rem; position:relative; color:white; }
   .woo{padding:0.9rem; border:2px solid black; width:30%; font-weight:bold; border-radius:10px 10px 10px;top:2rem; position:relative; color:black;} 
   .ssss {
    position: absolute;
    top: 12rem;
    border-radius: 20px 20px;
    background-color: #fff;
    width: 25%;
    height: 70%;
}
.ssss .ss {
    font-family: 'cairo';
    width: 40%;
    height: 45px;
    background: rgba(255, 255, 255, .2);
    outline: none;
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 18px;
    color: black;
    top: 6rem;
    box-shadow: 0 0 10px black;
text-align:center;
    position: relative;
    border: 2px solid black;
    left:9.5rem;
}
.reunion h2 {
    color: #fff;
    top:3rem; position:relative;
}
.div button {
  border: 2px solid black;
    width: 35%;
    height: 45px;
    background: rgba(255, 255, 255, .2);
   position:relative;
    outline: none;
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: black;
    font-weight: 600;
   top: 3.5rem;
    text-align: center;
    
}
.div h2 {
  color: #fff;
  top:3rem; position:relative;
}
.plante .faou{
  position:relative; color:white;
    font-style:'cairo'; background:none; border:none; box-shadow:none;
   top: 4rem; font-weight:bold;
   
}
.btn {
    border: 2px solid black;
    width: 35%;
    height: 45px;
    background: rgba(255, 255, 255, .2);
   position:relative;
    outline: none;
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: black;
    font-weight: 600;
   top: 2rem;
    text-align: center;
}

.bloc button {
    font-family: 'Cairo';
    width: 40%;
    height: 45px;
    background: rgba(255, 255, 255, .2);
    border: none;
    outline: none;
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 18px;
      color: whitesmoke;
    font-weight:bold;
    top: 4.6rem;
    position: relative;
    border: 2px solid black;
}
.bloc a {
    top: 2.5rem;
    position: relative;
    color: #127b8e;
}.bloc label {
  font-size: 16px;
      color: whitesmoke;
}
.ouvr button {
    text-align: center;
    width: 35%;
    height: 45px;
    background: rgba(255, 255, 255, .2);
    border: none;
    outline: none;
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 22px;
    color: black;
    top: 4.6rem;
    position: relative;
    border: 2px solid rgba(255, 255, 255, .2);
    margin-top: 0.9rem;
    font-weight: bold;
}
.ouvr input {
    position: relative;
    box-shadow: 0 0 10px black;
    border: none;
    accent-color: #fff;
    background: #fff;
    margin-right: 3px;
    margin-top: 2rem;
    margin-bottom: 1px;
    padding: 9px 9px;
    width: 75%;
    color: black;
    top: 3rem;
    border-radius: 12px;
    columns: rgba(255, 255, 255, .2);
    font-weight: bold;
}
.ouvr {
    border-radius: 12px;
    width: 400px;
    top: 1.2rem;
    position: relative;
    height: 590px;
    color: whitesmoke;
    background: transparent;
    box-shadow: 0 0 10px black;
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(9px);
    background-color: rgba(0, 0, 0, 0.5);
}
.ouvr .we{position:relative;top:5rem;  color:black;padding:1rem 1.5rem; border:2px solid black; border-radius:10px 10px;}
.ouvr .sou{position:relative;top:5rem; left:1.3rem; color:White;padding:1rem 1.5rem; }
.ouvr .ttt{position:absolute;top:49rem; left:2.4rem; border-radius: 12px; background-color:rgba(0,0,0,0.5);
  box-shadow: 0 0 10px rgba(0, 0, 0, .1);border: 2px solid rgba(255, 255, 255, .2);color:white;font-style:'cairo'; }
.ouvr  button{    text-align:center;
      width: 35%;
      height: 45px;
      background-color:rgba(0,0,0,0.5);
      border: none;
      outline: none;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, .1);
      cursor: pointer;
      font-size: 16px;
      color: whitesmoke;
    top:5rem;
     position:relative; 
     border: 2px solid rgba(255, 255, 255, .2);
     left:6.7rem;
    }
    .message{ border-radius:10px 10px; padding:7px 9px; width:360px; background-color:#EF5350;margin-bottom:0.3rem;}
   
.plante {
    border-radius: 12px;
    width: 400px;
    height: 65%;
    position: absolute;
    background: transparent;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(9px);
    background-color: rgba(0, 0, 0, 0.5);
    left: 40%;
    top: 19rem;
    color: whitesmoke;
}
.plante .foo{  position:relative; color:white;
    font-style:'cairo'; 
   top: 5.2rem; font-size:15px;
    background:none; border:none; box-shadow:none; }
   .plante .fo{position:relative;top:4rem; width:40%;right:1.3rem;  color:black;padding:1rem 1.5rem; border:2px solid black; border-radius:10px 10px;}
    /* Styles de base pour le bouton de recherche */
.search button {
    background-color: #007bff; /* Couleur de fond du bouton */
    color: #fff; /* Couleur du texte */
    border: none; /* Supprime les bordures */
    padding: 5px 10px; /* Ajuste le rembourrage */
    cursor: pointer; /* Curseur de type pointeur */
    border-radius: 4px; /* Coins arrondis */
    font-size: 14px; /* Taille de police */
}

/* Styles pour le survol du bouton */
.search button:hover {
    background-color: #0056b3; /* Couleur de fond au survol */
    color: #fff; /* Couleur du texte au survol */
}

/* Styles pour le bouton actif (pressé) */
.search button:active {
    background-color: #0056b3; /* Couleur de fond active */
    color: #fff; /* Couleur du texte active */
}
.again{position:absolute; top:10rem; right:3rem;}
.container {
    max-width: 500px;
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}
.main {
   font-style:'cairo'; font-weight:bold;
    
    background-color: #fff;
    
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.search-input{ position:relative;  border-radius:10px 10px; border:3px solid gray;  background-color: #f0f0f0; width: 170px;
  padding: 4px; color:black:
  
}
.reunion {
    border-radius: 12px;
    width: 400px;
    height: 570px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    background: transparent;
    top: 1rem;
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(9px);
    background-color: rgba(0, 0, 0, 0.5);
}
.reunion a{position:relative; top:2.7rem;}
.ssss img {
    border: 2px solid black;
    border-radius: 80%;
    top: 1rem;
    position: relative;
   
}
   </style>
</head>
<body>

   

<center>

  
</div></center>
<?php 
        $time=time();
        if($time<13){
            $message="Bonjour";
        }
        else $message="Bonsoir";
        ?>        
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name"><?php echo  $message ; ?><b><?php echo  $fetch['Prenom'] ; ?></b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<i class="fa fa-user" aria-hidden="true" onclick="profil()"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="<?php echo $fetch['image']; ?>">
				
			</div>
			<ul>
				<li>
					<a href="#">
						<i  aria-hidden="true" onclick="reunion()"></i>
						<span onclick="reunion()">Réunion</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i  aria-hidden="true" onclick="projet()"></i>
						<span onclick="projet()">Projet</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i aria-hidden="true" onclick="chef()"></i>
						<span onclick="chef()">Chef</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i  aria-hidden="true" onclick="div()"></i>
						<span onclick="div()">Chef-Bloc</span>
					</a>
				</li>
				<li>
					<a href="#">
					<i  aria-hidden="true"  onclick="ajouterplante()"> 	</i>
						<span  onclick="ajouterplante()">Plante</span>
					</a>
				</li>
        <li>
					<a href="#">
					<i  aria-hidden="true"  onclick="ajouterbloc()"> 	</i>
						<span  onclick="ajouterbloc()">Bloc</span>
					</a>
				</li> 
        <li>
					<a href="#">
						<i  aria-hidden="true" onclick="ouvr()"></i>
						<span onclick="ouvr()">Ouvrier</span>
					</a>
				</li>
        <li>
					<a href="#">
						<i  aria-hidden="true" onclick="graph()"></i>
						<span onclick="graph()">Graphiques</span>
					</a>
				</li>   
				<li>
					<a href="#">
						<i class="fa fa-power-off" aria-hidden="true"></i><a href="inde.php? logout=<?php echo $idd; ?>" onclick="return confirm('Déconnexion!');" ><span>Déconnexion</span></a>	
						
					</a>
				</li>
			</ul>
		</nav>
       
		<section class="section-1">
    <center>

<div id="chef" class="chef">
<form action="inserer.php" method="post" enctype="multipart/form-data">
         <h2>Nouveau chef</h2>
         <input type="text" name='nom' placeholder="NOM" required>
         <br>
         <input type="text" name='prenom' placeholder="Prenom" required>
         <br>
         <input type="email" name='email' placeholder="Email" required><br>
         <input type="password" name='password' placeholder="Password" required>
         <br>
       
         <?php
include('config.php');
$ze="SELECT * FROM `responsables` WHERE id='$idd'";
$ro=mysqli_query($con,$ze);
$Zow=mysqli_fetch_assoc($ro);
?> 
<input type="text" name='id-pepiniere' value='<?php echo $Zow['pepiniere']?>' style='display:none;' required><br>
         <input type="file" id="file"  name='image' style='display:none;' required><br>
         <label for="file" class="RR">Select une image</label>
         <button name='up'>Insérer</button>
         <br><br>
         <a href="afficherchef.php">afficher la liste des Chefs</a>
     </form> </div></center>



    <div  class="plante" id="plante">
  <center>
            <form action="insert.php" method="Post" enctype="multipart/form-data">
                <h2>Nouvelle Plante</h2>
                <input type="text" name="nam" placeholder="NOM" required>
                <br>
                <input type="text" name='description' placeholder="Description" required>
                <br>
                <label name='id-pepiniere'  class="foo">Choisir Une pépinière:</label>
                <select  name='id-pepiniere' class="fo" id="id-pepiniere">
   <?php

   include('config.php');
   $ze="SELECT * FROM `responsables` WHERE id='$idd'";
   $ro=mysqli_query($con,$ze);
   $Zow=mysqli_fetch_assoc($ro);
  $seeee="SELECT * FROM `pépinière` where id='$Zow[pepiniere]'";
  $re=mysqli_query($con,$seeee);
  while($row=mysqli_fetch_assoc($re)){
    echo"<option value='$row[id]' name='id'>$row[nom]</option>";
  }
  ?> </select>
                <input type="file" id="file" name='image' style='display:none;' required>
                <label for="file" class="faou">Select une image</label>
                <button name='wass' class="btn">Envoyer</button> 
                <br><br>
                <a href="afficherplante.php">afficher la liste des plantes</a>
           </form></center>
        </div> 
			
                    <div class="ssss" id="profil">
				<form action="up.php" method="post">
        <center><img src="<?php echo $fetch['image']; ?>" class="img-responsive" alt=""></center>
      <label for="NOM">Nom:</label><br>
       <input type="text" name="nom" id="NOM" value="<?php echo $fetch['nom']; ?>"><br> 
           <label for="Prenom">Prénom:</label><br>
            <input type="text" name="prenom" id="Prenom" value="<?php echo $fetch['Prenom']; ?>"><br>
           <label for="Email">Email:</label><br>
           <input type="text" name="email" id="Email" value="<?php echo $fetch['email']; ?>"> 
				</form>
           <button class="ss" onclick="home()" >Retour</button> 
          </div>
   

<div id="div" class="div">
            <form action="inserer.php" method="post" enctype="multipart/form-data">
               <center> <h2>Affectaion Chef-Bloc</h2>

                <input type="date" name='date'  calss="d" placeholder="Date" required>
                <br>
                <br>
                <label name='id-chef' >Choisir Un chef:</label>
                <select  name='id-chef' class="wi" id="id-chef">
   <?php
   include('config.php');
   $ze="SELECT * FROM `responsables` WHERE id='$idd'";
   $ro=mysqli_query($con,$ze);
   $Zow=mysqli_fetch_assoc($ro);
  $seeee="SELECT * FROM `chefs blocs`WHERE idpepiniere='$Zow[pepiniere]'";
  $re=mysqli_query($con,$seeee);
  while($row=mysqli_fetch_assoc($re)){
    echo"<option value='$row[id]'>$row[nom] $row[prenom]</option>";
  }
  ?> </select>
                
                <br>
              
                <label name='nom-blo' >Choisir Un bloc:</label>
                <select  name='nom-bloc' class="wi" id="nom-bloc">
   <?php
   include('config.php');
   $ze="SELECT * FROM `responsables` WHERE id='$idd'";
   $ro=mysqli_query($con,$ze);
   $Zow=mysqli_fetch_assoc($ro);
  $seeee="SELECT * FROM `bloc` WHERE idpepinier='$Zow[pepiniere]'";
  $re=mysqli_query($con,$seeee);
  while($row=mysqli_fetch_assoc($re)){
    echo"<option value='$row[nom]'>$row[nom]</option>";
  }
  ?> </select><br><br>
                <button name='upp'>Affecter</button></center>
                <br><br>
                
            </form></div>
      
<center>
<div class="projet" id="projet">
       <form action="inserer.php" method="post" enctype="multipart/form-data">
                <h2>Nouveau projet</h2>
                <input type="date" name='date' placeholder="Date de debut" required> <br>
                <input type="date" name='duree' placeholder="Dernier Delai" required><br>
                    <input type="text" name='titre' placeholder="titre" required><br><br>
                    <label for="chefid" >Choisir Un chef:</label>
<select name='chefid' class="wi" id="chefid">
   <?php
   include('config.php');
   $ze="SELECT * FROM `responsables` WHERE id='$idd'";
   $ro=mysqli_query($con,$ze);
   $Zow=mysqli_fetch_assoc($ro);
  $seeee="SELECT * FROM `chefs blocs` WHERE idpepiniere='$Zow[pepiniere]'";
  $re=mysqli_query($con,$seeee);
  while($row=mysqli_fetch_assoc($re)){
    echo"<option value='$row[id]'>$row[nom] $row[prenom]</option>";
  }
  ?> </select>
           <input type="text" name='respoid' placeholder="id du responsable"  value="<?php echo $idd ;?>" style='display:none;' required>
<br>

                <input type="text" name='description' placeholder="Description" required><br>
                <button name='sendd'>Envoyer</button>
            </form>
       </div></center>

   
       
           <!-- /*reunion*/ -->
           <center>
  <div id="reunion" class="reunion">
 
<form action="inserer.php" method="post" >
<h2>Planifier une réunion</h2>
<label for="chefid" >Choisir Un chef:</label>
<select name='chefid'  class="waa" id="chefid">
<?php
   include('config.php');
   $ze="SELECT * FROM `responsables` WHERE id='$idd'";
   $ro=mysqli_query($con,$ze);
   $Zow=mysqli_fetch_assoc($ro);
 
  
  $seeee="SELECT * FROM `chefs blocs` where idpepiniere='$Zow[pepiniere]'";
  $re=mysqli_query($con,$seeee);
  while($row=mysqli_fetch_assoc($re)){
  
    echo "<option value='$row[id]' name='chefid'>" . $row['nom'] . " " . $row['prenom']. "</option>";

  }
  ?> </select>
<input type="date" name='date' placeholder="date" required>
<br>
<input type="time" name='time' placeholder="date" required>
<br>
<input type="text" name='titre' placeholder="titre" class="tt" required><br>
<input type="texte" name='lien' placeholder="lien" required><br>
<input type="texte" name='lieu' placeholder="lieu" required><br>
<br>
<input type="text" name='respoid' placeholder="id du responsable"  value="<?php echo $idd ;?>" style='display:none;' required>
<br><br><center>
<button name='send' class="btn">Envoyer</button></center>
<a href="afficherreunion.php">afficher la liste des réunions</a>
</form></div></center>
 


 
   

     

		</center>
    <div class="bloc" id="bloc">
        <form action="inserer.php" method="post" enctype="multipart/form-data">
           <center>      
        <h2>Ajouter Un Bloc</h2>
                
                <input type="text" name='nom' placeholder="NOM" required>
                <br>
              <br>
                <label name='id-pepiniere' >Choisir Une pépinière:</label>
                <select  name='id-pepinier' class="woo" id="id-pepiniere">
              <?php
               include('config.php');
               $ze="SELECT * FROM `responsables` WHERE id='$idd'";
               $ro=mysqli_query($con,$ze);
               $Zow=mysqli_fetch_assoc($ro);
  
  $seeee="SELECT * FROM `pépinière` where id='$Zow[pepiniere]'";
  $re=mysqli_query($con,$seeee);
  while($row=mysqli_fetch_assoc($re)){
    echo"<option value='$row[id]'>$row[nom]</option>";
  }
  ?> </select>
                
               <center>
                <button name='uploadd'>Insérer</button></center>  
                <br><br>
                <a href="afficherbloc.php">afficher la liste des blocs</a></center> 
                
            </form></div>  
         
            <div class="ouvr" id="ouvr"> 
<center>
     <form action="inserer.php" method="post" enctype="multipart/form-data"> 
            <center><h2>Nouveau  ouvrier</h2>
                   <input type="date" name='date' placeholder="date-debut" required><br>
                <input type="text" name='nom' placeholder="Nom" required>
                <br>
                <input type="text" name='prenom' placeholder="Prenom" required>
              <br>
              <input type="email" name='email' placeholder="email" required><br>
              <input type="password" name='password' placeholder="password" required><br>
              <input type="text" name='grade' placeholder="grade:employé/employée/stagaire" required><br>
                
   <?php
   include('config.php');
   $ze="SELECT * FROM `responsables` WHERE id='$idd'";
   $ro=mysqli_query($con,$ze);
   $Zow=mysqli_fetch_assoc($ro);
  ?>
              <input type="text"  name='idpepiniere'  value='<?php echo $Zow['pepiniere']?>'style='display:none;' required>
              <input type="file" id="file" name='image' style='display:none;' required>
                <label for="file" class="ttt">Select une image</label>
                <button name='env'>Insérer</button></center>
                <br><br><br>
                <a href="afficherouvrier.php">afficher la liste des Ouvriers</a></center>
            </form></center>
   
            </div>
            <div id="bod">
            <div class="again">
         
            <div class="search">
    <form class="search" method="post">
        
        <select  name='id-pepiniere' class="search-input" id="id-pepiniere">
   <?php
   include('config.php');
   $sl="SELECT * FROM `responsables` WHERE id='$idd' ";
   $rech=mysqli_query($con,$sl);
   $roo=mysqli_fetch_assoc($rech);
  $seeee="SELECT * FROM `plants` WHERE idpepiniere='$roo[pepiniere]'";
  $re=mysqli_query($con,$seeee);
  while($row=mysqli_fetch_assoc($re)){
    echo"<option value='$row[id]' name='id'>$row[nom]</option>";
  }
  ?> 
  </select>
        <button type="submit" class="search-button" name="search_date"><i class="fas fa-search"></i></button>
    </form>
</div></div>
<div class="main">
<div style="width: 800px; margin: auto;">
        <canvas id="myChart"></canvas>
    </div>

    <?php
    include('config.php');
    if(isset($_POST['search_date'])){
      $idp=$_POST['id-pepiniere'];
   
    
   

    // Fetch data from the database
    $sql = "SELECT date, temperature, indicechaleur, humiditesol FROM mesure WHERE idplante='$idp' ORDER BY date";
    $result = mysqli_query($con,$sql);

    // Initialize arrays to hold chart data
    $dates = [];
    $measurement1 = [];
    $measurement2 = [];
    $measurement3 = [];

    // Process result set
   
        while ($row = mysqli_fetch_array( $result)) {
            $dates[] = $row['date'];
            $measurement1[] = (float) $row['temperature'];
            $measurement2[] = (float) $row['indicechaleur'];
            $measurement3[] = (float) $row['humiditesol'];
        }
        $con->close();}
        ?>
<script>
        // Chart data
        var dates = <?php echo json_encode($dates); ?>;
        var measurement1 = <?php echo json_encode($measurement1); ?>;
        var measurement2 = <?php echo json_encode($measurement2); ?>;
        var measurement3 = <?php echo json_encode($measurement3); ?>;

        // Create chart
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: dates,
                datasets: [{
                    label: 'Température',
                    data: measurement1,
                    borderColor: 'rgba(255, 99, 132, 1)',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    fill: false
                }, {
                    label: 'Chaleur',
                    data: measurement2,
                    borderColor: 'rgba(54, 162, 235, 1)',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    fill: false
                }, {
                    label: 'Humidité',
                    data: measurement3,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    fill: false
                  }]
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: 'Measurements Over Time'
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false
                    }
                },
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Date'
                        }
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Value'
                        }
                    }
                }
            }
        });
    </script>
</div>
</div>
      </section>

	</div>
    <script>
      document.getElementById('plante').style.display = 'none';
        function ouvr(){
              document.getElementById('ouvr').style.display='block';
              document.getElementById('bloc').style.display ='none';
                 document.getElementById('plante').style.display ='none';
              document.getElementById('reunion').style.display='none';
              document.getElementById('div').style.display='none';
               document.getElementById('profil').style.display='none';
               document.getElementById('projet').style.display='none';
               document.getElementById('chef').style.display='none';
               document.getElementById('bod').style.display='none';
               
               }
       function reunion(){
               document.getElementById('bloc').style.display ='none';
               document.getElementById('ouvr').style.display='none';
               document.getElementById('plante').style.display ='none';
               document.getElementById('reunion').style.display='block';
               document.getElementById('div').style.display='none';
               document.getElementById('profil').style.display='none';
               document.getElementById('projet').style.display='none';
               document.getElementById('chef').style.display='none';
               document.getElementById('bod').style.display='none'; 
               
            }
            document.getElementById('bod').style.display='none';       

document.getElementById('reunion').style.display = 'none';
document.getElementById('profil').style.display = 'none';
document.getElementById('projet').style.display = 'none';
document.getElementById('chef').style.display = 'none';
document.getElementById('div').style.display = 'none';
document.getElementById('chef').style.display = 'none';
document.getElementById('bloc').style.display = 'none';
document.getElementById('ouvr').style.display='none';
function home(){
  document.getElementById('plante').style.display = 'none';
document.getElementById('reunion').style.display = 'none';
document.getElementById('profil').style.display = 'none';
document.getElementById('projet').style.display = 'none';
document.getElementById('chef').style.display = 'none';
document.getElementById('div').style.display = 'none';
document.getElementById('chef').style.display = 'none';
document.getElementById('bloc').style.display = 'none';
document.getElementById('ouvr').style.display='none';
document.getElementById('bod').style.display='none';
}
              function profil(){ 
                 document.getElementById('plante').style.display = 'none';
                document.getElementById('bloc').style.display = 'none';
              document.getElementById('profil').style.display='block';
              document.getElementById('reunion').style.display='none';
               document.getElementById('div').style.display='none';
               document.getElementById('projet').style.display='none';
               document.getElementById('chef').style.display='none';
               document.getElementById('b').style.display='none';
               document.getElementById('bod').style.display='none';
               document.getElementById('ouvr').style.display='none';
            }
            
             
              function projet(){
                document.getElementById('plante').style.display ='none';
              document.getElementById('projet').style.display='block';
              document.getElementById('reunion').style.display='none';
               document.getElementById('profil').style.display='none';
               document.getElementById('div').style.display='none';
               document.getElementById('chef').style.display='none';
               document.getElementById('b').style.display='none';
               document.getElementById('bloc').style.display ='none';
               document.getElementById('ouvr').style.display='none';
               document.getElementById('bod').style.display='none';}
              function chef(){
              document.getElementById('chef').style.display='block';
              document.getElementById('reunion').style.display='none';
               document.getElementById('profil').style.display='none';
               document.getElementById('projet').style.display='none';
               document.getElementById('div').style.display='none';
               document.getElementById('b').style.display='none';
               document.getElementById('bloc').style.display = 'none';
               document.getElementById('plante').style.display = 'none';
               document.getElementById('ouvr').style.display='none';
               document.getElementById('bod').style.display='none';}
              function div(){
                document.getElementById('plante').style.display = 'none';
                document.getElementById('bloc').style.display = 'none';
              document.getElementById('div').style.display='block';
              document.getElementById('reunion').style.display='none';
               document.getElementById('profil').style.display='none';
               document.getElementById('projet').style.display='none';
               document.getElementById('chef').style.display='none';
               document.getElementById('b').style.display='none';
               document.getElementById('ouvr').style.display='none';
               document.getElementById('bod').style.display='none';}
           
               function ajouterplante(){
                document.getElementById('bloc').style.display = 'none';
            document.getElementById('plante').style.display="block";
                   document.getElementById('reunion').style.display='none';
               document.getElementById('profil').style.display='none';
               document.getElementById('projet').style.display='none';
               document.getElementById('chef').style.display='none';
               document.getElementById('div').style.display='none';
               document.getElementById('prof').style.display='none';
               document.getElementById('b').style.display='none';
               document.getElementById('ouvr').style.display='none';
               document.getElementById('bod').style.display='none';
        }
      
        function ajouterbloc(){
          document.getElementById('ouvr').style.display='none';
 document.getElementById('bloc').style.display="block";
 document.getElementById('plante').style.display="none";
 document.getElementById('bod').style.display='none';
 document.getElementById('plante').style.display = 'none';

document.getElementById('reunion').style.display = 'none';
document.getElementById('profil').style.display = 'none';
document.getElementById('projet').style.display = 'none';
document.getElementById('chef').style.display = 'none';
document.getElementById('div').style.display = 'none';
document.getElementById('prof').style.display = 'none';
document.getElementById('chef').style.display = 'none';
}
function graph(){
  document.getElementById('bod').style.display='block';
  document.getElementById('plante').style.display = 'none';
document.getElementById('reunion').style.display = 'none';
document.getElementById('profil').style.display = 'none';
document.getElementById('projet').style.display = 'none';
document.getElementById('chef').style.display = 'none';
document.getElementById('div').style.display = 'none';
document.getElementById('chef').style.display = 'none';
document.getElementById('bloc').style.display = 'none';
document.getElementById('ouvr').style.display='none';

}
              </script>
 
</body>
</html>