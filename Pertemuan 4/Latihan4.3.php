<?php
class Kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    var $tahunPembuatan;
    var $status;


function setmerek ($x) {
$this->merek = $x;
}


function getmerek () {
return $this->merek;
}        

function setharga ($y) {
$this->harga = $y;
}
function getharga () {
return $this->harga;
}

function setwarna ($x) {
$this->warna = $x;
}
function getwarna () {
return $this->warna;
}    
function setstatus ($x) {
    $this->status = $x;
    }
    function getstatus () {
    return $this->status;
    } 
}

$kendaraan1 = new Kendaraan;
$kendaraan1->setmerek ('Yamaha Mio') ;
$kendaraan1->setharga (10000000) ;
$kendaraan1->setwarna ('Putih') ;
$kendaraan1->setstatus('Murah');


$kendaraan2 = new Kendaraan;
$kendaraan2->setmerek ('BMW') ;
$kendaraan2->setharga (1000000000000) ;
$kendaraan2->setwarna ('Merah') ;
$kendaraan2->setstatus('Murah');

echo $kendaraan1->getmerek () ;
echo "<br>";
echo $kendaraan1->getharga () ;
echo "<br>";
echo $kendaraan1->getwarna () ;
echo "<br>";
echo $kendaraan1->getstatus () ;
echo "<br><br>";
echo $kendaraan2->getmerek () ;
echo "<br>";
echo $kendaraan2->getharga () ;
echo "<br>";
echo $kendaraan2->getwarna () ;
echo "<br>";
echo $kendaraan2->getstatus () ;

?>