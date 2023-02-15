<?php
include '../../config/database.php';

$id = $_POST['id_user'];
$name = $_POST['name'];
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


// var_dump($id);
// var_dump($id_pegawai);
// var_dump($id_personal);
// var_dump($no_ktp);
// var_dump($no_bpjs_kesehatan);
// var_dump($no_bpjs_ketenagakerjaan);
// var_dump($agama);
// var_dump($domisili);
// var_dump($divisi);
// var_dump($jabatan);
// var_dump($usia);
// var_dump($tgl_lahir);
// var_dump($pendidikan);
// var_dump($ijazah);
// var_dump($name);
// var_dump($status);

$query = mysqli_query($conn, "UPDATE users SET 
                              name='$name',
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

// if ($query) {
//     echo "<script>'Data Berhasil Di Update'</script>";
// } else {
//     echo "<script>'Gagal Update Data'</script>";
// }

// var_dump($query);

// header('Location: ../../app/index.php?page=data-pegawai');
