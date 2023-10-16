<?php
    session_start();
    ob_start();
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

    <h1>Cadastrar Usuário</h1>

    <?php
        //Inclui o arquivo
        require './Conn.php';
        require './User.php';

        $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        
        if(!empty($formData['sendAddUser'])){
            $create = new User();
            $create->formData = $formData;
            $value = $create->create();

            if($value){
                $_SESSION['msg'] = "<p style='color: green'>Usuário cadastrado com sucesso!<p>";
                header('Location: index.php');
            }else{
                $_SESSION['msg'] = "<p style='color: red'>Usuário não cadastrado com sucesso!<p>";
                header('Location: index.php');
            }
        }

    ?>

    <form name="createUser" method="POST" action="">
        <label>Nome: </label>
        <input type="text" name="name" placeholder="Nome Completo" required /> <br><br>

        <label>Email: </label>
        <input type="email" name="email" placeholder="Melhor email" required /> <br><br>

        <input type="submit" value="Cadastrar" name="sendAddUser" />
    </form>

</body>

</html>