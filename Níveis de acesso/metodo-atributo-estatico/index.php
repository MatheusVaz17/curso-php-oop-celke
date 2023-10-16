<html>
    <head>
        <meta charset="UTF-8">
        <title>Métodos e Atributos Estáticos</title>
    </head>

    <body>
        <?php
            require './Disciplina.php';

            //Acessa o atributo sem criar o objeto
            echo "Média: ". Disciplina::$media ."<br>";

            $disciplina = new Disciplina("Cesar", 3, 5);
            echo $disciplina->situacao();

            //Acessar o método sem criar o objeto
            echo Disciplina::situacaoAluno(5);
        ?>
    </body>
</html>