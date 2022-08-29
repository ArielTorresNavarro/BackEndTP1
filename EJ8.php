<?php
// 8.- Dadas A, B, C, D, E y F variables de tipo numérico escribir las expresiones lógicas correspondientes a los
// iguientes enunciados:
// a. A es positivo y B es negativo.
// b. A, B y C son diferentes.
// c. E es no nulo y F no es mayor que G.
// d. B está estrictamente entre A y C.
// e. F es negativo o E es no negativo, pero no ambos a la vez.

$A>0 and $B<0;
$A!= $B and $B!=$C and $A!=$C;
$E!=0 and $F<=$G;
$A<$B and $B<$C;
$F<0 xor $E>=0;

?>