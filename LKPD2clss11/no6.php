<?php
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ]
];
$price = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $itembrg = $_POST['nama_barang'];
    $brpbrg = $_POST['jumlah_beli'];

    foreach ($barang as $item) {
        if ($item['nama_barang'] == $itembrg) {
            $subPrice = $item['harga_barang'] * $brpbrg;
            $price += $subPrice;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h2>Form Pembelian Barang</h2>
    <!-- membuat algoritma php di dalam formnya langsung -->
    <!-- mengecek apakah ada form dengan method POST -->
    <form method="POST" class="form form-control">
        <label for="nama_barang">Pilih Barang:</label>
        <select name="nama_barang" id="nama_barang">
            <option value="">-- Pilih --</option>
            <!-- menggunakan foreach untuk mencetak data barang dari array -->
            <?php foreach ($barang as $item) : ?>
                <!-- menampilkan data barang dari array ke option -->
                <option value="<?php echo $item['nama_barang']; ?>"><?php echo $item['nama_barang']; ?></option>
            <?php endforeach; ?> <!-- penutup foreach -->
        </select>
        <br><br>

        <label for="jumlah_beli">Jumlah Beli:</label>
        <input type="number" id="jumlah_beli" name="jumlah_beli" required>
        <br><br>

        <input type="submit" value="Hitung Total">
    </form>

    <?php if (isset($_POST['nama_barang'])): ?> <!-- mengecek apakah ada value yang di input dari form input nama_barang -->
        <h3>Daftar Belanjaan:</h3>
        <ol>
            <?php foreach ($barang as $item) : ?>  <!-- membuat foreach untuk mencetak data dari array -->
                <?php if ($item['nama_barang'] == $_POST['nama_barang']) : ?> <!-- mengecek apakah value dari form sama dengan value dari array -->
                    <li><?php echo $item['nama_barang']; ?> (<?php echo $_POST['jumlah_beli']; ?>) <!-- untuk menampilkan nama barang dan jumlah beli -->
                        <?php echo number_format($item['harga_barang'] * $_POST['jumlah_beli'], 0, ".", "."); ?> <!-- menampilkan harga barang -->
                    </li>
                <?php endif; ?> <!-- penutup if -->
            <?php endforeach; ?> <!-- penutup foreach -->
        </ol>
        <br>
        <h4>Total harga yang harus dibayar adalah: Rp. <?php echo number_format($price, 0, '.', '.'); ?></h4> <!-- menampilkan total yang harus dibayarkan -->
    <?php endif; ?>
</body>

</html>