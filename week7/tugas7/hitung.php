<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Form Input Data</title>
</head>

<body>


<?php

if (isset($_GET['submit'])) {
    $nama = $_GET['nama'];
    $jk = $_GET['jk'];
    $tb = $_GET['tb'] / 100;
    $bb = $_GET['bb'];


    $bmi = $bb / ($tb * $tb);

    echo "<h3> Hasil perhitungan BMI</h3>";
    echo "Nama anda : $nama<br>";
    echo "Jenis Kelamin : $jk<br>";
    echo "Tinggi Badan : $tb meter<br>";
    echo "Berat Badan : $bb Kilogram<br>";
    echo "<hr>BMI anda : " .number_format($bmi);
    echo "<h4>Kesimpulan : </4>";



    if ($bmi < 17) {
        echo "kurus";
    } elseif ($bmi < 23) {
        echo "Normal";
    } elseif ($bmi < 27) {
        echo "Kegemukan";
    } elseif ($bmi > 27) {
        echo "Obesitas";
    }


    echo '<div>';
}
?>

    <form method="post" >
        <div class="container-fluid  callback my-5 pt-5 ">
            <div class="container pt-5 ">
                <div class="row justify-content-center ">
                    <div class="col-lg-7 ">
                        <div class=" border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s" style="background-color: #E4DCCF;">
                            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                                <h1 class="display-5 mb-5">HITUNG BMI</h1>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="nama">
                                        <label for="nama">Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="jk">Jenis Kelamin:</label>
                                    <br>
                                    <label>Laki-Laki</label>
                                    <input type="radio" name="jk" value="L" checked>
                                    <br>
                                    <label>Perempuan</label>
                                    <input type="radio" name="jk" value="P"><br><br>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="tb">
                                        <label for="tmp_lahir">Tinggi Badan</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="bb">
                                        <label for="tgl_lahir">Berat Badan</label>
                                    </div>
                                    <br><br>

                                    <div class="col-12 text-center">
                                        <button class="btn btn-dark w-100 py-3" type="submit" name="submit" value="Hitung BMI">Submit Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>