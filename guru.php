<?php
class Guru extends Database
{
// Menampilkan Semua Data
    public function index()
    {

        $dataguru = mysqli_query($this->koneksi, "select * from guru");
// var_dump($dataguru);
        return $dataguru;
    }

    // Menambah Data
    public function create($nip, $nama, $alamat)
    {
        mysqli_query(
            $this->koneksi,
            "insert into guru values(null,'$nip','$nama', '$alamat')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($no)
    {
        $dataguru = mysqli_query(
            $this->koneksi,
            "select * from guru where no='$no'"
        );
        return $dataguru;
    }

    // Menampilkan data berdasarkan id
    public function edit($no)
    {
        $dataguru = mysqli_query(
            $this->koneksi,
            "select * from guru where no='$no'"
        );
        return $dataguru;
    }
    // mengupdate data berdasarkan id
    public function update($no, $nip, $nama, $alamat)
    {
        mysqli_query(
            $this->koneksi,
            "update guru set nama='$nama', nip='$nip',alamat='$alamat' where no='$no'"
        );
    }

    // menghapus data berdasarkan no
    public function delete($no)
    {
        mysqli_query($this->koneksi, "delete from guru where no='$no'");
    }
}