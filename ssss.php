
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
  
    <div  class="plante" id="plante">
            <form action="" method="Post" enctype="multipart/form-data">
                <h2>nouveau plante</h2>
                <input type="text" name="name" placeholder="NOM" required>
                <br>
                <input type="text" name='description' placeholder="Description" required>
                <br>
  
                <input type="file" id="file" name='image' style='display:none;' required>
                <label for="file">select une image</label>
                <button name='wass' class="btn">Envoyer</button> 
                <br><br>
                <a href="afficherplante.php">afficher la liste des plantes</a>
           </form>
        </div> 
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
    header('location:inde.php');
    }
   
    ?> 
    </body>
    </html>