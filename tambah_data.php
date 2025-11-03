<?php
// File: tambah_data.php
// Simulasi koneksi ke database
include 'koneksi.php'; // kalau nanti pakai DB asli

// Data Mahasiswa sementara
$mahasiswa = [
    ["NIM" => "231001001", "Nama" => "Ghaitza Zahira", "Prodi" => "Sistem Informasi"],
    ["NIM" => "231001002", "Nama" => "Ris Larasati", "Prodi" => "Informatika"],
    ["NIM" => "231001003", "Nama" => "Nadia Putri", "Prodi" => "Teknik Komputer"]
];

// Proses form submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $prodi = $_POST["prodi"];

    // Simulasi insert ke array
    $mahasiswa[] = ["NIM" => $nim, "Nama" => $nama, "Prodi" => $prodi];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa - KSI 2025</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Tambah Data Mahasiswa</h2>

    <!-- Form Tambah Data -->
    <form method="post" class="mb-4">
        <div class="row g-2">
            <div class="col-md-3">
                <input type="text" name="nim" class="form-control" placeholder="NIM" required>
            </div>
            <div class="col-md-3">
                <input type="text" name="nama" class="form-control" placeholder="Nama" required>
            </div>
            <div class="col-md-3">
                <input type="text" name="prodi" class="form-control" placeholder="Program Studi" required>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary w-100">Tambah Data</button>
            </div>
        </div>
    </form>

    <!-- Tabel Mahasiswa -->
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $mhs): ?>
            <tr>
                <td><?= $mhs["NIM"]; ?></td>
                <td><?= $mhs["Nama"]; ?></td>
                <td><?= $mhs["Prodi"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
