<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Plante</title>
    <style  type="text/css">
        label{
            display:inline-block;
            width: 150px;
            text-align: right;
            padding-top: 10px;
            padding-bottom: 10px; 
        }
        .divdeg{
            background-color: skyblue;
    width: 600px;
    padding-top: 70px;
    padding-bottom: 70px;
        }
        .btn{
            background-color: green;
            color: aliceblue;
        }
        h1{
            color: brown;
            size: 600px;
            font-style: italic;
            font-weight: bolder;
        }

    </style>
</head>
<body>
<?php
     include('config.php');
     error_reporting(0);
    $ID=$_GET['responsable_id'];
$up =  "select * FROM responsables where id ='$ID'";
     $result = mysqli_query($con,$up);
    $info=$result->fetch_assoc();
    if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $pepiniere=$_POST['pepiniere'];
    $query="UPDATE responsables  set nom='$name', Prenom='$prenom' ,email='$email',password='$password',pepiniere='$pepiniere' WHERE id='$ID'";
    $red=mysqli_query($con,$query);
}
    ?>
    <center>
    <h1>Update responsable:</h1>
    <div>
        <form action=""  class="divdeg"  method="POST">
        <div>
                <label for="#">id</label>
                <input type="text" name="id" value='<?php echo"{$info['id']}";?>'>
            </div><br>
            <div>
                <label for="">Nom</label>
                <input type="text" name="nom"  value='<?php echo"{$info['nom']}";?>'>
            </div><br>
            <div>
                <label for="">Prenom </label>
                <input type="text" name="prenom" value='<?php echo"{$info['Prenom']}";?>'>
            </div><br>
            <div>
                <label for="">Email</label>
                <input type="text" name="email"  value='<?php echo"{$info['email']}";?>'>

            </div><br>
            <div>
                <label for="">Password</label>
                <input type="text" name="password"  value='<?php echo"{$info['password']}";?>'>
            </div><br>
          
            <div>
               
                <input  class="btn" type="submit"   name="update" value="update">
            </div>
        </form>
    </div>
    </center>

  
</body>
</html>