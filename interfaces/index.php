<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke - Interface</title>
    </head>
    <body>
        <?php
            require './ICurso.php';
            require './CursoPosGraduacao.php';
            require './CursoGraduacao.php';

            $cursoPosGraduacao = new CursoPosGraduacao();
            echo $cursoPosGraduacao->disciplina("Desenvolvimento Web");
            echo $cursoPosGraduacao->professor("Cesar");

            $cursoGraduacao = new CursoGraduacao();
            echo $cursoGraduacao->disciplina("Redes");
            echo $cursoGraduacao->professor("Cesar");
        ?>
    </body>
</html>