<?php

  session_start();

$id=$_GET['id_pengaduan'];
$tgl =$_POST['tgl_pengaduan'];
$isi_laporan =$_POST['isi_laporan'];
$foto =$_FILES['foto']['name'];
$status ='proses';
$nik =$_SESSION['nik'];

$db =new PDO("mysql:host=localhost;dbname=ppmukk", "root", "");
$query = $db->query("UPDATE `pengaduan`SET `tgl_pengaduan`='$tgl',`nik`='$nik',
`isi_laporan`='$isi_laporan', `foto`='$foto' WHERE `id_pengaduan`='$id'");

if ($query){
   header("location:data_pengaduan.php");
}
?>