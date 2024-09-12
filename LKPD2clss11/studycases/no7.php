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
        <form class="form form-control d-flex flex-column justify-content-center align-items-center w-50 p-4" action="" method="POST">
            <label for="angka1" class="form-label">Angka 1:</label>
            <input type="number" id="angka1" name="angka1" class="form-control mb-3" required>

            <label for="angka2" class="form-label">Angka 2:</label>
            <input type="number" id="angka2" name="angka2" class="form-control mb-3" required>

            <label for="operator" class="form-label">Operator:</label>
            <select name="operator" id="operator" class="form-select mt-3 mb-3 w-50">
                <option value="+">Tambah</option>
                <option value="-">Kurang</option>
                <option value="*">Kali</option>
                <option value=":">Bagi</option>
            </select>
            
            <button type="submit" name="proses" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka1 = isset($_POST['angka1']) ? $_POST['angka1'] : 0;
    $angka2 = isset($_POST['angka2']) ? $_POST['angka2'] : 0;
    $operator = isset($_POST['operator']) ? $_POST['operator'] : 0;
    echo "<div class='text-center mt-3'>";
    echo "Hasil dari $angka1 $operator $angka2 = ";
    if (is_numeric($angka1) && is_numeric($angka2)) {
        switch ($operator) {
            case '+':
                echo $angka1 + $angka2;
                break;
            case '-':
                echo $angka1 - $angka2;
                break;
            case '*':
                echo $angka1 * $angka2;
                break;
            case ':':
                if ($angka2 != 0) {
                    echo $angka1 / $angka2;
                } else {
                    echo "Pembagian dengan nol tidak diperbolehkan.";
                }
                break;
            default:
                echo 'Operator tidak ditemukan';
        }
    }
    echo "</div>";
}
?>
