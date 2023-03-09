<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Penilaian</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    
</body>
</html>



<?php 
if(isset($_POST['submit'])){
 $nama_siswa = $_POST['nama']; 
 $mata_kuliah = $_POST['matkul'];
 $nilai_uts = $_POST['uts'];
 $nilai_uas = $_POST['uas'];
 $nilai_tugas = $_POST['tugas'];

 $nilai_total = ($nilai_uts + $nilai_uas + $nilai_tugas)/3;


 if($nilai_total >= 80 && $nilai_total <= 100){
    $grade = 'A';
 } elseif($nilai_total >= 70 && $nilai_total <=80){
    $grade = 'B';
 } elseif($nilai_total >= 50 && $nilai_total <=65){
    $grade = 'C';
 } elseif($nilai_total >= 35 && $nilai_total <=50){
    $grade = 'D';
 } elseif($nilai_total >= 30 && $nilai_total <=0){
    $grade = 'E';
 } else{ $grade = 'I';}
}

switch($grade){
    case 'A' :
        $predikat = 'Sangat Memuaskan';
        break;
    case 'B' :
        $predikat = 'Memuaskan';
        break;
    case 'C' :
        $predikat = 'Cukup';
        break;
    case 'D' :
        $predikat = 'Kurang';
        break;
    case 'E' :
        $predikat = 'Sangat Kurang';
        break;
    default  :
        $predikat = 'Tidak ada';
    
}

echo '<br/>Nama : '. $nama_siswa;
echo '<br/>Mata Kuliah : '. $mata_kuliah;
echo '<br/>Nilai UTS : '. $nilai_uts;
echo '<br/>Nilai UAS : '. $nilai_uas;
echo '<br/>Nilai Tugas Akhir : '. $nilai_tugas;
echo '<br>Nilai Total : ' . $nilai_total;
echo '<br>Grade : ' . $grade;
echo '<br>Predikat :' . $predikat;
?>


