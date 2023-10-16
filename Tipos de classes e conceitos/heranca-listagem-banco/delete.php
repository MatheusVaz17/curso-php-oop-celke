<?php

session_start();
ob_start();

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if(!empty($id)){
    require './Conn.php';
    require './User.php';

    $deleteUser = new User();

    $deleteUser->id = $id;

    if($deleteUser->delete()){
        $_SESSION['msg'] = "<p style='color: green'>Usuário deletado com sucesso!<p>";
        header('Location: index.php');
    }else{
        $_SESSION['msg'] = "<p style='color: #f00'>Erro: usuário não deletado!<p>";
        header('Location: index.php');
    }

    
}else{
    $_SESSION['msg'] = "<p style='color: #f00'>Erro: usuário não encontrado!<p>";
    header('Location: index.php');
}

?>