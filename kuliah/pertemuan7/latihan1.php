<?php 
// Variable Scope / lingkup variabel
// $x = 10;

// function tampilx() {
//     global $x;
//     echo $x;
// }

// tampilx();

// SUPERGLOBALS
// variable global milik PHP
// merupakan Array Associative
// echo $_SERVER["SERVER_NAME"];

// $_GET
$mahasiswa = [
    [
        "nama" => "Muhammad Angga Kusuma", 
        "nrp" => "213040074", 
        "email" => "angga.213040074@mail.unpas.ac.id", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "logo.png"
    ],
    [
        "nama" => "Muhammad Anggi Kusuma",
        "nrp" => "213040075",
        "email" => "anggi.213040075@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "logo1.jpg"
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>

</body>
</html>