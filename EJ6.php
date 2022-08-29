<!-- 6.- Encontrar el valor de verdad de la siguiente expresión dados los valores
M = 8, N = 9, R = 5, S = 5, T = 4, V = 77.
NO ((M > N Y R > S ) O ( NO ( T < V Y S > M ) ) ) -->

<?php

$M = 8;
$N = 9;
$R = 5;
$S = 5; 
$T = 4;
$V = 77;

$Q= ! (($M > $N and $R > $S ) or ( ! ( $T < $V and $S > $M ) ) );
var_dump($Q);
?>