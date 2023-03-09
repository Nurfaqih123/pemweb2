<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Penilaian Mahasiswa</title>
</head>
<body> 
    <br> <br> <br> <br>
<header style="background-color: #f5f5f5;">
    <div class="container" ></div>
<hr>
    <div class="container-fluid">
      <div class="row justify-content-center text-right mt-5">
        <div class="col-5">
          <form method="post" action="index2.php">
            <div class="form-group row">
              <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
              <div class="col-8">
                <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" />
              </div>
            </div>
            <div class="form-group row">
              <label for="select" class="col-4 col-form-label">Select</label>
              <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select">
                  <option value="User Interface & User Experience">UI & UX</option>
                  <option value="Pemrograman Web">Pemrograman Web </option>
                  <option value="Basis Data">Basis Data</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="uts" class="col-4 col-form-label">Nilai UTS</label>
              <div class="col-8">
                <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control" />
              </div>
            </div>
            <div class="form-group row">
              <label for="uas" class="col-4 col-form-label">Nilai UAS</label>
              <div class="col-8">
                <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control" />
              </div>
            </div>
            <div class="form-group row">
              <label for="tugas" class="col-4 col-form-label">Nilai Tugas Akhir</label>
              <div class="col-8">
                <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="text" class="form-control" />
              </div>
            </div>
            <div class="form-group text-left row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <hr>
    



</body>
</html>