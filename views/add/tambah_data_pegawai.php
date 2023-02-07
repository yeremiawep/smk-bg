<?php
include '../../config/database.php';

$name = $_POST['name'];
$id_pegawai = $_POST['id_pegawai'];
$id_personal = $_POST['id_personal'];
$divisi = $_POST['divisi'];
$jabatan = $_POST['jabatan'];

$query = mysqli_query($conn, "INSERT INTO users (id, name, id_personal, id_pegawai, divisi, jabatan) VALUES ('','$name','$id_personal','$id_pegawai','$divisi','$jabatan')");

header('Location: ../../app/index.php?page=data-pegawai');
