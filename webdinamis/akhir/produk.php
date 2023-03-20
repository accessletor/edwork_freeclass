<!DOCTYPE html>
<html>
<head>
	<title>Detail Produk</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<?php
		include "koneksi.php";

		$id = $_GET['id'];

		$query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'");
		$data = mysqli_fetch_array($query);
		?>

		<div class="product">
			<img src="gambar/<?php echo $data['gambar_produk']; ?>">
			<h3><?php echo $data['nama_produk']; ?></h3>
			<p><?php echo $data['deskripsi_produk']; ?></p>
			<h4>Rp <?php echo number_format($data['harga_produk'],0,',','.'); ?></h4>

			<a class="btn" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
			<a class="btn" href="hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus produk ini?')">Hapus</a>
			<a class="btn" href="index.php">Kembali</a>
		</div>
	</div>
</body>
</html>
