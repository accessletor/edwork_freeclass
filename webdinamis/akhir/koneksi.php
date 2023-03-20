<?php
$host = "localhost"; //nama host server
$user = "root"; //nama user MySQL
$password = ""; //password MySQL
$database = "nama_database"; //nama database

$koneksi = mysqli_connect($host, $user, $password, $database);

if(mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>