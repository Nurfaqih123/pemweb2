<?php

    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['nilaiuts'];
    $uas = $_GET['nilaiuas'];
    $tugas = $_GET['nilaitugas'];

    echo 'Nama Mahasiswa :' . $nama;
    echo '<br>Mata Kuliah :' . $matkul;
    echo '<br>Nilai UTS :' . $uts;
    echo '<br>Nilai UAS :' . $uas;
    echo '<br>Nilai Tugas :' . $tugas;


?>