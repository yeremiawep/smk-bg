<?php
include '../../config/database.php';

$name = $_GET['name'];
$id_pegawai = $_GET['id_pegawai'];
$id_personal = $_GET['id_personal'];
$divisi = $_GET['divisi'];
$jabatan = $_GET['jabatan'];

// $query = mysqli_query($conn, "INSERT INTO users (id, name, id_personal, id_pegawai, divisi, jabatan) VALUES ('','$name','$id_personal','$id_pegawai','$divisi','$jabatan')");

header('Location: ../../app/index.php?page=data-penilaian');
