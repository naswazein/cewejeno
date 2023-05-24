<?php 
 session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$koneksi = new PDO("mysql:host=localhost;dbname=ppmukk", "root","");
$query = $koneksi->query("SELECT * FROM masyarakat WHERE username='$username' AND password='$password'  ");
$data=$query->fetch();
// var_dump($query->rowCount());
    if($query->rowCount() > 0){

        $_SESSION["username"] = $_POST['username'];
        $_SESSION["password"] = $_POST['password'];
        $_SESSION["nik"] = $data['nik'];
        header("location:home.php");
    }else{
        header("location:login.php");
    }