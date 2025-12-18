<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hasil {
            margin-top: 15px;
            background: #e6f4ea;
            color: #2b6b2e;
            padding: 10px;
            border-radius: 4px;
            font-weight: bold;
        }
        .hasil.gagal {
            background: #fdecea;
            color: #b71c1c;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Nilai Mahasiswa</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        $kehadiran = $praktikum = $uts = $uas = "";
                        $hasil = "";

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $kehadiran = $_POST['kehadiran'];
                            $praktikum = $_POST['praktikum'];
                            $uts = $_POST['uts'];
                            $uas = $_POST['uas'];

                            $nilaiAkhir = (0.10 * $kehadiran) + (0.40 * $praktikum) + (0.25 * $uts) + (0.25 * $uas);
                            
                            if ($nilaiAkhir >= 85) {
                                $huruf = "A";
                            } elseif ($nilaiAkhir >= 80) {
                                $huruf = "A-";
                            } elseif ($nilaiAkhir >= 75) {
                                $huruf = "B+";
                            } elseif ($nilaiAkhir >= 70) {
                                $huruf = "B";
                            } elseif ($nilaiAkhir >= 65) {
                                $huruf = "B-";
                            } elseif ($nilaiAkhir >= 60) {
                                $huruf = "C+";
                            } elseif ($nilaiAkhir >= 55) {
                                $huruf = "C";
                            } elseif ($nilaiAkhir >= 50) {
                                $huruf = "C-";
                            } elseif ($nilaiAkhir >= 45) {
                                $huruf = "D+";
                            } elseif ($nilaiAkhir >= 40) {
                                $huruf = "D";
                            } else {
                                $huruf = "E";
                            }
                            $kelasHasil = ($huruf == "E") ? "hasil gagal" : "hasil";
                            
                            $hasil = "<div class='$kelasHasil'>Nilai Akhir: " . number_format($nilaiAkhir, 2) . " | Nilai Huruf: " . $huruf . "</div>";
                        }
                        ?>

                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="kehadiran" class="form-label">Nilai Kehadiran</label>
                                <input type="number" class="form-control" id="kehadiran" name="kehadiran" min="0" max="100" value="<?php echo $kehadiran; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="praktikum" class="form-label">Nilai Praktikum</label>
                                <input type="number" class="form-control" id="praktikum" name="praktikum" min="0" max="100" value="<?php echo $praktikum; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="uts" class="form-label">Nilai UTS</label>
                                <input type="number" class="form-control" id="uts" name="uts" min="0" max="100" value="<?php echo $uts; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="uas" class="form-label">Nilai UAS</label>
                                <input type="number" class="form-control" id="uas" name="uas" min="0" max="100" value="<?php echo $uas; ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-35">Hitung</button>
                        </form>

                        <?php
                        if (!empty($hasil)) {
                            echo $hasil;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
