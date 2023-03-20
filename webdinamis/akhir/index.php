
<!DOCTYPE html>
<html>
<head>
	<title>Katalog Produk</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1 class="judul_ind">Katalog Produk</h1>

		<div class="products">
			<?php
			include "koneksi.php";

			$query = mysqli_query($koneksi, "SELECT * FROM produk");

			while($data = mysqli_fetch_array($query)){
				?>
				<div class="produk">
					<img src="gambar/<?php echo $data['gambar_produk']; ?>">
					<h3><?php echo $data['nama_produk']; ?></h3>
					<p><?php echo $data['deskripsi_produk']; ?></p>
					<i><?php echo number_format($data['harga_produk'],0,',','.'); ?></i>
					<a class="btn" href="proses_hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</a>
					<a class="btn" href="edit.php?id=<?php echo $data['id']; ?>" >Edit</a>
					<a class="btn" href="produk.php?id=<?php echo $data['id']; ?>" >Detail</a>
				</div>
			<?php } 
			?>
		</div>
	</div>
</body>
</html>
