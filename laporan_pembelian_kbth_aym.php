<?php
// Create database connection using config file
include_once("koneksi.php");
 
// Fetch all users data from database
$hasil = mysqli_query($conn, "SELECT * FROM brg_kbth_aym");
?>
 
<html>
<head>    
    <title>Laporan Pembelian Kebutuhan Ayam</title>
</head>
 
<body>
<tr> Laporan Pembelian Kebutuhan Ayam</tr>
    <table width='60%' border=5>
 
    <tr>
         <th>Nama barang</th> <th>jumlah</th> <th>tanggal</th> 
    </tr>
    <?php  
    while($data = mysqli_fetch_array($hasil)) {         
        echo "<tr>";
        echo "<td>".$data['nama_barang']."</td>";
        echo "<td>".$data['jumlah']."</td>";
        echo "<td>".$data['tanggal']."</td>";}
    ?>
    </table>
    <a href="index.php">kembali</a>
    
</body>
</html>