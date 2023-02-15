<?php

include '../../config/database.php';

// Insert Nilai SKO
$id = $_POST['id_user'];
$id_pegawai = $_POST['id_pegawai'];
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
$total_nilai_sko = array_sum($nilaisko) / $count * 60 / 100; // hitung nilai SKO non-manajerial, bobot = 60%
$total_nilai_sk = array_sum($nilaisk) / $countsk * 40 / 100; // hitung nilai sk non-manajerial, bobot = 40%
$nilai_akhir = $total_nilai_sko + $total_nilai_sk - $nilaihk; // total nilai akhir

$insertna = "INSERT INTO nilai_akhir VALUES ('','$id[0]','$id_pegawai[0]','$total_nilai_sko','$total_nilai_sk','$nilaihk','$nilai_akhir')";
$sql = mysqli_query($conn, $insertna);


header('Location : ../../app/index.php?page=data-penilaian-cro');

// var_dump($insertsko);
// var_dump($sql);
// var_dump($insertna);

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
