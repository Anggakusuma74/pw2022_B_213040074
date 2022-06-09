<?php 
require '../functions.php';

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
?>
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