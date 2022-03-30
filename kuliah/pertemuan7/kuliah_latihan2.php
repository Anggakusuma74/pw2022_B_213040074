<?php $mahasiswa = [
    ["nama" => "Muhammad Angga Kusuma", "npm" => "213040074", 
    "email" => "angga.213040074@mail.unpas.ac.id", "jurusan" => "Teknik Informatika", "gambar" => "logo.png"],
    ["nama" => "Muhammad Anggi Kusuma", "npm" => "213040075",
    "email" => "anggi.213040075@mail.unpas.ac.id", "jurusan" => "Teknik Informatika", "gambar" => "logo1.jpg"],
    ["nama" => "Muhammad Riflyal Ilham Nugroho", "npm" => "213040073",
    "email" => "riflyal.213040073@mail.unpas.ac.id", "jurusan" => "Teknik Informatika", "gambar" => "gambar logo3.jpg"]
]; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>

    <div class="container">
        <h1>Daftar Mahasiswa</h1>
        
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; foreach( $mahasiswa as $mhs ) : ?>
    <tr>
      <th scope="row"><?= $no++;  ?></th>
      <td>
          <img src="img/<?= $mhs["gambar"]; ?>" heigth="50" width="50"
          class="rounded-circle">
      </td>
      <td><?php echo $mhs["nama"]; ?></td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
          <a href="kuliah_latihan3.php?nama=<?= $mhs ["nama"]; ?>&npm=<?= $mhs ["npm"]; ?>&email=<?= $mhs ["email"]; ?>&jurusan=<?= $mhs ["jurusan"]; ?>"  class="btn badge bg-info">detail</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

    </div>
  </body>
</html>