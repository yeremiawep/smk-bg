<?php
session_start();
include "database.php";

$nip = $_POST['nip'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE id_pegawai='$nip' AND password='$password'");
// $query2 = mysqli_query($conn, "SELECT * FROM users, jabatans, divisions WHERE users.jabatan = jabatans.id AND users.divisi = divisions.id"); 


if (mysqli_num_rows($query) == 1) {
  header('Location:../app');
  $user = mysqli_fetch_array($query);
  $_SESSION['user'] = $user['name'];
  $_SESSION['jabatan'] = $user['jabatan'];
} else if ($nip == '' || $password == '') {
  header('Location:../index.php?error=2');
} else {
  header('Location:../index.php?error=1');
}
