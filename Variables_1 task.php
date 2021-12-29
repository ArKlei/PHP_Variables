<?php

/*Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() 
jiems priskirkite atsitiktines reikšmes nuo 1 iki 4. 
Didesnę reikšmę padalinkite iš mažesnės. 
Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.*/

$a = rand(0,4);
$b = rand(0,4);
$c = 0;



if ($a > $b) {
if ($b != 0) {
$c = $a / $b;
echo 'Pirmasis kitamasis didesnis, o rezultatas lygus: '.(round($c,2));
} else {
echo 'Antrasis kitamasis lygis nuliui, dalyba negalima';
}
} else {
if ($a != 0) {
$c = $b / $a;
echo 'Antrasis kitamasis didesnis, o rezultatas lygus: '.(round($c,2));
} else { echo 'Antrasis kitamasis lygis nuliui, dalyba negalima';}
}
?>