<?php 
include "../functions.php";

if (isset($_POST['simpan'])) {
    if (insertDataUser($_POST)> 0) {
        echo "<div class='alert alert-success' role='alert'>
        Data User Berhasil di Simpan!
        </div>
        <script>
        setTimeout(function(){document.location='index.php'},1000);
        </script>";
    } else {
        echo "<div class='alert alert-danger' role='alert'>
        Data User Gagal di Simpan!
        </div>
        <script>
        setTimeout(function(){document.location='index.php'},1000);
        </script>";

    }
}
?>

<<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Data</title>
  <!-- css bootstrap 5 -->
  <link href="../assets/bootstrap.min.css" rel="stylesheet"> 
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Form Tambah Data</h4> 
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="row">
            <div class="col-md-6">
            <div class="mb-3">
            <label for="nm_user" class="form-label">*Nama User</label>
            <input type="text" name="nm_user" class="form-control" 
placeholder="Masukkan nama user..." required>
            </div>
            <div class="mb-3">
            <label for="password" class="form-label">*Password</label>
            <input type="text" name="password" class="form-control"
placeholder="Masukkan Password..." required>              
            </div>
            <div class="mb-3">
            <label for="status" class="form-label">*status</label>
            <select name="Status" class="form-control" reqiured>
                <option value="" selected> - Pilih</option>
                <option value="Aktif">Aktif</option>
                <option value="Tidak" Tidak></option>
            </select>
                </div>
            </div> 
            <div class="col-md-6">
            <div class="mb-3">
            <label for="nm_lengkap" class="form-label">*Nama Lengkap</label>
            <input type="text" name="nm_lengkap" class="form-control"
placeholder="Masukkan nama lengkap..." required>
            </div>
            <div class="mb-3">
            <label for="role" class="form-label">*Role</label>
            <select name="role" class="form-control" reqiured>
                <option value="" selected> - Pilih</option>
                <option value="Admin">Administrator</option>
                <option value="User" User></option>
            </select>
                </div>
                <div class="mb-3">
            <label for="foto" class="form-label">*Foto User</label>
            <input type="file" name="foto" class="form-control">
            <div class="form-text">Format : JPG/JPEG/PNG : 2Mb</div>
              </div>
            </div>
                </div>
                </div> 
                <div class="card-footer">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" name="Simpan">Simpan</button>
                                <button type="button" class="btn btn-success" 
                                onclick="document.location='index.php'">Kembali</button>  
                            </div>
                </div>     
                </form>
            </div>
            </div>
        </div>
    </div>
  <script src="./scripts.js"></script>
</body>
</html>