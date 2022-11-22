<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit']))
{	
    $id_barang = $_POST['id_barang'];
    
    $nama_barang=$_POST['nama_barang'];
    $jumlah=$_POST['jumlah'];
    $tanggal=$_POST['tanggal'];
        
    // update user data
    $hasil = mysqli_query($conn, "UPDATE brg_kbth_aym SET nama_barang='$nama_barang',tanggal='$tanggal',jumlah='$jumlah' WHERE id_barang=$id_barang");
    
    // Redirect to homepage to display updated user in list
    header("Location: brg_kbth_aym.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_barang = $_GET['id_barang'];
 
// Fetech user data based on id
$hasil = mysqli_query($conn, "SELECT * FROM brg_kbth_aym WHERE id_barang=$id_barang");
 
while($data = mysqli_fetch_array($hasil))
{
    $nama_barang = $data['nama_barang'];
    $jumlah = $data['jumlah'];
    $tanggal = $data['tanggal'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="brg_kbth_aym.php">kembali</a>
    <br/><br/>
    
    <form name="update_kbth" method="post" action="edit_brg_kbth.php">
        <table border="0">
            <tr>  <td>nama_barang</td>
                <td><input type="text" name="nama_barang" value=<?php echo $nama_barang;?>></td>
            </tr>
            <tr> 
                <td>jumlah</td>
                <td><input type="number" name="jumlah" value=<?php echo $jumlah;?>></td>
            </tr>
            
            <tr> 
                <td>tanggal</td>
                <td><input type="date" name="tanggal" value=<?php echo $tanggal;?>></td>
            </tr>
            <tr> 
                
            <td><input type="hidden" name="id_barang" value=<?php echo $_GET['id_barang'];?>></td>
                <td><input type="submit" name="Submit" value="Selesai"></td>
            </tr>
        </table>
    </form>
</body>
</html>