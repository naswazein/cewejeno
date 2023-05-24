<?php
session_start();
$db =mysqli_connect("localhost","root","","ppmukk");
$query = mysqli_query($db,"SELECT * FROM pengaduan");

?>
<!DOCTYPE html>
<html lang="en">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<head>
  
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>home</title>
    
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
                    <a href="../logout.php"  class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline"><ion-icon name="log-out-outline"Style="font-size:40px">logout</span> </a></ion-icon>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                    </li>
            </div>
        </div>

<form>
<div class="card mt-5" style="width:70%;margin-left:20px">
    <h1>Data Pengaduan Dari Masyarakat</h1>
    <div class="d-grip mt-2">
  <table class="table table-light table-hover table-borderless">
  <thead>
    <tr style="text-align:center;">
      <th scope="col">No</th>
      <th scope="col">id_pengaduan</th>
      <th scope="col">tanggal_pengaduan</th>
      <th scope="col">nik</th>
      <th scope="col">isi_laporan</th>
      <th scope="col">foto</th>
      <th scope="col">status</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($query)):?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?= $i ?></th>
      <td><?=$row['id_pengaduan'];?></td>
      <td><?=$row['tgl_pengaduan'];?></td>
      <td><?=$row['nik'];?></td>
      <td><?=$row['isi_laporan'];?></td>
      <td><img src="../masyarakat/img/<?=$row['foto']; ?>" width="100" height="100" style="border-radius: 10px;" /></td>
      <td><?=$row['status'];?></td>
      <td>
      
      <a href="from_tanggapan.php?id_pengaduan=<?= $row['id_pengaduan'];?>" class="btn btn-primary">Memberikan Tanggapan</a>
    </td>
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endwhile ?>
    </table>
    <hr>
   
  </div>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </hr>
  </form>  
 
  </script>
  </body>
  </html>