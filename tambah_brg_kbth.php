
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah barang</title>
</head>
<body>
<a href="brg_kbth_aym.php">kembali</a>
    <br/><br/>
 
    <form action="tambah_brg_kbth.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>nama_barang</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr> 
                <td>jumlah</td>
                <td><input type="number" name="jumlah"></td>
            </tr>
            
            <tr> 
                <td>tanggal</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Selesai"></td>
            </tr>
        </table>
    </form>
    <?php

if(isset($_POST['Submit'])) {
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    
    // include database connection file
    include_once("koneksi.php");
            
    // Insert user data into table
    $result = mysqli_query($conn, "INSERT INTO brg_kbth_aym(nama_barang, jumlah, tanggal) VALUES('$nama_barang','$jumlah','$tanggal')");
    
    // Show message when user added
    echo "<script type='text/javascript'>
    alert('Data Berhasil Dimasukan!');
   location.replace('brg_kbth_aym.php');
   </script>";
    //"User added successfully. <a href='brg_telur.php'>View Users</a>";
}

?>

</body>
</html>