<?php 

function frase() // Funcao criada normal
{
	$args = func_get_args(); // Resgata todos os parametros passado para função frase de forma automatizada.
	return $args; // retorna o resultado da função, ou seja é uma função propriamente dita.		
}

print_r(frase("PHP 8","HTML","JAVA"));// Passagem por parametro.


?>