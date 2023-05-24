<?php

session_start();

$idpeng = $_GET['id_pengaduan'];
$tgl = $_POST['tgl_pengaduan'];
$tggpn = $_POST['tanggapan'];
// $idpet = $_SESSION['id_petugas'];
$idpet = 222;
$status = $_POST['status'];

$db = new PDO("mysql:host=localhost;dbname=ppmukk","root","");
//INSERT INTO `tanggapan`(`id_tanggapan`, `id_pengaduan`, `tgl_pengaduan`, `tanggapan`, `id_petugas`) 
// VALUES (null,'704706',2023-12-01,'qqqqqqq',222)
$query = $db->query("INSERT INTO `tanggapan`(`id_tanggapan`, `id_pengaduan`, `tgl_pengaduan`, `tanggapan`, `id_petugas`) 
VALUES (null,'$idpeng','$tgl','$tggpn','$idpet')");
// var_dump($query);
// die();
$status = $db->query("UPDATE `pengaduan` SET `status`= '$status' WHERE id_pengaduan = '$idpeng'");

if($status){
header ("location:data_pengaduan2.php");
}
