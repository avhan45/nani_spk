<?php

session_start();

$nama = $_SESSION['username'];

if(!$nama){
    header("location: index.php");
}