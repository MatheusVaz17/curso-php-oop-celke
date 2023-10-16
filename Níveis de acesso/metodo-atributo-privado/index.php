<html>
    <head>
        <meta charset="UTF-8">
        <title>Métodos e Atributos Privados</title>
    </head>

    <body>
        <?php
            require './Funcionario.php';

            $funcionario = new Funcionario();
            $funcionario->nome = 'Celke';
            $funcionario->salario = 7961.52;
            echo $funcionario->verSalario();
        ?>
    </body>
</html>