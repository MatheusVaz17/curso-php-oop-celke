<?php
    /*
        Métodos e atributos publicos podem ser acessados a partir de instancia do objeto, classes que derivam da classe que contenha os métodos e atributos e pela própria classe
    */
    class Funcionario{
        public string $nome;
        public float $salario;

        public function verSalario(): string{
            return "O functionário {$this->nome} tem o salário R$ {$this->converterSalario()}";
        }

        public function converterSalario(): string{
            return number_format($this->salario, '2', ',', '.');
        }
    }

?>