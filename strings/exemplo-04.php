<?php 

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, "mãe");

$texto = substr($frase, 0, $q);

var_dump($texto);

$texto2 = substr($frase, $q);

echo "<br>";

var_dump($texto2);

echo "<br>";

echo strlen($palavra);

 ?>