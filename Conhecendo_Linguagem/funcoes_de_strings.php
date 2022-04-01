<?php 

$nome = "watney da silva";


$nome = strtoupper($nome);
echo $nome; 

echo "<br>";

$nome = strtolower($nome);

echo $nome; 

echo "<br>";

echo ucwords($nome);

echo "<br>";

echo ucfirst($nome);

echo "<br>";
echo "<br>";

/*******************************************************************/

echo str_replace("a","@",$nome);
echo "<br>";	
echo str_replace("v","V",$nome);



?>