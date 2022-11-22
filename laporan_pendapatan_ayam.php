<html>
<head>
    <title>Tutorial Cara Menampilkan Data Berdasarkan Tanggal Sekarang di PHP</title>
</head>
<body>
    <div style="border:1px solid #B0C4DE; padding:5px; overflow:auto; width:680px; height:300px;">
        <?php
            include "koneksi.php";
            $tgl    =date("Y-m-d");
        ?>
        <form action="laporan_pendapatan_ayam.php" method="post" name="postform">
            <p align="center"><font color="orange" size="3"><b>DATA Laporan Pendapatan Ayam</b></font></p>
            <table border="0">
                <tr>
                    <td width="80"><input type="submit" value="Tampilkan Data" name="tampil"/></td>
                </tr>
            </table>
        </form>
        <p>
        <?php
            //proses jika sudah klik button
            if(isset($_POST['tampil'])){
        ?>
        <i><b>Informasi : </b> Menampilkan Data Berdasarkan Tanggal Sekarang di PHP yaitu Tanggal: <b><?php echo $tgl?></b></i>
        <?php
            $query=mysqli_query($conn,"SELECT * FROM pembelian_ayam WHERE tanggal");
        ?>
        </p>
        <table border="0" width="660">
            <tr bgcolor="#FF6600">
                <th width="20" height="40">no</td> 
                <th width="70">tanggal</td> 
                <th width="80">Jumlah Ayam</td> 
                <th width="70">harga</td> 
                <th width="80">Ket</td>       
            </tr>
            <?php
                //menampilkan data
                $no=0;
                while($row=mysqli_fetch_array($query)){
                $no++
            ?>
            <tr>
                <td align="center" height="30"><?php echo $no?></td>
                <td><?php echo $row['jumlah_ayam']?></td>
                <td><?php echo $row['harga']?></td>
                <td align="center"><?php echo $row['tanggal']?></td>
                
            </tr>
            <?php
                }
            ?>    
            <tr>
                <td colspan="4" height="40"> 
                <?php
                    //jika tidak ada data
                    if(mysqli_num_rows($query)==0){
                        echo "<font color=red><blink>Tidak dapat menampilkan data berdasarkan tanggal sekarang !</blink></font>";
                    }
                ?>
                </td>
            </tr> 
        </table>
        <?php
            }
            else{
                unset($_POST['tampil']);
            }
        ?>
</body>
</html>