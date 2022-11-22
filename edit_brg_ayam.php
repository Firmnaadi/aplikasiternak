<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit']))
{	
    $id_telur = $_POST['id_telur'];
    
    $berat=$_POST['berat'];
    $tanggal=$_POST['tanggal'];
    $gread=$_POST['gread'];
        
    // update user data
    $hasil = mysqli_query($conn, "UPDATE brg_telur SET berat='$berat',tanggal='$tanggal',gread='$gread' WHERE id_telur=$id_telur");
    
    // Redirect to homepage to display updated user in list
    header("Location: brg_telur.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_telur = $_GET['id_telur'];
 
// Fetech user data based on id
$hasil = mysqli_query($conn, "SELECT * FROM brg_telur WHERE id_telur=$id_telur");
 
while($data = mysqli_fetch_array($hasil))
{
    $berat = $data['berat'];
    $gread = $data['gread'];
    $tanggal = $data['tanggal'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="brg_telur.php">kembali</a>
    <br/><br/>
    
    <form name="update_telur" method="post" action="edit_brg_telur.php">
        <table border="0">
            <tr> 
                <td>berat</td>
                <td><input type="number" name="berat" value=<?php echo $berat;?>></td>
            </tr>
            <tr> 
                <td>tanggal</td>
                <td><input type="date" name="tanggal" value=<?php echo $tanggal;?>></td>
            </tr>
            <tr> 
                <td>gread</td>
                <select type="text" name="gread" value=<?php echo $grade;?>>
                <option value="">- Pilih Jenis gread -</option>
                <option value=" A">A</option>
                <option value=" B">B</option>
                <option value=" C">C</option>
                 </select>
            </tr>
            <tr>
                <td><input type="hidden" name="id_telur" value=<?php echo $_GET['id_telur'];?>></td>
                <td><input type="submit" name="submit" value="Selesai"></td>
            </tr>
        </table>
    </form>
</body>
</html>