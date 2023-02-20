<?php
include '../../config/database.php';
session_start();

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM kriteria_penilaian WHERE id_isi_sko='$id'");

if ($query) {
  $_SESSION['sukses'] = 'Deleted';
} else {
  $_SESSION['gagal'] = 'Failed';
}

header('Location: ../../app/index.php?page=data-kinerja-objektif');
