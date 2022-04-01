<?php /*

function teste($callbeck) // Função anonima, recebe uma variavel por parametro  
{
	$callbeck(); // Chamando a propria função
}

teste(function(){ // Funcao anonima, passando o ela mesmo com todo script
	
	echo "Terminou!"; // Imprimi na tela
	
});

*/ ?>

<?php 

function calc($soma)
{
	$soma();
}

calc(function()
{
	$soma = 5.5 + 6;
	echo $soma;
});


?>