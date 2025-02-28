<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu site do Pinguim</title>
</head>
<body>
    <div>
        <h1>IF</h1>
        <?php
            date_default_timezone_set('America/Sao_Paulo');
            $hora = date('H:i');

            echo $hora . '<br>';

            if($hora >= '06:00' && $hora <= '12:00'){
                echo 'Bom dia! Que bom que você esta visitando meu site agora.';
            } else if ($hora > '12:00' && $hora <= '18:00'){
                echo 'Boa tarde! Que bom que você esta visitando meu site agora.';
            } else {
                echo 'Boa noite!. Que bom que você esta visitando meu site agora.';
            }
        ?> Vitor
    </div>
    <div style="margin-top: 50px">
        <h1>SWITCH</h1>
            <?php
                $numero = rand(0,6);


                switch ($numero){
                    case 0:
                        echo 'Numero 0';
                        break;
                    case 1:
                        echo 'Numero 1';
                        break;
                    case 2:
                        echo 'Numero 2';
                        break;
                    case 3:
                        echo 'Numero 3';
                        break;
                    case 4:
                        echo 'Numero 4';
                        break;
                    default:
                        echo 'Numero entre 5 e 6';
                        break;
                }
            ?>
    </div>

    <div style="margin-top: 50px">
        <h1>Match</h1>
        <h3>Substituindo o switch</h3>
        <p>
            <?php
            /**
             * match($numero){
             *  1=>''
             *   default=> ''
             * }
            */

                $numero = rand(0,3);

                $saudacao = match($numero){
                    0, 1 => "Número $numero",
                    3    => 'Número 3',
                    default => "Número maior que 1 e menor que 3: $numero"
                };

                echo $saudacao;
            ?>
        </p>
        <hr>
        <h3>Substituindo o if</h3>
        <p>
            <?php
                $hora = date('H:i');

                $saudacao = match(true){
                    $hora >= '06:00' && $hora <= '12:00' => 'Bom dia',
                    $hora > '12:00' && $hora <= '18:00' => 'Boa tarde',
                    default                             => 'Boa noite'
                };

                echo $saudacao;
                // O match tem que ser pensado em como é a sua melhor maneira de ser utilizado
            ?>
        </p>
    </div>
</body>
</html>