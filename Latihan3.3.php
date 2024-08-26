<?php
class Kendaraan
{
    Var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;

    function statusHarga() {
        if ($this->harga > 50000000) {
            $status = 'Mahal'; 
        } else {
            $status = 'Murah';
        }
        return $status;
    }
}

$objekKendaraan1 = new Kendaraan();
$objekKendaraan1->merek = "Yamaha"; 
$objekKendaraan1->harga = 10000000; 

$objekKendaraan2 = new Kendaraan();
$objekKendaraan2->merek = "Toyota Avanza"; 
$objekKendaraan2->harga = 100000000; 

echo "Merek: " . $objekKendaraan2->merek; 
echo "<br>";
echo "Nominal Harga: " . $objekKendaraan2->harga; 
echo "<br>";
echo "Status Harga Kendaraan: " . $objekKendaraan2->statusHarga(); 
?>
