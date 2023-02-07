<?php
include '../../config/database.php';

$nilai = $_POST['nilai'];
function hitung_sko($nilai)
{
  global $nilai;
};


// $query = mysqli_query($conn, "INSERT INTO nilai_pcro (id, id_user, nilai_sko) VALUES ('','$id_user','$nilai')");

header('Location: ../../app/index.php?page=data-penilaian');
