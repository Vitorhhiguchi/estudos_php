<?php
/*
 * for
 * foreach
 * while
 * do/while
 */

/*
 * for($i = 0; $i <= $alguma coisa; $i++){
 *      faça algo
 *      echo $i;
 * }
 */



?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Estruturas de repetição</title>
    </head>
    <body>
        <div>
            <h2>FOR</h2>

            <h3>For Positivo</h3>
            <?php
            for($i = 0; $i <= 10; $i++){
                echo "$i <br>";
            }
            ?>

            <hr>

            <h3>For Negativo</h3>
            <?php
                for($i = 1000; $i >= 990; $i--){
                        echo "$i <br>";
                    }
            ?>

            <hr>

            <h3>For: Arrays e Indices</h3>
            <?php
                $frutas = ['maçã', 'banana', 'melancia'];

                for($i = 0; $i < count($frutas); $i++){
                    echo $frutas[$i] . "<br>";
                }
            ?>
        </div>
    </body>
</html>
