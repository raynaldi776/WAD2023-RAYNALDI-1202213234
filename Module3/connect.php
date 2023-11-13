<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$dbhost = "localhost: 3308";
$dbuser = "root";
$dbname = "modul3";
$dbpass = "";

$conn = mysqli_connect( $dbhos, $dbuser, $dbname, $dbpass);
//  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya

// 
?>