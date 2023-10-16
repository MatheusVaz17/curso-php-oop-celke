<?php

abstract class Cheque{

    //PHP < 8.0
    // public float $valor;
    // public string $tipo;

    // public function __construct($valor, $tipo){
    //     $this->valor = $valor;
    //     $this->tipo = $tipo;
    // }

    //PHP >= 8.0
    public function __construct(public float $valor, public string $tipo){

    }

    //Método abstrato, todas classes que extendem a classe abstrata são obrigadas a implementarem o método
    abstract function calcularJuro();

    public function converterReal(float $valor): string {
        return number_format($valor, '2', ',', '.');
    }

}

?>