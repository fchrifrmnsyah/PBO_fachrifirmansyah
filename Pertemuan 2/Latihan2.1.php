<?php
class Guru {
    var $nama_nama = array ("de","ce","ve","re");
    var $nama_guru ;
    var $NIK;
    var $Jabatan;
    var $alamat;
}

class Murid {
    var $nama_siswa;
    var $NIS;
    var $Kelas;
    var $alamat;
}

class Kurikulum {
    var $tahun_akademik;
    var $sks_matkul;
}

class Mobil{
    var $jumlahroda =4;
    var $warna="Merah";
    var $bahanbakar="Pertamax";
    var $harga=120000000;
    var $erk='A';

        public function statusharga()
        {
            if($this->harga > 5000000) $status = 'MAHAL';
            else $status = 'MURAH';
            return $status; 
        }
}

$objekBMW=new Mobil;
$objekTesla=new Mobil;
$objekAudi=new Mobil;

?>