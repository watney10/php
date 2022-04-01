<?php 

$total = 100; // Valor atribuído a variavel

do { // faça primeiro
	
	$total *= 0.9; // Ex. '$total = 100 * 0.9'	
	
}while($total > 100); // Enquanto total for maior que 100 calcule

echo $total; // Imprimi o total

echo "<br>";


?>