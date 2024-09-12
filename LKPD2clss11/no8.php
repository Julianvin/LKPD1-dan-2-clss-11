<?php 

//pakek variadic
function createArray(...$jurusan) {

    // untuk menampung array yang isinya kata kapital
    $arr = [];

    // Loo
    foreach ($jurusan as $value) {
        if(in_array(strtoupper($value), $arr) == false) {  // Mengecek apakah nilai dalam $value yang sudah diubah menjadi huruf kapital jika belum akan dijalankan pengkondisian si if ne
            array_push($arr, strtoupper($value)); // nambahin nilai unik dalam huruf kapital ke array $arr.
        }
    }

    // ngembaliin array yang sudah ber isi nilai-nilai unik dalam huruf kapital.
    return $arr;
}

// manggil function array isinya itu huruf kapitan dan kecil
print_r(createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl"));

?>
