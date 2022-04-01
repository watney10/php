<?php

session_start(); // Ativa as sessões do sistema

$_SESSION["nome"] = "Curso PHP"; // Define uma variavel de sessão com uma STRING de atribuída

//session_destroy(); ->> Desloga o usuário do sistema excluindo os dados de sessões

?>