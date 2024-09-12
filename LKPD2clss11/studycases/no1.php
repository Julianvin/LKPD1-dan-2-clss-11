<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengambilan simbol dari teks:</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
</head>

<body>
    <form class="form form-control" method="POST" action="">
        <label for="teks">Masukkan Teks yang anda inginkan:</label>
        <input class="form-control" type="text" id="teks" name="teks" required>
        <button class="btn btn-primary" type="submit">Cek Karakter</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $teks = $_POST['teks'];
        preg_match_all('/[^a-zA-Z\s]/', $teks, $matches);
        if (count($matches[0]) > 0) {
            $uniqueSymbols = array_unique($matches[0]);
            echo "Karakter yang terdapat pada kalimat : " . implode(',', $uniqueSymbols);
        } else {
            echo "Tidak ada karakter yang terdapat pada kalimat";
        }
    }
    ?>
</body>

</html>