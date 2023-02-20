<?php
include '../../config/database.php';
session_start();
$name_jab = $_POST['name_jab'];
$kat_jab = $_POST['kat_jab'];

$query = mysqli_query($conn, "INSERT INTO jabatans (id, kat_jabatan,name_jab) VALUES ('','$kat_jab','$name_jab')");

if ($query) {
  $_SESSION["sukses"] = 'Data Berhasil Disimpan';
} else {
  // $_SESSION['message'] = 'Failed';
}

header('Location: ../../app/index.php?page=data-jabatan');
