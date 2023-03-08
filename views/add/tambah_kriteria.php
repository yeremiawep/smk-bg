<?php

include '../../config/database.php';
session_start();

// $jabatan = $_POST['jabatan'];
// $aspek = $_POST['aspek'];
// $kriteria = $_POST['kriteria'];
// $target = $_POST['target'];
// $tk_kepentingan = $_POST['tk_kepentingan'];
// $bobot = $_POST['bobot'];

// $query = mysqli_query($conn, "INSERT INTO kriteria_penilaian (id_isi_sko, jabatan, aspek, kriteria, target, id_tk, bobot) VALUES ('','$jabatan','$aspek','$kriteria','$target', '$tk_kepentingan', '$bobot')");

// if ($query) {
//   $_SESSION['sukses'] = 'Berhasil Menambah Data';
// } else {
//   // $_SESSION['gagal'] = 'Gagal Menambah Data';
// }


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

// var_dump($jab);
// print_r($aspek);
// print_r($kriteria);
// print_r($target);
// print_r($tk_kep);
// print_r($tkkep);
// print_r($ctkp);
// print_r($bobot);
// die();

for ($i = 0; $i < $ctkp; $i++) {
  $insert = mysqli_query($conn, "INSERT INTO kriteria_penilaian (id_isi_sko, jabatan, aspek, kriteria, target, id_tk, bobot) VALUES ('','$jab[$i]','$aspek[$i]','$kriteria[$i]','$target[$i]', '$tk_kep[$i]', '$bobot[$i]')");
}

if ($query) {
  $_SESSION['sukses'] = 'Berhasil Menambah Data';
} else {
  // $_SESSION['gagal'] = 'Gagal Menambah Data';
}

header('Location: ../../app/index.php?page=data-kinerja-objektif');
