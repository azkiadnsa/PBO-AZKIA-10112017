<?php
class Belanja {
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBarang;
    public $diskon;
    public $uangDibayar;
    public $namaKasir;
    public static $pajak = 0.02;
    public function totalHarga(): int {
        return $this->hargaBarang * $this->jumlahBarang;
    }

    public function hitungDiskon(): float {
        return $this->totalHarga() * $this->diskon;
    }

    public function hitungPajak(): float {
        $setelahDiskon = $this->totalHarga() - $this->hitungDiskon();
        return $setelahDiskon * self::$pajak;
    }
    
    public function totalAkhir(): float {
        return ($this->totalHarga() - $this->hitungDiskon()) + $this->hitungPajak();
    }

    public function hitungKembalian(): float {
        return $this->uangDibayar - $this->totalAkhir();
    }
}

$belanja1 = new Belanja();
$belanja1->namaPembeli = "Azkia";
$belanja1->namaBarang = "Wonton";
$belanja1->hargaBarang = 10000;
$belanja1->jumlahBarang = 1;
$belanja1->diskon = 0.2;
$belanja1->uangDibayar = 20000;
$belanja1->namaKasir = "Siti";

$belanja2 = new Belanja();
$belanja2->namaPembeli = "Sabil";
$belanja2->namaBarang = "Seblak";
$belanja2->hargaBarang = 20000;
$belanja2->jumlahBarang = 1;
$belanja2->diskon = 0.1;
$belanja2->uangDibayar = 50000;
$belanja2->namaKasir = "Siti";

echo "<pre>";
echo "========= WARUNG SITI #1 =========\n";
echo "Nama Kasir   : " . $belanja1->namaKasir . "\n";
echo "Nama Pembeli : " . $belanja1->namaPembeli . "\n";
echo "Barang       : " . $belanja1->namaBarang . "\n";
echo "----------------------------------\n";
echo "Subtotal     : Rp " . $belanja1->totalHarga() . "\n";
echo "Diskon       : Rp " . $belanja1->hitungDiskon() . "\n";
echo "Pajak (2%)   : Rp " . $belanja1->hitungPajak() . "\n";
echo "Total Akhir  : Rp " . $belanja1->totalAkhir() . "\n";
echo "Uang Dibayar : Rp " . $belanja1->uangDibayar . "\n";
echo "Kembalian    : Rp " . $belanja1->hitungKembalian() . "\n";

echo "<pre>";
echo "========= WARUNG SITI #2 =========\n";
echo "Nama Kasir   : " . $belanja2->namaKasir . "\n";
echo "Nama Pembeli : " . $belanja2->namaPembeli . "\n";
echo "Barang       : " . $belanja2->namaBarang . "\n";
echo "----------------------------------\n";
echo "Subtotal     : Rp " . $belanja2->totalHarga() . "\n";
echo "Diskon       : Rp " . $belanja2->hitungDiskon() . "\n";
echo "Pajak (2%)   : Rp " . $belanja2->hitungPajak() . "\n";
echo "Total Akhir  : Rp " . $belanja2->totalAkhir() . "\n";
echo "Uang Dibayar : Rp " . $belanja2->uangDibayar . "\n";
echo "Kembalian    : Rp " . $belanja2->hitungKembalian() . "\n";
echo "==================================";
echo "</pre>";
?>
