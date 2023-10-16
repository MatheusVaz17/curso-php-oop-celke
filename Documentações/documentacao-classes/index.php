<html>
    <head>
        <meta charset="UTF-8">
        <title>Métodos e Atributos Protegidos</title>
    </head>

    <body>
        <?php
            require './Funcionario.php';
            require './Bonus.php';

            $funcionario = new Funcionario();
            $funcionario->nome = 'Celke';
            $funcionario->salario = 7961.52;
            echo $funcionario->verSalario();

            $bonus = new Bonus();
            echo $bonus->verBonus();
        ?>
    </body>
</html>