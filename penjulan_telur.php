<?php

echo date('l, d-m-Y');

echo "<br/>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah barang</title>
</head>
<body>
<a href="index.php">kembali</a>
    <br/><br/>
 
    <form action="penjualan_telur.php" method="post" name="form1">
        <table width="25%" border="0">
        <tr>
                <td>tanggal</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr> 
                <td>grade</td>
                <td><input type="text" name="grade"></td>
            </tr>
            <tr> 
                <td>harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td>Berat</td>
                <td><input type="text" name="berat"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="total"></td>
            </tr>
        </table>
    </form>
<?php
if(isset($_POST['Submit'])) {
    $berat = $_POST['berat'];
    $tanggal = $_POST['tanggal'];
    $gread = $_POST['gread'];
    $harga = $_POST['harga'];
    include_once("koneksi.php");
    $result = mysqli_query($conn, "INSERT INTO penjualan_telur(harga, berat, tanggal, gread) VALUES('$berat','$tanggal','$gread', '$harga')");

    $jumlah = $_POST['berat'] * $_POST['harga'];
    echo  "<input type = text name='jumlah' value='$jumlah' id='jumlah'>";
    echo "<input type = text name='bayar' id='bayar'>";
    echo "<input type = text name='totalBayar' id='totalBayar'>";
    echo "<button id='btn-bayar' onclick='hitungKembalian()'>Bayar</button>";
    echo "
    <script>
        function hitungKembalian() {
            var jumlah = document.getElementById('jumlah').value;
            var bayar = document.getElementById('bayar').value;
            var totalBayar = document.getElementById('totalBayar');
            document.getElementById('totalBayar').value = parseInt(bayar) - parseInt(jumlah);
            console.log(document.getElementById('totalBayar').value);
        }
    </script>";        

} 

?>

</body>
</html>