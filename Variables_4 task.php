<?php

/* 2 užduotis

Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi 
funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. 
Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.*/


$x = rand(0,25);
$y = rand(0,25);
$z = rand(0,25);

echo 'x kintamasis yra: ' . $x;
echo ', y kintamasis yra: ' . $y;
echo ', z kintamasis yra: ' . $z;

$min = min($x,$y,$z);
$max = max($x,$y,$z);

echo ' Iš jų, min yra: ' . $min;
echo ', max yra: ' . $max;

if ($x != $min && $x != $max) {
	echo '. Vidurinis skaičius yra x: ' . $x;
} else if ($y != $min && $y != $max) {
echo '. Vidurinis skaičius yra y: ' . $y;
} else 
	echo '. Vidurinis skaičius yra z:' . $z 


?>
