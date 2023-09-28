<?php
    session_start();

    ob_start();

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

    <h1>Editar o Usuário</h1>
    <?php
        require './Conn.php';
        require './User.php';

        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if(!empty($formData['sendEditUser'])){
            $editUser = new User();
            $editUser->formData = $formData;
            if($editUser->edit()){
                $_SESSION['msg'] = "<p style='color: green'>Usuário editado com sucesso!<p>";
                header('Location: index.php');
            }else{
                $_SESSION['msg'] = "<p style='color: red'>Falha ao editar informações do usuário!<p>";
                header('Location: index.php');
            }
        }

        if(!empty($id)){
            $viewUser = new User();
            $viewUser->id = $id;
            $valueUser = $viewUser->view();
            extract($valueUser);

            ?>
                <form name="editUser" method="POST" action="">
                    <input type="hidden" name="id" value="<?= $id; ?>">

                    <label>Nome: </label>
                    <input type="text" name="name" placeholder="Nome Completo" value="<?= $name; ?>" required /> <br><br>

                    <label>Email: </label>
                    <input type="email" name="email" placeholder="Melhor email" value="<?= $email; ?>" required /> <br><br>

                    <input type="submit" value="Editar" name="sendEditUser" />
                </form>
            <?php
            
        }else{
            $_SESSION['msg'] = "<p style='color: red'>Erro: Usuário não encontrado!<p>";
            header('Location: index.php');
        }

    ?>
</body>

</html>