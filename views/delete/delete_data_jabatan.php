<?php
include '../../config/database.php';
session_start();

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM jabatans WHERE id='$id'");
if ($query) {
  $_SESSION['sukses'] = 'Deleted';
} else {
  $_SESSION['gagal'] = 'Failed';
}

header('Location: ../../app/index.php?page=data-jabatan');
