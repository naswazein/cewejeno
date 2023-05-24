<!DOCTYPE html>
<head>
    <title>masyarakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Poppins', sans-serif;background: #44B5FF">
    <div >
        <form action="proses_register.php"  method="POST">
        <div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-6" style="background:maroon;">
            <form class="card-body cardbody-color p-lg-4 text-white ">
            <h2 class="mb-3 mt-4 text-center text-white" style="font-family: 'Yeseva One', cursive;">R E G I S T E R</h2>
              <div class="mb-3 mt-3 text-center text-white">
                NIK : <br>
                <input class="rounded-3 border-light" type="text" name="nik" placeholder="insert your nik" style="width: 300px;" required>
              </div>
              <div class="mb-3 mt-3 text-center text-white">
                Name : <br>
                <input class="rounded-3 border-light" type="text" name="nama" placeholder="insert your name" style="width: 300px;" required>
              </div>
              <div class="mb-3 mt-3 text-center text-white">
                Username : <br>
                <input class="rounded-3 border-light" type="text" name="username" placeholder="username" style="width: 300px;" required>
              </div>
              <div class="mb-3 mt-3 text-center text-white">
                Nomor Telepon : <br>
                <input class="rounded-3 border-light" type="number" name="telp" placeholder="insert your phone number" style="width: 300px;" required>
              </div>
              <div class="mb-3 mt-3 text-center text-white">
                Password : <br>
                <input class="rounded-3 border-light" type="password" name="password" placeholder="insert you password" style="width: 300px;"required>
              </div>
              <div class="mb-3 mt-3 text-center text-white">
                Level : <br>
                <input class="rounded-3 border-light" type="level" name="level" placeholder="insert you Level" style="width: 300px;"required>
              </div>
              <div class="mb-3 mt-3 text-center ">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              </div>
            </form>
        </div>
</div>
</body>
</html>