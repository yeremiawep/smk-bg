<?php
include '../../config/database.php';

$id_isi = $_POST['id_isi'];
$aspek = $_POST['aspek'];
$kriteria = $_POST['kriteria'];
$target = $_POST['target'];

$query = mysqli_query($conn, "UPDATE penilaian_spvcro SET aspek='$aspek', kriteria='$kriteria', target='$target' WHERE id_isi='$id_isi'");

header('Location: ../../app/index.php?page=data-kinerja-objektif');
