<?php
include('config.php');
$ID = $_GET['id'];
mysqli_query($con, "DELETE FROM `plants` WHERE id='$ID'");
header('location:afficherplante.php')

?>