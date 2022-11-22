<?php
// Create database connection using config file
include_once("koneksi.php");
 
// Fetch all users data from database
$hasil = mysqli_query($conn, "SELECT * FROM brg_kbth_aym");
// $data = mysqli_fetch_array($hasil);
// $kodebarang = $data['kodeTerbesar'];
// $urutan = (int) substr($kodebarang, 3, 3);
// $urutan++;
// $huruf = "kub";
// $kodebarang = sprintf("%30s" , $urutan);
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="tambah_brg_kbth.php">Barang Kebutuhan Ayam</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
         <th>Nama barang</th> <th>jumlah</th> <th>tanggal</th> <th>Update</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($hasil)) {         
        echo "<tr>";
        echo "<td>".$data['nama_barang']."</td>";
        echo "<td>".$data['jumlah']."</td>";
        echo "<td>".$data['tanggal']."</td>";    
        echo "<td><a href='edit_brg_kbth.php?id_barang=$data[id_barang]'>Edit</a> | <a href='hps_brg_kbth.php?id_barang=$data[id_barang]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <a href="index.php">kembali</a>
</body>
</html>