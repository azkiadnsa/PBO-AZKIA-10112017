<?php

// ======================
// PARENT CLASS
// ======================

// Class utama (induk)
class Employee {

    // Protected = hanya bisa diakses di class ini & turunannya
    protected $nama;       // nama karyawan
    protected $gaji;       // gaji pokok
    protected $lamaKerja;  // lama kerja (tahun)

    // Constructor → dijalankan saat object dibuat
    public function __construct($nama, $gaji, $lamaKerja) {
        $this->nama = $nama;           // isi nama
        $this->gaji = $gaji;           // isi gaji
        $this->lamaKerja = $lamaKerja; // isi lama kerja
    }

    // Method untuk menghitung gaji (default)
    public function hitungGaji() {
        return $this->gaji; // hanya gaji pokok
    }

    // Method untuk menampilkan data
    public function tampil() {
        echo "Nama: {$this->nama}<br>"; // tampilkan nama
        echo "Gaji: " . $this->hitungGaji() . "<br><br>"; // tampilkan gaji (pakai method)
    }
}


// ======================
// CLASS PROGRAMMER
// ======================

// Programmer mewarisi Employee
class Programmer extends Employee {

    // Override method hitungGaji()
    public function hitungGaji() {

        // Jika lama kerja < 1 tahun
        if ($this->lamaKerja < 1) {
            $bonus = 0; // tidak ada bonus

        // Jika lama kerja 1 - 10 tahun
        } elseif ($this->lamaKerja <= 10) {
            $bonus = 0.01 * $this->lamaKerja * $this->gaji;

        // Jika lebih dari 10 tahun
        } else {
            $bonus = 0.02 * $this->lamaKerja * $this->gaji;
        }

        // Total gaji = gaji pokok + bonus
        return $this->gaji + $bonus;
    }
}


// ======================
// CLASS DIREKTUR
// ======================

// Direktur mewarisi Employee
class Direktur extends Employee {

    // Override method hitungGaji()
    public function hitungGaji() {

        // Bonus 50% per tahun kerja
        $bonus = 0.5 * $this->lamaKerja * $this->gaji;

        // Tunjangan 10% per tahun kerja
        $tunjangan = 0.1 * $this->lamaKerja * $this->gaji;

        // Total gaji
        return $this->gaji + $bonus + $tunjangan;
    }
}


// ======================
// CLASS PEGAWAI MINGGUAN
// ======================

// Pegawai mingguan mewarisi Employee
class PegawaiMingguan extends Employee {

    // Private = hanya bisa diakses di class ini
    private $hargaBarang;      // harga barang
    private $stok;             // jumlah stok
    private $totalPenjualan;   // total barang terjual

    // Constructor dengan tambahan parameter
    public function __construct($nama, $gaji, $lamaKerja, $hargaBarang, $stok, $totalPenjualan) {

        // Memanggil constructor parent
        parent::__construct($nama, $gaji, $lamaKerja);

        // Inisialisasi atribut tambahan
        $this->hargaBarang = $hargaBarang;
        $this->stok = $stok;
        $this->totalPenjualan = $totalPenjualan;
    }

    // Override method hitungGaji()
    public function hitungGaji() {

        // Jika penjualan lebih dari 70% stok
        if ($this->totalPenjualan > 0.7 * $this->stok) {
            $bonus = 0.10 * $this->hargaBarang * $this->totalPenjualan;

        // Jika tidak
        } else {
            $bonus = 0.03 * $this->hargaBarang * $this->totalPenjualan;
        }

        // Total gaji
        return $this->gaji + $bonus;
    }
}


// ======================
// TESTING PROGRAM
// ======================

// Menampilkan data Programmer
echo "<h3>Programmer</h3>";
$p = new Programmer("Azkia", 5000000, 5); // buat object
$p->tampil(); // tampilkan data


// Menampilkan data Direktur
echo "<h3>Direktur</h3>";
$d = new Direktur("Ainaya", 10000000, 12);
$d->tampil();


// Menampilkan data Pegawai Mingguan
echo "<h3>Pegawai Mingguan</h3>";
$pm = new PegawaiMingguan("Cacas", 2000000, 2, 50000, 100, 80);
$pm->tampil();

?>