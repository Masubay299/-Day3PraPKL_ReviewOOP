<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>

<body>
    <?php
include '../database.php';
$guru = new Guru();
foreach ($guru->edit($_GET['no']) as $data) {
    $no = $data['no'];
    $nip = $data['nip'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
}
?>
    <fieldset>
        <legend>Edit Data Guru</legend>
        <form action="proses.php?aksi=update" method="post">
            <input type="hidden" name="no" value="<?php echo $no; ?>">
            <table>
                <tr>
                    <th>Nomor Induk Pegawai</th>
                    <td><input type="number" name="nip" value="<?php echo $nip; ?>" required></td>
                </tr>
                <tr>
                    <th>Nama Guru</th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" cols="40" required><?php echo $alamat; ?></textarea></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>