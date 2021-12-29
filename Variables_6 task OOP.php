<?php

/* 6 užduotis

Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį 
atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>

 */

class H {
public $size;

public function __construct($size) {
$this->size = $size;
}
public function echo() {
return "<h" . $this->size . ">" . $this->size . "</h" . $this->size . ">";
}
}

$myH = new H(rand(1,6));
echo $myH -> echo();

?>
