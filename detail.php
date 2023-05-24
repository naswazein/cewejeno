<?php

session_start();

$db = mysqli_connect("localhost","root","","ppmukk");
$id= $_GET['id_pengaduan'];
// echo $id;
$result =mysqli_query($db,"SELECT * FROM pengaduan where id_pengaduan='$id'");
//  var_dump($result);
//  die();
?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>masyrakat</title>
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
                        <a href="home.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="data_pengaduan.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Pengaduan</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                           
                    </li>
                    <li>
                        <a href="isidata_pengaduan.php" class="nav-link px-0 align-middle">
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
        <form>
<div class="card mt-5" style="width:90%;margin-left:20px">
    <h1>Data Pengaduan Masyarakat</h1>
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
  <?php while($row =mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?= $i ?></th>
      <td><?=$row['id_pengaduan'];?></td>
      <td><?=$row['tgl_pengaduan'];?></td>
      <td><?=$row['nik'];?></td>
      <td><?=$row['isi_laporan'];?></td>
      <td><img src="img/<?=$row['foto']; ?>" width="100" height="100" style="border-radius: 10px;" /></td>
      <td><?=$row['status'];?></td>
     
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endwhile ?>
    </table>
    <hr>
    <h1>Tanggapan</h1>
    <div class ="">
    <?php

    

        $query=mysqli_query($db, "SELECT tanggapan.*, petugas.nama_petugas from tanggapan inner join petugas on petugas.id_petugas = tanggapan.id_petugas where id_pengaduan='$id'");
       
        while($row =mysqli_fetch_assoc($query)):
    ?>
        <h3><?=$row['nama_petugas']?></h3>
    <div class ="text-tanggapan"><?=$row['tanggapan']?></div>
    <?php endwhile ?>
  </div>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </hr>
  </form>  
  </body>
  </html>