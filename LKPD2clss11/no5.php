<?php 

// membuat variable aray
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

// menggabungkan kedua variable
$merge = array_merge($bil1, $bil2);

// menghilangkan angka yang sama
$unique = array_unique($merge);

// mengurutkan angka
sort($unique);

// menampilkan output
echo "Hasil : ";

// untuk nemapilkan angka dan memberi jarak
echo implode(', ', $unique);