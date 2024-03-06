<?php
// bikin Variabel
$grade = "A";
// bikin predikat
$predikat;

switch ($grade) {
    case "A":
        $predikat = "Sangat Baik";
        break;
    case "B":
        $predikat = "Baik";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    case "D":
        $predikat = "Kurang";
        break;
    case "E":
        $predikat = "Masalah";
        break;
    default;
        $predikat = "Nilai Tidak Ditemukan";
        break;
}

echo "predikat : ", $predikat;