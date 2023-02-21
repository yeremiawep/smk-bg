<?php

// Pemberian Predikat 

// ------------- Start ----------------- //
function predikat($nilai_akhir)
{

  $p = [];

  if ($nilai_akhir <= 2.00) {
    $p = "Tidak Baik";
  } else if ($nilai_akhir <= 2.50) {
    $p = "Cukup Baik";
  } else if ($nilai_akhir <= 3.00) {
    $p = "Baik";
  } else if ($nilai_akhir <= 3.50) {
    $p = "Sangat Baik";
  } else {
    $p = "Istimewa";
  }

  return $p;
}
// ----------------- End ------------------- //


// Menghitung nilai sasaran kompetensi untuk level non manajerial

// ------------- Start ----------------------------------------- //
function hitung_sk_plk($nilaisk, $countsk)
{
  $total_nilai_sk = array_sum($nilaisk) / $countsk * 40 / 100;

  return $total_nilai_sk;
}
// ------------- End ------------------------------------------- //


// Menghitung nilai sasaran kinerja objektif untuk level non manajerial

// ------------- Start ----------------------------------------- //
function hitung_nilai_sko_plk($nilaisko, $count)
{
  $total_nilai_sko = array_sum($nilaisko) / $count * 60 / 100;

  return $total_nilai_sko;
}
// ---------------------- End ------------------------------------ //


// Menghitung nilai sasaran kinerja objektif untuk level manajerial

// ---------------------- Start ---------------------------------- //
function hitung_nilai_sko_mnj($nilaisko, $count)
{
  $total_nilai_sko = array_sum($nilaisko) / $count * 70 / 100;

  return $total_nilai_sko;
}
// ----------------------- End ------------------------------------ //


// Menghitung nilai sasaran kompetensi untuk level manajerial 

// ------------------------- Start -------------------------------- //
function hitung_nilai_sk_mnj($nilaisk, $countsk)
{
  $total_nilai_sk = array_sum($nilaisk) / $countsk * 30 / 100;

  return $total_nilai_sk;
}
// ------------------------- End ---------------------------------- //


// Menghitung Nilai Akhir

// ---------------------------- Start ----------------------------- //
function hitung_nilai_akhir($total_nilai_sko, $total_nilai_sk, $nilaihk)
{
  $nilai_akhir = $total_nilai_sko + $total_nilai_sk - $nilaihk;

  return $nilai_akhir;
}
// ---------------------------- End ------------------------------- //