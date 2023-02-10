<?php
include '../../config/database.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM users WHERE id_pegawai='$id'");

header('Location: ../../app/index.php?page=data-pegawai');
