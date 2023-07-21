<?php
    include "koneksi.php";

    // Mendapatkan data dari form
    $nama_barang = $_POST['nama_barang'];
    $Dimensi = $_POST['Dimensi'];
    $tanggal_penitipan = $_POST['tanggal_penitipan'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
    $lama_penitipan = $_POST['lama_penitipan'];
    $id = $_POST['id'];
    

    // Query tambah data mahasiswa
    $sql = "INSERT INTO barang (nama_barang, Dimensi, tanggal_penitipan, tanggal_pengembalian, lama_penitipan, id) VALUES ('$nama_barang', '$Dimensi', '$tanggal_penitipan', '$tanggal_pengembalian', '$lama_penitipan', $id)";
    if (mysqli_query($link, $sql)) {
        header("Location: tampil_data_barang.php");
    } else {
        header("Location: form_tambah_barang.php");
    }
?>