<?php

class SegitigaBintang
{
    var $t;

    public function setTinggi($t)
    {
        $this->t = $t;
    }

    public function getTinggi()
    {
        return $this->t;
    }

    public function cetakSegitigaSamaKaki()
    {
        for ($i = 1; $i < 6; $i++) {
           
            for ($j = $i; $j < 6; $j++) {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;";
            }
 
            for ($j = 1; $j <= $i; $j++) {
                echo "&nbsp;*" . "&nbsp;";
            }
 
           
            for ($j = 1; $j <= $i; $j++) {
                echo "&nbsp;*" . "&nbsp;";
            }
 
            echo '<br />';
        }
    }


    public function cetakSegitigaKanan()
    {
        for ($i = 1; $i <= $this->t; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }

        for ($i = $this->t - 1; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }

    public function cetakSegitigaKiri()
    {
        for ($i = 1; $i <= $this->t; $i++) {
            for ($j = $this->t; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "*";
            }
            echo "<br>";
        }

        for ($i = $this->t - 1; $i >= 1; $i--) {
            for ($j = $this->t; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "*";
            }
            echo "<br>";
        }
    }
}

$segitiga1 = new SegitigaBintang();
$segitiga1->setTinggi(6);
echo "<br>Segitiga 1:<br>";
$segitiga1->cetakSegitigaSamaKaki();



$segitiga2 = new SegitigaBintang();
$segitiga2->setTinggi(6);
echo "Segitiga 2:<br>";
$segitiga2->cetakSegitigaKanan();


$segitiga3 = new SegitigaBintang();
$segitiga3->setTinggi(6);
echo "<br>Segitiga 3:<br>";
$segitiga3->cetakSegitigaKiri();