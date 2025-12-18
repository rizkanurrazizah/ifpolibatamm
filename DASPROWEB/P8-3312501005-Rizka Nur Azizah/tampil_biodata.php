<!DOCTYPE html>
<html>
<head>
    <title>Biodata Mahasiswa</title>
</head>
<body>
    <h2>Biodata Mahasiswa</h2>
    <?php
    //menangkap data dari form
    $nama = $_GET["nama"];
    $nim = $_GET["nim"];
    $prodi = $_GET["prodi"];
    $alamat = $_GET["alamat"];
    ?>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?php echo $nim ?></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td><?php echo $prodi ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $alamat ?></td>
        </tr>
    </table>
</body>
</html>
