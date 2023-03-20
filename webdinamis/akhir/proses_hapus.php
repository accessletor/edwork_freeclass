<?php
include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM produk WHERE id='$id'");

if($query) {
    header("Location: index.php");
} else {
    echo "Terjadi kesalahan saat menghapus data";
}
?>