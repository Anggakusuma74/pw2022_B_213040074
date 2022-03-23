<?php  
// Array Associative
// Array yang indexnya string

$mahasiswa = [
    [
        "nama" => "Muhammad Angga Kusuma", 
        "npm" => "213040074", 
        "email" => "angga.213040074@mail.unpas.ac.id", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Muhammad Anggi Kusuma", 
        "npm" => "213040075", 
        "email" => "anggi.213040075@mail.unpas.ac.id", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Muhammad Riflyal Ilham Nugroho", 
        "npm" => "213040073",  
        "jurusan" => "Teknik Informatika",
        "email" => "riflyal.213040073@mail.unpas.ac.id"
    ]
];

// var_dump($mahasiswa[1])
?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama: <?php echo $mhs["nama"]; ?></li>
    <li>NPM: <?php echo $mhs["npm"]; ?></li>
    <li>Email: <?php echo $mhs["email"]; ?></li>
    <li>Jurusan: <?php echo $mhs["jurusan"]; ?></li>
</ul>
<?php } ?>

<hr>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <?php foreach($mhs as $key => $value) { ?>
        <li><?php echo $key; ?>: <?php echo $value; ?></li>
    <?php } ?>
</ul>
<?php } ?>