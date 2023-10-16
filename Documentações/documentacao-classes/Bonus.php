<?php

    /**
     * A classe Bonus é classe filha da classe Funcionario
     * 
     * @author Celke
     */

    class Bonus extends Funcionario{

        /**
         * Método para ver o bônus
         *
         * @return string Retorna o bônus calculado
         */
        public function verBonus(): string{
            return "O funcionário tem o bônus de R$ " . $this->bonusCalculado() . "<br>";
        }

    }

?>