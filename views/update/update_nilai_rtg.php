<?php
include '../../config/database.php';
session_start();

$idna = $_POST['idna'];
$catatan = $_POST['catatan'];

var_dump($catatan);

$update = "UPDATE nilai_akhir SET catatan='$catatan' WHERE id_na='$idna'";
$sql = mysqli_query($conn, $update);

if ($sql) {
  $_SESSION['sukses'] = 'Berhasil Update Data';
} else {
  $_SESSION['gagal'] = 'Failed';
}

header('Location: ../../app/index.php?page=rekap-nilai-rtg');
