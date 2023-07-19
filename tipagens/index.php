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
        $msg = $usuario->cadastrar('Matheus Vaz Flores', 'matheusvaz765@gmail.com', 21);
        echo $msg;

    ?>
</body>

</html>