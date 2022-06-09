<?php 
session_start();

if(!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// Query kumpulan_film berdasarkan id
$id = $_GET["id"];
$kf = query("SELECT * FROM koleksi_film WHERE id = $id")[0];

// cek ketika tombol ubah di-klik
if(isset($_POST['ubah'])) {

    if(ubah($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php', 'data-film.php'
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

    <title>Ubah Data Film</title>
  </head>
  <body>

    <div class="container">
        <h1>Form Ubah Data Film</h1>
        
        <a href="index.php" class="btn btn-outline-primary">Kembali ke Daftar Film</a>

        <div class="row mt-3">
            <div class="col-8">

                <form action="" method="post" autocomplete="off">
                    <input type="hidden" name="id" value="<?= $kf ["id"]; ?>">

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" required 
                    value="<?= $kf ["judul"]; ?>">
                </div>    

                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" class="form-control" id="genre" name="genre"
                    value="<?= $kf ["genre"]; ?>"> 
                </div>    

                <div class="mb-3">
                    <label for="durasi" class="form-label">Durasi</label>
                    <input type="text" class="form-control" id="durasi" name="durasi" value="<?= $kf ["durasi"]; ?>">
                </div>    

                <div class="mb-3">
                    <label for="sutradara" class="form-label">Sutradara</label>
                    <input type="text" class="form-control" id="sutradara" name="sutradara" value="<?= $kf ["sutradara"]; ?>">
                </div>    

                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $kf ["penulis"]; ?>">
                </div>   

                <div class="mb-3">
                    <label for="pemeran" class="form-label">Pemeran</label>
                    <input type="text" class="form-control" id="pemeran" name="pemeran" value="<?= $kf ["pemeran"]; ?>">
                </div>   

                <div class="mb-3">
                    <label for="sinopsis" class="form-label">Sinopsis</label>
                    <input type="text" class="form-control" id="sinopsis" name="sinopsis" value="<?= $kf ["sinopsis"]; ?>">
                </div>   

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $kf ["gambar"]; ?>">
                </div>    
                
                <button type="submit" class="btn btn-primary" name="ubah">ubah Data</button>

                </form>
            
            </div>
        </div>

    </div>
  </body>
</html>