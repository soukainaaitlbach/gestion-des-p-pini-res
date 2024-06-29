<?php
include('config.php');
$ID = $_GET['id'];
mysqli_query($con, "DELETE FROM `bloc` WHERE nom='$ID'");
header('location:afficherbloc.php');

?>