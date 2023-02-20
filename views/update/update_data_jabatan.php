<?php
include '../../config/database.php';
session_start();

$id = $_POST['id'];
$name_jab = $_POST['name_jab'];

$query = mysqli_query($conn, "UPDATE jabatans SET name_jab='$name_jab' WHERE id='$id'");
if ($query) {
  $_SESSION['sukses'] = 'Updated';
} else {
  $_SESSION['gagal'] = 'Failed';
}

header('Location: ../../app/index.php?page=data-jabatan');
