<?php
// Create database connection using config file
include_once("koneksi.php");
 
// Fetch all users data from database
$hasil = mysqli_query($conn, "SELECT * FROM brg_ayam");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="tambah_brg_ayam.php">Tambah Telur</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>total_ayam</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($hasil)) {         
        echo "<tr>";
        echo "<td>".$data['total_ayam']."</td>";
        echo "<td><a href='edit_brg_ayam.php?id_stok_ayam=$data[id_stok_ayam]'>Edit</a> | <a href='hps_brg_ayam.php?id_stok_ayam=$data[id_stok_ayam]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <a href="index.php">kembali</a>
</body>
</html>