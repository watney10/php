<?php 

$frase = "A repetição é a mãe da retenção.";

$q = strpos($frase, "mãe"); // RETORNA POSIÇÃO DA PALAVRA MAE '(17)'

$palavra = "mãe"; 
 
echo substr($frase, $q + strlen($palavra), strlen($frase));



?>