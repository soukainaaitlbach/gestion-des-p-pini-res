<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
   <style>
    body{background-color:#e0ffcd;}
.card {
    position:absolute;
  width: 25%;
  height:50%;
  padding: 5px;
  border: 1px solid #ccc;
  top:20%;
  left:31%;
  backdrop-filter:blur(1px); z-index: -1;
  border:2px solid black;
    border-radius:15px 15px ;
    background-color:#e0ffcd;
    background-image:url('ss-Photoroom.png-Photoroom.png');
    background-size:cover;
}
input{
    position:relative;
  width: 65%;
  padding: 7px;
  top:3rem;
  background:transparent;
  border:2px solid black;
    border-radius:10px 10px ;
    margin-bottom:0.6rem;
    font-weight:bold;
}
button{
    position:relative;
    background:transparent;
    width:20%; padding: 6.3px;margin-top:1rem; border:2px solid black;
    border-radius:10px 10px ; top:4.5rem; font-weight:bold;
}
label{ position:relative; font-weight:bold;border:2px solid black; margin-right:0.4rem; margin-top:0.5rem; border-radius:10px 10px; padding: 5px; top:4.5rem;}

   </style>
</head>
<body>
    <?php
    include('config.php');
    $ID=$_GET['id'];
    $up = mysqli_query($con, "select * FROM pépiniére where id ='$ID'");
    $data = mysqli_fetch_array($up);
    
    ?>
  
    <center>
   <div class="card">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>Modifier</h2>
                 <input type="text" name='id' value='<?php echo $data['id']?>'  style='display:none;'> 
                <br>
                 <input type="text" name='name' value='<?php echo $data['nom']?>'>
                <br>
                <input type="text" name='prenom' value='<?php echo $data['addresse']?>' -->
              
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file">mise a jour la photo</label>
                <button name='update' type='submit'>Modifier</button>
                <br><br>
                
            </form>
        </div> 
        
    </center>
</body>
</html>