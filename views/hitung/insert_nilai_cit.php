<?php

include '../../config/database.php';
include '../../config/function.php';

// Insert Nilai SKO
$id = $_POST['id_user'];
$id_pegawai = $_POST['id_pegawai'];
$div = $_POST['div'];
$jab = $_POST['jab'];
$id_isi = $_POST['id_isi'];
$nilaisko = $_POST['nilai'];
$count = count($nilaisko);

for ($i = 0; $i < $count; $i++) {
  $insertsko = "INSERT INTO hitung_nilai VALUES ('','$id[$i]','$id_pegawai[$i]','$id_isi[$i]','$nilaisko[$i]')";
  $sql = mysqli_query($conn, $insertsko);
}


// Insert Nilai SK
// $id = $_POST['id'];
// $id_pegawai = $_POST['id_pegawai'];
$id_isi_sk = $_POST['id_isi_sk'];
$nilaisk = $_POST['nilaisk'];
$countsk = count($nilaisk);

for ($j = 0; $j < $countsk; $j++) {
  $insertsk = "INSERT INTO hitung_nilai_sk VALUES('','$id[$j]','$id_pegawai[$j]','$id_isi_sk[$j]','$nilaisk[$j]')";
  $sql = mysqli_query($conn, $insertsk);
}

// Insert Nilai Akhir
$nilaihk = $_POST['nilaihk']; // nilai pelanggaran disiplin
$catatan = $_POST['catatan']; // catatan untuk pekerja
$total_nilai_sko = array_sum($nilaisko) / $count * 60 / 100; // hitung nilai SKO non-manajerial, bobot = 60%
$total_nilai_sk = array_sum($nilaisk) / $countsk * 40 / 100; // hitung nilai SK non-manajerial, bobot = 40 %
$nilai_akhir = $total_nilai_sko + $total_nilai_sk - $nilaihk; // total nilai akhir
$predikat = predikat($nilai_akhir);

$insertna = "INSERT INTO nilai_akhir VALUES ('','$id[0]','$id_pegawai[0]','$jab','$div','$total_nilai_sko','$total_nilai_sk','$nilaihk','$nilai_akhir','$predikat','$catatan')";
$sql = mysqli_query($conn, $insertna);

if ($sql) {
  $_SESSION['sukses'] = 'Berhasil Input Nilai';
} else {
  $_SESSION['gagal'] = 'Failed';
}

header('Location: ../../app/index.php?page=data-penilaian-cit');

// var_dump($insertsko);
// var_dump($sql);
// var_dump($insertna);
// var_dump($insertsk);
// var_dump($sql);

// var_dump($id_pegawai);
// var_dump($id_isi);
// var_dump($nilaisko);
// var_dump($count);


// var_dump($id_pegawai);
// var_dump($id_isi_sk);
// var_dump($nilai_sk);
// var_dump($countsk);

// var_dump($total_nilai_sko);
// var_dump($total_nilai_sk);
// var_dump($nilaihk);
// var_dump($nilai_akhir);
