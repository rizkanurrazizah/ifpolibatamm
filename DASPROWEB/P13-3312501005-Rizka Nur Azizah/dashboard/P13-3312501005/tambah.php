<?php
include '../koneksi.php';

$nis     = $_POST['nis'];
$nama    = $_POST['nama'];
$jk      = $_POST['jk'];
$telepon = $_POST['telepon'];
$alamat  = $_POST['alamat'];

// Validasi file gambar (foto)
$foto        = $_FILES['foto']['name'];
$ukuran_foto = $_FILES['foto']['size'];
$tmp_foto    = $_FILES['foto']['tmp_name'];

$ekstensi_foto_diperbolehkan = array('jpg', 'jpeg', 'png');
$x_foto       = explode('.', $foto);
$ekstensi_foto = strtolower(end($x_foto));
$path_foto    = "uploads/" . $foto;

// Validasi file dokumen (file pendukung)
$file_pendukung        = $_FILES['file_pendukung']['name'];
$ukuran_file_pendukung = $_FILES['file_pendukung']['size'];
$tmp_file_pendukung    = $_FILES['file_pendukung']['tmp_name'];

$ekstensi_file_diperbolehkan = array('pdf', 'docx');
$x_file_pendukung       = explode('.', $file_pendukung);
$ekstensi_file_pendukung = strtolower(end($x_file_pendukung));
$path_file_pendukung    = "uploads/" . $file_pendukung;

// Validasi ekstensi dan ukuran file
if (in_array($ekstensi_foto, $ekstensi_foto_diperbolehkan) && $ukuran_foto <= 2000000) {
    if (in_array($ekstensi_file_pendukung, $ekstensi_file_diperbolehkan) && $ukuran_file_pendukung <= 1000000) {

        // Pindahkan file ke folder tujuan
        if (move_uploaded_file($tmp_foto, $path_foto) && move_uploaded_file($tmp_file_pendukung, $path_file_pendukung)) {

            // Simpan data ke database
            $query = "INSERT INTO calon_mhs (nis, nama, jk, telepon, alamat, foto, file_pendukung)
                      VALUES ('$nis', '$nama', '$jk', '$telepon', '$alamat', '$foto', '$file_pendukung')";

            if (mysqli_query($koneksi, $query)) {
                echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
            } else {
                echo "<script>alert('Gagal menyimpan data ke database!'); window.history.back();</script>";
            }
        } else {
            echo "<script>alert('Gagal mengunggah file!'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('File dokumen tidak valid atau ukurannya terlalu besar!'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('File gambar tidak valid atau ukurannya terlalu besar!'); window.history.back();</script>";
}

?>