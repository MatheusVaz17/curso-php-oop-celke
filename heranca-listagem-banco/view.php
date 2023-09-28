<?php
    session_start();

    //Receber o ID do usuário
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Celke - Herança com Banco de Dados</title>
</head>

<body>
    <a href="index.php">Listar</a>
    <a href="create.php">Cadastrar</a>

    <h1>Detalhes do Usuário</h1>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        if(!empty($id)){
            require './Conn.php';
            require './User.php';
            
            $viewUser = new User();
            $viewUser->id = $id;
            $valueUser = $viewUser->view();
            extract($valueUser);
            echo "Id do usuário: $id <br>";
            echo "Nome do usuário: $name <br>";
            echo "Email do usuário: $email <br>";
            echo "Cadastrado: ".date('d/m/Y H:i:s', strtotime($created))." <br>";
            if(!empty($modified)){
                echo "Editado: ".date('d/m/Y H:i:s', strtotime($modified));
            }
        }else{
            $_SESSION['msg'] = "<p style='color: red'>Erro: Usuário não encontrado!<p>";
            header('Location: index.php');
        }

    ?>
</body>

</html>