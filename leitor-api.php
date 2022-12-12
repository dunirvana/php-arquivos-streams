<?php

echo 'Realiza a leitura do resultado de um consumo a uma API' . PHP_EOL;
echo file_get_contents('https://swapi.co/api/films/4/');
