<?php
include '../../config/database.php';


$id = $_POST['id_pegawai'];
$nilai = $_POST['nilai'];

$hasil = array_sum($nilai) / count($nilai);
var_dump($id);

echo $hasil;


// $query = mysqli_query($conn, "INSERT INTO nilai_pcro (id, id_user, nilai_sko) VALUES ('','$id_user','$nilai')");

// header('Location: ../../app/index.php?page=data-penilaian');
