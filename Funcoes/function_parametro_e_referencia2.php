<?php /*
	
$clientes = array // 
(
	"Cliente" => "Fernando Souza",
	"Bonus" => 5
);	

foreach($clientes as &$value)s
{
	if(gettype($value) == "integer") $value+=10;
	echo $value. "<br>";
}

print_r($clientes);
	
	
*/?>

<?php

$clientes = array(); // Cria array

array_push($clientes, array('Watney','Simone','Eva Soares')); // Adiciona um array dentro outro array carregando os valores

array_push($clientes, array('Pumba','Leao','Tina')); // Adiciona um array dentro outro array carregando os valores

print_r(end($clientes[1])); // Imprimi o array 1 com dados do ultimo valor

 ?>