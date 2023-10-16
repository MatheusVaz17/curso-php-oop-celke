<?php
    /*
        Métodos e atributos privados podem ser acessados apenas pela própria classe
    */
    class Funcionario{
        public string $nome;
        public float $salario;
        private string $salarioConvertido;

        public function verSalario(): string{
            return "O functionário {$this->nome} tem o salário R$ {$this->converterSalario()}";
        }

        private function converterSalario(): string{
            $this->salarioConvertido = number_format($this->salario, '2', ',', '.');
            return $this->salarioConvertido;
        }
    }

?>