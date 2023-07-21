<?php
// Koneksi ke database
include "koneksi.php";
// Mendapatkan ID mahasiswa yang akan dihapus
$id = $_GET['id'];
// Query hapus data mahasiswa
$sql = "DELETE FROM barang WHERE id_barang='$id'";
if (mysqli_query($link, $sql)) {
    header("Location: tampil_data_barang.php");
}
?>