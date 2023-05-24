<?php
session_start();
$id = $_POST['id'];
$nis = $_POST['nis'];
$name = $_POST['name'];
$class =$_POST['class'];

$db =new PDO("mysql:host=localhost; dbname=tbdata_siswa", "root", "");
$query = $db->query("INSERT INTO data_siswa values('','$nis','$name','$class')");

if($query){
    header("Location:tb_data.php");
}