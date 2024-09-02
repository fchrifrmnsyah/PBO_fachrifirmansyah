<?php
class Kendaraan {
  var $merek;
  var $jmlroda;
  var $harga;
  var $warna;
  var $bhnbakar;
  var $tahun;
function setMerek($x) {
    $this->merek = $x;
  }
function getMerek() {
    return $this->merek;
  }
function setjmlroda($x) {
    $this->jmlroda = $x;
  }
function getjmlroda() {
    return $this->jmlroda;
  }
function setHarga($harga) {
    $this->harga = $harga;
  }
function getHarga() {
    return $this->harga;
  }
function setwarna($x) {
    $this->warna = $x;
  }
function getWarna() {
    return $this->warna;
  }
function setbhnbakar($x) {
    $this->bhnbakar = $x;
  }
function getBhnBakar() {
    return $this->bhnbakar;
  }
function settahun($x) {
    $this->tahun = $x;
  }
function getTahun() {
    return $this->tahun;
  }
function statusHarga() {
    if($this->harga >= 50000000){
      return "Mahal";
    } else {
      return "Murah";
    }
  }
function hargaSecondKendaraan() {
    return $this->harga * 0.5;
  }
}

$Data1= array('Toyota Yaris', '4', '160000000', 'Merah', 'Pertamax', '2014');
$Data2 = array('Honda Scoopy', '2', '13000000', 'Putih', 'Premium','2005');
$Data3= array('Isuzu Panther', '4', '40000000', 'Hitam', 'Solar', '1994');

for($i = 1; $i <= 3; $i++) {
  for($h = 0; $h <= 5; $h++) {
    ${"kendaraan$i"} = new Kendaraan();
    ${"kendaraan$i"}->setMerek(${"Data$i"}[0]);
    ${"kendaraan$i"}->setjmlroda (${"Data$i"}[1]);
    ${"kendaraan$i"}->setHarga (${"Data$i"}[2]);
    ${"kendaraan$i"}->setwarna (${"Data$i"} [3]);
    ${"kendaraan$i"}->setbhnbakar (${"Data$i"}[4]);
    ${"kendaraan$i"}->settahun (${"Data$i"}[5]);
  }
}

for($i = 1; $i <= 3; $i++) {
  echo "kendaraan$i<br>"
  ."Kendaraan :".${"kendaraan$i"}->getMerek()."<br>"
  ."Jumlah Roda :".${"kendaraan$i"}->getjmlroda()."<br>"
  ."Harga Awal :".${"kendaraan$i"}->getHarga()."<br>"
  ."Warna :".${"kendaraan$i"}->getWarna()."<br>"
  ."Bahan Bakar :".${"kendaraan$i"}->getBhnBakar()."<br>"
  ."Tahun :" .${"kendaraan$i"}->getTahun()."<br>"
  ."Status Harga :".${"kendaraan$i"}->statusHarga()."<br>"
  ."Harga Second :".${"kendaraan$i"}->hargaSecondKendaraan()."<br><br>";
}

?>