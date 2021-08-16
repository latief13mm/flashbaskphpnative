<?php 

$tiket = 50000;
$nama = "Angga";


if ($tiket > 90000) {
    $debit = "Selamat Pak ". $nama ." Anda Bisa debit";
} elseif($tiket > 50000){
    $debit = "Saldo Anda Ngepas Banget Pak ". $nama;
} elseif($tiket > 35000){
    $debit = "Maaf tidak bisa Pak ". $nama;
} else {
    $debit = "Maaf bapak tidak punya kartu debit";
}

echo "Budget Anda: $tiket<br>";
echo "Status Debit: $debit";


