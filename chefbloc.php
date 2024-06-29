
<?php
 include('config.php');
      session_start();
     $idd =  $_SESSION['id'];
      $select_user = mysqli_query($con, "SELECT * FROM `chefs blocs` WHERE id= '$idd'") or die('query failed');
      if(mysqli_num_rows($select_user) > 0){
         $fetch = mysqli_fetch_assoc($select_user);
      };
   ?>
<?php 
        $time= date("H:i:s");
       
        if( $time< 13){
           $message="Bonjour";
        }
        else { $message="Bonsoir";}
        ?>
<!DOCTYPE html>
<html>
<head>
	<title>Chef Bloc</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>

 .projet{border-radius: 12px;width: 400px; height:500px; 
                background: transparent;
                border: 2px solid rgba(255, 255, 255, .2);
                backdrop-filter: blur(9px); background-color:rgba(0,0,0,0.5); left:30%;}
                .projet input{ position:relative; border:none; accent-color: #fff;background: #fff;
    margin-right: 3px; margin-top:1rem; margin-bottom: 1px; padding:7px 9px; width:75%; top:4rem;border-radius: 12px; }
  
    
    .pro{border-radius: 12px;width: 400px; height:78%;
    background: transparent;box-shadow: 0 0 10px black;
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(9px); background-color:#fff; left:30%;}
    .pro input{ position:relative; ; box-shadow: 0 0 10px black; border:none; accent-color: #fff;background: #fff;
    margin-right: 3px; margin-top:2rem; margin-bottom: 1px; padding:9px 9px; width:75%; top:4rem;border-radius: 12px; }
    .pro img{position:relative; box-shadow: 0 0 10px black;margin-top:2.8rem; border:2px solid black;}
    .chef{border-radius: 12px;width: 400px; height:530px;
    background: transparent;box-shadow: 0 0 10px black;
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(9px); background-color:rgba(0,0,0,0.5); left:30%;}
    .chef input{ position:relative; ; box-shadow: 0 0 10px black; border:none; accent-color: #fff;background: #fff;
    margin-right: 3px; margin-top:2rem; margin-bottom: 1px; padding:9px 9px; width:75%; top:4rem;border-radius: 12px; }
    .chef button{
        text-align:center;
      width: 35%;
      height: 45px;
      background: #fff;
      border: none;
      outline: none;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, .1);
      cursor: pointer;
      font-size: 16px;
      color: #333;
    top:4.6rem;
     position:relative; 
     border: 2px solid rgba(255, 255, 255, .2);
    }
    .chef  a{  top:4.8rem;
     position:relative;}
   
     
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
      color: #333;
    top:4.6rem;
     position:relative; 
     border: 2px solid rgba(255, 255, 255, .2);
    }
    .chef  label{   top:4.6rem;
                position:relative; margin-right:0.3rem;    border-radius: 12px; background-color:rgba(0,0,0,0.5);
                box-shadow: 0 0 10px rgba(0, 0, 0, .1);border: 2px solid rgba(255, 255, 255, .2);padding:11px
               }
               .ouvr.sou {
    padding: 0.9rem;
    width: 30%;
    top: 30rem;
    position: relative;
    color: white;
}     
 .search input{ position:relative;  border-radius:10px 10px; border:3px solid gray;  background-color: #f0f0f0; width: 200px;
  padding-left: 4px; color:black:
  
}

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

