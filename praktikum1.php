<?php

class KalkulatorSuhu {
    // Property
    public $suhu;

    // Constructor
    public function __construct($suhu) {
        $this->suhu = $suhu;
    }

    // Method Celsius ke Fahrenheit
    public function cToF() {
        return ($this->suhu * 9/5) + 32;
    }

    // Method Celsius ke Kelvin
    public function cToK() {
        return $this->suhu + 273.15;
    }
}

$suhuCelsius = 30;
$kalkulator = new KalkulatorSuhu($suhuCelsius);

echo "<pre>";
echo "================ KALKULATOR SUHU ================\n";
echo "Satuan  : Celsius (°C)\n";
echo "--------------------------------------------------\n";
echo "SUHU (C)   : " . $kalkulator->suhu . "\n";
echo "FAHRENHEIT : " . $kalkulator->cToF() . "\n";
echo "KELVIN     : " . $kalkulator->cToK() . "\n";
echo "==================================================";
echo "</pre>";
?>

