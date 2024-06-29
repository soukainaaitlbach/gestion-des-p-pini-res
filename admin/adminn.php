
<!DOCTYPE html>
<html>
<head>
	<title>ouvrier</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" >
    <style>
 {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'cairo';
    font-weight: bolder;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    background: #23242b;
    color: #fff;
}

.u-name {
    font-size: 20px;
    padding-left: 17px;
}

.u-name b {
    color: #127b8e;
}

.header i {
    font-size: 30px;
    cursor: pointer;
    color: #fff;
}

.header i:hover {
    color: #127b8e;
}

.user-p {
    text-align: center;
    padding-left: 10px;
    padding-top: 25px;
}

img {
    width: 100px;
    border-radius: 50%;
}

.user-p h4 {
    color: #ccc;
    padding: 5px 0;
}

.side-bar {
    width: 250px;
    background: #262931;
    min-height: 100vh;
    transition: 500ms width;
}


.section-1 p {
    color: #127b8e;
    font-size: 20px;
    background: #fff;
    padding: 7px;
    border-radius: 5px;
}

.side-bar ul {
    margin-top: 20px;
    list-style: none;
}
.side-bar ul li {
    font-size: 16px;
    padding: 15px 0px;
    padding-left: 20px;
    transition: 500ms background;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.side-bar ul li:hover {
    background: #127b8e;
}

.side-bar ul li a {
    text-decoration: none;
    color: #eee;
    cursor: pointer;
    letter-spacing: 1px;
}

.side-bar ul li a i {
    display: inline-block;
    padding-right: 10px;
    font-size: 23px;
}

#navbtn {
    display: inline-block;
    margin-left: 70px;
    font-size: 20px;
    transition: 500ms color;
}

#checkbox {
    display: none;
}

#checkbox:checked~.body .side-bar {
    width: 60px;
}

#checkbox:checked~.body .side-bar .user-p {
    visibility: hidden;
}

#checkbox:checked~.body .side-bar a span {
    display: none;
}
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
.section-1 {
    width: 100%;
    background: url("pepiniere-.png'");
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
    </style>
</head>
<body>

   

<center>

   
   
</div></center>
            
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">HELLO <b>ADMIN!</b>
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
						<span onclick="monchef()">Pépinière</span>
					</a>
				</li>
				<li>   
					<a href="#">
						<i  aria-hidden="true" onclick="monbloc()"></i>
						<span onclick="monbloc()"> Responsable</span>
					</a>
				</li>
				
			
				<li>
					<a href="#">
						<i class="fa fa-power-off" aria-hidden="true"></i><a href="inde.php?logout=<?php echo $ii; ?>" onclick="return confirm('Deconnecter!');" ><span>Logout</span></a>	
						
					</a>
				</li>
			</ul>
		</nav>
        <?php 
        $time=time();
        if($time<13){
            $message="Bonjour";
        }
        else $message="Bonsoir";
        ?>
		<section class="section-1">
			
     
			

   
            
       

		</section>

     
	
    <script>
 
              </script>
 
</body>
</html>

