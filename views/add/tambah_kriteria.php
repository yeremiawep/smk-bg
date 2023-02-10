<?php
include '../../config/database.php';

$divisi = $_POST['divisi'];
$jabatan = $_POST['jabatan'];
$aspek = $_POST['aspek'];
$kriteria = $_POST['kriteria'];
$target = $_POST['target'];

$query = mysqli_query($conn, "INSERT INTO kriteria_penilaian (id_isi, divisi,jabatan, aspek, kriteria, target) VALUES ('','$divisi','$jabatan','$aspek','$kriteria','$target')");

header('Location: ../../app/index.php?page=data-kinerja-objektif');
