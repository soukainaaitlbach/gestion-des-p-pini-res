<?php

include ('config.php');
session_start();

if(isset($_POST['submit'])){
$post=$_POST['post'];
   $email = $_POST['email'];
   $pass = $_POST['password'];
if($post=="admin"){
if($email=="soukaina@gmail.com" &&  $pass==123456){ 
  $_SESSION['id']=1;
    header('location:admin.php');}
 
    else{
        $message[] = 'incorrect password or email!';} 
   }
   else{
   $message[] = 'incorrect password or email!';}}
      

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login </title>
  <link rel="stylesheet" href="styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
   <style>
     *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
}
body{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-image:url('pepiniere-.png');
background-repeat:no-repeat;

  background-size: cover;
  background-position: center;
}
.wrapper{
  width: 420px;
  background: transparent;
  border: 2px solid rgba(255, 255, 255, .2);
  backdrop-filter: blur(9px);
  color: #fff;
  border-radius: 12px;
  padding: 30px 40px;
}
.wrapper h1{
  font-size: 36px;
  text-align: center;
}
.wrapper .input-box{
  position: relative;
  width: 100%;
  height: 50px;
  
  margin: 30px 0;
}
.input-box input{
  width: 100%;
  height: 100%;
  background: transparent;
  border: none;
  outline: none;
  border: 2px solid rgba(255, 255, 255, .2);
  border-radius: 40px;
  font-size: 16px;
  color: #fff;
  padding: 20px 45px 20px 20px;
}
.input-box input::placeholder{
  color: #fff;
}
.input-box i{
  position: absolute;
  right: 20px;
  top: 30%;
  transform: translate(-50%);
  font-size: 20px;

}
.wrapper .remember-forgot{
  display: flex;
  justify-content: space-between;
  font-size: 14.5px;
  margin: -15px 0 15px;
}
.remember-forgot label input{
  accent-color: #fff;
  margin-right: 3px;

}

.remember-forgot a:hover{
  text-decoration: underline;
}
.wrapper .btn{
  width: 100%;
  height: 45px;
  background: #fff;
  border: none;
  outline: none;
  border-radius: 40px;
  box-shadow: 0 0 10px rgba(0, 0, 0, .1);
  cursor: pointer;
  font-size: 16px;
  color: #333;
  font-weight: 600;
}
.wrapper .register-link{
  font-size: 14.5px;
  text-align: center;
  margin: 20px 0 15px;

}
.register-link p a{
  color: #fff;
  text-decoration: none;
  font-weight: 600;
}
.register-link p a:hover{
  text-decoration: underline;
}
.message{ border-radius:10px 10px; padding:7px 9px; width:360px; background-color:#EF5350;margin-bottom:0.3rem;}
   </style>


   
<div class="form-container">

 

<body>
 
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
} 
?>
  <div class="wrapper">
    <form action="" method="post">
      <h1>Login</h1>
      <div class="input-box">
        

        <input type="text"  name="post" value="admin" required>
         <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="text"  name="email" placeholder="Email" required>
        <i class="fa fa-at" ></i>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
     
      <button type="submit" class="btn" name="submit">Login</button>
      <div class="register-link">
        
      </div>
    </form>
  </div>
</body>
</html>
</div>

</body>
</html>