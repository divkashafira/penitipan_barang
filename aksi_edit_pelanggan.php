<?php
    include "koneksi.php";

    // Mendapatkan data dari form
    $id= $_POST['id'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    
    // Query update data mahasiswa
    $sql = "UPDATE pelanggan SET nama='$nama', jenis_kelamin='$jenis_kelamin', nik='$nik', alamat='$alamat', no_hp='$no_hp' WHERE id=$id";
    if (mysqli_query($link, $sql)) {
        header("Location:tampil_data_pelanggan.php");
    }
?>