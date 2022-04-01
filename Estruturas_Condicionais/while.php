<?php /*

$condicao = true; // Valor 'bool:true' atribuido a variavel

while($condicao) // Enquanto a condição for verdadeira, execute o script
{
	$numero = rand(1,10); // Valores aleatorios entre (1 e 10) serão atribuido a variavel '$numero' 
	if($numero === 3) // Se o valor da variavel for igual a 3 
	{
		echo "NUMERO TRES!!"; // Imprimi 'numero 3' na tela
		$condicao = false; // Agora a variavel recebe o atributo 'bool:false' 
	}		
	
	echo $numero . " "; // Imprimi os valores aleatorios
	echo "<br>";
	
}

*/?>

<?php 

$cont = 0; // 0 atribuido a variavel $cont 

while($cont < 10) // Enquanto valor da variavel for menor que 0, execute o script
{
	echo $cont; // Imiprimi na tela de 1 a 9
	$cont++; // Contador de controle
	
	
}


?>