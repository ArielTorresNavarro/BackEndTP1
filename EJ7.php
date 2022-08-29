<?php
// 7.- Aplicando la jerarquía de los operadores, encontrar el valor de verdad de cada una de las siguientes
// expresiones.
// a) (3 * 2 – 4 / 2 * 1) > (3 * 2 + 2 * 1) Y (5 > 11 % 4)
// b) (3 >= 3 O 5 <> 5) Y NO (15 / 5 + 2 <> 5)
// c) NO (NO ((3 * (- 3)) * 2 > (3 –(- 3 ) * 2 ) O 1 ^ 3 * 2 > 6 ) )
// d) (3 >= 4 Y 5 > 3 Y 3 > 3) O NO (4 <= 4 O 5 > 4 O 6 >= 7)

$A= ((3 * 2) - (4 / 2 * 1)) > (3 * 2 + 2 * 1) and (5 > 11 % 4);
var_dump($A);
echo "<br/>";

$B= (3 >= 3 or 5 <> 5) and ! (15 / 5 + 2 <> 5);
var_dump($B);
echo "<br/>";

$C= ! (! ((3 * (- 3)) * 2 > (3 -(- 3 ) * 2 ) or 1 ^ 3 * 2 > 6 ) );
var_dump($C);
echo "<br/>";

$D= (3 >= 4 and 5 > 3 and 3 > 3) or ! (4 <= 4 or 5 > 4 or 6 >= 7);
var_dump($D);
echo "<br/>";

?>