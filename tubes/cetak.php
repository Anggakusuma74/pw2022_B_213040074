<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
$koleksi_film = query("SELECT * FROM koleksi_film");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Film</title>
</head>
<body>
    <h1>Data Film</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Judul</th>
                <th scope="col">Genre</th>
                <th scope="col">Durasi</th>
                <th scope="col">Sutradara</th>
                <th scope="col">Penulis</th>
                <th scope="col">Pemeran</th>
                <th scope="col">Sinopsis</th>
            </tr>
        </thead>';
    $i = 1;
    foreach( $koleksi_film as $kf ) {
        $html .= '<tr>
            <td>'. $i++ .'</td>
            <td><img src="img/'. $kf["gambar"] .'" heigth="50" width="50"></td>
            <td>'. $kf["judul"] .'</td>
            <td>'. $kf["genre"] .'</td>
            <td>'. $kf["durasi"] .'</td>
            <td>'. $kf["sutradara"] .'</td>
            <td>'. $kf["penulis"] .'</td>
            <td>'. $kf["pemeran"] .'</td>
            <td>'. $kf["sinopsis"] .'</td>
        </tr>';
    }

$html .= '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();

?>