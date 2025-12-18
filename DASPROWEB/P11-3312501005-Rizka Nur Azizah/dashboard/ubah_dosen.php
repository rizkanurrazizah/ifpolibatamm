<?php
// include database connection file
include 'koneksi.php';

    $nim= $_POST['nidn'];
    $nama= $_POST['nama'];
    $alamat= $_POST['alamat'];
    $jabatan= $_POST['jabatan'];

    $result= mysqli_query($koneksi, "UPDATE dosen SET 
        nama='$nama',
        jurusan='$alamat',
        angkatan='$jabatan' 
        WHERE nidn='$nidn'");
    
header("Location: dosen.php");
?>