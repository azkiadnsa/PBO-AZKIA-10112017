<?php

// Class Karyawan
class Karyawan {
    public $nama;          // Menyimpan nama karyawan
    public $golongan;      // Menyimpan golongan karyawan
    public $jamLembur;     // Menyimpan jumlah jam lembur
    public $totalGaji;     // Menyimpan total gaji (gaji pokok + lembur)

    // ==============================
    // CONSTRUCTOR
    // ==============================
    // Dipanggil saat objek dibuat
    public function __construct($nama, $golongan, $jamLembur) {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jamLembur = $jamLembur;

        // Hitung total gaji langsung saat objek dibuat
        $this->totalGaji = $this->hitungGaji();
    }

    // ==============================
    // METHOD GET GAJI POKOK
    // ==============================
    // Mengambil gaji berdasarkan golongan
    public function getGajiPokok() {

        // Array daftar gaji tiap golongan
        $gaji = [
            "Ib" => 1250000,
            "Ic" => 1300000,
            "Id" => 1350000,
            "IIa" => 2000000,
            "IIb" => 2100000,
            "IIc" => 2200000,
            "IId" => 2300000,
            "IIIa" => 2400000,
            "IIIb" => 2500000,
            "IIIc" => 2600000,
            "IIId" => 2700000,
            "IVa" => 2800000,
            "IVb" => 2900000,
            "IVc" => 3000000,
            "IVd" => 3100000
        ];

        // Percabangan: jika golongan tidak ada, return 0
        return $gaji[$this->golongan] ?? 0;
    }

    // ==============================
    // METHOD HITUNG GAJI
    // ==============================
    // Menghitung total gaji
    public function hitungGaji() {
        $gajiPokok = $this->getGajiPokok();      // Ambil gaji pokok
        $lembur = $this->jamLembur * 15000;      // Hitung lembur (Rp 15.000/jam)

        return $gajiPokok + $lembur;             // Total gaji
    }

}

// ==============================
// ARRAY UNTUK MENYIMPAN DATA
// ==============================
$dataKaryawan = [];   // Array kosong untuk CRUD

// ==============================
// PERULANGAN MENU (DO WHILE)
// ==============================
do {
    echo "\n===== MENU GAJI KARYAWAN =====\n";
    echo "1. Tampilkan Data\n";
    echo "2. Tambah Data\n";
    echo "3. Update Data\n";
    echo "4. Hapus Data\n";
    echo "5. Keluar\n";
    echo "Pilih menu: ";

    $menu = trim(fgets(STDIN));   // Input user

    // ==============================
    // PERCABANGAN MENU (SWITCH)
    // ==============================
    switch ($menu) {

        // ==============================
        // TAMPILKAN DATA
        // ==============================
        case 1:
            echo "\n===== DATA GAJI KARYAWAN =====\n";

            // Cek apakah data kosong
            if (empty($dataKaryawan)) {
                echo "Data masih kosong!\n";
                break;
            }

            // Header tabel
            echo "No | Nama | Golongan | Jam Lembur | Total Gaji\n";

            $no = 1;

            // Perulangan untuk menampilkan data
            foreach ($dataKaryawan as $k) {
                echo "$no | {$k->nama} | {$k->golongan} | {$k->jamLembur} | Rp" 
                . number_format($k->totalGaji, 0, ',', '.') . "\n";
                $no++;
            }
            break;

        // ==============================
        // TAMBAH DATA
        // ==============================
        case 2:
            echo "Nama: ";
            $nama = trim(fgets(STDIN));

            echo "Golongan: ";
            $gol = trim(fgets(STDIN));

            echo "Jam Lembur: ";
            $jam = trim(fgets(STDIN));

            // Validasi input angka
            if (!is_numeric($jam)) {
                echo "Jam lembur harus angka!\n";
                break;
            }

            // Membuat objek baru (constructor dipanggil)
            $dataKaryawan[] = new Karyawan($nama, $gol, $jam);

            echo "Data berhasil ditambahkan!\n";
            break;

        // ==============================
        // UPDATE DATA
        // ==============================
        case 3:
            echo "Pilih nomor data yang diupdate: ";
            $index = trim(fgets(STDIN)) - 1;

            // Validasi index
            if (!isset($dataKaryawan[$index])) {
                echo "Data tidak ditemukan!\n";
                break;
            }

            echo "Nama baru: ";
            $nama = trim(fgets(STDIN));

            echo "Golongan baru: ";
            $gol = trim(fgets(STDIN));

            echo "Jam lembur baru: ";
            $jam = trim(fgets(STDIN));

            // Update dengan objek baru
            $dataKaryawan[$index] = new Karyawan($nama, $gol, $jam);

            echo "Data berhasil diupdate!\n";
            break;

        // ==============================
        // HAPUS DATA
        // ==============================
        case 4:
            echo "Pilih nomor data yang dihapus: ";
            $index = trim(fgets(STDIN)) - 1;

            // Validasi index
            if (!isset($dataKaryawan[$index])) {
                echo "Data tidak ditemukan!\n";
                break;
            }

            // Hapus data dari array
            unset($dataKaryawan[$index]);

            // Rapikan index array
            $dataKaryawan = array_values($dataKaryawan);

            echo "Data berhasil dihapus!\n";
            break;

        // ==============================
        // KELUAR PROGRAM
        // ==============================
        case 5:
            echo "Program selesai.\n";
            break;

        // ==============================
        // DEFAULT (SALAH INPUT)
        // ==============================
        default:
            echo "Menu tidak valid!\n";
    }

} while ($menu != 5);   // Perulangan berhenti jika pilih 5

?>