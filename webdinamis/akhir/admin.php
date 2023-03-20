<?php
include "koneksi.php";

if(isset($_POST['tambah'])){
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];
    $gambar_produk = $_FILES['gambar_produk']['name'];
    $deskripsi_produk = $_POST['deskripsi_produk'];

    $target_dir = "gambar/";
    $target_file = $target_dir . basename($_FILES["gambar_produk"]["name"]);

    //upload gambar
    move_uploaded_file($_FILES["gambar_produk"]["tmp_name"], $target_file);

    //insert data ke database
    mysqli_query($koneksi, "INSERT INTO produk (nama_produk, harga_produk, gambar_produk, deskripsi_produk) VALUES('$nama_produk', '$harga_produk', '$gambar_produk', '$deskripsi_produk')");

    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  <title>Tambah Katalog</title>
</head>
<body>
    <h1 class="judul">Tambah Katalog</h1>
    <form method="post" enctype="multipart/form-data">
        <label>Nama Produk</label>
        <input type="text" name="nama_produk" required>
        <br><br>
        <label>Harga Produk</label>
        <input type="text" name="harga_produk" required>
        <br><br>
        <label>Gambar Produk</label>
        <input type="file" name="gambar_produk" required>
        <br><br>
        <label>Deskripsi Produk</label>
        <textarea name="deskripsi_produk" required></textarea>
        <br><br>
        <input type="submit" name="tambah" value="Tambah Produk">
    </form>
    
</body>
</html>