.mproj {
    float: left;
}
.ssss .aa {
    font-family: 'cairo';
    width: 30%;
    height: 45px;
    background: rgba(255, 255, 255, .2);
    outline: none;
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: black;
    top: 6rem;
    left: 0rem;
    position: relative;
    border: 2px solid black;
}
.ssss {
    position: absolute;
    top: 12rem;
    border-radius: 20px 20px;
    background-color: #fff;
    width: 25%;
    height: 68%;
}
.equipe .waa{padding:1rem; border: 2px solid black; border-radius: 10px 10px;margin-bottom:1rem;

}   
.equipe label{color:white;}
.equipe {
    border-radius: 12px;
    width: 370px;
   top:0.5rem;
    position: relative;
    height: 390px;
    left: 3%;
    color: black;
    background: transparent;
    box-shadow: 0 0 10px black;
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(9px);
    background-color: rgba(0, 0, 0, 0.5);
    
}
.equipe button {
    text-align: center;
    width: 35%;
    height: 45px;
    background: rgba(255, 255, 255, .2);
    border: none;
    outline: none;
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 19px;
    color: black;
    top: 0.5rem; font-style:'cairo';font-weight:bold;
    position: relative;
    border: 2px solid black;
    
}
.mesa {
    text-align: center;
    width: 55%;
    height: 30px;
    background: whitesmoke;
    border: none;
    outline: none;
    border-radius: 12px;
    box-shadow: 0 0 10px blue;
    cursor: pointer;
    font-size: 16px;
    color: black;
    top: 4.6rem;
    position: relative;
    border: 2px solid rgba(255, 255, 255, .2);
    margin-top: 0.9rem;
    padding:  1rem ;
    padding-bottom:1rem;
}
.rrr input {
    position: relative;
    box-shadow: 0 0 10px black;
    border: 2px solid black;
    font-style:'cairo';
    background: #fff;
    margin-right: 3px;
    margin-top: 1rem;
    margin-bottom: 1px;
    padding: 9px 9px;
    width: 75%;
    top: 1.5rem;
    border-radius: 12px;
    color: black;
}
.mpro button{ border: 2px solid black;
    width: 55%;
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
   top: 6rem;
    text-align: center;}
    .mpro {
    border-radius: 20px;
    border: 2px solid black;
    width: 230px;
    height: 270px;
    float: left;
    background-color: transparent;
    box-shadow: 0 0 10px silver;
    top:10rem;
    position:relative;
    margin-top: 2rem;
    margin-right: 1rem;
    margin-left: 4rem;
}
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
.body {
    display: flex;
}

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'cairo';
}

.rrr {
    border-radius: 12px;
    border: 2px solid black;
    width: 28%;
    height: 310px;
    position: absolute;
    background-color: transparent;
    box-shadow: 0 0 10px silver;
    text-align: center;
    top: 20rem;
    left: 35%;
}
    </style>
</head>
<body>

   

<center>

   
   
</div></center>
            
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name"><?php echo  $message ; ?> <b><?php echo  $fetch['prenom'] ; ?></b>
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
						<span onclick="mbloc()"> Mon Bloc</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i aria-hidden="true" onclick="mprojet()"></i>
						<span onclick="mprojet()">Mes Projets</span>
					</a>
				</li>
				
				<li>
					<a href="#">
					<i  aria-hidden="true"  onclick="equipee()"> 	</i>
						<span  onclick="equipee()">Mon équipe</span>
					</a>
				</li>
        <li>
					<a href="#">
						<i  aria-hidden="true" onclick="observation()"></i>
						<span onclick="observation()">Observation</span>
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
						<i class="fa fa-power-off" aria-hidden="true"></i><a href="inde.php?logout=<?php echo $idd; ?>" onclick="return confirm('Déconnexion!');" ><span>Déconnexion</span></a>	
						
					</a>
				</li>
			</ul>
		</nav>
        
		<section class="section-1">
		
           
      
      <div class="ssss" id="profil">
				<form action="up.php" method="post">
        <center><img src="<?php echo $fetch['image']; ?>" class="img-responsive" alt=""></center>
     
      <label for="NOM">Nom:</label><br>
       <input type="text" name="nom" id="NOM" value="<?php echo $fetch['nom']; ?>"><br> 
           <label for="Prenom">Prénom:</label><br>
            <input type="text" name="prenom" id="Prenom" value="<?php echo $fetch['prenom']; ?>"><br>
           <label for="Email">Email:</label><br>
           <input type="text" name="email" id="Email" value="<?php echo $fetch['email']; ?>"> 
				 </form>
             <center><button class="aa" onclick="home()" >Retour</button></center>
          </div>



   
      
          <div id="ro" class="ro"> 
