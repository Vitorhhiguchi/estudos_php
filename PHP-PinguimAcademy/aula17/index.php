<?php $title = 'Polimorfismo'?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?= $title ?>></title>
    </head>
    <body>
        <h1><?= $title ?></h1>

        <?php
            abstract class Animal
            {
                protected $isMoving = false;

                public function mover(): static
                {
                    $this->isMoving = true;

                    return $this;
                }

                public abstract function emitirSom(): string;
            }

            class Humano extends Animal
            {
                public function emitirSom(): string
                {
                    return 'bla bla bla';
                }
            }

            class Passaro extends Animal
            {
                protected bool $estaVoando;

                public function emitirSom(): string
                {
                    return 'piu piu';
                }

                public function voar()
                {
                    $this-> estaVoando = true;

                    parent::mover();
                }
            }
        ?>

        <div style="margin-top: 50px">
            <h2>Humano</h2>

            <?php
                $humano = new Humano();
                $humano->mover();

                echo $humano->emitirSom();

                echo '<br><br>';

                var_dump($humano);
            ?>
        </div>

        <div style="margin-top: 50px">
            <h2>Pássaro</h2>
            <?php
                $passaro = new Passaro();
                $passaro->voar();

                echo $passaro->emitirSom();

                echo '<br><br>';

                var_dump($passaro);
            ?>
        </div>

    </body>
</html>