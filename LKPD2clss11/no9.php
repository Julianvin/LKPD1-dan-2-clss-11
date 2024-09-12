<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="form">
        <form action="" method="POST">
            <label for="uang">Masukkan jumlah uang:</label>
            <input type="number" id="uang" name="uang" required>
            <button type="submit">Cari</button>
        </form>
    </div>
</body>

</html>

<?php

/* membuat function koin dengan paramater $uang */
function koin($uang)
{
    $arr = []; /* membuat variable array */

    /* membuat variable untuk menghitung berapa uang yang digunakan */
    $seratusribu = null;
    $limapuluhribu = null;
    $duapuluhribu = null;
    $sepuluhribu = null;
    $limaribu = null;
    $seribu = null;

    /* membuat pengkondisian untuk uang apa yang dipakai dan berapa uang yang dipakai */
    if ($uang >= 100000) {
        $seratusribu = intdiv($uang, 100000); /* pembagian intejer untuk mengetahui berapa uang yang dipakai */
        $uang = $uang % 100000; /* mencari tau sisa uang yang telah di modulus */
        array_push($arr, "Rp. 100000 : " . $seratusribu); /* Menambahkan string yang menunjukkan jumlah lembar uang ke array $arr
                                                                jadi kaya arry nya tuh 100.000 => berapa jumlah lembar */
    }

    if ($uang >= 50000) {
        $limapuluhribu = intdiv($uang, 50000);
        $uang = $uang % 50000;
        array_push($arr, "Rp. 50000 : " . $limapuluhribu);
    }

    if ($uang >= 20000) {
        $duapuluhribu = intdiv($uang, 20000);
        $uang = $uang % 20000;
        array_push($arr, "Rp. 20000 : " . $duapuluhribu);
    }

    if ($uang >= 10000) {
        $sepuluhribu = intdiv($uang, 10000);
        $uang = $uang % 10000;
        array_push($arr, "Rp. 10000 : " . $sepuluhribu);
    }

    if ($uang >= 5000) {
        $limaribu = intdiv($uang, 5000);
        $uang = $uang % 5000;
        array_push($arr, "Rp. 5000 : " . $limaribu);
    }

    if ($uang >= 1000) {
        $seribu = intdiv($uang, 1000);
        $uang = $uang % 1000;
        array_push($arr, "Rp. 1000 : " . $seribu);
    }

    echo "Jenis pecahan untuk uang Rp. " . number_format($_POST['uang'], 0, '.', '.') . " : <br>"; /* number format */
    echo "<ul>";
    foreach ($arr as $value) { /* menampilkan array $arr yaitu berisi uang lembar dan jumlah uang lembar */
        echo "<li>$value</li>";
    }
    echo "</ul>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { /* mengecek apakah ada form dengan method POST */
    $duit = $_POST['uang'];/* mengambil value yang di input oleh user */
    koin($duit); /* memanggil function koin */
}
?>