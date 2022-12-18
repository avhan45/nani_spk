<?php 
include("core/config.php");

$query = "DELETE FROM normalisasi";
mysqli_query($con,$query);

header('location: hasil.php');

