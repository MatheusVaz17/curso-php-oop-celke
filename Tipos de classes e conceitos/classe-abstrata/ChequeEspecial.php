<?php

class ChequeEspecial extends Cheque{

    public function calcularJuro(): string {
        $valorComJuro = $this->valor + (0.40 * $this->valor);
        $valorConvReal = parent::converterReal($valorComJuro);
        return "Valor do cheque {$this->tipo} sem juro R$ {$this->converterReal($this->valor)} e com juro R$ {$valorConvReal} <br>";
    }

}

?>