<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Arrays</title>
    </head>
    <body>
        <h1>Arrays</h1>

        <div>
            <h2>Declarando arrays</h2>

            <div>
                <?php
                    $frutas = ['laranja', 'abacaxi', 'melancia'];
                    print_r($frutas);
                ?>
            </div>

            <div style="margin-top: 20px">
                <?php
                    $maisFrutas = array('banana', 'pera', 'abacate');

                    print_r($maisFrutas);
                ?>
            </div>

            <div style="margin-top: 20px">
                <?php
                    $array = [
                        1 => 'Este é o número 1',
                        'nome' => 'Vitor',
                        false => 'Nada por aqui',
                        2.5 => 'Este é um número float',

                    ];

                    print_r($array);
                ?>
            </div>

            <div style="margin-top: 20px">
                <?php
                    $users = [
                        [
                            'name' => 'Vitor Higuchi',
                            'email' => 'vitorhiguchi@outlook.com',
                        ],
                        [
                            'name' => 'Maria Doe',
                            'email' => 'maria.doe@xpto.com',
                        ]

                    ];

                    print_r($users);
                ?>
            </div>

            <div style="margin-top: 50px">
                <h2>Acessando dados no Array</h2>
                <?php
                    $frutas = ['maçã', 'banana', 'melancia'];
                ?>

                <ul>
                    <li><?= $frutas[0] ?></li>
                    <li><?= $frutas[1] ?></li>
                    <li><?= $frutas[2] ?></li>
                </ul>
            </div>
            <div style="margin-top: 50px">
                <h2>Acessando Dados no Array com Foreach</h2>
                <?php
                    $users = [
                        [
                            'name' => 'Vitor Higuchi',
                            'email' => 'vitorhiguchi@outlook.com',
                        ],
                        [
                            'name' => 'Maria Doe',
                            'email' => 'maria.doe@xpto.com',
                        ]

                    ];
                ?>
                <ul>
                    <?php  foreach($users as $user) :?>
                        <li><?= $user['name'] ?> (<?= $user['email'] ?>)</li>
                    <?php endforeach; ?>

                    <?php  foreach($users as $user) :?>
                        <li>
                        <?php foreach($user as $data):?>
                            <?= $data ?> -
                        <?php endforeach; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div style="margin-top: 50px">
                <h2>Acessando Dados no Array com String</h2>
                <?php
                    $frutas = ['pêra', 'uva', 'abacate'];
                ?>

                <ul>
                    <?php  foreach($frutas as $key => $fruta) :?>
                        <li><?= $key . ':' . $fruta ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div style="margin-top: 50px">
                <h2>Adicionando dados no array</h2>

                <div>
                    <?php
                    $frutas = ['damasco', 'pitomba', 'limão'];

                    print_r($frutas);

                    $frutas[] = 'laranja';

                    print_r($frutas);
                    ?>
                </div>

                <div style="margin-top: 20px">
                    <?php
                    $frutas = ['damasco', 'pitomba', 'limão'];

                    print_r($frutas);

                    array_push($frutas, 'laranja', 'abacaxi', 'pêra');

                    print_r($frutas);
                    ?>
                </div>

                <div style="margin-top: 20px">
                    <?php
                    $user = ['user' => 'Vitor'];

                    print_r($user);

                    $user['email'] = 'john.doe@xpto.com';
                    print_r($user);
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>