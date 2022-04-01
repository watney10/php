<?php 

$usuarios = array(); // Inicia um array vazio 

array_push($usuarios, array( // Adiciona um array com dados dentro do array vazio
	
	'Cliente' => 'Watney Silva', // Chave => valor 
	'ID' => 554787	// Chave => valor 

));

array_push($usuarios, array( // Adiciona um array com dados dentro do array vazio
	
	'Cliente' => 'Simone', // Chave => valor 
	'ID' => 55855 // Chave => valor 	 

));

echo json_encode($usuarios); // Imprimi os valores codificados para ser executados por outras linguagens

//print_r($usuarios); // Imiprimi os dados dos arrays

?>