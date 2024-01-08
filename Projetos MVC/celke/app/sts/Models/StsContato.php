<?php

namespace Sts\Models;

if(!defined('C7E3L8K9E5')){
    header("Location: /");
}

class StsContato{
    
    private array $data;
    public function create(array $data): bool{
        $this->data = $data;
        $this->data['created'] = date('Y-m-d H:i:s');

        $createContactMsg = new \Sts\Models\helper\StsCreate();
        $createContactMsg->exeCreate("sts_contacts_msgs", $this->data);

        if($createContactMsg->getResult()){
            $_SESSION['msg'] = "<p style='color: green;'>Mensagem enviada com sucesso!</p>";
            return true;
        }else{
            $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Mensagem não enviada com sucesso!</p>";
            return false;
        }

    }
}

?>