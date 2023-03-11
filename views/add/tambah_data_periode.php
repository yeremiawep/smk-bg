<?php
include '../../config/database.php';
include '../../config/function.php';

session_start();
$tahun = $_POST['tahun'];
$tgl_mulai = $_POST['tgl_mulai'];
$tgl_berakhir = $_POST['tgl_berakhir'];
$status = periode($tgl_mulai, $tgl_berakhir);

$query = mysqli_query($conn, "INSERT INTO periode (id_periode, tahun, tgl_mulai, tgl_berakhir, status) VALUES ('','$tahun', '$tgl_mulai', '$tgl_berakhir', '$status')");

if ($query) {
  $_SESSION["sukses"] = 'Data Berhasil Disimpan';
} else {
  // $_SESSION['message'] = 'Failed';
}

header('Location: ../../app/index.php?page=data-periode');
