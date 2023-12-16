<?php 
include "../functions.php";
$idUser = $_GETT['id'];
$user = getAll("SELECT * FROM tbl_user WHERE id_user = '$idUser'")[0];
if (isset($_POST['ubah'])) {
    if (updateDataUser($_POST)> 0) {
        echo "<div class='alert alert-success' role='alert'>
        Data User Berhasil di Rubah!
        </div>
        <script>
        setTimeout(function(){document.location='index.php'},1000);
        </script>";
    } else {
        echo "<div class='alert alert-danger' role='alert'>
        Data User Gagal di Rubah!
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
  <title>Form Rubah Data</title>
  <!-- css bootstrap 5 -->
  <link href="../assets/bootstrap.min.css" rel="stylesheet"> 
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Form Rubah Data</h4> 
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="row">
                <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>"
                 class="form-control"> 
                 <input type="hidden" name="pass_lama" value="<?= $user['pass_user']; ?>"
                 class="form-control">  
            <div class="col-md-6">
            <div class="mb-3">
            <label for="nm_user" class="form-label">*Nama User</label>
            <input type="text" name="nm_user" value="<?= $User['nm_user']; ?>"
             class="form-control" ></required>
            </div>
            <div class="mb-3">
            <label for="password" class="form-label">*Password</label>
            <input type="text" name="password" class="form-control"
            placeholder="Masukkan password baru..." 
            class="form-text">Jika ingin mengganti password, silahkan input 
                password!</div>
            </div>
            <div class="mb-3">
            <label for="status" class="form-label">*Status</label>
            <select name="status" class="form-control" required>

            </select>
             class="form-control" ></required>
             <option value="" selected> - Pilih</option>
                <option value="Aktif" <?= $user['status_user'] == 'Aktif' ?
'selected' : ''; ?>>Aktif</option>
                    <option value="Tidak" <?= $user['status_user'] == 'Tidak' ?
'selected' : ''; ?>>Tidak</option> 
                    </select>
            </div>
                </div>
                <div class="col-md-6">
            <div class="mb-3">
            <label for="nm_lengkap" class="form-label">*Nama Lengkap</label>
            <input type="text" name="nm_lengkap" value="<?= $User['nm_lengkap_user']; ?>"
             class="form-control" ></required>  
             </div>
            <div class="mb-3">
            <label for="role" class="form-label">*Role</label>
            <select name="role" class="form-control" required>             
            <option value="" selected> - Pilih</option>
            <option value="Admin" <?= $user['role_user'] == 'Admin' ? 
'selected' : ''; ?>>Administrator
                    </option> 
                    <option value="User" <?= $user['role_user'] == 'User' ?
'selected' : ''; ?>>User</option> 
              </select>
            </div> 
            <div class="mb-3">
                <img src="../assets/img/<?= $user['foto_user'] ?>" class="rounded-
                circle img-thumbnail mb-1" style="widht:70px">
                <label for="foto" class="form-label">*Foto User</label
                <input type="file" name="foto" class="form-control">
                <div class="form-text">Jika ingin mengganti foto, silahkan pilih 
foto!</div>
            </div>
                </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="mb-3">
                <button type="submit" class="btn btn-primary"
name="ubah">Simpan</button>
                <button type="button" class="btn btn-success"
onclick="document.location='index.php'">Kembali</button>  
                </div>
            </div>
        </form>
            </div>
        </div>
    </div>
</div>
<script src="../asset/bootstrap.bundle.min.js">
    </script>
</body>
</html>

