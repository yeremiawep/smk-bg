<?php
include '../../config/database.php';
session_start();
$name_div = $_POST['name_div'];

$query = mysqli_query($conn, "INSERT INTO divisions (id, name_div) VALUES ('','$name_div')");

if ($query) {
  $_SESSION["sukses"] = 'Data Berhasil Disimpan';
} else {
  // $_SESSION['message'] = 'Failed';
}

header('Location: ../../app/index.php?page=data-divisi');
