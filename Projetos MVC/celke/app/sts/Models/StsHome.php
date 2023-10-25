<?php

namespace Sts\Models;

if(!defined('C7E3L8K9E5')){
    header("Location: /");
}

class StsHome{

    private array $data;
    private object $connection;

    public function index(){

        $connection = new \Sts\Models\helper\StsConn();
        $this->connection = $connection->connectDb();

        $query_home_top = "SELECT id, title_top, description_top, link_btn_top, txt_btn_top, image FROM sts_homes_tops LIMIT 1";
        $result_home_top = $this->connection->prepare($query_home_top);
        $result_home_top->execute();
        $this->data = $result_home_top->fetch();

        return $this->data;
    }

}

?>