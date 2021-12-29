<?php

/* 5 užduotis

Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite 
jiems reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, 
vienetų ir dvejetų. (sprendimui masyvo nenaudoti). */

$x = rand(0,2);
$y = rand(0,2);
$z = rand(0,2);
$w = rand(0,2);
$nulis = 0;
$vienas = 0;
$du = 0;
echo 'x kintamasis yra: ' . $x;
echo ', y kintamasis yra: ' . $y;
echo ', z kintamasis yra: ' . $z;
echo ', w kintamasis yra: ' . $w;
if ($x == 0 || $y == 0 || $z == 0 || $w == 0) {
$nulis++;
echo '. Nulių yra ' . $nulis;
}

if ($x == 1 || $y == 1 || $z == 1 || $w == 1) {
$vienas++;
echo '. Vienetų yra ' . $vienas;
}

if ($x == 2 || $y == 2 || $w == 2 || $w == 2) {
$du++;
echo '. Dvejetų yra ' . $du;
}

?>
