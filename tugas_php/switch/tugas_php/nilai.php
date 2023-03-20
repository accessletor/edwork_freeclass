<?php
// Masukkan nilai yang akan dicek
$nilai = 85;

// Cek range nilai dan berikan output sesuai dengan range tersebut
switch (true) {
	case ($nilai >= 90 && $nilai <= 100):
		echo "Nilai A";
		break;
	case ($nilai >= 80 && $nilai < 90):
		echo "Nilai B";
		break;
	case ($nilai >= 70 && $nilai < 80):
		echo "Nilai C";
		break;
	default:
		echo "Nilai D";
		break;
}
?>
