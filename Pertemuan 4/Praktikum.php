<?php
class Mahasiswa {
  var $nama;
  var $kelas;
  var $mataKuliah;
  var $nilai;

  function __construct($nama, $kelas, $mataKuliah, $nilai) {
    $this->nama = $nama;
    $this->kelas = $kelas;
    $this->mataKuliah = $mataKuliah;
    $this->nilai = $nilai;
  }

  function getNama() {
    return $this->nama;
  }

  function getKelas() {
    return $this->kelas;
  }

  function getMataKuliah() {
    return $this->mataKuliah;
  }

  function getNilai() {
    return $this->nilai;
  }

  function lulusKuis() {
    if ($this->nilai >= 75) {
      return "Lulus Kuis";
    } else {
      return "Tidak Lulus Kuis";
    }
  }
}

$mahasiswa = array(
  new Mahasiswa("Aditya", "SI 2", "Pemrograman Berorientasi Objek", 80),
  new Mahasiswa("Shinta", "SI 2", "Pemrograman Berorientasi Objek", 75),
  new Mahasiswa("Ineu", "SI 2", "Pemrograman Berorientasi Objek", 55)
);

foreach ($mahasiswa as $m) {
  echo "Nama : " . $m->getNama() . "<br>";
  echo "Kelas : " . $m->getKelas() . "<br>";
  echo "Mata Kuliah: " . $m->getMataKuliah() . "<br>";
  echo "Nilai: " . $m->getNilai() . "<br>";
  echo $m->lulusKuis() . "<br>";
  echo "<br>";
}
?>