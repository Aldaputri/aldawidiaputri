<?php
include "koneksi.php";
if (isset($_POST['submit'])){
    $npm=$_POST['npm'];
    $nama=$_POST['nama'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $alamat=$_POST['alamat'];
    $kode_pos=$_POST['kode_pos'];

    $query= "INSERT INTO mahasiswa(`no`,`npm`,`nama`,`tempat_lahir`,`tanggal_lahir`,`jenis_kelamin`,`alamat`,`kode_pos`) VALUES (NULL, '$npm', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$kode_pos')";
    $connect=mysqli_query($koneksi,$query);
    if ($connect) {
        header("location:datamahasiswa.php");
        echo "berhasil";
    }else {
        header("location:datamahasiswa.php");
        echo "gagal";  
    }
    
}
    ?>