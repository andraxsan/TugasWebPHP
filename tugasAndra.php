<?php
function hitungBelanja($belanjaAndra, $memberAndra){
    switch($memberAndra){
        case 'y':
            if ($belanjaAndra >= 1000000) {
                $diskonAndra = $belanjaAndra * 0.25;
                $totalBelanjaAndra = $belanjaAndra - $diskonAndra;
                echo "Mendapat potongan dan diskon sebesar Rp." . $diskonAndra . "<br>Total Belanja Rp." . $totalBelanjaAndra;
            } else if ($belanjaAndra >= 500000) {
                $diskonAndra = $belanjaAndra * 0.20;
                $totalBelanjaAndra = $belanjaAndra - $diskonAndra;
                echo "Mendapat potongan dan diskon sebesar Rp." . $diskonAndra . "<br>Total Belanja Rp." . $totalBelanjaAndra;
            } else {
                $diskonAndra = $belanjaAndra * 0.10;
                $totalBelanjaAndra = $belanjaAndra - $diskonAndra;
                echo "Mendapat potongan sebesar Rp." . $diskonAndra . "<br>Total Belanja Rp." . $totalBelanjaAndra;
            }
        break;
        case 't';
        if ($belanjaAndra >= 1000000) {
            $diskonAndra = $belanjaAndra * 0.10;
            $totalBelanjaAndra = $belanjaAndra - $diskonAndra;
            echo "Mendapat diskon sebesar Rp." . $diskonAndra . "<br>Total Belanja Rp." . $totalBelanjaAndra;
        } else if ($belanjaAndra >= 500000) {
            $diskonAndra = $belanjaAndra * 0.05;
            $totalBelanjaAndra = $belanjaAndra - $diskonAndra;
            echo "Mendapat diskon sebesar Rp." . $diskonAndra . "<br>Total Belanja Rp." . $totalBelanjaAndra;
        } else {
            echo 'Anda tidak mendapatkan diskon, ' . $belanjaAndra;
        }
        break;
    }
}

hitungBelanja(1500000, 'y');
?>