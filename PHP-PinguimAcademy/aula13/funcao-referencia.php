<?php

declare(strict_types=1);

$titulo = 'parâmetros por referência';
$subtitulo = 'teste com valores e referências';

function converteTitulo(string &$titulo): void
{
    $titulo = mb_convert_case($titulo, MB_CASE_TITLE);
}

function converteTituloValor(string $titulo): string
{
    return $titulo = mb_convert_case($titulo, MB_CASE_TITLE);
}

converteTitulo($titulo);
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?= $titulo ?><</title>
    </head>
    <body>
        <h1><?= $titulo ?></h1>
        <h2><?= converteTituloValor($subtitulo) ?></h2>

        <div>
            <?= $subtitulo ?>
        </div>
    </body>
</html>
