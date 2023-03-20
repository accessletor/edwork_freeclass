<?php 
$servername ="localhost";
$database = "mahasiswa";
$username = "root";
$password = "";

// create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// cek koneksi
if (!$conn) {
	die("connection failed: " . mysql_connect_error());
}
// echo "Connected cuy";
// mysqli_close($conn);
$sql = "SELECT * FROM tabel_mahasiswa";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo "tabel_mahasiswa : " . $row["nim"] . $row["nama"] . $row["email"] . $row["alamat"] . "<br>";
	}
}else {
	echo "0 result";
}
$conn->close();
 ?> 
