<?php // Informa mes do Ano


$mes = date("m"); // Mês do ano atribuido a variavel '$mes'

switch($mes) // O mês do ano atual será ultilizado para comprar os 'CASES' abaixo
{
	case 1: // Caso o mês do ano seja '1' será informado o nome do mês ferente ao numero, OBS: (Se aplica para todos os CASES)
	echo "JANEIRO";
	break;
	
	case 2:
	echo "FEVEREIRO";
	break;
	
	case 3:
	echo "MARÇO";
	break;
	
	case 4:
	echo "ABRIL";
	break;
	
	case 5:
	echo "MAIO";
	break;
	
	default: 
	echo "ESTE MÊS NÃO ESTÁ NA LISTA";
	break;
}
echo "<br>";
?> 

<?php // Status das sessoes

$sessao = session_status(); // $variavel global atribuida a variavel $sessao 

switch($sessao) 
{
	case 1: 
	echo "sessões desabilitadas.";
	break;
	
	case 2: 
	echo "sessões habilitadas mas nenhuma existi.";
	break;
	
	case 3: 
	echo "sessões habilitadas e uma existi.";
	break;
}

?>

