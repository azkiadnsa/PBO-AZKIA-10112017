<?php
class kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    var $tahunPembuatan; 

    function statusHarga()
    {
        if ($this->harga > 50000000)
            $status = 'Mahal';
        else
            $status = 'Murah';
        return $status;
    }

    function statusBBM()
    {
        if ($this->bahanBakar == "Listrik")
            $status = "Sangat Irit";
        elseif ($this->bahanBakar == "Hybrid")
            $status = "Irit";
        else
            $status = "Boros";
        return $status;
    }

    function hargaBekas()
    {
        $tahunSekarang = date(format: "2026");
        $umur = $tahunSekarang - $this->tahunPembuatan;
        $hargaBekas = $this->harga - ($this->harga * (0.10 * $umur));

        if ($hargaBekas < 0)
            $hargaBekas = 0;

        return $hargaBekas;
    }
}

$objekKendaraan1 = new kendaraan();
$objekKendaraan1->merek = "Yamaha Fazzio";
$objekKendaraan1->jumlahRoda = 2;
$objekKendaraan1->warna = "Merah";
$objekKendaraan1->harga = 10000000;
$objekKendaraan1->bahanBakar = "Bensin";
$objekKendaraan1->tahunPembuatan = 2020;

$objekKendaraan2 = new kendaraan();
$objekKendaraan2->merek = "Toyota Avanza";
$objekKendaraan2->jumlahRoda = 4;
$objekKendaraan2->warna = "Hitam";
$objekKendaraan2->harga = 100000000;
$objekKendaraan2->bahanBakar = "Bensin";
$objekKendaraan2->tahunPembuatan = 2018;

echo "<pre>";
echo "========= Kendaraan 1 =========\n";
echo "Merek: " . $objekKendaraan1->merek . "\n";
echo "Jumlah Roda: " . $objekKendaraan1->jumlahRoda. "\n";
echo "Warna: " . $objekKendaraan1->warna . "\n";
echo "Nominal Harga: " . $objekKendaraan1->harga . "\n";
echo "Status Harga: " . $objekKendaraan1->statusHarga() . "\n";
echo "Status BBM: " . $objekKendaraan1->statusBBM() . "\n";
echo "Tahun Pembuatan: " . $objekKendaraan1->tahunPembuatan . "\n";
echo "Perkiraan Harga Bekas: " . $objekKendaraan1->hargaBekas() . "\n";

echo "<pre>";
echo "=========Kendaraan 2 =========\n";
echo "Merek: " . $objekKendaraan2->merek . "\n";
echo "Jumlah Roda: " . $objekKendaraan2->jumlahRoda. "\n";
echo "Warna: " . $objekKendaraan2->warna . "\n";
echo "Nominal Harga: " . $objekKendaraan2->harga . "\n";
echo "Status Harga: " . $objekKendaraan2->statusHarga() . "\n";
echo "Status BBM: " . $objekKendaraan2->statusBBM() . "\n";
echo "Tahun Pembuatan: " . $objekKendaraan2->tahunPembuatan . "\n";
echo "Perkiraan Harga Bekas: " . $objekKendaraan2->hargaBekas() . "\n";
?>