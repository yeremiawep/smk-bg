<?php
include '../../config/database.php';

$id = $_POST['id'];
$name = $_POST['name'];
$id_pegawai = $_POST['id_pegawai'];
$id_personal = $_POST['id_personal'];
$divisi = $_POST['divisi'];
$jabatan = $_POST['jabatan'];

$query = mysqli_query($conn, "UPDATE users SET name='$name', id_pegawai='$id_pegawai', id_personal='$id_personal', divisi='$divisi', jabatan='$jabatan' WHERE id='$id'");

header('Location: ../../app/index.php?page=data-pegawai');
