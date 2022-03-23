<?php
// Array Associative
// Array yang index-nya ber-asosiasi / berpasangan dengan angka

$mahasiswa = [
    ["Muhammad Angga Kusuma", "213040074", "angga.213040074@mail.unpas.ac.id", "Teknik Informatika"],
    ["Muhammad Anggi Kusuma", "213040075", "anggi.213040075@mail.unpas.ac.id", "Teknik Informatika"],
    ["Muhammad Riflyal Ilham Nugroho", "213040073", "riflyal.213040073@mail.unpas.ac.id", "Teknik Informatika"]
];

// var_dump($mahasiswa[1][3]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama: <?php echo $mhs[0]; ?></li>
    <li>NPM: <?php echo $mhs[1]; ?></li>
    <li>Email: <?php echo $mhs[2]; ?></li>
    <li>Jurusan: <?php echo $mhs[3]; ?></li>
</ul>
<?php } ?>