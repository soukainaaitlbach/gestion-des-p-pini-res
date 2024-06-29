<?php
include('config.php');
$ID = $_GET['id'];
mysqli_query($con, "DELETE FROM `ouvrier` WHERE id=$ID");
header('location:afficherouvrier.php');

?>