<?php 

include("core/config.php");

$query = "DELETE FROM perhitungan";
mysqli_query($con,$query);

$query2 = "DELETE FROM rangking";
mysqli_query($con,$query2);

header("location: hasil.php");