<?php 

class Belanja {
    public $namaPembeli = "Azkia";
    public $namaBarang = "Sampo";
    public $hargaBarang = 9000;
    public $jumlahBarang = 2;
    public $totalBayar;
    public $diskon = 0.1;
    public static $pajak = 0.2;
    public function totalHarga(){ $subtotal = $this->hargaBarang * $this->jumlahBarang; 
        return $subtotal;
    }
}
$belanja = new belanja();
//var_dump($belanja);

echo "subtotal : Rp " . $belanja->totalHarga() . "\n";
?>