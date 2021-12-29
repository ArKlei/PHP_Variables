<?php

/*Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji 
(naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, 
kuri nustatytų, ar galima sudaryti lygiakrasti trikampį ir atsakymą atspausdintų. */


$a = rand(1,10);
$b = rand(1,10);
$c = rand(1,10);



if ($a == $b && $b == $c) {
     echo 'Trikampis lygiakraštis';
} else if ($a == $b || $b == $c) {
	echo 'Trikampis lygiašonis';
} else {
	echo 'Nėra lygiakraštis ar lygiašonis trikmapis';
}
?>