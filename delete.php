<?php
    $id =$_GET ['id'];
    include 'koneksi.php';
    $data = mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE `no`='$id' ");
    header("location:datamahasiswa.php");
?>