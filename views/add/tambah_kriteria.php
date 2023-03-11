<?php

include '../../config/database.php';
session_start();

$jab = $_POST['jab'];
$aspek = $_POST['aspek'];
$kriteria = $_POST['kriteria'];
$target = $_POST['target'];
$tk_kep = $_POST['tk_kep'];

$tkkep = array_sum($tk_kep);
$ctkp = count($tk_kep);

for ($i = 0; $i < $ctkp; $i++) {
  $bobot[$i] = $tk_kep[$i] / $tkkep;
}

for ($i = 0; $i < $ctkp; $i++) {
  $query = mysqli_query($conn, "INSERT INTO kriteria_penilaian (id_isi_sko, jabatan, aspek, kriteria, target, id_tk, bobot) VALUES ('','$jab[$i]','$aspek[$i]','$kriteria[$i]','$target[$i]', '$tk_kep[$i]', '$bobot[$i]')");
}

if ($query) {
  $_SESSION['sukses'] = 'Berhasil Menambah Data';
} else {
  // $_SESSION['gagal'] = 'Gagal Menambah Data';
}

header('Location: ../../app/index.php?page=data-kinerja-objektif');
