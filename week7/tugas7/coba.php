<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coba</title>
    <style>
        body{
            padding: 20px 20%;
}
form {
    padding: 20px 20px;
    background-color: blue;
    border: solid thin #EEE;
}
input, select {
    padding: 6px 12px;
}
.hasil {
    padding: 10px 20px;
    background-color: #900;
    color: #fff;
    border: solid thin #600;
}     
    </style>
</head>
<body>
    <center> <h1> Menghitung BMI</h1></center>

    <?php

if(isset($_GET['submit'])) {
    $nama = $_GET['nama'];
    $jk = $_GET['jk'];
    $tb = $_GET['tb']/100;
    $bb = $_GET['bb'];

    

    $bmi = $bb / ($tb * $tb);

    echo '<div class="hasil">';
    echo "<h3> Hasil perhitungan BMI</h3>";
    echo "Nama anda : $nama<br>";
    echo "Jenis Kelamin : $jk<br>";
    echo "Tinggi Badan : $tb meter<br>";
    echo "Berat Badan : $bb Kilogram<br>";
    echo "<hr>BMI anda : " .number_format($bmi);
    echo "<h4>Kesimpulan : </4>";


    if($bmi <17 ){
        echo "kurus";
    }elseif ($bmi <23){
        echo "Normal";
    }elseif ($bmi <27){
        echo "Kegemukan";
    }elseif ($bmi >27){
        echo "Obesitas";
    }

    
    echo '<div>';
}
?>

<form action="" method="GET">
    Nama<br>
    <input type="text" name="nama"><br>
    Jenis Kelamin <br>
    <select name="jk">
        <option value="Laki-Laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br>
    Tinggi Badan (cm) <br>
    <input type="text" name="tb"><br>
    Berat Badan (kg) <br>
    <input type="text" name="bb"><br>
    <input type="submit" name="submit" value="Hitung BMI">
</form>
</body>
</html>