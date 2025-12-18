<?php
// include database connection file
include 'koneksi.php';

    $nik= $_POST['nik'];
    $nama= $_POST['nama'];
    $bagian= $_POST['bagian'];

    $result= mysqli_query($koneksi, "UPDATE pegawai SET 
        nama='$nama',
        jurusan='$bagian' 
        WHERE nik='$nik'");
    
header("Location: pegawai.php");
?>