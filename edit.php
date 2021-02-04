<?php 
    include('koneksi.php');
    $id = $_GET['id'];
    $data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE `no`='$id'"));

    if(isset($_POST['submit'])){
        $npm               = $_POST['npm'];
        $nama              = $_POST['nama'];
        $tempat_lahir      = $_POST['tempat_lahir'];
        $tanggal_lahir     = $_POST['tanggal_lahir'];
        $jenis_kelamin     = $_POST['jenis_kelamin'];
        $alamat            = $_POST['alamat'];
        $kode_pos          = $_POST['kode_pos'];
        
        $sql = "UPDATE `mahasiswa` SET `npm` = '$npm', `nama` = '$nama', `tempat_lahir` = '$tempat_lahir', `tanggal_lahir` = '$tanggal_lahir', `jenis_kelamin` = '$jenis_kelamin', `alamat` = '$alamat', `kode_pose` = '$kode_pose' WHERE `No` = '$id';";
        $connect = mysqli_query($koneksi, $sql);
        header('location:datamahasiswa.php');
    }
?>


<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT</title>
</head<!>
<body>
<h2 align="center">Masukkan Data Mahasiswa</h2>
<form method="POST" action="edit-proses.php">
    <input type="text" name="id" value="<?= $data['no'] ?>">
    <table border="0" align="center">
        <tr>
            <td>Npm</td>
            <td>:</td>
            <td><input type="text" name="npm" value="<?= $data['npm'] ?>" id="npm"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama" value="<?= $data['nama'] ?>"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir" id="tempat_lahir" value="<?= $data['tempat_lahir'] ?>"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?= $data['tanggal_lahir'] ?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <select name="jenis_kelamin" id="">
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" id="alamat"value="<?= $data['alamat'] ?>"></td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td>:</td>
            <td><input type="text" name="kode_pos" id="kode_pos"value="<?= $data['kode_pos'] ?>"></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Simpan</button></td>
        </tr>
    
    </table>
</form>
    
</body>
</html>
