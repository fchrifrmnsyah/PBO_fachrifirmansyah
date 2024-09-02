<?php
class Kendaraan
{
    var $jumlahRoda; 
    var $warna;
    var $bahanBakar; 
    var $harga = 350000000;
    var $merek;
    var $status; 
    var $tahunPembuatan;

    function statusHarga()
    {
        if ($this->harga > 50000000) { 
            $this->status = "Mahal";
        } else {
            $this->status = "Murah";
        }
        return $this->status;
    }

        function dapatSubsidi()
    {
       
        if ($this->bahanBakar == "Pertamax") {
            return "Dapat Subsidi";
        } else {
            return "Tidak Dapat Subsidi";
        }
    }

    function hargaSecondKendaraan()
    {

        return $this->harga * 0.3;
    }
}


$objekKendaraan2 = new Kendaraan;


$objekKendaraan2->bahanBakar = "Pertamax";
$objekKendaraan2->tahunPembuatan = 1999;

echo "<br>";
echo "Status BBM: " . $objekKendaraan2->dapatSubsidi();
echo "<br>";
echo "Harga Bekas: " . $objekKendaraan2->hargaSecondKendaraan();
?>
