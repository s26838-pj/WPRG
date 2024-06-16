<?php

class NoweAuto {
    
    
    protected $model;
    protected $cenaEuro;
    protected $kursEuroPLN;

    
    public function __construct($model, $cenaEuro, $kursEuroPLN) {
        $this->model = $model;
        $this->cenaEuro = $cenaEuro;
        $this->kursEuroPLN = $kursEuroPLN;
        
    }

    
    public function obliczCene() {
        
        return $this->cenaEuro * $this->kursEuroPLN;
    }

    public function __toString() {
        return "Model: $this->model\n
        Cena w Euro: $this->cenaEuro\n
        Kurs Euro/PLN: $this->kursEuroPLN\n
        Cena w PLN: " . $this->obliczCene() . " PLN";
    }
}

class AutoZDodatkami extends NoweAuto {
    
    
    
    protected $alarm;
    protected $radio;
    protected $klimatyzacja;
    
    

    public function __construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja) {
        parent::__construct($model, $cenaEuro, $kursEuroPLN);
        $this->alarm = $alarm;
        $this->radio = $radio;
        $this->klimatyzacja = $klimatyzacja;
        
    }
    

    public function obliczCene() {
        
        $cenaBezDodatkow = parent::obliczCene();
        return $cenaBezDodatkow + $this->alarm + $this->radio + $this->klimatyzacja;
    }

    
    public function __toString() {
        
        return parent::__toString() . "\nCena z dodatkami: " . $this->obliczCene() . " PLN\nAlarm: $this->alarm PLN\nRadio: $this->radio PLN\nKlimatyzacja: $this->klimatyzacja PLN";
    }
}

class Ubezpieczenie extends AutoZDodatkami {
    
    
    protected $procentowaWartoscUbezpieczenia;
    protected $liczbaLatPosiadania;
    

    public function __construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja, $procentowaWartoscUbezpieczenia, $liczbaLatPosiadania) {
        parent::__construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja);
        $this->procentowaWartoscUbezpieczenia = $procentowaWartoscUbezpieczenia;
        $this->liczbaLatPosiadania = $liczbaLatPosiadania;
        
    }

    
    public function obliczCene() {
        $cenaZDodatkami = parent::obliczCene();
        $wartoscUbezpieczenia = $this->procentowaWartoscUbezpieczenia * ($cenaZDodatkami * ((100 - $this->liczbaLatPosiadania) / 100));
        return $wartoscUbezpieczenia;
        
    }

    public function __toString() {
        
        return parent::__toString() . "\nWartość ubezpieczenia: " . $this->obliczCene() . " PLN\nProcentowa wartość ubezpieczenia: $this->procentowaWartoscUbezpieczenia\nLiczba lat posiadania: $this->liczbaLatPosiadania";
        
    }
}



$model = "BMW";
$cenaEuro = 20000;
$kursEuroPLN = 4.5;
$alarm = 500;
$radio = 200;
$klimatyzacja = 1000;
$procentowaWartoscUbezpieczenia = 0.05;
$liczbaLatPosiadania = 3;


$ubezpieczenie = new Ubezpieczenie($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja, $procentowaWartoscUbezpieczenia, $liczbaLatPosiadania);
echo $ubezpieczenie;

?>



