<?php
include '../../config/database.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM penilaian_cro WHERE id_isi='$id'");

header('Location: ../../app/index.php?page=data-kinerja-objektif');
