<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Celke - Herança com Listagem de Banco de Dados</title>
</head>

<body>
    <?php
        //Inclui o arquivo
        require './Conn.php';
        require './ListUsers.php';

        $listUsers = new ListUsers();
        $result_users = $listUsers->list();

        foreach($result_users as $row_user){
            extract($row_user);

            echo "ID: " . $id . "<br>";
            echo "Nome: " . $nome . "<br>";
            echo "Email: " . $email . "<br>";
            echo "<hr>";
        }
    ?>
</body>

</html>