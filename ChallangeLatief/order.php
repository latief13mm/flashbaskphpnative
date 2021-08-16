<?php
include "payment.php"; 
//membuat array assosiatif 
$order =  
[
    [
        "nama" => "angga",
        "alamat" => "garut",
        "budget" => 50000,
        "payment" =>"cash"
    ],
    [
        "nama" => "latief",
        "alamat" => "jakarta",
        "budget" => 20000
    ],
    [
        "nama" => "adrian",
        "alamat" => "jakarta",
        "budget" => 70000
    ],
    [
        "nama" => "parit",
        "alamat" => "bandung",
        "budget" => 10000
    ],
    [
        "nama" => "eris",
        "alamat" => "bekasi",
        "budget" => 40000
    ],
    [
        "nama" => "pur",
        "alamat" => "depok",
        "budget" => 60000
    ],

];

//mencetak isi array 
echo "<h1> Customer Movie Ini</h1>";
foreach ($order as $odr){
    echo "<p>Nama : " .$odr["nama"]. "</p>"; 
    echo "<p>Alamat : " .$odr["alamat"]. "</p>"; 
    echo "<p>Budget : " .$odr["budget"]. "</p>";
    echo "<hr>";

}
