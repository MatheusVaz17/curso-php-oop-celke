<?php

class Usuario{

    public $nome;
    public $email;

    public function cadastrar(string $nome, string $email){
        $this->nome = $nome;
        $this->email = $email;

        return "O usuário ".$this->nome." com e-mail: ".$this->email." cadastrado com sucesso!";
    }

}

?>