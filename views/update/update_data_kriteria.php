<?php
include '../../config/database.php';
session_start();

$id_isi = $_POST['id_isi'];
$aspek = $_POST['aspek'];
$kriteria = $_POST['kriteria'];
$target = $_POST['target'];

$query = mysqli_query($conn, "UPDATE kriteria_penilaian SET aspek='$aspek', kriteria='$kriteria', target='$target' WHERE id_isi_sko='$id_isi'");
if ($query) {
  $_SESSION['sukses'] = 'Updated';
} else {
  $_SESSION['gagal'] = 'Failed';
}

header('Location: ../../app/index.php?page=data-kinerja-objektif');
