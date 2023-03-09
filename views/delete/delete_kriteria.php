<?php
include '../../config/database.php';
session_start();

$id = $_GET['id'];

$cek = mysqli_query($conn, "SELECT id_isi_sko FROM hitung_nilai WHERE id_isi_sko='$id'");
if (mysqli_num_rows($cek) == 0) {
  $query = mysqli_query($conn, "DELETE FROM kriteria_penilaian WHERE id_isi_sko='$id'");
} else if (mysqli_num_rows($cek) > 0) {
}


if ($query) {
  $_SESSION['sukses'] = 'Deleted';
} else {
  $_SESSION['gagal'] = 'Data tidak bisa didelete';
}

header('Location: ../../app/index.php?page=data-kinerja-objektif');
