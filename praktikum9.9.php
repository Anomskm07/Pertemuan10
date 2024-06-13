<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Aritmatika</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST['nama']);
        $angka1 = (int)$_POST['angka1'];
        $angka2 = (int)$_POST['angka2'];

        $tambah = $angka1 + $angka2;
        $kurang = $angka1 - $angka2;
        $perkalian = $angka1 * $angka2;
        $pembagian = $angka1 / $angka2;
        $modulus = $angka1 % $angka2;

        echo "<h2>Perhitungan Aritmatika</h2>";
        echo "Nama: $nama<br>";
        echo "$angka1 + $angka2 = $tambah<br>";
        echo "$angka1 - $angka2 = $kurang<br>";
        echo "$angka1 * $angka2 = $perkalian<br>";
        echo "$angka1 / $angka2 = $pembagian<br>";
        echo "$angka1 % $angka2 = $modulus<br>";
    } else {
    ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="nama">Masukkan nama anda:</label>
            <input type="text" id="nama" name="nama" required><br><br>

            <label for="angka1">Masukkan angka pertama (1-10):</label>
            <input type="number" id="angka1" name="angka1" min="1" max="10" required><br><br>

            <label for="angka2">Masukkan angka kedua (1-10):</label>
            <input type="number" id="angka2" name="angka2" min="1" max="10" required><br><br>

            <input type="submit" value="Hitung">
        </form>
    <?php
    }
    ?>
</body>
</html>
