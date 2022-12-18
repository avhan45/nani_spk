<?php
include("config.php");
session_start();

if(isset($_POST['login'])){
    $nama = $_POST['username'];
    $pass = $_POST['password'];

   $query = "SELECT * FROM user WHERE username='$nama' AND password='$pass'";
   $result = mysqli_query($con,$query);

   if(mysqli_num_rows($result)){

        $_SESSION['username'] = $nama;
        $_SESSION['password'] = $pass;

       header("location: ../dashboard.php");
   }else{
   echo "<script>
        alert('Username atau Password Salah');
        window.location.href = '../index.php';
   </script>";

   }

}
?>