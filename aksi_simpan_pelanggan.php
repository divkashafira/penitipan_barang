<?php
    include "koneksi.php";

    // Mendapatkan data dari form
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    

    // Query tambah data mahasiswa
    $sql = "INSERT INTO pelanggan (nama, jenis_kelamin, nik, alamat, no_hp) VALUES ('$nama', '$jenis_kelamin', '$nik', '$alamat', '$no_hp')";
    if (mysqli_query($link, $sql)) {
        header("Location: tampil_data_pelanggan.php");
    } else {
        header("Location: form_tambah_pelanggan.php");
    }
?>