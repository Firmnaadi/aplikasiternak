<?php
// Create database connection using config file
include_once("koneksi.php");
 
// Fetch all users data from database
$hasil = mysqli_query($conn, "SELECT * FROM brg_telur");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="tambah_brg_tlr.php">Tambah Telur</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Berat</th> <th>gread</th> <th>tanggal</th> <th>Update</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($hasil)) {         
        echo "<tr>";
        echo "<td>".$data['berat']."</td>";
        echo "<td>".$data['gread']."</td>";
        echo "<td>".$data['tanggal']."</td>";    
        echo "<td><a href='edit_brg_telur.php?id_telur=$data[id_telur]'>Edit</a> | <a href='hps_brg_telur.php?id_telur=$data[id_telur]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <a href="index.php">kembali</a>
</body>
</html>