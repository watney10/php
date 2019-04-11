<?php 

$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 554.90;
$bloqueado = false;

$frutas = array("laranja", "Manga", "Melao");

//echo $frutas[0];

$nascimento = new DateTime();

//var_dump($nascimento);

$arquivo = fopen("exemplo03.php", "r");

var_dump($arquivo);


?>