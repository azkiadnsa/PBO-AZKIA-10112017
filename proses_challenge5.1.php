<?php
class Kendaraan {

    public $harga;
    public $bahanBakar;
    public $tahun;
    public $platNomor;

    // Status Harga
    public function statusHarga() {
        if ($this->harga > 50000000) {
            return "Mahal";
        } else {
            return "Murah";
        }
    }

    // Status BBM
    public function statusBBM() {
        if ($this->bahanBakar == "Premium" && $this->tahun < 2005) {
            return "Mendapat Subsidi";
        } else {
            return "Tidak Mendapat Subsidi";
        }
    }

    // Hitung Harga Bekas
    public function hargaBekas() {

        if ($this->tahun > 2005) {
            $diskon = 0.20 * $this->harga;
        } 
        elseif ($this->tahun >= 2000 && $this->tahun <= 2005) {
            $diskon = 0.30 * $this->harga;
        } 
        else {
            $diskon = 0.40 * $this->harga;
        }

        return $this->harga - $diskon;
    }

    // Hitung Pajak
    public function pajak() {
        if ($this->tahun <= 2017) {
            return 0.025 * $this->harga;
        } else {
            return 0;
        }
    }

    // Hari Operasi Berdasarkan Plat
    public function hariOperasi() {

        // Ambil angka terakhir plat
        $angka = substr($this->platNomor, -1);

        if ($angka % 2 == 0) {
            return "Selasa, Kamis, Sabtu";
        } else {
            return "Senin, Rabu, Jumat, Minggu";
        }
    }
}


// ==================
// Membuat Object
// ==================

$mobil = new Kendaraan();
$mobil->harga = 30000000;
$mobil->bahanBakar = "Premium";
$mobil->tahun = 2004;
$mobil->platNomor = "B1234CD5";


// ==================
// Output
// ==================

echo "<h2>Data Kendaraan</h2>";

echo "Status Harga : " . $mobil->statusHarga() . "<br>";
echo "Status BBM : " . $mobil->statusBBM() . "<br>";
echo "Harga Bekas : Rp " . number_format($mobil->hargaBekas(), 0, ',', '.') . "<br>";
echo "Jumlah Pajak : Rp " . number_format($mobil->pajak(), 0, ',', '.') . "<br>";
echo "Hari Operasi : " . $mobil->hariOperasi() . "<br>";

?>