<?php
          include('config.php');
   
   $date=date("y/m/d");
  
   $ii=$_SESSION['id'];
   $result=mysqli_query($con, "SELECT * FROM `reunion` WHERE idchefbloc='$ii' and date >='$date'") or die ('query failed');
   if(mysqli_num_rows( $result) > 0){
       $fetch = mysqli_fetch_assoc( $result);
       
       echo"
      
       <div class='rrr' > <center>
       <h2>  $fetch[titre] </h2>
    <input value='Date:  $fetch[date] '>
     <input  value='Heure:  $fetch[time] '>
  <input value='Lien: $fetch[lien]'>
  <input value='Lieu: $fetch[lieu]'>  </div>
  ";
    }
    
    else{ echo" <center><h1>aucun réunion n'a été planifiée</h1></center>"; }
   ?>
 </div>
 <center>
            
  

            <div class="espace" id="espace">
                    <?php
              include('config.php');
              $date=date("y/m/d");
              $ii=$_SESSION['id'];
              $result=mysqli_query($con, "SELECT * FROM `affectationbloc` WHERE idchefbloc='$ii' AND dateaffectation ='$date'") or die ('query failed');
              if(mysqli_num_rows( $result) > 0){
                  $fetch = mysqli_fetch_assoc( $result);
                  $i=$fetch['nombloc'];
 $resu=mysqli_query($con, "SELECT * FROM `chefs blocs` WHERE id ='$ii'") or die ('query failed'); 
        
        $k= mysqli_fetch_assoc( $resu);
       
    $pe= $k['idpepiniere'];
     $resultt=mysqli_query($con, "SELECT * FROM `pépinière` WHERE id='$pe' ") or die ('query failed');
     $fet = mysqli_fetch_assoc( $resultt);
     echo"    <div class='ee'>
         <h1>Bloc d'aujourd'hui</h1>
      
   <input value='Nom du bloc:$fetch[nombloc] '> 
   <input value='Nom du pépinière:$fet[nom]'>
   <input value='Adresse:$fet[adresse] '> </div>
   ";
  }
   

  else{
     echo" <div class='e'>est vide</div>";
  }
 ?>

</div>
 </center>
 <div class="mproj" id="mproj">
 <div class="again">
<div class="search">
    <form class="search" method="post">
        <input class="search-input" type="date" name="date">
        <button type="submit" class="search-button" name="search_date"><i class="fas fa-search"></i></button>
    </form>
</div></div>
<?php
if (isset($_POST['search_date'])) {
    $search_date = $_POST['date'];
    $sql = "SELECT * FROM projet WHERE debut='$search_date'";

    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows( $result) > 0){
       while($fetch = mysqli_fetch_assoc( $result)) {
        if($fetch['date_fin'] < $date)
        {$message=" Terminé";}
        else if ($fetch['date_fin']>= $date)
        {$message = "en cours";}
        else{$message=" en file d attende";}
        echo" 
        
        <div class='mpro'>
        <center>
        <p>Titre:  $fetch[titre] </p>
     <p>Date_debut:  $fetch[debut] </p>
   <p>Date-fin: $fetch[date_fin] </p>br><div class='mesa'>
   " .$message;echo"</div></div></center>";
 
    }}
     else{ echo" <div class='e'>est vide </div>";}}
    
      $sqll = "SELECT * FROM projet ";

      $resull = mysqli_query($con,$sqll);
      if(mysqli_num_rows( $resull) > 0){
        while($fetch = mysqli_fetch_assoc( $resull)) {
         if($fetch['date_fin'] < $date)
         {$message=" terminé";}
         else if ($fetch['date_fin']>= $date)
         {$message = "en cours";}
         else{$message=" en file d attende";}
         echo" 
         
         <div class='mpro'>
         <center>
         <p>titre:  $fetch[titre] </p>
      <p>Date-debut:  $fetch[debut] </p>
    <p>Date-fin: $fetch[date_fin] </p>br><button>
    " .$message;echo"</button></div></center>";
  
     }
     }
     
    ?></div>
         
        

  
              
            <div class="equipe" id="equipee">
            <form action="insert.php" method="post" >
              <center>
                <h2>Mon équipe</h2>
                
              <input type="date" name='date' placeholder="date" required><br>
              <input type="text" name='idch' placeholder="id du chef"  value="<?php echo $idd ;?>" style='display:none;' required>
