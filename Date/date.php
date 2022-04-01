<?php 


$agen = strtotime("+1 week"); // Converte a string para o tipo "date()" acrescentando dia seguinte 

echo date("l, d/m/Y", $agen); // Imprimi a data referente a função strtotime();



?>