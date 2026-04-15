<!DOCTYPE html> <!-- Menentukan tipe dokumen HTML5 -->
<html>
<head>
    <title>Volume Bangun Ruang</title> <!-- Judul halaman -->

    <style>
        /* Mengatur tampilan tabel */
        table{
            border-collapse: collapse; /* Menggabungkan garis tabel */
            width: 60%; /* Lebar tabel */
        }
        th, td{
            border:1px solid black; /* Garis tabel */
            padding:8px; /* Jarak isi ke border */
            text-align:center; /* Teks rata tengah */
        }
        th{
            background-color:pink; /* Warna header */
            color:white; /* Warna teks header */
        }
    </style>
</head>

<body>

<?php

// Membuat class (blueprint) untuk bangun ruang
class BangunRuang {

    // Properti / atribut
    public $sisi;   // untuk kubus & limas
    public $jari;   // untuk bola, tabung, kerucut
    public $tinggi; // untuk tabung, kerucut, limas

    // Constructor (dijalankan saat object dibuat)
    function __construct($sisi=0,$jari=0,$tinggi=0){
        $this->sisi = $sisi;     // isi nilai sisi
        $this->jari = $jari;     // isi nilai jari-jari
        $this->tinggi = $tinggi; // isi nilai tinggi
    }

    // Method untuk menghitung volume
    function hitungVolume($jenis){

        // Percabangan berdasarkan jenis bangun
        switch($jenis){

            case "Bola":
                // Rumus bola: 4/3 π r³
                return (4/3) * pi() * pow($this->jari,3);
                break;

            case "Kerucut":
                // Rumus kerucut: 1/3 π r² t
                return (1/3) * pi() * pow($this->jari,2) * $this->tinggi;
                break;

            case "Limas Segi Empat":
                // Rumus limas: 1/3 s² t
                return (1/3) * pow($this->sisi,2) * $this->tinggi;
                break;

            case "Kubus":
                // Rumus kubus: s³
                return pow($this->sisi,3);
                break;

            case "Tabung":
                // Rumus tabung: π r² t
                return pi() * pow($this->jari,2) * $this->tinggi;
                break;
        }
    }
}

// Data bangun ruang (array multidimensi)
$data = [
    ["jenis"=>"Bola","sisi"=>0,"jari"=>7,"tinggi"=>0],
    ["jenis"=>"Kerucut","sisi"=>0,"jari"=>14,"tinggi"=>10],
    ["jenis"=>"Limas Segi Empat","sisi"=>8,"jari"=>0,"tinggi"=>24],
    ["jenis"=>"Kubus","sisi"=>30,"jari"=>0,"tinggi"=>0],
    ["jenis"=>"Tabung","sisi"=>0,"jari"=>7,"tinggi"=>10]
];

// Menampilkan tabel
echo "<table>";

// Header tabel
echo "<tr>
        <th>Jenis Bangun Ruang</th>
        <th>Sisi</th>
        <th>Jari-jari</th>
        <th>Tinggi</th>
        <th>Volume</th>
      </tr>";

// Perulangan untuk setiap data
foreach($data as $d){

    // Membuat object dari class BangunRuang
    $obj = new BangunRuang($d['sisi'],$d['jari'],$d['tinggi']);

    // Menghitung volume sesuai jenis
    $volume = $obj->hitungVolume($d['jenis']);

    // Menampilkan ke tabel
    echo "<tr>
            <td>".$d['jenis']."</td>
            <td>".$d['sisi']."</td>
            <td>".$d['jari']."</td>
            <td>".$d['tinggi']."</td>
            <td>".$volume."</td>
          </tr>";
}

// Menutup tabel
echo "</table>";

?>

</body>
</html>