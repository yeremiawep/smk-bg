<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'sim_bg';

$conn = mysqli_connect($hostname, $username, $password, $database);

// if (!$conn) {
//   die("Koneksi Gagal:" . mysqli_connect_error());
// } else {
//   echo "Koneksi Berhasil";
// }
