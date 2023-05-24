<?php

session_start();

$idpeng = $_GET['id_pengaduan'];
$db = new PDO("mysql:host=localhost;dbname=ppmukk","root","");
$query = $db->query("SELECT * FROM `pengaduan` WHERE id_pengaduan='$idpeng'");
$data = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<head>
    <title>petugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background:#44B5FF" >
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline"><ion-icon name="home-outline"Style="font-size:40px">Home</span></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="data_pengaduan1.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline"><ion-icon name="grid-outline"Style="font-size:40px">Pengaduan</span> </a></ion-icon>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                           
                    </li>
                    <li>
                        <a href="../logout.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline"><ion-icon name="log-out-outline"Style="font-size:40px">logout</span> </a></ion-icon>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                           
                    </li>
            </div>
        </div>
        <div style="padding: 10px;">
        <div class="container mt-2">
        <div class="row" >
        <div class="col-md-8 offset-md-1" style="margin:auto">
        <div class="card my-6">
           
            <h1 class="mb-3 mt-4 text-center" style="color:rgb(61, 61, 61);">isi tanggapan</h1>
            <div class="container mt-2">
            <div class="mb-3">
        <div class ="">
    </div>
    <div class="col">
    </div>
    <form action="proses_tanggapan.php?id_pengaduan=<?= $idpeng ?>" method="POST">
            <hr class="divider">
            <div class="container">
            </div>
                
            <div class="row">
            </div>
                <div class="col mt-3">
              </div>
                    <div class="mb-3">
                        Tanggal : <input type="date" name="tgl_pengaduan" class="form-control" >
                    </div>
                <div class="mb-3 mt-3">
                        Tanggapan : <textarea type="text" name="tanggapan" class="form-control"></textarea>
                </div>
                <div class="col">
                    <div class="mb-3">
                        Status : 
                        <select name="status">
                            <option class="selected" value="Proses">Proses</option>
                            <option value="Selesai">Selesai</option>
                        </select>

                </div>
                <div class="mb-3 mt-3 text-end" >
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="home.php" class="btn btn-danger">Kembali</a>
            </div>
    </form>
        </div>
      </body>
      </html>
