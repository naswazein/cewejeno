<?php

$id = $_GET['id'];

$db =new PDO("mysql:host=localhost;dbname=tbdata_siswa", "root", "");
$query = $db->query("SELECT * FROM `data_siswa` WHERE 'id'='$id'");

$data=$query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body style="background:grey">
<div style="padding: 50px;">
        <form action="update.php"  method="POST">
        <div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-6">
          <input type="hidden" name="id" value="<?= $id?>">
              <div class="mb-3 mt-3 text-center">
                Nis : <br>
                <input class="rounded-3 border-light" type="text" name="nis" style="width: 300px;"  >
              <div class="mb-3 mt-3 text-center">
                 Name : <br>
                <input class="rounded-3 border-light" type="text" name="name" style="width: 300px;" >
              </div>
              <div class="mb-3 mt-3 text-center">
                Class : <br>
                <input class="rounded-3 border-light" type="text" name="class" style="width: 300px;">
              </div>
              
              <div class="text-center mt-3"> 
                <button type="submit" class="btn btn-success px-3 mb-3" style="width: 300px;">UPDATE</button> <br>
                </div>
              </div>
              
            </form>
        </div>
</body>
</html>