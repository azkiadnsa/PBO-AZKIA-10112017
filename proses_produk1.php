<?php

class Pegadaian
{
    public $pinjaman;
    public $bunga = 10;
    public $lama;
    public $terlambat;

    public function totalPinjaman()
    {
        return $this->pinjaman + ($this->pinjaman * $this->bunga / 100);
    }

    public function angsuran()
    {
        return $this->totalPinjaman() / $this->lama;
    }

    public function denda()
    {
        return $this->angsuran() * 0.0015 * $this->terlambat;
    }

    public function totalBayar()
    {
        return $this->angsuran() + $this->denda();
    }
}

$data = new Pegadaian();
$data->pinjaman = $_POST['pinjaman'];
$data->lama = $_POST['lama'];
$data->terlambat = $_POST['terlambat'];


echo "<h2>TOKO PEGADAIAN SYARIAH</h2>";
echo "Besar Pinjaman : Rp. " . number_format($data->pinjaman) . "<br>";
echo "Bunga : " . $data->bunga . "%\n" . "<br>";
echo "Total Pinjaman : Rp. " . number_format($data->totalPinjaman()) . "<br>";
echo "Lama Angsuran : " . $data->lama . " bulan<br>";
echo "Besaran Angsuran : Rp. " . number_format($data->angsuran()) . "<br><br>";

echo "Keterlambatan : " . $data->terlambat . " hari<br>";
echo "Denda Keterlambatan : Rp. " . number_format($data->denda()) . "<br>";
echo "Total Pembayaran : Rp. " . number_format($data->totalBayar()) . "<br>";
?>