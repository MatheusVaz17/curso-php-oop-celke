<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Celke - Metodos e Atributos</title>
</head>

<body>
    <?php

        require './Usuario.php';

        $usuario = new Usuario();
        $msg = $usuario->cadastrar('Matheus Vaz Flores', 'matheus.vaz@grupow.com.br');
        echo $msg;

    ?>
</body>

</html>