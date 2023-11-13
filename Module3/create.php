<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
$connect = mysqli_connect("localhost:8081", "root", " ", "modul3");
// 

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST

// 

// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)
    include('connect.php');
    // a. Ambil data nama mobil
    $nama = $_post["nama_mobil"];
    // b. Ambil data brand mobil
    $brand = $_post["brand_mobil"];
    // c. Ambil data warna mobil
    $warna = $_post["warna_mobil"];
    // d. Ambil data tipe mobil
    $tipe = $_post["tipe_mobil"];
    // e. Ambil data harga mobil
    $harga = $_post["harga_mobil"];
    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
    $query = mysqli_query($connect, "INSERT INTO showroom_mobil(nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil)
                                    VALUES($nama, $brand, $warna, $tipe, $harga)");

    // (5) Buatkan kondisi jika eksekusi query berhasil
    if($query) {
        echo "<script>alret('Data Telah Ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index.php'>";
    }
    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 
    else {
        echo "<script>alret('Gagal Ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index.php'>";
    }
// (7) Tutup koneksi ke database setelah selesai menggunakan database
?>