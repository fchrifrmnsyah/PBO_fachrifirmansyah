<?php
class kendaraan
{
    var $jumlahRoda=4;
    var $warna;
    var $harga=50000000;
    var $merek;
    var $bahanBakar = "Premium";
    var $tahunPembuatan=2006;
    var $platnomber = 2167;
    function statusHarga()
    {
        if($this-> harga > 500000000)
        {
            $status = "Mahal";
        }
        else
        {
            $status = "Murah";
        }
        return $status;
    }
    function statusSubsidi()
    {
        if ($this->tahunPembuatan < 2005 && $this->bahanBakar=="Premium")
        {
            $status ="Dapat Subsidi";
        }
        else
        {
            $status = "Tidak Dapat Subsidi";  
        }
            return $status;
    }
    function hargabekas()
    {
        if($this->tahunPembuatan > 2005)
        {
            $hargabekas = $this->harga - ($this->harga * 0.2);
        }
        elseif ($this->tahunPembuatan < 2005 && $this->tahunPembuatan > 2001)
        {
            $hargabekas = $this->harga - ($this->harga * 0.3);
        }
        elseif ($this->tahunPembuatan < 2000)
        {
            $hargabekas = $this->harga - ($this->harga * 0.4);
        }
        return $hargabekas;
    }
    function pajak()
    {
        if($this->tahunPembuatan <= 2017);
        {
            $pajak = $this->harga * 0.025;
        }
        return $pajak;
    }
    function operasi()
    {
    if ($this->platnomber % 2 == 0){
        $hari = "Selasa, Kamis, dan Sabtu";
    }
    else
    {
        $hari = "senin, rabu, jumat, dan minggu ";
    }
    return $hari;
    }      
}

$ObjekKendaraan = new kendaraan();
echo "Status Harga : ".$ObjekKendaraan ->statusHarga()."<br/>";
echo "Status BBM : ".$ObjekKendaraan -> statusSubsidi()."<br/>";
echo "Harga Bekas : Rp. ".$ObjekKendaraan ->hargabekas()."<br/>";
echo "Pajak : Rp. ".$ObjekKendaraan ->pajak()."<br/>";
echo "Hari Beroperasi : ".$ObjekKendaraan ->operasi()."<br/>";
?>