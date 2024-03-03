<?php

$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

   
    echo '<br/>nama : '.$nama_siswa;
    echo '<br/>mata kuliah : '.$mata_kuliah;
    echo '<br/>nilai uts : '.$nilai_uts;
    echo '<br/>Nilai Uas : '.$nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
?>