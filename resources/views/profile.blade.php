<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
    @php
    $nama = "Budi";
    $nilai = 60;

    if($nilai >= 60) {
      $ket = "Lulus";
    }
    else {
      $ket = "Gagal";
    }
    @endphp

    Siswa {{ $nama }} dengan nilai {{ $nilai }} dinyatakan {{ $ket }}
</body>
</html>
