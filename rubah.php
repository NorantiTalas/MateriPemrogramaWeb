<?php
include"../function.php";
$idMahasiswa = $_GET['id'];
$mhs = getALL("SELECT * FROM tbl_mahasiswa  WHERE id='$idMahasiswa'")[0];


if (isset($_['rubah'])){
    if (UpdateDataMahasiswa($_post) > 0)
{
    echo
    "
    <div class='alert alert-success' role='alert'>
         Data Mahasiswa Berhasil di rubah!
    </div>
    <script>
         setTimeout(function(){
            document.location='index.php'
         },1000);
    </script> ";
    
} else{
    echo    "
    <div class='alert alert-danger' role='alert'>
            Data Mahasiswa gagal di rubah!
    </div>
         <script>
         setTimeout(function(){
            document.location='index.php'
         },1000);
         </script>        ";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rubah Data</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Rubah Data</h4>
                    </div>
                    <form-action="" method="post">
                        <div class="card-body">
                            <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
                        <div> class="mb-3">
                            <label for="nim"class="form-label">* NIM</label>
                            <input type="text" name="nim" value="<?=$mhs['nim'] ?>" class="form-control" required>
                            <div class="mb-3">
                                <label for="" class="form-label">*nim</label>
                                <input type="text" name="nim" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">*nama</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">*jurusan</label>
                                <input type="text" name="jurusan" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">*email</label>
                                <input type="text" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="mb-3">
                                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                <button class="btn btn-success" onclick="document.location='index.php'">Simpan</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>