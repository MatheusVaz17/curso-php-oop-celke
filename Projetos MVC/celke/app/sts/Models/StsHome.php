<?php

namespace Sts\Models;

if(!defined('C7E3L8K9E5')){
    header("Location: /");
}

class StsHome{

    private array $data;
    private object $connection;

    public function index(){

        $viewHome = new \Sts\Models\helper\StsRead();
        //$viewHome->exeRead('sts_homes_tops', "WHERE id=:id LIMIT :limit", "id=1&limit=1");
        $viewHome->fullRead("SELECT id, title_top, description_top, link_btn_top, txt_btn_top, image FROM sts_homes_tops WHERE id=:id LIMIT :limit", "id=1&limit=1");
        $this->data = $viewHome->getResult();

        return $this->data;
    }

}

?>