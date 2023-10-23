<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="POST" action="">
        tinggi badan: <input type="text" name="tinggi"><br>
        berat badan: <input type="text" name="berat"><br>
        <input type="submit" name="hasil" value="hasil">
    </form>

    <?php
    if (isset($_POST["hasil"])) {
        $tinggi = $_POST["tinggi"];
        $berat = $_POST["berat"];
        $hasil = $berat / $tinggi;
        echo "hasil kalkulasi BMI: $hasil";
    }
    ?>
</body>
</html>

<?php
    if $tinggi = null;
    echo "Kolom tinggi badan tidak boleh kosong";
    if $berat = null;
    echo "kolom tinggi badan tidak boleh kosong";

