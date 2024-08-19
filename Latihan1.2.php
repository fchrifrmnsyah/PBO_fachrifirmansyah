class mobil{
    var $jumlahRoda=4;
    var $warna="Merah";
    var $bahanBakar="Pertamax";
    var $harga=120000000;
    var $merk='A';

        public function statusHarga()
        {
            if ($this->harga >5000000) $status = 'Mahal';
            else $status = 'Murah';
            return $status;
        }
}