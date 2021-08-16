<?php 
//membuat array assosiatif 
$customer =  
[
    [
        "nama" => "angga",
        "alamat" => "garut",
        "budget" => 50000
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
foreach ($customer as $cus){
    echo "<p>Nama : " .$cus["nama"]. "</p>"; 
    echo "<p>Alamat : " .$cus["alamat"]. "</p>"; 
    echo "<p>Budget : " .$cus["budget"]. "</p>";
    echo "<hr>";

}
