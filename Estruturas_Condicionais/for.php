<?php 

for($i=0; $i<100; $i++) // Toda condição $i será testada
{
	if($i>20 && $i<80) continue; // Não exibe o intervalo dos numeros entre 20 a 80, porém continua a execução do código
	
	if($i==95) break; // Para de executar todo o código quando econtrar o numero 95

	echo $i; // Exibe na tela os numeros
}

echo "<br>"; /*-------------------------------------------------------------------------------------------------------------*/


echo "<select>"; // Inicio select HTML

for($x=date("Y"); $x>date("Y")-100; $x--) // X vale a data atual, enquanto x for maior que a data atual menos cem que vale 1917, calcule a data atual menos 1
{
	echo '<option value="'.$x.'">'.$x.'</option>'; // Imprimi as variaveis PHP 'embutida' nas tags HTML 
}
echo "</select>"; // Fim select HTML

echo "<br>";

for($t = 0; $t < 50; $t++ )
{
	if($t>=40) 
	{	
		$vendas = $t;
		break;
	}
}

echo $vendas*=0.15;
	

?>