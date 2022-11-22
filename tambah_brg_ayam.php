

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah barang</title>
</head>
<body>
<a href="brg_ayam.php">kembali</a>
    <br/><br/>
 
    <form action="tambah_brg_ayam.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>total ayam</td>
                <td><input type="text" name="total_ayam"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Selesai"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['Submit'])) {
        $total_ayam = $_POST['total_ayam'];
        
        // include database connection file
        include_once("koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($conn, "INSERT INTO brg_ayam(total_ayam) VALUES('$total_ayam')");
        
        // Show message when user added
        echo "<script type='text/javascript'>
        alert('Data Berhasil Dimasukan!');
       location.replace('brg_ayam.php');
       </script>";
        //"User added successfully. <a href='brg_telur.php'>View Users</a>";
    }
    
    ?>
    
    </body>
    </html>