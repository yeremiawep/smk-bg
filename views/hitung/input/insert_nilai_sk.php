<?php 
include '../../../config/database.php';

$id_pegawai = $_POST['id_pegawai'];
$id_isi = $_POST['id_isi'];
$nilai = $_POST['nilai'];
$count = count($nilai);

for ($j=0; $j <= $count ; $j++) {
  $insert = mysqli_query($conn, "INSERT INTO hitung_nilai_sk VALUES ('','{$id_pegawai[$j]}','{$id_isi[$j]}','{$nilai[$j]}')");
}

header('Location: ../../../app/index.php?page=data-penilaian-rtg');

?>