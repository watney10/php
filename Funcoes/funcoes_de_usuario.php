<?php /* 

function hellow() // Funcao normal criada, nenhuma passagem de parametro
{
	echo "Hellow Wold"; // Imprimi na tela 
	
}

//hellow(); // Chamada da funcao 

echo "<br>"; // Pula linha

$contString = strlen(hellow()); // EXIBE A QUANTIDADE DE CARACTERES NA VARIAVEL

//echo $contString;

echo "<br>";

function salario()
{
	return 1300;	
}

echo "Seu larario atual é: ". salario()*3; // CALCULA O SALARIO DA FUNCAO VEZES 3;


*/?>

<?php 

function cont($palavra)  
{
	return strlen($palavra);	
}

echo cont("AULA");


?>
