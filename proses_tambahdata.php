<?php

  session_start();

$tgl =$_POST['tgl_pengaduan'];
$isi_laporan =$_POST['isi_laporan'];
$foto =$_FILES['foto']['name'];
$status ='proses';
$nik =$_SESSION['nik'];
$id =rand(1,10000000);
$db =new PDO('mysql:host=localhost;dbname=ppmukk','root','');

$query = $db->query("INSERT INTO `pengaduan` VALUES ('$id','$tgl','$nik','$isi_laporan','$foto','$status')");
if($query){
    header("Location:data_pengaduan.php");
}
?>