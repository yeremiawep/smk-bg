<?php
include '../../config/database.php';

$aspek = $_POST['aspek'];
$kriteria = $_POST['kriteria'];
$target = $_POST['target'];

$query = mysqli_query($conn, "INSERT INTO penilaian_spvrtg (id_isi, aspek, kriteria, target) VALUES ('','$aspek','$kriteria','$target')");

header('Location: ../../app/index.php?page=data-kinerja-objektif');
