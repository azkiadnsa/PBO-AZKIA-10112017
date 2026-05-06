<?php

class Kendaraan {
    // properties
    private static $instance = null;
    private $Merek, $JumlahRoda, $Harga, $Warna, $BhnBakar;

    // constructor dibuat private
    private function __construct($merek, $jumlahroda, $harga, $warna, $bahanbakar) {
        $this->Merek = $merek;
        $this->JumlahRoda = $jumlahroda;
        $this->Harga = $harga;
        $this->Warna = $warna;
        $this->BhnBakar = $bahanbakar;
    }

    // method untuk mengambil instance (inti singleton)
    public static function getInstance($merek=null, $jumlahroda=null, $harga=null, $warna=null, $bahanbakar=null) {
        if (self::$instance == null) {
            self::$instance = new Kendaraan($merek, $jumlahroda, $harga, $warna, $bahanbakar);
        }
        return self::$instance;
    }

    // getter
    public function GetMerek() {
        return $this->Merek;
    }

    public function GetJumlahRoda() {
        return $this->JumlahRoda;
    }

    public function GetHarga() {
        return $this->Harga;
    }

    public function GetWarna() {
        return $this->Warna;
    }

    public function GetBhnBakar() {
        return $this->BhnBakar;
    }
}

// penggunaan
$kendaraan = Kendaraan::getInstance("Yamaha Mio", 2, 10000000, "Merah", "Premium");

echo "Merek : " . $kendaraan->GetMerek() . "<br>";
echo "Jumlah Roda : " . $kendaraan->GetJumlahRoda() . "<br>";
echo "Harga : " . $kendaraan->GetHarga() . "<br>";
echo "Warna : " . $kendaraan->GetWarna() . "<br>";
echo "Bahan Bakar : " . $kendaraan->GetBhnBakar() . "<br>";

?>