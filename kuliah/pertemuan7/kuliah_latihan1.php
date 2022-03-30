<?php 
// SUPERGLOBALS
// Variabel milik PHP yang bisa kita gunakan
// bentuknya Array Associative
// $_GET 
// $_POST
// $_SERVER
// $_GET["nama"] = "Muhammad Angga Kusuma";
// $_GET["email"] = "angga.213040074@mail.unpas.ac.id";

// Var_dump($_GET);
// Var_dump($_POST);
if(isset($_GET["nama"])) {
    $nama = $_GET["nama"];
} else {
    $nama = 'Tidak Diketahui!';
}
?>

<H1>Halo, <?= $nama; ?></H1>
<Ul>
    <li>
        <a href="kuliah_latihan1.php?">Syahrul</a>
    </li>
    <li>
        <a href="?nama=Angga">Kusuma</a>
    </li>
</ul>