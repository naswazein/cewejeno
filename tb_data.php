<?php

$db = mysqli_connect("localhost","root","","tbdata_siswa");

$result = mysqli_query($db, "SELECT * FROM data_siswa");
// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>catatanperjalanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body style="background:grey">
    <div class="container mt-5">
    <h1 class="text-black">DATA TABEL SISWA</h1>
</div>          
    <div class="card my-4 mt-3">
    <div class="d-grip gap-2 col-12 mt-2">
    <table class="table table-light table-hover table-borderless">
  <thead>
    <tr style="text-align:center;">
      
      <th scope="col">No</th>
      <th scope="col">Nis</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?= $i ?></th>
      
      <td><?=$row['nis'];?></td>
      <td><?=$row['name'];?></td>
      <td><?=$row['class'];?></td>
      
      <td>
        <a href="form_update.php?id=<?=$row['id'];?>" class="btn btn-primary">UPDATE</a>
        <a href="delete.php?id=<?=$row['id'];?>"onclick="return confirm('anda yakin ingin hapus')" class="btn btn-danger btn-sm">DELETE</a>
      </td>
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endwhile ?>
    </table>
    </div>
    </div>
    <div class="text-end">
    <a href="data.php">
        <button class="btn btn-primary">Isi Data</button>
    </a>
    </div>
</body>
</html>