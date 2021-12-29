<?php

/* 8 užduotis

Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. 
Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. 
Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.

 */

 
class Candle {
  public $number;
 
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
 
      return '<h2>Nupirkta viso ' . $this->number . ' žvakių, viso už ' . $this->sum . ' eurų, o vienos žvakės kaina lygi - ' . round($this->sum / $this->number,2) . ' eurų, su  ' . $this->discount . ' % nuolaida.</h2>';
  }
}
 
$myCandle = new Candle(rand(5,3000));
echo $myCandle -> echo();
 
?>

?>
