<?php

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
