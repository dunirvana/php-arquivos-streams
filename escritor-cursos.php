<?php

//
echo 'Escrevendo o arquivo de uma vez, manipulando a abertura/fechamento' . PHP_EOL . PHP_EOL;
$arquivo = fopen('cursos-php.txt', 'a');
$curso = "Linha 01";
fwrite($arquivo, $curso);
fclose($arquivo);

//
echo 'Escrevendo o arquivo de uma vez, sem manipular a abertura/fechamento' . PHP_EOL . PHP_EOL;
$curso = "\nLinha 02";
file_put_contents('cursos-php.txt', $curso, FILE_APPEND);
