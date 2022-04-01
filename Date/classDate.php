<?php

/**************************
		- Date -
**************************/

$dt = new dateTime(); // Instancia da classe 

$periodo = new dateInterval("P15D"); // Instanciando a classe com os parametros de intevalo "P15D" P = Periodo, 15D = 15 Dias 

$dt->add($periodo); // Objeto da classe acessando método "add()"

echo $dt->format("d/m/Y"); // Imprimir a data + 15 Dias 



 ?>
