<?php

class Converter {
    private $suhu;

    public function __construct($suhu) {
        $this->suhu = $suhu;
    }

    public function fahrenheitotwCelsius() {
        return ($this->suhu - 32) * 5 / 9;
    }

    public function kelvinKeCelsius() {
        return $this->suhu - 273.15;
    }
}


$suhuFahrenheit = 200; 
$suhuKelvin = 330;     

$converterFahrenheit = new Converter($suhuFahrenheit);
$converterKelvin = new Converter($suhuKelvin);

echo "Suhu $suhuFahrenheit °F dalam Celsius: " . $converterFahrenheit->fahrenheitotwCelsius() . " °C<br>";
echo "Suhu $suhuKelvin K dalam Celsius: " . $converterKelvin->kelvinKeCelsius() . " °C";

?>
