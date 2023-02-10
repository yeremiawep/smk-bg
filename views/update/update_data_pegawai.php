<?php
include '../../config/database.php';

$id = $_POST['id'];
$name = $_POST['name'];
$divisi = $_POST['divisi'];
$jabatan = $_POST['jabatan'];
$domisili = $_POST['domisili'];
$agama = $_POST['agama'];
$pendidikan = $_POST['pendidikan'];
$status = $_POST['status'];
$no_bpjs_ketenagakerjaan = $_POST['no_bpjs_ketenagakerjaan'];
$no_bpjs_kesehatan = $_POST['no_bpjs_kesehatan'];
$ijazah = $_POST['ijazah'];

$query = mysqli_query($conn, "UPDATE users SET 
                              name='$name', 
                              divisi='$divisi', 
                              jabatan='$jabatan', 
                              domisili='$domisili', 
                              agama='$agama', 
                              pendidikan='$pendidikan', 
                              status='$status', 
                              no_bpjs_ketenagakerjaan='$no_bpjs_ketenagakerjaan', 
                              no_bpjs_kesehatan='$no_bpjs_kesehatan', 
                              ijazah='$ijazah' 
                          WHERE id='$id'");


header('Location: ../../app/index.php?page=data-pegawai');