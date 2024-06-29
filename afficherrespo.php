<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des responsables</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-V97W++2pVsPMBnd3ZbeZv3lDc0Xe8sJnfg9t1nLoZpSc52sF1Dxx3mFwP7j/oR9fzQzT9vFOt4Y8glc4xhu9lA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
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
<?php
session_start();
include('config.php');
if($idd)
{
    $b_nom=$_GET['id'];
    $sql="DELETE FROM `chefs blocs` WHERE id='$b_nom' ";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header('location:afficherrespo.php');
    }
}

?>
    <div class="container">
        <h2>Liste des responsables</h2>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Mot de passe</th>
                    <th>Image</th>
                    <th>Pépinière</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connexion à la base de données (à adapter selon votre configuration)
                include('config.php');

                // Récupération des données des responsables depuis la base de données
                $query = "SELECT * FROM `responsabless`";
                $result = $con->query($query);

                // Affichage des données dans le tableau
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['nom']}</td>";
                        echo "<td>{$row['Prenom']}</td>";
                        echo "<td>{$row['email']}</td>";
                        echo "<td>{$row['password']}</td>";
                        echo "<td><img src='{$row['image']}' alt='Image' style='max-width: 100px; max-height: 100px;'></td>";
                        echo "<td>{$row['pepiniere']}</td>";
                        echo "<td>";
                        echo "<a href='edit_responsable.php?id={$row['id']}'><i class='fas fa-pencil-alt' title='Modifier'>Modifier</i></a> | ";
                        echo "<a href='afficherrespo.php?idd={$row['id']}' onclick='return confirm(\"Voulez-vous vraiment supprimer ce responsable ?\")'>Supprimer</i></a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>Aucun responsable trouvé.</td></tr>";
                }

                // Fermer la connexion MySQLi
                $con->close();
                ?>
                
            </tbody>
        </table>
    </div>
   
</body>
</html>
