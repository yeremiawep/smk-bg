<?php
include '../../config/database.php';
session_start();

$name = $_POST['name'];
$id_pegawai = $_POST['id_pegawai'];
$id_personal = $_POST['id_personal'];
$divisi = $_POST['divisi'];
$jabatan = $_POST['jabatan'];

$query = mysqli_query($conn, "INSERT INTO users (id_user, name, id_personal, id_pegawai, divisi, jabatan, password) VALUES ('','$name','$id_personal','$id_pegawai','$divisi','$jabatan','$id_pegawai')");

if ($query) {
  $_SESSION["sukses"] = 'Data Berhasil Disimpan';
} else {
  // $_SESSION['message'] = 'Failed';
}

header('Location: ../../app/index.php?page=data-pegawai');
