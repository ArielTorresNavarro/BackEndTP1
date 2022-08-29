<?php
// 5.- Siendo el valor de las variables: a = 10 b = 12 c = 13 d = 10Encontrar el valor de verdad de cada una de las
// siguientes expresiones
// a) (( a > b ) O ( a < c ) ) Y ( ( a = c) O ( a >= b ) )
// b) (( a >= b ) O ( a < d ) ) Y ( ( a >= d ) Y (c > d ) )
// c) NO (a = c ) Y ( c > b )

$a = 10;
$b = 12;
$c = 13; 
$d = 10;

$e=(( $a > $b ) or ( $a < $c ) ) and ( ( $a == $c) or ( $a >= $b ) );

$f=(( $a >= $b ) or ( $a < $d ) )and ( ( $a >= $d )and ($c > $d ) );

$g= !($a == $c ) and ( $c > $b );

var_dump($e);
echo '<br>';
var_dump($f);
echo '<br>';
var_dump($g);
echo '<br>';
