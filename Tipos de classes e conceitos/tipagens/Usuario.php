<?php

class Usuario{

    public string $nome;
    public string $email;
    public int $idade;

    public function cadastrar($nome, $email, $idade): string{
        $this->nome = $nome;
        $this->email = $email;
        $this->idade = $idade;

        return "O usuário <strong>{$this->nome}</strong> possui a idade <strong>{$this->idade}</strong> com e-mail: <strong>{$this->email}</strong> cadastrado com sucesso!";
    }

}

?>