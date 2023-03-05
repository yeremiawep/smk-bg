<?php
include '../../config/database.php';
session_start();

$divisi = $_POST['divisi'];
$jabatan = $_POST['jabatan'];
$aspek = $_POST['aspek'];
$kriteria = $_POST['kriteria'];
$target = $_POST['target'];
$tk_kepentingan = $_POST['tk_kepentingan'];
$bobot = $_POST['bobot'];

$query = mysqli_query($conn, "INSERT INTO kriteria_penilaian (id_isi_sko, divisi,jabatan, aspek, kriteria, target, id_tk, bobot) VALUES ('','$divisi','$jabatan','$aspek','$kriteria','$target', '$tk_kepentingan', '$bobot')");

if ($query) {
  $_SESSION['sukses'] = 'Berhasil Menambah Data';
} else {
  // $_SESSION['gagal'] = 'Gagal Menambah Data';
}

header('Location: ../../app/index.php?page=data-kinerja-objektif');
