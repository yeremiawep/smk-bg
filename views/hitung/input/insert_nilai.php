<?php 

include '../../../config/database.php';

// Insert nilai SKO

$id_pegawai = $_POST['id_pegawai'];
$id_isi = $_POST['id_isi'];
$nilai = $_POST['nilai'];
$count = count($nilai);

for($i=0; $i <= $count; $i++){
  $insert = mysqli_query($conn, "INSERT INTO hitung_nilai VALUES ('','{$id_pegawai[$i]}','{$id_isi[$i]}','{$nilai[$i]}')");
}

header('Location : ../../../app/index.php?page=data-penilaian-rtg');

?>