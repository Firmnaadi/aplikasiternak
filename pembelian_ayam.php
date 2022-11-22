<?php
// Create database connection using config file
include_once("koneksi.php");
 
// Fetch all users data from database
$hasil = mysqli_query($conn, "SELECT * FROM pembelian_ayam");
?>
 
<html>
<head>    
    <title>Pembelian Ayam</title>
</head>
 
<body>
<tr>Pembelian Ayam</tr>
    <table width='60%' border=5>
 
    <tr>
    <th>tanggal</th> <th>jumlah</th> <th>harga</th> <th>total harga</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($hasil)) {         
        echo "<tr>";
        echo "<td>".$data['tanggal']."</td>"; 
        echo "<td>".$data['jumlah_ayam']."</td>";
        echo "<td>".$data['harga']."</td>"; 
        echo "<td>".$data['jumlah_ayam']* $data['harga']."</td>"; 
   }
    ?>
    </table>
    <a href="tambah_pembelian_ayam.php">Tambah Ayam</a><br/><br/>
    <a href="index.php">kembali</a>
    
</body>
</html>