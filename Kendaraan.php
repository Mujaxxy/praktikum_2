<?php
// Praktikum Pemrograman Web II
// Nama: Muzakky
// NIM: 202457201051

class Kendaraan
{
    public $nomor;
    public $merk;
    public $jenis;
    public $status;

    public function __construct($nomor, $merk, $jenis, $status = "Tersedia")
    {
        $this->nomor = $nomor;
        $this->merk = $merk;
        $this->jenis = $jenis;
        $this->status = $status;
    }

    public function tampilkanData()
    {
        echo "Nomor Kendaraan: {$this->nomor}<br>";
        echo "Merek: {$this->merk}<br>";
        echo "Jenis: {$this->jenis}<br>";
        echo "Status: {$this->status}<br>";
    }

    public function statusKendaraan()
    {
        return $this->status;
    }
}
?>