<br><br><br>
<label for="idou"  >Choisir Un chef:</label>
<select  class="waa" name="idou" id="idou">
   <?php
   include('config.php');
   $date=date("Y/m/d");
   $ze="SELECT * FROM `chefs blocs` WHERE id='$idd'";
   $ro=mysqli_query($con,$ze);
   $Zow=mysqli_fetch_assoc($ro);


  $seeee=("SELECT * FROM `ouvrier` where id NOT IN (SELECT idouvrier FROM equipe WHERE dateaffectation ='$date') AND id NOT IN (SELECT idouvrierr FROM equipe WHERE dateaffectation ='$date') AND idpepinier='$Zow[idpepiniere]'");
  $re=mysqli_query($con,$seeee);
  while($row=mysqli_fetch_assoc($re)){
    echo"<option value='$row[id]'>$row[nom] $row[prenom]</option>";
  }
  ?> </select><br>
           <label for="idouv" >Choisir Un chef:</label>
<select name='idouv'  class="waa" id="idouv">
   <?php
  include('config.php');
  $date=date("Y/m/d");
  $ze="SELECT * FROM `chefs blocs` WHERE id='$idd'";
  $ro=mysqli_query($con,$ze);
  $Zow=mysqli_fetch_assoc($ro);
 $seeeei=("SELECT * FROM `ouvrier` where id NOT IN (SELECT idouvrier FROM equipe WHERE dateaffectation ='$date')AND id NOT IN (SELECT idouvrierr FROM equipe WHERE dateaffectation ='$date') AND idpepinier='$Zow[idpepiniere]'");
 $rei=mysqli_query($con,$seeeei);
 while($rowi=mysqli_fetch_assoc($rei)){
   echo"<option value='$rowi[id]'>$rowi[nom] $rowi[prenom]</option>";
 }

  ?>
  </select><br>  
              
                <button name='envo'>Inserer</button>
                <br><br></center>
               
            </form>
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
                    label: 'Temperature',
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
                    label: 'Humidite',
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

     
	
    <script>
      
      document.getElementById('profil').style.display='none';
         document.getElementById('bod').style.display='none';
        
          document.getElementById('espace').style.display='none';
         document.getElementById('mproj').style.display='none';
                   document.getElementById('equipee').style.display='none';
                   
       function profil(){
        document.getElementById('profil').style.display='block';
              document.getElementById('ro').style.display='none';
              document.getElementById('espace').style.display='none';
              document.getElementById('equipee').style.display='none';
           
              document.getElementById('bod').style.display='none';
            }

               document.getElementById('chef').style.display='none';
               document.getElementById('mproj').style.display  = 'none';
               function reunion(){
                document.getElementById('ro').style.display='block';
              document.getElementById('profil').style.display='none';
              document.getElementById('espace').style.display='none';
              document.getElementById('equipee').style.display='none';
              document.getElementById('ouvr').style.display='none';
              document.getElementById('mproj').style.display='none';
              document.getElementById('bod').style.display='none';
            }
               function home(){  
                document.getElementById('mproj').style.display='none';
                   document.getElementById('equipee').style.display='none';
                   document.getElementById('profil').style.display='none';
               document.getElementById('espace').style.display='none';
               document.getElementById('chef').style.display='none';
               document.getElementById('mproj').style.display  = 'none';
               document.getElementById('bod').style.display='none';
               document.getElementById('ro').style.display='none';
              }
              
             
            
             
              function mbloc(){
                document.getElementById('ro').style.display='none';
              document.getElementById('profil').style.display='none';
              document.getElementById('espace').style.display='block';
              document.getElementById('equipee').style.display='none';
              document.getElementById('mproj').style.display='none';
              document.getElementById('bod').style.display='none';
            }
              function mprojet(){
                document.getElementById('mproj').style.display='block';
            
                document.getElementById('ro').style.display='none';
              document.getElementById('profil').style.display='none';
               document.getElementById('espace').style.display='none';
               document.getElementById('chef').style.display='none';
             
               document.getElementById('equipee').style.display='none';
               document.getElementById('bod').style.display='none';
              }
             
               function equipee(){
                document.getElementById('mproj').style.display='none';
                document.getElementById('equipee').style.display='block';
                document.getElementById('ro').style.display='none';
              
                   document.getElementById('profil').style.display='none';
              document.getElementById('espace').style.display='none';
               document.getElementById('chef').style.display='none';
               
  document.getElementById('bod').style.display='none';
               
               
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
document.getElementById('ro').style.display='none';

}
              </script>
 
</body>
</html>

