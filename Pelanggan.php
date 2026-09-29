<?php
// Praktikum Pemrograman Web II
// Nama: Muzakky
// NIM: 202457201051

class Pelanggan
{
    public $id;
    public $nama;
    public $alamat;

    public function __construct($id, $nama, $alamat)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    public function tampilkanData()
    {
        echo "ID Pelanggan: {$this->id}<br>";
        echo "Nama: {$this->nama}<br>";
        echo "Alamat: {$this->alamat}<br>";
    }

    public function sewaKendaraan(Kendaraan $kendaraan)
    {
        if ($kendaraan->statusKendaraan() === "Tersedia") {
            $kendaraan->status = "Disewa";
            echo "{$this->nama} berhasil menyewa {$kendaraan->merk}.<br>";
        } else {
            echo "Maaf, {$kendaraan->merk} sedang tidak tersedia.<br>";
        }
    }
}
?>
