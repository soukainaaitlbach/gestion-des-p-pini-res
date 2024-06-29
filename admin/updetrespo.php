
<?php
    include('config.php');
    $ID=$_GET['id'];
    $up = mysqli_query($con, "SELECT * from `responsables` where id ='$ID'");
    $data = mysqli_fetch_array($up);
    
    ?><!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Responsable</title>
    <style>

body {

            font-family: 'cairo';
            
            color:black; font-weight:bold;
     
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    max-width: 500px;
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}
.main {
    max-width: 400px;
    margin: 20px auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
h2 {
   
    font-weight: 300;
    text-align: center;
    color: #333;
    margin-bottom: 30px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    font-size: 16px;
    font-weight: 300;
    color: #555;
    margin-bottom: 8px;
}

input[type="text"],
input[type="file"] {
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    transition: border-color 0.3s ease-in-out;
   
   
   font-family: 'cairo';
  
   color:black; font-weight:bold;
}

input[type="file"] {
    display: none;
}

input[type="text"]:focus,
input[type="file"]:focus {
    outline: none;
    border-color: #007bff;
}

.file-upload {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}

.file-upload input[type="file"] + label {

      
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}
select{  
    color: black;font-style:'cairo'; font-size:14px; font-weight:bold;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;}
.file-upload input[type="file"] + label:hover {
    background-color: #0056b3;   
}

button {
    padding: 12px ;
    background-color: #007bff;
    color: Black; width: 300px; margin-top:2rem;text-align:center;
    border: none;font-weight:bold; font-style:'cairo';
    border-radius: 4px;margin-left:2rem;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

button:hover {
    background-color: #0056b3;
}

a {
    text-decoration: none;
    color: #007bff;
    font-weight: 300;
    text-align: center;
    display: block;
    margin-top: 20px;
    transition: color 0.3s ease-in-out;
}

a:hover {
    color: #0056b3;
}

p {
    font-size:}




</style>
</head>
<body>
   
 
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>Modifier les informations du Responsable</h2>
                <input type="text" name='id' value='<?php echo $data['id']?>'  style='display:none;'>
                <br>
                <input type="text" name='name' value='<?php echo $data['nom']?>'>
                <br>
                
                <input type="text" name='prenom' value='<?php echo $data['Prenom']?>'>
                <br>
                <input type="text" name='email' value='<?php echo $data['email']?>'>
                <br>
                <input type="text" name='password' value='<?php echo $data['password']?>'>
                <br>
                <select  name='idp' class="we" id="id-">
                <?php
                  include('config.php');
  $seeee="SELECT * FROM `pépinière`";
  $re=mysqli_query($con,$seeee);
  while($row=mysqli_fetch_assoc($re)){
    echo"<option value='$row[id]'>$row[nom]</option>";
  }
  ?>           
   </select>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file">Image</label>
                <button name='update' type='submit'>Enregistrer les modifications</button>
                <br><br>
               
            </form>
        </div>
   
    </center>
</body>
</html>