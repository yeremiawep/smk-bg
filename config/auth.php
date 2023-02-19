<?php
session_start();
include "database.php";

$nip = $_POST['nip'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM users JOIN jabatans ON users.jabatan=jabatans.id JOIN divisions ON users.divisi=divisions.id WHERE id_pegawai='$nip' AND password='$password'");

if (mysqli_num_rows($query) == 1) {
  header('Location:../app/index.php?page=dashboard');
  $user = mysqli_fetch_array($query);
  $_SESSION['id_user'] = $user['id_user'];
  $_SESSION['user'] = $user['name'];
  $_SESSION['id_pegawai'] = $user['id_pegawai'];
  $_SESSION['jabatan'] = $user['jabatan'];
  $_SESSION['divisi'] = $user['divisi'];
  $_SESSION['name_jab'] = $user['name_jab'];
  $_SESSION['name_div'] = $user['name_div'];
} else if ($nip == '' || $password == '') {
  header('Location:../index.php?error=2');
} else {
  header('Location:../index.php?error=1');
}
