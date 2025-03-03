<!doctype html>
<html lang="en">
    <?php $title = "Classes - Básico"?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?= $title ?></title>
    </head>
    <body>
        <h1><?= $title ?></h1>

        <?php
            class Pessoa
            {
                public ?string $nacionalidade = null;
                public function __construct(
                    protected string $nome,
                    protected int $idade,
                    protected string $corDoCabelo
                )
                {
                    $this->setCorDoCabelo($corDoCabelo);
                }

                public function andar(): string
                {
                    return $this->nome . ' está andando...';
                }

                public function falar(): string
                {
                    return $this->nome . ' está falando...';
                }

                public function getNome(): string
                {
                    return $this->nome;
                }

                public function getIdade(): int
                {
                    return $this->idade;
                }

                public function getCorDoCabelo(): string
                {
                    return $this->corDoCabelo;
                }

                public function setNome(string $nome): self
                {
                    $this->nome = $nome;
                    return $this;
                }

                public function setIdade(int $idade): self
                {
                    $this->idade = $idade;
                    return $this;
                }

                public function setCorDoCabelo(string $corDoCabelo): self
                {
                    if(!in_array($corDoCabelo, ['loiro', 'preto', 'castanho', 'ruivo'])) {
                        throw new \InvalidArgumentException('Cor de cabelo inválida');
                    }

                    $this->corDoCabelo = $corDoCabelo;
                    return $this;
                }
            }

            $pessoa = new Pessoa(
                    'Vitor',
                    19,
                    'preto'
            );

            var_dump($pessoa);

            echo "<br><br>";

            $pessoa->nacionalidade = 'brasileiro';

            $pessoa->setnome('Vitor Higuchi');
            $pessoa->setidade(20);
            $pessoa->setCorDoCabelo('loiro');

            var_dump($pessoa);

            echo "<br><br>";

            echo $pessoa->andar() . '<br>';
            echo $pessoa->falar() . '<br>';
            echo $pessoa->getNome() . '<br>';
            echo $pessoa->getIdade() . '<br>';
            echo $pessoa->getCorDoCabelo() . '<br>';
        ?>
    </body>
</html>