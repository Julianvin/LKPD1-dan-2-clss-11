<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 20px;
        }

        .form-card {
            padding: 20px;
            margin-bottom: 20px;
        }

        .form-card h4 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card form-card shadow-sm">
                    <h4 class="card-title">Cek Karakter</h4>
                    <form method="POST"> <!-- menggunakan method post dikarenakanan untuk menyembunyikan value dari url-->
                        <div class="form-group">
                            <label for="teks" class="form-label">Masukkan Teks:</label>
                            <input type="text" id="teks" name="teks" class="form-control" required>
                        </div>
                        <button type="submit" name="cek_karakter" class="btn btn-primary">Cek Karakter</button>
                    </form>
                    <?php
                    // mengecek apakah http yang dikirimkan ke server tu menggunakan post atau tidak dan apakah ada value yang dikirim melalui button cek_karakter
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cek_karakter'])) {
                        // mengambil value yang di input dan dijadikan variable
                        $teks = $_POST['teks']; 
                        // mencari karakter yang ingin di match atau di samakan menggunakan pola pattern atau regex (Regular expressions)
                        preg_match_all('/[^a-zA-Z\s]/', $teks, $matches);
                        // membuat logika pengkondisian karakter
                        if (count($matches[0]) > 0) { /* menghitung karakter yang terdapat */
                            $uniqueSymbols = array_unique($matches[0]);/* memilih salahsatu dari karakter yang sama */
                            echo "<p class='mt-3'>Karakter yang terdapat pada kalimat: " . implode(', ', $uniqueSymbols) . "</p>";
                        } else {
                            echo "<p class='mt-3'>Tidak ada karakter yang terdapat pada kalimat</p>";
                        }
                    }
                    ?>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card form-card shadow-sm">
                    <h4 class="card-title">Hitung Total Pembayaran</h4>
                    <form method="POST">
                        <div class="form-group">
                            <label for="totalPembelian" class="form-label">Total Pembelian:</label>
                            <input type="number" id="totalPembelian" name="totalPembelian" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="date" class="form-label">Hari:</label>
                            <select name="date" id="date" class="form-select" required>
                                <option value="">Pilih Hari</option>
                                <option value="senin">Senin</option>
                                <option value="selasa">Selasa</option>
                                <option value="rabu">Rabu</option>
                                <option value="kamis">Kamis</option>
                                <option value="jumat">Jumat</option>
                                <option value="sabtu">Sabtu</option>
                                <option value="minggu">Minggu</option>
                            </select>
                        </div>
                        <button type="submit" name="hitung_total" class="btn btn-primary">Hitung</button>
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hitung_total'])) {
                        function hitungTotalPembayaran($totalPembelian, $hariIni)
                        {
                            $diskonHariSelasa = 0.05;
                            $diskonSeratusRibu = 0.07;
                            $totalPembayaran = $totalPembelian;

                            if ($hariIni == 'selasa') {
                                $totalPembayaran -= $totalPembayaran * $diskonHariSelasa;
                            }

                            if ($totalPembelian >= 100000) {
                                $totalPembayaran -= $totalPembayaran * $diskonSeratusRibu;
                            }

                            return $totalPembayaran;
                        }

                        $beli = $_POST['totalPembelian'];
                        $hari = $_POST['date'];
                        $totalBayar = hitungTotalPembayaran($beli, $hari);
                        echo "<p class='mt-3'>Total yang harus dibayar: Rp " . number_format($totalBayar, 0, ',', '.') . "</p>";
                    }
                    ?>
                </div>
            </div>
            <!-- Form 3: Cek Pembagi -->
            <div class="col-md-6">
                <div class="card form-card shadow-sm">
                    <h4 class="card-title">Cek Pembagi</h4>
                    <form method="POST">
                        <div class="form-group">
                            <label for="bilangan" class="form-label">Masukkan Bilangan:</label>
                            <input type="number" id="bilangan" name="bilangan" class="form-control" required>
                        </div>
                        <button type="submit" name="cek_pembagi" class="btn btn-primary">Cek</button>
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cek_pembagi'])) {
                        $bilangan = $_POST['bilangan'];
                        echo "<p class='mt-3'>Yang bisa membagi $bilangan dari bilangan 1-30:</p><ul>";
                        for ($i = 1; $i <= 30; $i++) {
                            if ($bilangan % $i == 0) {
                                $hasilak = $bilangan / $i;
                                echo "<li>$bilangan : $i = $hasilak</li>";
                            }
                        }
                        echo "</ul>";
                    }
                    ?>
                </div>
            </div>

            <!-- Form 4: Koin -->
            <div class="col-md-6">
                <div class="card form-card shadow-sm">
                    <h4 class="card-title">Hitung Pecahan Uang</h4>
                    <form method="POST">
                        <div class="form-group">
                            <label for="uang" class="form-label">Masukkan jumlah uang:</label>
                            <input type="number" id="uang" name="uang" class="form-control" required>
                        </div>
                        <button type="submit" name="hitung_koin" class="btn btn-primary">Cari</button>
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hitung_koin'])) {
                        function koin($uang)
                        {
                            $arr = [];
                            if ($uang >= 100000) {
                                $seratusribu = intdiv($uang, 100000);
                                $uang = $uang % 100000;
                                array_push($arr, "Rp. 100000 : " . $seratusribu);
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
                            echo "<p class='mt-3'>Jenis pecahan untuk uang Rp. " . number_format($_POST['uang'], 0, '.', '.') . " :</p>";
                            echo "<ul>";
                            foreach ($arr as $value) {
                                echo "<li>$value</li>";
                            }
                            echo "</ul>";
                        }

                        $duit = $_POST['uang'];
                        koin($duit);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
</body>

</html>