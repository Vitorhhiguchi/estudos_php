<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foreach</title>
</head>
<body>
    <?php
        /*
         * foreach($array as $algumaCoisa){
         *      faça alguma coisa
         * }
         *
         *  foreach($array as $key => $value){
         *      faça alguma coisa
         * }
         */
    ?>

    <div>
        <h3>Foreach simples</h3>
        <?php
            $users = [
                ['nome' => 'John Doe', 'email' => 'john.doe@email.com'],
                ['nome' => 'Maria Doe', 'email' => 'maria.doe@email.com'],
            ];

            foreach($users as $user){
                echo $user['nome'] . ' - ' . $user['email'] . '<br>' ;
            }
        ?>
    </div>

    <div style="border-top: 50px">
        <h3>Foreach com esteroides</h3>
        <?php
            $users = [
                'Usuário A' => ['nome' => 'John Doe', 'email' => 'john.doe@email.com'],
                'Usuário B' => ['nome' => 'Maria Doe', 'email' => 'maria.doe@email.com'],
            ];

            foreach($users as $index => $user){
                echo $index . ': ' . $user['nome'] . ' - ' . $user['email'] . '<br>' ;
            }
        ?>
    </div>
</body>
</html>