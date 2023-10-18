<?php

    namespace Core;

    class ConfigView{
    
        public function __construct(private string $nome, private array $dados){
            $this->renderizar();
        }

        public function renderizar(){
            if(file_exists($this->nome . '.php')){
                include $this->nome . '.php';
            }else{
                echo "Erro: Por favor tente novamente. Caso o problema persista, entre em contato com o administrador adm@empresa.com";
            }
        }
        
    }

?>