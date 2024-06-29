<?php
    include('config.php');
    session_start();
    $ii=$_SESSION['id-o'];
    $result=mysqli_query($con, "SELECT * FROM `ouvrier` WHERE id='$ii'") or die ('query failed');
    if(mysqli_num_rows( $result) > 0){
        $fetch = mysqli_fetch_assoc( $result);
     }
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>ouvrier</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
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
    .soukaina input {
    position: relative;
    box-shadow: 0 0 10px black;
    border: 2px solid black;
    accent-color: #fff;
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
               .soukaina {
    border-radius: 12px;
    border: 2px solid black;
    width: 28%;
    height: 270px;
    position: absolute;
    background-color: transparent;
    box-shadow: 0 0 10px silver;
    text-align: center;
    top: 20rem;
    left: 35%;
}  
.ssss .ss {
    font-family: Arial, sans-serif;
    width: 30%;
    height: 45px;
    background: rgba(255, 255, 255, .2);
    outline: none;
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    top: 2.5rem;
    left: 16rem;
    position: relative;
    border:none;
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
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'cairo';
}
.rrr{ width: 28%;
    height: 310px;
    position: absolute;}
    .rrr img{top:0.5rem;position: relative; }
    .again{position:absolute; top:10rem; right:3rem;}

.main {
   font-style:'cairo';
    font-weight:bold;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.search-input{ position:relative;  border-radius:10px 10px; border:3px solid gray;  background-color: #f0f0f0; width: 170px;
  padding: 4px; color:black:
  
}
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
.div {
    border-radius: 12px;
    width: 400px;
    height: 380px;
    background: transparent;
    box-shadow: 0 0 10px black;
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(9px);
    background-color: rgba(0, 0, 0, 0.5);
    position:absolute;
    left: 35%;
    top:18rem;
}
.wi{position:relative;top:0.3rem;  color:black;padding:1rem 1.5rem; border:2px solid black; border-radius:10px 10px;}
.div button {
    text-align: center;
    width: 35%;
    height: 45px;
    background: rgba(255, 255, 255, .2);
    border: 2px solid black;
    outline: none;
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: black;
    top: 4rem;
    position: relative;
    
    margin-top: 0.9rem;
}
   .div label{ color:white;}
   .div input{   position: relative;
  
    box-shadow: 0 0 10px black;
    border: none;
    accent-color: #fff;
    background: #fff;
    margin-right: 3px;
    margin-top: 2rem;
    margin-bottom: 1px;
    padding: 9px 9px;
    width: 75%;
    top: 1.5rem;
    border-radius: 12px;}
    .div h2 {
    color: whitesmoke;
  
}
   </style>
</head>
<body>

   

<center>

    <?php 
        $time=time();
        if($time<13){
            $message="Bonjour";
        }
        else $message="Bonsoir";
        ?>
   
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
						<span onclick="monchef()">Mon Chef</span>
					</a>
				</li>
				<li>   
					<a href="#">
						<i  aria-hidden="true" onclick="monbloc()"></i>
						<span onclick="monbloc()"> Mon Bloc</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i  aria-hidden="true" onclick="obs()"></i>
						<span onclick="obs()">Observation</span>  
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
						<i class="fa fa-power-off" aria-hidden="true"></i><a href="inde.php?logout=<?php echo $ii; ?>" onclick="return confirm('Déconnexion!');" ><span>Déconnexion</span></a>	
						
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
				
           <center>  <button class="aa" onclick="home()" >Retour</button></center>
          </div></form> 
          <div class="blo" id="blo">
          <?php

include("config.php");
$ii=$_SESSION['id-o'];
$date=date("y/m/d");
$select="SELECT * FROM equipe WHERE (idouvrier='$ii' OR idouvrierr='$ii')  AND dateaffectation='$date'";
$res=mysqli_query($con,$select);
 if($row=mysqli_num_rows($res)>0){
   $r=mysqli_fetch_assoc($res);
   $idche=$r['idchefbloc'];
  $selectt="SELECT * FROM `chefs blocs` WHERE id='$idche'";
   $resu=mysqli_query($con,$selectt);
   $souk=mysqli_fetch_assoc($resu);
   echo"     <div class='rrr' id='rrr'>
            
              <center><img src='$souk[image]' class='img-responsive' ></center>
            <input type='text' value='NOM: $souk[nom]'><br>
           <input type='text' value='Prénom: $souk[prenom]'><br>
            <input type='text' value='Email: $souk[email]'><br>
 </div>";
 
 
 }
 else{ echo "vous n'avez pas encore été affecté à un bloc!";}
?>
</div> 
          
<div class="fouz" id="fouz">
<?php

include("config.php");
 $ii=$_SESSION['id-o'];
$date=date("y/m/d");
 $se="SELECT * FROM `equipe` WHERE (idouvrier='$ii' OR idouvrierr='$ii')  AND dateaffectation='$date'";
 $res=mysqli_query($con,$se);
 if($row=mysqli_num_rows($res)>0){
  $r=mysqli_fetch_assoc($res);
  $idchef= $r['idchefbloc'];

 $selectt="SELECT * FROM `affectationbloc` WHERE idchefbloc='$idchef' AND dateaffectation='$date'";
$resu=mysqli_query($con,$selectt);
 if($resu){
 $souka=mysqli_fetch_assoc($resu);}
 $var=$souka['nombloc'];

 $selectty="SELECT * FROM `ouvrier` WHERE id='$ii'";
 $resul=mysqli_query($con,$selectty);
 $soukaina=mysqli_fetch_assoc($resul);
 $variable=$soukaina['idpepinier'];
 $selecttyy="SELECT * FROM `pépinière` WHERE id='$variable'";
 $resul=mysqli_query($con,$selecttyy);

  $soukainaa=mysqli_fetch_assoc($resul);
 echo"<div id='rrro' class='soukaina'>
              <h1>MON BLOC</h1>
            <input type='text' value='Nom du bloc:$souka[nombloc]'><br>
            <input type='text' value='Nom de la pépinière:$soukainaa[nom]'><br>
           <input type='text' value='Adresse de de la pépinière: $soukainaa[adresse]'><br>
              </div>";
           
 }
 else{ echo "vous n'avez pas encore été affecté à un bloc!";}
?>
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

    // // Initialize arrays to hold chart data
    $dates = [];
    $measurement1 = [];
    $measurement2 = [];
    $measurement3 = [];

    // // Process result set
   
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

        <div id="div" class="div">
        <?php
   include('config.php');
        $date=date("y/m/d");?>
            <form action="insert.php" method="post" enctype="multipart/form-data">
               <center> <h2>Observation</h2>

                <input  name='date'  calss="d" value="<?php echo $date ;?>" style='display:none;' required>
                <br>
                <input  name='id'  calss="d"  value="<?php echo $ii ;?>" style='display:none;' required>
                <br>
                <br>
                <label >Choisir Une plante:</label>
                <select  name='idplante' class="wi" id="id-chef">
   <?php
   include('config.php');
   $ze="SELECT * FROM `ouvrier` WHERE id='$ii'";
   $ro=mysqli_query($con,$ze);
   $Zow=mysqli_fetch_assoc($ro);
  $seeee="SELECT * FROM `plants`WHERE idpepiniere='$Zow[idpepinier]'";
  $re=mysqli_query($con,$seeee);
  while($row=mysqli_fetch_assoc($re)){
    echo"<option value='$row[id]'>$row[nom]</option>";
  }
  ?> </select><br>
<input type="text" name="contenu" placeholder="Contenu du l'Observation">
<center>
<button name='send' class="btn">Envoyer</button></center>
</form></div>
		</section>

     
	
    <script>
     document.getElementById('div').style.display='none';
      document.getElementById('bod').style.display='none';
        document.getElementById('blo').style.display='none';
        document.getElementById('fouz').style.display='none';
      document.getElementById('profil').style.display='none';
                 function graph(){
  document.getElementById('bod').style.display='block';
  document.getElementById('blo').style.display='none';
        document.getElementById('fouz').style.display='none';
      document.getElementById('profil').style.display='none';
      document.getElementById('div').style.display='none';
}


      function monbloc(){
        document.getElementById('fouz').style.display='block';
        document.getElementById('bod').style.display='none';
              document.getElementById('profil').style.display='none';
              
              document.getElementById('blo').style.display='none';
              document.getElementById('espace').style.display='none';
              document.getElementById('div').style.display='none';
            } 
                  
      
               function home(){  
                document.getElementById('blo').style.display='none';
        document.getElementById('fouz').style.display='none';
      document.getElementById('profil').style.display='none';
      document.getElementById('bod').style.display='none';
      document.getElementById('div').style.display='none';
              } 
              
              function profil(){
                document.getElementById('bod').style.display='none';
              document.getElementById('profil').style.display='block';
              document.getElementById('blo').style.display='none';
              document.getElementById('fouz').style.display='none';
              document.getElementById('div').style.display='none';
            }
            
            function monchef(){
              document.getElementById('bod').style.display='none';
              document.getElementById('profil').style.display='none';
              document.getElementById('blo').style.display='block';
              document.getElementById('rrro').style.display='none';
              document.getElementById('div').style.display='none';
            }
           function obs{
            document.getElementById('div').style.display='block';
            document.getElementById('blo').style.display='none';
        document.getElementById('fouz').style.display='none';
      document.getElementById('profil').style.display='none';
      document.getElementById('bod').style.display='none';
           }
           
            
              </script>
 
</body>
</html>

