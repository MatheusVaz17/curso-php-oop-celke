<?php

if(!defined('C7E3L8K9E5')){
    header("Location: /");
}

if(isset($this->data['form'])){
    $valueForm = $this->data['form'];
    extract($valueForm);
}

echo "<h1>Entre em contato</h1>";

if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>

<form method="post" action="">
    <label>Nome: </label>
    <input name="name" type="text" id="name" placeholder="Nome completo" value="<?= $name ?? ''; ?>"><br><br>

    <label>E-mail: </label>
    <input name="email" type="email" id="email" placeholder="Seu melhor e-mail" value="<?= $email ?? ''; ?>"><br><br>

    <label>Assunto: </label>
    <input name="subject" type="text" id="subject" placeholder="Assunto da mensagem" value="<?= $subject ?? ''; ?>"><br><br>

    <label>Mensagem: </label>
    <textarea name="content" rows="6" cols="50" placeholder="Conteúdo da mensagem"><?= $content ?? ''; ?></textarea><br><br>

    <input name="AddContMsg" type="submit" value="Enviar">
</form>