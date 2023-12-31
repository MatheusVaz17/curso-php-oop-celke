<?php

namespace Sts\Models\helper;

use PDO;
use PDOException;

if(!defined('C7E3L8K9E5')){
    header("Location: /");
}

abstract class StsConn{

    private string $host = HOST;
    private string $user = USER;
    private string $pass = PASS;
    private string $dbname = DBNAME;
    private int|string $port = PORT;
    private object $connect;

    public function connectDb(): object{
        try{
            $this->connect = new PDO("mysql:host={$this->host};port={$this->port};dbname=". $this->dbname, $this->user, $this->pass);

            return $this->connect;
        }catch(PDOException $e){
            die("Erro: Por favor tente novamente. Caso o problema persista, entre em contato com o administrador ". EMAILADM);
        }
    }
}

?>