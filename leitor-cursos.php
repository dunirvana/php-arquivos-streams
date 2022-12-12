<?php

//
echo '** Percorrendo o conteúdo do arquivo linha a linha **' . PHP_EOL . PHP_EOL;
$arquivo = fopen('lista-cursos.txt', 'r');

while (!feof($arquivo)) {
    $curso = fgets($arquivo);

    echo $curso . PHP_EOL;
}
fclose($arquivo);


//
echo 'Lendo o arquivo de uma vez, manipulando a abertura/fechamento, o retorno é uma string com todo o conteúdo' . PHP_EOL . PHP_EOL;
$arquivo = fopen('lista-cursos.txt', 'r');

$tamanhoDoArquivo = filesize('lista-cursos.txt');
$cursos = fread($arquivo, $tamanhoDoArquivo);

echo $cursos;

fclose($arquivo);

//
echo 'Lendo o arquivo de uma vez, sem manipular a abertura/fechamento. o retorno é um array onde em cada posição temos uma linha do arquivo' . PHP_EOL . PHP_EOL;
$cursos = file('lista-cursos.txt');

var_dump($cursos);
