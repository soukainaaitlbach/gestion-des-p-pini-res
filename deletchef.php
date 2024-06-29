<?php
include('config.php');
$ID = $_GET['id'];
mysqli_query($con, "DELETE FROM `chefs blocs` WHERE id='$ID'");
header('location:afficherchef.php')

?>