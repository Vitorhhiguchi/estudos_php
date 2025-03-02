<?php

declare(strict_types=1);

$titulo = require 'config/titulo.php';

function ola(string $nome): string
{
    global $titulo;

    return "Olá $titulo $nome";
}

echo ola('Vitor');

?>

