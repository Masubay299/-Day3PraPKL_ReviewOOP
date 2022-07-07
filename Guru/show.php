<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>

<body>
    <?php
include '../database.php';
$guru = new Guru();
foreach ($guru->show($_GET['no']) as $data) {
    $no = $data['no'];
    $nip = $data['nip'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
}
?>
    <fieldset>
        <legend>Show Data Guru</legend>
        <table>
            <tr>
                <th>Nomor Induk Pegawai</th>
                <td><input type="number" name="nip" value="<?php echo $nip; ?>" readonly></td>
            </tr>
            <tr>
                <th>Nama Guru</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
            <tr>
                <th>Alamat Siswa</th>
                <td><textarea name="alamat" cols="40" readonly><?php echo $alamat; ?></textarea></td>
            </tr>
        </table>
    </fieldset>
</body>

</html>