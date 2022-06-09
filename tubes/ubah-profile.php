<?php

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// Query mahasiswa berdasarkan id
$id = $_GET["id"];
$dp = query("SELECT * FROM d_profile WHERE id_profile = $id")[0];

// cek ketika tombol ubah di-klik
if(isset($_POST['ubah'])) {

    if(ubah_profile($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah!');
                document.location.href = 'profile.php'
             </script>";
    }  

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ubah Data Profile</title>
  </head>
  <body>

    <div class="container">
        <h1>Form Ubah Data Profile</h1>
        
        <a href="index.php" class="btn btn-outline-primary">Kembali ke Data Profile</a>

        <div class="row mt-3">
            <div class="col-8">

                <form action="" method="post" autocomplete="off">
                    <input type="hidden" name="id" value="<?= $dp ["id_profile"]; ?>">

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required 
                    value="<?= $dp ["nama"]; ?>">
                </div>    

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required style="width: 130px;"
                    value="<?= $dp ["username"]; ?>"> 
                </div>    

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?= $dp ["password"]; ?>">
                </div>    

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $dp ["email"]; ?>">
                </div>    

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $dp ["alamat"]; ?>">
                </div>    
                
                <button type="submit" class="btn btn-primary" name="ubah">Ubah Data Profil</button>

                </form>
            
            </div>
        </div>

    </div>
  </body>
</html>