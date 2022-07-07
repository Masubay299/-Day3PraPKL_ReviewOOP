<?php
include '../database.php';
$guru = new Guru();

$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $no = $_POST['no'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
}

if ($aksi == "tambah") {
    $guru->create($nip, $nama, $alamat);
    header("location:index.php");
} elseif ($aksi == "update") {
    $guru->update($no, $nip, $nama, $alamat);
    header("location:index.php");
} elseif ($aksi == "delete") {
    $guru->delete($_GET['no']);
    header("location:index.php");
}