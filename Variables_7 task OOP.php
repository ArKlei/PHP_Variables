<?php

/* 7 užduotis

Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. 
Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 
 */


class Numbers {

	public $number;

		public function __construct($number) {
			
		$this->number = $number;
		$this->green;
		$this->red;
		$this->blue;

			if ($this->number < 0) {
				$this->green = $this->number;
			} else if ($this->number > 0) {
				$this->blue = $this->number;
			} else {
				$this->red = $this->number;
			}
		}

		public function echo() {

			if ($this->green) {
				return '<span style="color:green;">' . $this->green . '</span><br>';
			} else if ($this->blue) {
				return '<span style="color:blue;">' . $this->blue . '</span><br>';
			} else {
				return '<span style="color:red;">' . $this->red . '</span><br>';
			}
			
		}
	
	}

$myNumbers = new Numbers(rand(-10,10));
echo $myNumbers -> echo();
$myNumbers = new Numbers(rand(-10,10));
echo $myNumbers -> echo();
$myNumbers = new Numbers(rand(-10,10));
echo $myNumbers -> echo();

?>
