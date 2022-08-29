<!-- 4.- Si a = 20, b = a, c = 15, d = 10. Determinar si la siguiente operación es VERDADERA o FALSA
(( a = b ) O ( b > c ) ) O ( c < d ) -->

<?php
$a = 20;
$b = $a; 
$c = 15;
$d = 10;

$e =(( $a == $b ) or ( $b > $c ) ) or ( $c < $d );

var_dump($e);

?>