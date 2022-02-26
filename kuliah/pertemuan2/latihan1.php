<?php 
// KOMENTAR
// ini untuk menuliskan catatan
// VARIABEL
// tempat penyimpanan nilai
// Nilai: angka (integer), tuliskan (string), boolean (true / false)
// Nama bebas, tidak boleh ada spasi
// boleh ada angka tapi di awal
$name1 = "Angga";
echo $name1;
echo "<hr>";


// OPERATOR
// ARITMATIKA
// +, -, *, /, % (modulo / modulus / sisa bagi)
echo (1 + 2) * 3 - 4; // kukabataku
echo "<br>";
echo 10 % 5;
echo "<hr>";

// Perbandingan
// <, >, <=, >=, ==, !=
echo 1 < 2; // true / 1
echo "<br>";
echo 10 < 5; // false / null 
echo "<br>";
echo 10 == "10"; // true 
echo "<hr>";

// Identitas 
// ===, !==
// Mengecek nilai beserta tipe data nya
echo 10 === "10";
echo "<hr>";

// Increment / Decrement
// Penambahan / Pengurangan 1
// ++, --
$x = 10;
echo ++$x;
echo "<br>";
echo ++$x;
echo "<hr>";

// Concat, Penggabungan String
// .
$nama_depan = "Angga";
$nama_belakang = "Kusuma";
echo $nama_depan . " " . $nama_belakang;
echo "<hr>";

// Assignment
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x -= 5;
echo $x;
echo "<hr>";
// $nama = "Muhammad";
// $nama .= " ";
// $nama .= "Angga";
// echo $nama;

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);

?>