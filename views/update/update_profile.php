<?php
include '../../config/database.php';
session_start();

$id = $_POST['id_user'];
$name = $_POST['name'];
$email = $_POST['email'];
$id_pegawai = $_POST['id_pegawai'];
$id_personal = $_POST['id_personal'];
$divisi = $_POST['divisi'];
$no_ktp = $_POST['no_ktp'];
$jabatan = $_POST['jabatan'];
$domisili = $_POST['domisili'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$usia = $_POST['usia'];
$pendidikan = $_POST['pendidikan'];
$status = $_POST['status'];
$no_bpjs_ketenagakerjaan = $_POST['no_bpjs_ketenagakerjaan'];
$no_bpjs_kesehatan = $_POST['no_bpjs_kesehatan'];
$ijazah = $_POST['ijazah'];

$query = mysqli_query($conn, "UPDATE users SET 
                              name='$name',
                              email='$email',
                              id_pegawai='$id_pegawai',
                              id_personal='$id_personal', 
                              divisi='$divisi', 
                              jabatan='$jabatan', 
                              domisili='$domisili', 
                              no_ktp='$no_ktp', 
                              agama='$agama', 
                              tgl_lahir='$tgl_lahir',
                              usia='$usia',
                              pendidikan='$pendidikan', 
                              status='$status', 
                              no_bpjs_ketenagakerjaan='$no_bpjs_ketenagakerjaan', 
                              no_bpjs_kesehatan='$no_bpjs_kesehatan', 
                              ijazah='$ijazah' 
                          WHERE id_user='$id'");

if ($query) {
  $_SESSION['sukses'] = 'Updated';
} else {
  $_SESSION['gagal'] = 'Failed';
}


header('Location: ../../app/index.php?page=profile');
