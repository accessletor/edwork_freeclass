<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tabel Json</title>
	<style>
		table {
			border: 1px solid black;
		}
		th,td {
			padding: 10px;
			text-align: center;
			border: 1px solid black;
			margin: 0;
		}
		.judul {
			background-color: #4a8af0;
			color: white;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<?php 
	$data = json_decode(file_get_contents('data.json'), true);

	echo "<table>";
	echo "<tr class='judul'><th>Nama</th><th>Kelas</th><th>Umur</th><th>Alamat</th><th>Tanggal Lahir</th><th>Nilai</th><th>Hasil</th></tr>";

	foreach ($data as $item) {
		$tanggal_lahir = $item['tanggal_lahir'];
		$tanggal_hari_ini = date("Y-m-d");
		$tanggal_lahir_obj = new DateTime($tanggal_lahir);
		$tanggal_hari_ini_obj = new DateTime($tanggal_hari_ini);
		$selisih = $tanggal_lahir_obj->diff($tanggal_hari_ini_obj);
		$umur = $selisih->y . " tahun " . $selisih->m . " bulan";

		echo "<tr>";
		echo "<td>" . $item['nama'] . "</td>";
		echo "<td>" . $item['kelas'] . "</td>";
		echo "<td>" . $umur . "</td>";
		echo "<td>" . $item['alamat'] . "</td>";
		echo "<td>" . $item['tanggal_lahir'] . "</td>";
		echo "<td>" . $item['nilai'] . "</td>";
		// hasil
		$hasil = "";
		if ($item['nilai'] >= 90 && $item['nilai'] <= 100) {
			$hasil = "A";
		} elseif ($item['nilai'] >= 80 && $item['nilai'] < 90) {
			$hasil = "B";
		} elseif ($item['nilai'] >= 70 && $item['nilai'] < 80) {
			$hasil = "C";
		} else {
			$hasil = "D";
		}

		echo "<td>" . $hasil . "</td>";
		echo "</tr>";
		echo "</tr>";
	}

	echo "</table>";
	?>
</body>
</html>