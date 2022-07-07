<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>Data Guru</center>
    <fieldset>
        <legend>Data Guru</legend>
        <a href="create.php">Tambah Data Guru</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nomor Induk Pegawai</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
include '../database.php';
$guru = new Guru();
$no = 1;
foreach ($guru->index() as $data) {
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nip']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td>
                    <a href="show.php?no=<?php echo $data['no']; ?>">Show</a>
                </td>
                <td>
                    <a href="edit.php?no=<?php echo $data['no']; ?>">Edit</a>
                </td>
                <td>
                    <a href="proses.php?no=<?php echo $data['no']; ?>&aksi=delete"
                        onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                        Delete
                    </a>
                </td>
            </tr>
            <?php
}
?>
    </fieldset>
</body>

</html>