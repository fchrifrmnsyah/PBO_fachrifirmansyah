<?php
class Kendaraan
{
    var $jumlahRoda; 
    var $warna;
    var $bahanBakar; 
    var $harga = 350000000;
    var $merek;
    var $status; 

    function statusHarga()
    {
        if ($this->harga > 50000000) { 
            $this->status = "Mahal";
        } else {
            $this->status = "Murah";
        }
        return $this->status;
    }
}

$objekKendaraan1 = new Kendaraan;

$objekKendaraan1->harga = 1000000;
$objekKendaraan1->tahunPembuatan = 1999;

echo "Status Harga: " . $objekKendaraan1->statusHarga();
?>
