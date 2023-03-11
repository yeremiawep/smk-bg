<?php
include '../../config/database.php';
include '../../config/function.php';
session_start();

$id = $_POST['id_periode'];
$tgl_mulai = $_POST['tgl_mulai'];
$tgl_berakhir = $_POST['tgl_berakhir'];

$status = periode($tgl_mulai, $tgl_berakhir);

$query = mysqli_query($conn, "UPDATE periode SET tgl_mulai='$tgl_mulai', tgl_berakhir='$tgl_berakhir', status='$status' WHERE id_periode='$id'");
if ($query) {
  $_SESSION['sukses'] = 'Updated';
} else {
  $_SESSION['gagal'] = 'Failed';
}

header('Location: ../../app/index.php?page=data-periode');
