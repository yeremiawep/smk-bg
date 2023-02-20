<?php
include '../../config/database.php';
session_start();

$id = $_POST['id'];
$name_div = $_POST['name_div'];

$query = mysqli_query($conn, "UPDATE divisions SET name_div='$name_div' WHERE id='$id'");
if ($query) {
  $_SESSION['sukses'] = 'Updated';
} else {
  $_SESSION['gagal'] = 'Failed';
}

header('Location: ../../app/index.php?page=data-divisi');
