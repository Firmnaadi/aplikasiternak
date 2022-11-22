
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pembelian Ayam</title>
</head>
<body>
    <tr>Tambah Pembelian Ayam</tr>
    <br/><br/>

    <br/><br/>
 
    <form action="tambah_pembelian_ayam.php" method="post" name="form1">
        <table width="20%" border="0">
            <tr> 
                <td>jumlah ayam</td>
                <td><input type="text" name="jumlah_ayam"></td>
            </tr>
            <tr> 
                <td>harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td>tanggal</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="tambah"></td>
            </tr>
        </table>
        <a href="pembelian_ayam.php">kembali</a>
    </form>
    <?php

if(isset($_POST['Submit'])) {
    $jumlah_ayam = $_POST['jumlah_ayam'];
    $tanggal = $_POST['tanggal'];
    $harga = $_POST['harga'];
    //$total = $_POST['harga']* $_POST['jumlah_ayam'];
    
    // include database connection file
    include_once("koneksi.php");
            
    // Insert user data into table
    $result = mysqli_query($conn, "INSERT INTO pembelian_ayam(jumlah_ayam, tanggal, harga) VALUES('$jumlah_ayam','$tanggal','$harga')");
    
    // Show message when user added
    echo "<script type='text/javascript'>
    alert('Data Berhasil Dimasukan!');
   location.replace('pembelian_ayam.php');
   </script>";
    //"User added successfully. <a href='brg_telur.php'>View Users</a>";
}

?>

</body>
</html>