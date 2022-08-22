<?php 

$A=10;
$B=20;

$C=!(!($A<>10) || (20>$B) && ($A=10) && false) && true;

var_dump($C);
?>