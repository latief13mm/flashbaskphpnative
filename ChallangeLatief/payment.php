<?php
        $name = 'latief';
        $judul_movies = "the terminator" ;
        $harga  = 80000;
        $qty    = 3;
        $total  =$harga*$qty;
        
        echo "Judul Movie : " .$judul_movies; echo " | ";
        echo "Nama Customer : " .$name; echo " | ";
        echo "Harga Tiket : " . number_format($harga,0,',','.'); echo " | ";
        echo "Kuantiti : " .number_format($qty,0,',','.'); echo " | ";
        echo "Total Bayar : " .number_format($total,0,',','.'); echo " | ";
          
    