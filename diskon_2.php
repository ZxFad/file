<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $harga = floatval($_POST['harga']);
        $diskon = floatval($_POST['diskon']);

        if ($harga <= 0) {
            echo '<div class="alert alert-danger"Harga harus lebih dari 0 </div>';
        } else if ($diskon < 0 || $diskon > 100) {
            echo '<div class="alert alert-danger"Diskon harus antara 0 sampai 100 </div>';
        } else {

            $ndiskon = $harga * ($diskon / 100);
            $totalharga = $harga - $ndiskon;

            echo '<div class="alert alert-success">';
            echo "<p><strong>Harga :</strong> Rp " . number_format($harga, 2, ',', '.') . "</p>";
            echo "<p><strong>Persentase Diskon :</strong> $diskon% </p>";
            echo "<p><strong>Nilai Diskon :</strong> Rp " . number_format($ndiskon, 2, ',', '.') . "</p>";
            echo "<p><strong>Total harga setelah diskon :</strong> Rp " . number_format($totalharga, 2, ',', '.') . "</p>";
            echo '</div>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">APLIKASI PERHITUNGAN DISKON</h1>

        <form action="" method="post" class="border p-4 rounded show-sm, mx-auto" style="max-width: 450px;">
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" name="harga" id="harga" class="form-control" step="0.01" placeholder="masukkan harga" required>
            </div>
            <div class="mb-3">
                <label for="diskon" class="form-label">Diskon</label>
                <input type="number" name="diskon" id="diskon" class="form-control" step="0.01" placeholder="masukkan persentase diskon" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Hitung</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>