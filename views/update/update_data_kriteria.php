<?php

include '../../config/database.php';
session_start();

$id_isi = $_POST['id_isi'];
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
  $query = mysqli_query($conn, "UPDATE kriteria_penilaian SET aspek='$aspek[$i]', kriteria='$kriteria[$i]', target='$target[$i]', id_tk='$tk_kep[$i]', bobot='$bobot[$i]' WHERE id_isi_sko='$id_isi[$i]'");
}

if ($query) {
  $_SESSION['sukses'] = 'Success';
} else {
  $_SESSION['gagal'] = 'Failed';
}

header('Location: ../../app/index.php?page=data-kinerja-objektif');
