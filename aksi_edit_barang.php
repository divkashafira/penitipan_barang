<?php
    include "koneksi.php";

    // Mendapatkan data dari form
    $id= $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $Dimensi = $_POST['Dimensi'];
    $tanggal_penitipan = $_POST['tanggal_penitipan'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
    $lama_penitipan = $_POST['lama_penitipan'];
    
    
    // Query update data mahasiswa
    $sql = "UPDATE barang SET nama_barang='$nama_barang', Dimensi = '$Dimensi', tanggal_penitipan='$tanggal_penitipan', tanggal_pengembalian='$tanggal_pengembalian', lama_penitipan='$lama_penitipan' WHERE id_barang=$id";
    if (mysqli_query($link, $sql)) {
        header("Location:tampil_data_barang.php");
    }
?>