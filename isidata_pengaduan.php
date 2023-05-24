<?php
include "../function/koneksi.php";

?>
<!doctype html>
<html lang="en">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>masyarakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body style="background:#44B5FF">
  <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
     <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
      <li class="nav-item">
        <a href="home.php" class="nav-link align-middle px-0"> <span class="ms-1 d-none d-sm-inline"> 
     <i class="fs-4 bi-house"></i>Home</span>
         </a>
         </li>
         <li>
    <a href="data_pengaduan.php" class="nav-link px-0 align-middle">
     <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Pengaduan</span> </a>          
     </li>
     <li>
    <a href="#" class="nav-link px-0 align-middle">
    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Laporan Pengaduan</span></a>
                    </li>
                    
                    <li>
                        <a href="../logout.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Logout</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="img/kaa.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Member</span>
                    </a>
                    
                </div>
            </div>
        </div>
 <form action ="proses_tambahdata.php" method="POST" enctype="multipart/form-data">
        <div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-6">
            <h2 class="mb-3 mt-4 text-center" style="color:rgb(61, 61, 61);">Isi Data Yang Ingin Anda Keluhkan</h2>
            <form action="proses_tambahdata.php" method="POST" enctype='multipart/form-data'>
            <tr><center>
                        <td>foto</td>
                        <td><div class="mb-3">
                        <label for="formFileSm" class="form-label"></label>
                        <input class="form-control form-control-sm" name="foto" id="formFileSm" type="file"style="width: 300px;">
                        </div></td>
                    </tr></center>  
              <div class="mb-3 mt-3 text-center">
                tanggal : <br>
                <input class="rounded-3 border-light" type="date" name="tgl_pengaduan" 
                style="width: 300px;">
              </div>    
              <div class="mb-3">
              <center> 
                <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan</label>
               <textarea class="form-control" name="isi_laporan" id="exampleFormControlTextarea1" rows="3" style="width: 300px;"></textarea></center>
                </div>
              <div class="text-center mt-3"> 
                <button type="submit" class="btn btn-success px-3 mb-3" style="width: 300px;">Simpan</button> <br>
                
                </div>
              </div>
              </div>
            </form>
    
  </body>
</html>
