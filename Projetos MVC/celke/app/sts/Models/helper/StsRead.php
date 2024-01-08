<?php

namespace Sts\Models\helper;

if(!defined('C7E3L8K9E5')){
    header("Location: /");
}

use PDO;
use PDOException;

class StsRead extends StsConn{

    private string $select;
    private array $values = [];
    private array|null $result = [];
    private object $query;
    private object $conn;

    function getResult(): array|null{
        return $this->result;
    }

    public function exeRead(string $table, string|null $terms = null, string|null $parseString = null){
       
        if(!empty($parseString)){
            parse_str($parseString, $this->values);
        }

        $this->select = "SELECT * FROM {$table} {$terms}";
    
        $this->exeInstruction();
    }

    public function fullRead(string $query, string|null $parseString = null){
        $this->select = $query;
       
        if(!empty($parseString)){
            parse_str($parseString, $this->values);
        }

        $this->exeInstruction();
    }

    private function exeInstruction(){
        $this->connection();
        try{
            $this->exeParameter();
            $this->query->execute();
            $this->result = $this->query->fetchAll();
        }catch(PDOException $err){
            $this->result = null;
        }
    }

    private function connection(){
        $this->conn = $this->connectDb();
        $this->query = $this->conn->prepare($this->select);
        $this->query->setFetchMode(PDO::FETCH_ASSOC);
    }

    private function exeParameter(){
        if($this->values){
            foreach($this->values as $link => $value){
                if(($link == 'limit') || ($link == 'offset') || ($link == 'id')){
                    $value = (int) $value;
                }

                $this->query->bindValue(":{$link}", $value, (is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR));
            }
        }
    }
}

?>