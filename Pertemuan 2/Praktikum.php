<?php
class KalkulatorSuhu {
    var $suhuCelsius; 
    var $suhuFahrenheit; 
    var $suhuKelvin; 
    var $suhuReamur; 



    function __construct($suhuCelsius) {
        $this->suhuCelsius = $suhuCelsius;
        $this->ckef(); 
        $this->ckek();
        $this->cker(); 
    }

    function ckef() {
        $this->suhuFahrenheit = (9/5) * $this->suhuCelsius + 32;
    }


    function ckek() {
        $this->suhuKelvin = $this->suhuCelsius + 273.15;
    }


    function cker() {
        $this->suhuReamur = (4/5) * $this->suhuCelsius;
    }

}


$suhuCelsius = 1248; 

$converter = new KalkulatorSuhu($suhuCelsius);

echo "KONVERSI SUHU KE CELCIUS<br>";
echo "Suhu $suhuCelsius °C dalam Fahrenheit: " . $converter->suhuFahrenheit . " °F<br>";
echo "Suhu $suhuCelsius °C dalam Kelvin: " . $converter->suhuKelvin . " K<br>";
echo "Suhu $suhuCelsius °C dalam Reamur: " . $converter->suhuReamur . " °R<br>";


?>
