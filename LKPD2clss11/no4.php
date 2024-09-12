<?php

// perulangan menggunakan for
for ($i = 1; $i < 10; $i++) { // Loop pertama untuk baris, dengan $i mulai dari 1 hingga 14
    for ($j = 0; $j < 8; $j++) { // Loop kedua untuk kolom, dengan $j mulai dari 0 hingga 7 jadi ada 8 kolonimbus
        if ($i % 5 == 0) { // Jika nilai $i habis dibagi 5 ga nyetak apapaun
            echo ""; // Tidak ada output jika kondisi terpenuhi
        } else {
            echo "*"; // Jika $i bukan kelipatan 5, cetak bintang ("*")
        }
    }
    // cetak baris
    echo "<br>"; 
}

?>
