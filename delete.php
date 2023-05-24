<?php
session_start();
$id = $_GET['id'];

$w = new PDO("mysql:host=localhost;dbname=tbdata_siswa", "root","");
$query = $w->query("DELETE FROM `data_siswa` WHERE id=$id");

if($query){
    header("Location:tb_data.php");
}