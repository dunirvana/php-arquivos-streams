<?php

// para abrir um zip sem senha
//echo file_get_contents('zip://arquivos.zip#lista-cursos.txt');

$contexto = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]
]);

echo file_get_contents(
    'zip://arquivos.zip#lista-cursos.txt',
    false,
    $contexto
);
