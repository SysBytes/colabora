<?php
DEFINE("MANANA", "1");
DEFINE("TARDE", "2");
DEFINE("NOCHE", "3");


date_default_timezone_set('America/Bogota');

$hora = date("Hi");
if($hora >= 700 && $hora < 1200):
    $bg = MANANA;
elseif($hora >= 1200 && $hora < 1900):
    $bg = TARDE;
else:
    $bg = NOCHE;
endif;

?>
