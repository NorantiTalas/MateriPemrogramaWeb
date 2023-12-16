<?php

$server = "localhost";
$host = "root";
$pass = "";
$db = "db_web_programming";

$conn = mysqli_connect($server, $host, $pass, $db);

function getAll($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function insertDataMahasiswa($data)
{
     global $conn;
     $nim = htmlspecialchars($data["nim"]);
     $nama = htmlspecialchars($data["nama"]);
     $jurusan = htmlspecialchars($data["jurusan"]);
     $email= htmlspecialchars($data["email"]);

     $query = " INSERT INTO tbl_mahasiswa VALUES ('','$nama','$nim', '$email','$jurusan')";

     mysqli_query($conn, $query);
     return mysqli_affected_rows($conn);
}

function updateDataMahasiswa($data)
{
    global $conn;

    $nim = htmlspecialchars($data["nim"]);
     $nama = htmlspecialchars($data["nama"]);
     $jurusan = htmlspecialchars($data["jurusan"]);
     $email= htmlspecialchars($data["email"]);

    $query = "UPDATE tbl_mahasiswa SET nim= '$nim'
                                       nama='$nama'
                                       jurusan='$jurusan'
                                       email='$email'
                                       WHERE id='$id'";
}
function DeleteDataMahasiswa($id)
{
    global $conn;
    $query = "DELETE FROM tbl_mahasiswa WHERE id='$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

    
    }

    function uploadFoto()
    {
        $namaFile = $_FILES['foto']['name'];
        $ukuranFile = $_FILES['foto']['size'];
        $error = $_FILES['foto']['error'];
        $tmpName = $_FILES['foto']['tmp_name'];
    
        if ($error === 4) {
            echo "<script>alert('Anda belum memilih Gambar!, Silahkan klik choose 
            file')</script>";
            return false;
        }
        $tipeFileValid = ['jpg', 'jpeg', 'png'];
        $tipeFile = explode('.', $namaFile);
        $tipeFile = strtolower(end($tipeFile));
        if (!in_array($tipeFile, $tipeFileValid)) {
            echo "<script>alert('Tipe file gambar tidak valid!, Silahkan pilih gambar
            jpg/jpeg/png')</script>";
                return false;
        }
        if ($ukuranFile > 1000000) {
            echo "<script>alert('Ukuran Gambar Terlalu besar!, Silahkan pilih gambar dengan ukuran 2 mb')</script>";
                return false; 
        }
        $namaFileBaru = uniqid();
        $namaFileBaru = '.';
        $namaFileBaru = $tipeFile;
        move_uploaded_file($tmpName, '../asset/img/' . $namaFileBaru);
        
        return $namaFileBaru;
    }    
function insertDataUser($data)
{
    global $conn;
    $nm_user = htmlspecialchars($data['nm_user']);
    $nm_lengkap = htmlspecialchars($data['nm_lengkap']);
    $nm_password = htmlspecialchars($data['password']);
    $nm_role = htmlspecialchars($data['role']);
    $nm_status = htmlspecialchars($data['status']);

    $foto = uploadFoto();
    if (!$foto) {
        return false;
    }
    
    $newPass = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO tbl_user
    VALUES('','$nm_user','$nm_lengkap','$newPass','$role','$status','$foto')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function updateDataUser($data)
{
    global $conn;
    $id_user = ($data['id_user']);  
    $nm_user = htmlspecialchars ($data['nm_user']);  
    $nm_lengkap = htmlspecialchars ($data['nm_lengkap']);  
    $role = htmlspecialchars ($data['role ']);  
    $Status = htmlspecialchars ($data['status']);  
    $password = htmlspecialchars ($data['password']);  
}
