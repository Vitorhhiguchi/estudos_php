<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>While</title>
</head>
<body>
    <?php
        /*
         * while($algumaCoisa){
         * }
         */
    ?>

    <div>
        <h3>While</h3>
        <?php
            $numero = 0;

            while($numero < 10){
                echo $numero . "<br>";

                $numero++;
            }
        ?>
    </div>
</body>
</html>