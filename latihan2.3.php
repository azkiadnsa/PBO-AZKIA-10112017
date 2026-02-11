<?php
class Belanja {
    public $namaPembeli; 
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBarang;
    public $totalBayar;
    public $diskon;
    public $pajak = 0.02;
    public function __construct($namaPembeli, $namaBarang, $hargaBarang, $jumlahBarang, $diskon) {
        $this->namaPembeli = "Azkia";
        $this->namaBarang = "Sampo";
        $this->hargaBarang = 9000;
        $this->jumlahBarang = 2;
        $this->diskon = $diskon;
    }
    public function totalHarga(): int {
        $subtotal = $this->hargaBarang * $this->jumlahBarang;

        return $subtotal;
    }
}

$belanja1 = new Belanja("Azkia", "Sampo", 9000, 2, 0.1);
$belanja1->namaPembeli = "Azkia";
$belanja1->namaBarang = "Sampo";
$belanja1->hargaBarang = 9000;
$belanja1->jumlahBarang = 2;
$belanja1->diskon = 0.1;

$belanja2 = new Belanja("Sabil", "Mie", 5000, 3, 0.2);
$belanja2->namaPembeli = "Sabil";
$belanja2->namaBarang = "Mie";
$belanja2->hargaBarang = 5000;
$belanja2->jumlahBarang = 3;
$belanja2->diskon = 0.2;

echo "<pre>";
echo "Nama Pembeli: " . $belanja1->namaPembeli . "\n";
echo "Nama Barang: " . $belanja1->namaBarang . "\n";
echo "Harga Barang: Rp " . $belanja1->hargaBarang . "\n";
echo "Jumlah Barang: " . $belanja1->jumlahBarang . "\n";
echo "Diskon: " . ($belanja1->diskon * 100) . "%\n";
echo "Subtotal: Rp " . $belanja1->totalHarga() . "\n";
echo "</pre>";