<?php
include '../../config/database.php';

$id_pegawai = $_POST['id_pegawai'];
$nilai = $_POST['nilai'];
$hasil = array_sum($nilai)/count($nilai) * 40/100;

$query = mysqli_query($conn, "UPDATE nilai_sk SET nilai_sk='$hasil' WHERE id_pegawai='$id_pegawai'");

header('Location: ../../app/index.php?page=data-penilaian');
