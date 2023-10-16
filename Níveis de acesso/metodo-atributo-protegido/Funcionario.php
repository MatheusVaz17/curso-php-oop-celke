<?php
    /*
        Métodos e atributos protegidos somente podem ser acessados pela própria classe ou por classes que derivam a classe que contenha os métodos e atributos protegidos
    */
    class Funcionario{
        public string $nome;
        public float $salario;
        private string $salarioConvertido;
        protected float $bonus = 2500;

        public function verSalario(): string{
            return "O functionário {$this->nome} tem o salário R$ {$this->converterSalario($this->salario)} <br>";
        }

        private function converterSalario($valor): string{
            $this->salarioConvertido = number_format($valor, '2', ',', '.');
            return $this->salarioConvertido;
        }

        protected function bonusCalculado(){
            return $this->converterSalario($this->bonus);
        }

    }

?>