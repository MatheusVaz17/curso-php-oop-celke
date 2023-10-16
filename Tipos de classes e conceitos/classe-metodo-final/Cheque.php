<?php

//Classe final não pode ser herdada
final class Cheque{

    public function __construct(public float $valor, public string $tipo){

    }

    //Em classes finais não podem haver métodos abstratos
    //abstract function calcularJuro();

    //Métodos finais não podem ser reescritos
    final public function converterReal(float $valor): string {
        return number_format($valor, '2', ',', '.');
    }

}

?>