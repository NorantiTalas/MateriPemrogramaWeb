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
