<?php

/* 9 užduotis

Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. 
Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, 
kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. 
Rezultatus apvalinkite iki sveiko skaičiaus.  */

class Candle {
public $number;
public $discount;
public $price;
public $sum;

public function __construct($number) {
$this->number = $number;
$this->price = 1;
$this->discount;
$this->sum = $this->number * $this->price;

if ($this->sum < 1000) {
$this->sum;
} else if ($this->sum < 2000) {
$this->discount = 3;
$this->sum = $this->sum * (100-$this->discount)/100;
} else {
$this->discount = 4;
$this->sum = $this->sum * (100-$this->discount)/100;
}
}

public function echo() {

if ($this->$sum < 1000) {

return '<h2>Nupirkta ' . $this->number . ' žvakių, viso už ' . $this->sum . ' eurų, o vienos žvakės kaina lygi - 1 euras, be nuolaidos.</h2>';
} else {

return '<h2>Nupirkta ' . $this->number . ' žvakių, viso už ' . $this->sum . ' eurų, o vienos žvakės kaina lygi - ' . round($this->sum / $this->number,2) . ' eurų, su ' . $this->discount . ' % nuolaida.</h2>';
}
}

}

$myCandle = new Candle(rand(5,3000));
echo $myCandle -> echo();

?>
