<?php
 include('config.php');
      session_start();
     $idd = $_SESSION['user_id'];
    
     
   ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Ouvriers</title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'cairo';
            background-color: #f0f0f0;
            color:black; font-weight:bold;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #e9e9e9;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
            color: #0056b3;
        }
        .action-icons {
            display: flex;
            justify-content: space-around;
        }

        .action-icons a {
            margin: 0 5px;
            color: #007bff;
        }

        .action-icons a:hover {
            text-decoration: none;
            color: #0056b3;
        }
        img{
        width: 100px;
        border-radius: 50%;}
    </style>
</head>
<body>


    <div class="container">
        <h2>Liste des réunions</h2>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Heure</th>
                    <th>Titre</th>
                    <th>Lien</th>
                    <th>Lieu</th>
                    <th>Chef</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connexion à la base de données (à adapter selon votre configuration)
                include('config.php');

                // Récupération des données des responsables depuis la base de données
                $date=date("Y/m/d");
                $time=date("H:i:s",time());
                $query = "SELECT * FROM `reunion` WHERE idresponsable='$idd'  AND  date='$date'AND time >'$time' ";
                $result = $con->query($query);

                // Affichage des données dans le tableau
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $quer = "SELECT * FROM `chefs blocs` where id='$row[idchefbloc]'";
                        $resul = $con->query($quer);
                        $ro = $resul->fetch_assoc();
                       
                        echo "<tr>";
                       
                        echo "<td>{$row['date']}</td>";
                        echo "<td>{$row['time']}</td>";
                        echo "<td>{$row['titre']}</td>";
                        echo "<td>{$row['lien']}</td>";
                        echo "<td>{$row['lieu']}</td>";
                      
                        echo "<td>{$ro['nom'] } {$ro['prenom']}</td>";
                      
                        
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>Aucune Réunion trouvée.</td></tr>";
                }

                // Fermer la connexion MySQLi
                $con->close();
                ?>
                 <?php
    include('config.php');
   
   
    
    ?>
            </tbody>
        </table>
    </div>
    <center>
   <a href="inde.php">Back</a></center>

</body>
</html>
