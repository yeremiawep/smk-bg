<?php
include '../../config/database.php';


$id_pegawai = $_POST['id_pegawai'];
$nilai_sko = $_POST['nilaiSko'];
$nilai_sk = $_POST['nilaiSk'];

$total_sko = array_sum($nilai_sko) / count($nilai_sko) * 60/100;
$total_sk = array_sum($nilai_sk) / count($nilai_sk) * 40/100;
$nilai_akhir = $total_sko + $total_sk;

echo $id_pegawai;
echo "<br>";
echo $total_sko;
echo "<br>";
echo $total_sk;
echo "<br>";
echo $nilai_akhir;
echo "<br>";



$query = mysqli_query($conn, "INSERT INTO nilai_sk (id, id_pegawai, nilai_sko, nilai_sk, nilai_akhir) VALUES ('','$id_pegawai','$total_sko','$total_sk','$nilai_akhir')");

header('Location: ../../app/index.php?page=rekap-nilai');
