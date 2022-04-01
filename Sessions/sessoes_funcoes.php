<?php 

	echo session_save_path(); // Informa onde e salvo os os arquivos de sessao dentro da pasta do computador
	
	echo "<br>"; // Pula linha
	
	echo session_status(); // Exibe o status da sessao
	
	echo "<br>"; // Pula linha
	
	switch(session_status()) // A variavel testada para os casos abaixo
	{
		case 1: // Caso for 1
		echo "SESSAO ATIVADA."; // Imprimi na tela 
		break;

		case 2: 
		echo "SESSAO PENDENTE.";
		break;		
		
		case 3: 
		echo "SESSAO DESATIVADA.";
		break;
		
	}

?>