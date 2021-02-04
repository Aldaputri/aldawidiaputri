<?php 
                include "koneksi.php";

                if(isset($_POST['q_cari'])){
                    $cari = $_POST["cari"];
                    $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE `npm`='$cari'");
                }else{
                    $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MAHASISWA</title>
</head>
<body>
    <form method="POST">
    <h1 align="center">DATA MAHASISWA</h1>
        <table border="1" align="center">
            <tr>
                <td><input type="text" name="cari">&nbsp;<button type="submit" name="q_cari">Cari</button></td>
            </tr>
            <tr>
                <td>No</td>
                <td>Npm</td>
                <td>Nama</td>
                <td>Tempat Lahir</td>
                <td>Tanggal Lahir</td>
                <td>Jenis Kelamin</td>
                <td>Alamat</td>
                <td>Kode Pos</td>
                <td>Action</td>
            </tr>
            <?php
                $no= 1;
                while ($data = mysqli_fetch_assoc($query)):
             ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?=$data ['npm'] ?></td>
                <td><?=$data ['nama']?></td>
                <td><?=$data ['tempat_lahir'] ?></td>
                <td><?=$data ['tanggal_lahir'] ?></td>
                <td><?=$data ['jenis_kelamin']?></td>
                <td><?=$data ['alamat'] ?></td>
                <td><?=$data ['kode_pos'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $data['no']; ?>">Edit</a> &nbsp;&nbsp;&nbsp;
                    <a href="delete.php?id=<?= $data['no']; ?>">Delete</a>
                </td>
    
            </tr>
            <?php 
            endwhile;?>
        
        </table>
    </form>
    
</body>
</html>