<?php

class Mahasiswa {
    public $nama;
    public $nilai;

    public function __construct($nama, $nilai) {
        $this->nama = $nama;
        $this->nilai = $nilai;
    }

    public function hitungGrade() {
        if ($this->nilai >= 85) {
            return "A";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 60) {
            return "C";
        } else {
            return "D";
        }
    }
}

$dataMahasiswa = [
    new Mahasiswa("Azkia", 92),
    new Mahasiswa("Nadzwa", 77),
    new Mahasiswa("Aini", 68)
];

while (true) {

    echo "\n===== MENU NILAI =====\n";
    echo "1. Tampilkan Data Nilai\n";
    echo "2. Tambah Data\n";
    echo "3. Update Nilai\n";
    echo "4. Hapus Data\n";
    echo "5. Keluar\n";
    echo "Pilih menu : ";

    $menu = trim(fgets(STDIN));

    if ($menu == 1) {

        echo "\nTampilan Data Nilai\n";
        echo "----------------------------------\n";
        echo "No | Nama | Nilai | Grade\n";
        echo "----------------------------------\n";

        foreach ($dataMahasiswa as $i => $mhs) {
            echo ($i + 1) . " | "
                . $mhs->nama . " | "
                . $mhs->nilai . " | "
                . $mhs->hitungGrade() . "\n";
        }

    } elseif ($menu == 2) {

        echo "\nTambah Data\n";

        echo "Masukkan nama : ";
        $nama = trim(fgets(STDIN));

        echo "Masukkan nilai : ";
        $nilai = trim(fgets(STDIN));

        $dataMahasiswa[] = new Mahasiswa($nama, $nilai);

        echo "Data berhasil ditambahkan!\n";

    } elseif ($menu == 3) {

        echo "\nUpdate Data\n";

        foreach ($dataMahasiswa as $i => $mhs) {
            echo ($i + 1) . ". " . $mhs->nama . " - " . $mhs->nilai . "\n";
        }

        echo "Pilih nomor mahasiswa : ";
        $pilih = trim(fgets(STDIN));

        if (isset($dataMahasiswa[$pilih - 1])) {

            echo "Masukkan nilai baru : ";
            $nilaiBaru = trim(fgets(STDIN));

            $dataMahasiswa[$pilih - 1]->nilai = $nilaiBaru;

            echo "Nilai berhasil diupdate!\n";

        } else {
            echo "Nomor mahasiswa tidak valid!\n";
        }

    } elseif ($menu == 4) {

        echo "\nHapus Data\n";

        foreach ($dataMahasiswa as $i => $mhs) {
            echo ($i + 1) . ". " . $mhs->nama . "\n";
        }

        echo "Pilih nomor mahasiswa : ";
        $pilih = trim(fgets(STDIN));

        if (isset($dataMahasiswa[$pilih - 1])) {

            unset($dataMahasiswa[$pilih - 1]);

            $dataMahasiswa = array_values($dataMahasiswa);

            echo "Data berhasil dihapus!\n";

        } else {
            echo "Nomor mahasiswa tidak valid!\n";
        }

    } elseif ($menu == 5) {

        echo "Program selesai.\n";
        break;

    } else {

        echo "Menu tidak tersedia!\n";
    }
}

?>