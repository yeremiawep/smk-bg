<?php 

include '../../../config/database.php';

// Insert nilai SKO

$id_pegawai = $_POST['id_pegawai'];
$id_isi = $_POST['id_isi'];
$nilai = $_POST['nilai'];
$count = count($nilai);

// var_dump($id_pegawai);
// var_dump($id_isi);
// var_dump($nilai);
// var_dump($count);

for($i=0; $i <= $count; $i++){
  $insert = mysqli_query($conn, "INSERT INTO hitung_nilai VALUES ('','{$id_pegawai[$i]}','{$id_isi[$i]}','{$nilai[$i]}')");
}

header('Location : ../../../app/index.php?page=data-penilaian-rtg');

?>