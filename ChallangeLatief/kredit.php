<?php 

$tiket = 10000;
$nama = "latief";



if ($tiket > 30000) {
    $kredit = "Selamat Pak ". $nama ." Anda Bisa kredit";
} elseif($tiket > 50000){
    $kredit = "Saldo Anda Ngepas Banget Pak ". $nama;
} elseif($tiket > 95000){
    $kredit = "Maaf tidak bisa Pak ". $nama;
} else {
    $kredit = "Anda Sultan";
}

echo "Budget Anda: $tiket<br>";
echo "Status kredit: $kredit";

// switch($tiket){
//     case ($tiket > 10000):
//         echo "Anda bisa kredit"
//         ;
//         break;
//     case ($tiket >= 50000):
//       echo "Anda bisa bayar tunai atau debit";
//         break;
//     default: 
//        echo "ngapain kredit saldo nya lebih";
// }