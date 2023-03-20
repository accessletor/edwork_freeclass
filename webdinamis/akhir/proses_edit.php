<?php
include "koneksi.php";

$id = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$deskripsi_produk = $_POST['deskripsi_produk'];

if($_FILES['gambar_produk']['name'] != "") {
    $gambar_produk = "images/" . basename($_FILES['gambar_produk']['name']);
    move_uploaded_file($_FILES['gambar_produk']['tmp_name'], $gambar_produk);

    $query = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama_produk', harga_produk='$harga_produk', gambar_produk='$gambar_produk', deskripsi_produk='$deskripsi_produk' WHERE id='$id'");
} else {
    $query = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama_produk', harga_produk='$harga_produk', deskripsi_produk='$deskripsi_produk' WHERE id='$id'");
}

if($query) {
    header("Location: index.php");
} else {
    echo "Terjadi kesalahan saat menyimpan data";
}
?>