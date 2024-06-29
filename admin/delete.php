<?php

include('config.php');
$ID = $_GET['id'];
mysqli_query($con, "DELETE FROM pépinière WHERE id='$ID'");
header('location:afficherpepiniere.php');

?>