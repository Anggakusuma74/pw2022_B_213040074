<?php 
session_start();

if(!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$koleksi_film = query("SELECT * FROM koleksi_film");

// query sesuai dengan keyword pencarian, ketika tombol cari diklik
if(isset($_GET['cari'])) {
  $keyword = $_GET["keyword"];
  $query = "SELECT * FROM koleksi_film 
            WHERE
            judul LIKE '%$keyword%' OR
            genre LIKE '%$keyword%' OR
            durasi LIKE '%$keyword%' OR
            sutradara LIKE '%$keyword%' OR
            penulis LIKE '%$keyword%' OR
            pemeran LIKE '%$keyword%' OR
            sinopsis LIKE '%$keyword%'
            ";
  $koleksi_film = query($query);
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
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"/>

    <!-- My Css -->
    <link rel="stylesheet" href="halaman.css" />

    <title>Data Film</title>
    <style>
      @media print {
        .navbar-brand, .tambah, .form-cari, .cetak {
          display: none;
        }
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Data Film</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Data Film</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Akhir Navbar -->


    <div class="container"><br><br><br>
        <h1>Data Film</h1>
        
        <a href="tambah.php" class="tambah btn btn-outline-primary">Tambah Data Film</a>  
        <br><br><a href="cetak.php" class="cetak btn btn-outline-primary" target="_blank">Cetak</a>
        

  <form action="" method="get" class="form-cari mt-4">
  <div class="input-group mb-3">
    <input type="text" class="form-control" name="keyword" placeholder="Masukkan keyword pencarian.." 
    autocomplete="off" id="keyword">
    <button class="btn btn-outline-primary" type="submit" name="cari" id="tombol-cari">Cari!</button>
  </div>
  </form>
<div id="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Judul</th>
      <th scope="col">Genre</th>
      <th scope="col">Durasi</th>
      <th scope="col">Sutradara</th>
      <th scope="col">Penulis</th>
      <th scope="col">Pemeran</th>
      <th scope="col">Sinopsis</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; foreach($koleksi_film as $kf) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td>
          <img src="img/<?= $kf["gambar"]; ?>" heigth="50" width="50"
          class="rounded-circle">
      </td>
      <td><?= $kf["judul"]; ?></td>
      <td><?= $kf["genre"]; ?></td>
      <td><?= $kf["durasi"]; ?></td>
      <td><?= $kf["sutradara"]; ?></td>
      <td><?= $kf["penulis"]; ?></td>
      <td><?= $kf["pemeran"]; ?></td>
      <td><?= $kf["sinopsis"]; ?></td>
      <td>
          <a href="ubah.php?id=<?= $kf['id'];?>" class="btn badge bg-warning">ubah</a>
          <a href="hapus.php?id=<?= $kf['id'];?>" class="btn badge bg-danger"
           onclick="return confirm('yakin?');">hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="js/script.js"></script>
  </body>
</html>