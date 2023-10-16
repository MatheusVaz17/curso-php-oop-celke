<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Celke - Metodos e Atributos</title>
</head>

<body>
    <?php
        //Inclui o arquivo
        require './Usuarios.php';

        //Instancia a classe
        //Cria o objeto $listar_usuarios
        $listar_usuarios = new Usuarios();
        //Instancia o metodo listar
        $result_usuarios = $listar_usuarios->listar();
        
        foreach($result_usuarios as $row_usuario){
            extract($row_usuario);

            echo "ID do usuário $id <br>";
            echo "Nome do usuário $nome <br>";
            echo "Email do usuário $email <br>";

            echo "<hr>";
        }
    ?>
</body>

</html>