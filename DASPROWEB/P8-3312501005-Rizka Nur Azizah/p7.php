<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Formulir Penilaian Mahasiswa</h3>
                    </div>
                <div class="card-body">
                    <?php
                    $hasil = "";
                    $nama = "";
                    $nilai = "";
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $nama = $_POST['nama'];
                        $nilai = $_POST['nilai']; 
                        if ($nilai >= 60) {
                            $hasil = "<div class='alert alert-success'>Lulus</div>";
                        } else {
                            $hasil = "<div class='alert alert-danger'>Tidak Lulus</div>";
                        }
                    }
                    ?>
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nilai" class="form-label">Nilai Mahasiswa</label>
                    <input type="number" class="form-control" id="nilai" name="nilai" min="0" max="100" value="<?php echo $nilai; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Cek Kelulusan</button>
            </form>
        </div>
    </div>
    <?php if ($hasil): ?>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Hasil Penilaian</h5>
                <p class="card-text">Nama Mahasiswa: <strong><?php echo $nama; ?></strong></p>
                <p class="card-text">Nilai: <strong><?php echo $nilai; ?></strong></p>
                <p class="card-text">Status: <?php echo $hasil; ?></p>
            </div>
        </div>
        <?php endif; ?>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0- alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
