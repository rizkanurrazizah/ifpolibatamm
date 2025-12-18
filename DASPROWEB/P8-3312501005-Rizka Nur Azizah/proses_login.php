<?php
// Simulasikan data user yang valid
$valid_username = "rzkaa";
$valid_password = "123456";

// Mengambil data dari form
$username = $_POST["username"];
$password = $_POST["password"];

// Validasi username dan password
if ($username == $valid_username && $password == $valid_password) {

// Jika username dan password valid, buat session dan redirect ke halaman utama
echo "Berhasil Login";
} else {

// Jika username atau password tidak valid, tampilkan pesan error
echo "Username atau password salah";
}
?>