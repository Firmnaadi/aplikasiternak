

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah barang</title>
</head>
<body>
<a href="brg_telur.php">kembali</a>
    <br/><br/>
 
    <form action="tambah_brg_tlr.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>berat</td>
                <td><input type="number" name="berat"></td>
            </tr>
            <tr> 
                <td>tanggal</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            
            <tr> 
                <td>gread</td>
                <select type="text" name="gread" >
                <option value="">- Pilih Jenis gread -</option>
                <option value=" A">A</option>
                <option value=" B">B</option>
                <option value=" C">C</option>
                 </select>
                 
            </tr>
            
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Selesai"></td>
            </tr>
        </table>
    </form>
    <?php
//  include 'koneksi.php';
//  $berat = $_POST['berat'];
//  $tanggal = $_POST['tanggal'];
//  $gread = $_POST['gread'];
//  $sql = "INSERT INTO brg_telur (id_telur, berat, tanggal, gread)
//  VALUES ('','$berat','$tanggal','$gread')";
//  if (mysqli_query($conn, $sql)) {
//  echo "<script type='text/javascript'>
//  alert('Data Berhasil Dimasukan!');
//  location.replace('brg_telur.php');
//  </script>";
//  } else {
//  echo "<script type='text/javascript'>
//  alert('Data Gagal Dimasukan!');
//  location.replace('brg_telur.php');
//  </script>";
//  }
//  mysqli_close($conn);
//  //header("Location:input.php");
// 
if(isset($_POST['Submit'])) {
    $berat = $_POST['berat'];
    $tanggal = $_POST['tanggal'];
    $gread = $_POST['gread'];
    
    // include database connection file
    include_once("koneksi.php");
            
    // Insert user data into table
    $result = mysqli_query($conn, "INSERT INTO brg_telur(berat, tanggal, gread) VALUES('$berat','$tanggal','$gread')");
    
    // Show message when user added
    echo "<script type='text/javascript'>
    alert('Data Berhasil Dimasukan!');
   location.replace('brg_telur.php');
   </script>";
    //"User added successfully. <a href='brg_telur.php'>View Users</a>";
}

?>

</body>
</html>