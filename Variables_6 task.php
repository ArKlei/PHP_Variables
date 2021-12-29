<?php

/* 6 užduotis

Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 
ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>
 */

$x = rand(1,6);
echo '<h' . $x . '>' . $x . '<h' . $x . '>';
echo "<h$x>$x<h$x>";

?>
