<?php

namespace Sts\Controllers;

if(!defined('C7E3L8K9E5')){
    header("Location: /");
}

class SobreEmpresa{

    private array|string|null $data;

    public function index(){
        $this->data = [];
        $loadView = new \Core\ConfigView("sts/Views/sobreEmpresa/sobreEmpresa", $this->data);
        $loadView->loadView();
    }

}


?>