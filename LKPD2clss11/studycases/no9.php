<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="height: 100vh;">
    <div class="container h-75 d-flex justify-content-center align-items-center">
        <form class="form form-control d-flex flex-column justify-content-center align-items-center w-50 p-3 pt-4" action="" method="POST">
            <label for="kata" class="form-label mb-3">masukan kata:</label>
            <input type="text" name="kata" class="form-control mb-3 w-50" required>
            <button class="btn btn-primary mb-3" type="submit">hitung</button>
            <p class="mb-3 ms-3">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $kata = $_POST['kata'];
                    $space = str_replace(" ", "", $kata);
                    $panjang = strlen($space);
                    echo "panjang kata dari kata " . $kata . " adalah " . $panjang . " karakter ";
                }; ?>
            </p>
        </form>
    </div>
</body>

</html>