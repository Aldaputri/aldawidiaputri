<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT</title>
</head<!>
<body>
<h2 align="center">Masukkan Data Mahasiswa</h2>
<form method="POST" action="tambah.php">
    <table border="0" align="center">
        <tr>
            <td>Npm</td>
            <td>:</td>
            <td><input type="text" name="npm" id="npm"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir" id="tempat_lahir"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir" id="tanggal_lahir"></td>
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
            <td><input type="text" name="alamat" id="alamat"></td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td>:</td>
            <td><input type="text" name="kode_pos" id="kode_pos"></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Simpan</button></td>
        </tr>
    
    </table>
</form>
    
</body>
</html>
