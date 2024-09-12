<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <label for="angka">Masukkan angka:</label>
            <input type="number" id="angka" name="num" required>
            <button type="submit">Cek</button>
        </form>
    </div>
</body>
</html>


<?php

    $angka = isset($_POST['num']) ? $_POST['num'] : 0;
    $hasil = '';

    function primacuy($d) {
        if ($d <= 1) return false;
        for ($i = 2; $i <= sqrt($d); $i++) {
            if ($d % $i == 0) return false;
        }
        return true;
    };

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(is_numeric($angka)) {
            if (primacuy($angka)) {
                echo "$angka adalah bilangan prima";
            } else {
                echo "$angka bukan bilangan prima";
            }
        }
    }

    ?>