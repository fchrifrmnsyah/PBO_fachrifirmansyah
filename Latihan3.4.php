<?php
class PenghitungAngsuran {
   var $besarPinjaman;
   var $bunga;
   var $lamaAngsuran;
   var $angsuran;
   var $dendaPerHari;
   function __construct($besarPinjaman, $bunga, $lamaAngsuran, $dendaPerHari) {
       $this->besarPinjaman = $besarPinjaman;
       $this->bunga = $bunga;
       $this->lamaAngsuran = $lamaAngsuran;
       $this->dendaPerHari = $dendaPerHari;
       $this->hitungAngsuranPerBulan();
   }
   function hitungAngsuranPerBulan() {
       $totalPinjaman = $this->besarPinjaman * (1 + $this->bunga / 100);
       $this->angsuran = $totalPinjaman / $this->lamaAngsuran;
   }
   function hitungDenda($hariTerlambat) {
       return $hariTerlambat * ($this->angsuran * $this->dendaPerHari / 100);
   }
   function totalPembayaran($hariTerlambat) {
       $denda = $this->hitungDenda($hariTerlambat);
       return $this->angsuran + $denda;
   }
}

$besarPinjaman = 1000000; 
$bunga = 10; 
$lamaAngsuran = 5; 
$dendaPerHari = 0.15; 
$penghitung = new PenghitungAngsuran($besarPinjaman, $bunga, $lamaAngsuran, $dendaPerHari);
$hariTerlambat = 40;
$dendaKeterlambatan = $penghitung->hitungDenda($hariTerlambat);
$totalPembayaran = $penghitung->totalPembayaran($hariTerlambat);

echo ("TOKO PEGADAIAN SYARIAH")."<br>";
echo ("Jl. Keadilan No. 16")."<br>";
echo ("Telp. 72353459")."<br>" ."<br>" ."<br>";
echo "Besaran Pinjaman: Rp. " .($besarPinjaman) . "<br>";
echo "Bunga: " . $bunga . "%<br>";
echo "Total Pinjaman: Rp. " .($besarPinjaman * (1 + $bunga / 100)) . "<br>";
echo "Lama Angsuran: " . $lamaAngsuran . " bulan<br>";
echo "Besaran Angsuran per Bulan: Rp. " .($penghitung->angsuran) . "<br>";
echo "Keterlambatan Angsuran (Hari): " . $hariTerlambat . "<br>";
echo "Denda Keterlambatan: Rp. " .($dendaKeterlambatan) . "<br>";
echo "Besaran Pembayaran: Rp. " .($totalPembayaran) . "<br>";
?>