<?php
include '../../config/database.php';
session_start();
$tahun = $_POST['tahun'];

$query = mysqli_query($conn, "INSERT INTO periode (id_periode, tahun) VALUES ('','$tahun')");

if ($query) {
  $_SESSION["sukses"] = 'Data Berhasil Disimpan';
} else {
  // $_SESSION['message'] = 'Failed';
}

header('Location: ../../app/index.php?page=data-periode');
