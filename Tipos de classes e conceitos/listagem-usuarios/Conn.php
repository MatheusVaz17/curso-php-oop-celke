<?php

include_once "../vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

class Conn{

    public $host;
    public $user;
    public $pass;
    public $dbname;
    public $port;
    public $connect;

    public function __construct(){
        $this->host = $_ENV["DB_HOST"];
        $this->user = $_ENV["DB_USER"];
        $this->pass = $_ENV["DB_PASS"];
        $this->dbname = $_ENV["DB_NAME"];
        $this->port = $_ENV["DB_PORT"];
    }

    public function conectar(){
        
        try{
            $this->connect = new PDO("mysql:host=".$this->host.";port=".$this->port.";dbname=".$this->dbname, $this->user, $this->pass);
           
            return $this->connect;
        }catch(Exception $err){
            echo "Erro: Conexão não realizada com sucesso!";
            return false;
        }
    }

}

?>