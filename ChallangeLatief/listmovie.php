<?php
//membuat daftar list dengan array assosiatif
$movies = [[
    "Judul" => "The Terminator",
    "Sustradara" => "Jujun Junaedi"
],
[
    "Judul" => "Transformer",
    "Sustradara" => "Jarwo Kuat"
],
[
    "Judul" => "Cintaku ditolak Mantan",
    "Sustradara" => "Jomblo Wati"
],
[
    "Judul" => "Sound De Sheep",
    "Sustradara" => "Kambing Jibaran"
],
[
    "Judul" => "Medal Of Honor",
    "Sustradara" => "Herculer"
],
[
    "Judul" => "Aku Bukan Dia",
    "Sustradara" => "Cici Kembali Cepe"
],
[
    "Judul" => "Mantan Terindah",
    "Sustradara" => "Sifa Tau Aj"
],
];

// Menampilkan data array
foreach($movies as $movie){
    echo "<h2>Judul Film : " .$movie["Judul"]. "</h2>";
    echo "<p>Sustradara : ".$movie["Sustradara"]."</p>" ;
    echo "<hr>";

}

?>

