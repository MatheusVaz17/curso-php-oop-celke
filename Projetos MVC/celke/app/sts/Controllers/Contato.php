<?php

namespace Sts\Controllers;

if(!defined('C7E3L8K9E5')){
    header("Location: /");
}

class Contato{

    private array|string|null $data = null;
    private array|null $dataForm;

    public function index(): void{
        $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(!empty($this->dataForm['AddContMsg'])){
            unset($this->dataForm['AddContMsg']);
            $createContactMsg = new \Sts\Models\StsContato();
            if($createContactMsg->create($this->dataForm)){
                //echo "Cadastrado com sucesso";
            }else{
                //echo "Não cadastrado";
                $this->data['form'] = $this->dataForm;
            }
        }
        $loadView = new \Core\ConfigView("sts/Views/contato/contato", $this->data);
        $loadView->loadView();
    }

}


?>