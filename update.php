<?php

$id=$_POST['id'];
$nis = $_POST['nis'];
$name = $_POST['name'];
$class =$_POST['class'];


$db =new PDO("mysql:host=localhost;dbname=tbdata_siswa", "root", "");
$query = $db->query("UPDATE `data_siswa` SET `nis`='$nis',`name`='$name',`class`='$class' WHERE `id`='$id'");

if ($query){
   header("location:tb_data.php");
}