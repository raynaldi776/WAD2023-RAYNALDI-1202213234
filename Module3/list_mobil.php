<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <div class="container mt-5" style= "width:50%">
        <tabel class ="tabel">
            <thread>
                <tr>
                    <th scope ="col">#</th>
                    <th scope ="col">nama_mobil</th>
                    <th scope ="col">brand_mobil</th>
                    <th scope ="col">warna_mobil</th>
                    <th scope ="col">tipe_mobil</th>
                    <th scope ="col">harga_mobil</th>
                </tr>
            </thread>
            <tbody>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            include("connect.php");
            $query = $mysqli_query($connect, "SELECT * FROM list_mobil");
            
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            if($query){
                while($select = mysql_fetch_assoc($query));
            }
            ?>
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            <tr?>
                <th scope ="row"<?= $select['id']?></th>
                <td><?= $select['nama_mobil']?></td>
                <td><?= $select['brand_mobil']?></td>
                <td><?= $select['warna_mobil']?></td>
                <td><?= $select['tipe_mobil']?></td>
                <td><?= $select['harga_mobil']?></td>
            </tr>
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'
            //<!--  **********************  1  **************************     -->

            
            







            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->

            
            

            
            
            //<!--  **********************  2  **************************     -->
            
        </div>
    </center>
</body>
</html>
