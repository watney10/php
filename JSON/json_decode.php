<?php 

$json = '[{"Cliente":"Watney Silva","ID":554787},{"Cliente":"Simone","ID":55855}]'; // Recebe um script 'encode' e guarda na variavel

$data = json_decode($json, true); // Guarda na variavel o script e decodifica ele, passando true

print_r($data); // Imprimi os dados do array decodificado

?>