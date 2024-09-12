<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>angka membagi bilangan</title>
</head>

<body>
    <div class="form">
        <form action="" method="POST">
            <label for="bilangan">Masukkan bilangan:</label>
            <input type="number" id="bilangan" name="bilangan" required>
            <button type="submit">Cek</button>
        </form>
    </div>
</body>

</html>

<?php

// mengcek form dengan request method post
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // mengambil value dari form
    $bilangan = $_POST['bilangan'];

    // menampilkankan output
    echo "yang bisa membagi $bilangan dari bilangan 1-30:<br>";

    // mengecek bilangan prima dengan perulangan for
    for ($i = 1; $i <= 30; $i++) {/* perulangan dari 1-30 */
        if ($bilangan % $i == 0) { /* jika $bilangan habis dibagi $i akan jalan logika pengkondisiannya */
            $hasilak = $bilangan / $i; /* untuk menghitung nilai akhir dari bilangan dibagi $i */
            echo "$bilangan : $i = $hasilak </br>"; /* menampilkan output dari perulangan */
        }
    }
}

?>