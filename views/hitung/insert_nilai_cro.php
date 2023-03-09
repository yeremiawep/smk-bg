<?php

include '../../config/database.php';
include '../../config/function.php';

session_start();

// Insert Nilai SKO
$id = $_POST['id_user'];
$id_isi = $_POST['id_isi'];
$realisasi = $_POST['realisasi'];
$count = count($realisasi);
$bobot = $_POST['bobot'];
$periode = $_POST['periode'];

for ($i = 0; $i < $count; $i++) {
  $nilaiuntuksko[$i] = $realisasi[$i] * $bobot[$i];
  @$periode[$i] = $periode;
}
$hasil = array_sum($nilaiuntuksko) / 25;

$cek = mysqli_query($conn, "SELECT * FROM nilai_akhir WHERE id_user='$id[0]' AND periode='$periode[0]'");
if (mysqli_num_rows($cek) == 0) {
  for ($i = 0; $i < $count; $i++) {
    $insertsko = "INSERT INTO hitung_nilai VALUES ('','$id[$i]','$id_isi[$i]','$realisasi[$i]','$nilaiuntuksko[$i]','$periode[$i]')";
    $sql = mysqli_query($conn, $insertsko);
  }

  // Insert Nilai SK
  $id_isi_sk = $_POST['id_isi_sk'];
  $nilaisk = $_POST['nilaisk'];
  $countsk = count($nilaisk);

  for ($j = 0; $j < $countsk; $j++) {
    $insertsk = "INSERT INTO hitung_nilai_sk VALUES('','$id[$j]','$id_isi_sk[$j]','$nilaisk[$j]','$periode[$j]')";
    $sql = mysqli_query($conn, $insertsk);
  }

  // // Insert Nilai Akhir
  $nilaihk = $_POST['nilaihk'];
  $catatan = $_POST['catatan'];
  $total_nilai_sko = $hasil * 60 / 100; // hitung nilai sko non-manajerial, bobot = 60%
  $total_nilai_sk = array_sum($nilaisk) / $countsk * 40 / 100; // hitung nilai sk non-manajerial, bobot = 40%
  $nilai_akhir = $total_nilai_sko + $total_nilai_sk - $nilaihk; // total nilai akhir
  $predikat = predikat($nilai_akhir);

  $insertna = "INSERT INTO nilai_akhir VALUES ('','$id[0]','$total_nilai_sko','$total_nilai_sk','$nilaihk','$nilai_akhir','$predikat','$catatan','$periode[0]')";
  $sql = mysqli_query($conn, $insertna);
} else if (mysqli_num_rows($cek) > 0) {
}

if ($sql) {
  $_SESSION['sukses'] = 'Berhasil Input Nilai';
} else {
  $_SESSION['gagal'] = 'Data sudah pernah diinput';
}

header('Location: ../../app/index.php?page=data-penilaian-cro');

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
