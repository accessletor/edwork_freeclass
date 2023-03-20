<?php
include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'");

$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  <title>Edit Katalog</title>
</head>
<body>
    <h1 class="judul">Edit Katalog</h1>
    <form method="post" action="proses_edit.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <label>Nama Produk</label>
        <input type="text" name="nama_produk" value="<?php echo $data['nama_produk']; ?>" required>
        <br><br>
        <label>Harga Produk</label>
        <input type="text" name="harga_produk" value="<?php echo $data['harga_produk']; ?>" required>
        <br><br>
        <label>Gambar Produk</label>
        <input type="file" name="gambar_produk">
        <br><br>
        <label>Deskripsi Produk</label>
        <textarea name="deskripsi_produk" required><?php echo $data['deskripsi_produk']; ?></textarea>
        <br><br>
        <input type="submit" name="edit" value="Simpan Perubahan">
    </form>
</body>
</html>