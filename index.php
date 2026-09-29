<?php
// Praktikum Pemrograman Web II
// Nama: Muzakky
// NIM: 202457201051

require_once "Kendaraan.php";
require_once "Pelanggan.php";

$kendaraan1 = new Kendaraan("AG 1234 XY", "Honda Vario", "Motor");
$kendaraan2 = new Kendaraan("AG 5678 ZZ", "Toyota Avanza", "Mobil", "Disewa");

$pelanggan1 = new Pelanggan("P001", "Raka", "Nganjuk");
$pelanggan2 = new Pelanggan("P002", "Dina", "Mojosari");

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Rental Kendaraan - Muzakky</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 850px; margin: 32px auto; padding: 0 18px; background: #f4f7fb; color: #243047; }
        h1 { color: #174a7e; }
        h2 { border-bottom: 1px solid #ccd6e0; padding-bottom: 7px; }
        .card { background: white; border: 1px solid #dce4ed; border-radius: 10px; padding: 16px 20px; margin: 14px 0; }
        .status { font-weight: bold; }
    </style>
</head>
<body>
    <h1>Sistem Sederhana Rental Kendaraan</h1>
    <p><strong>Nama:</strong> Muzakky | <strong>NIM:</strong> 202457201051</p>

    <section class="card">
        <h2>Daftar Kendaraan</h2>
        <?php
        echo "<h3>Kendaraan 1</h3>";
        $kendaraan1->tampilkanData();
        echo "<hr><h3>Kendaraan 2</h3>";
        $kendaraan2->tampilkanData();
        ?>
    </section>

    <section class="card">
        <h2>Data Pelanggan</h2>
        <?php
        echo "<h3>Pelanggan 1</h3>";
        $pelanggan1->tampilkanData();
        echo "<hr><h3>Pelanggan 2</h3>";
        $pelanggan2->tampilkanData();
        ?>
    </section>

    <section class="card">
        <h2>Simulasi Penyewaan</h2>
        <?php
        $pelanggan1->sewaKendaraan($kendaraan1);
        echo "<p><strong>Status kendaraan setelah transaksi:</strong> ";
        echo $kendaraan1->statusKendaraan();
        echo "</p>";
        ?>
    </section>
</body>
</html>
