<?php 
	
$valor = 10; // Valor atribuido	
	
function alteraValor(&$valor) // & na passagem de parametro significa que o valor tambem será alterado no ponteiro da memória
{
	$valor += 50; // Soma do valor + 50 que é = 60
	
	return 	$valor; // Funcao propria retonada com valor
}
 
echo alteraValor($valor); // Imiprimi 60 e passa o valor por parametro
echo "<br>"; // Pula linha
echo $valor; // Impirmi 60 por que o & foi usado na passagem de parametro


?>