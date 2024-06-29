<?php
include('config.php');
$ID = $_GET['id'];
mysqli_query($con, "DELETE FROM responsables WHERE id='$ID'");
header('location:afficherresponsable.php');

?>