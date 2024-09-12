<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form class="form form-control" action="" name="" method="POST">
        <input class="form-control mt-3 " type="number" name="angka" id="angka required">
        <button type="submit" name="hitung_koin" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>


<?php
    function fizzbuzz($klpt){
        for ($i = 1; $i <= $klpt; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "FizzBuzz" . "</br>";
            } elseif ($i % 3 == 0) {
                echo "Fizz" . "</br>";
            } elseif ($i % 5 == 0) {
                echo "Buzz" . "</br>";
            } else {
                echo $i . "</br>";
            }
        }
    };

    if ($_SERVER["REQUEST_METHOD"] == "POST" ){
        $angka = $_POST['angka'];
        fizzbuzz($angka);
    };

    ?>