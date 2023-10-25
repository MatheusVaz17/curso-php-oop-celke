<?php

namespace Core;

if(!defined('C7E3L8K9E5')){
    header("Location: /");
}

abstract class Config{
    
    protected function config(): void{
        //Url do projeto
        define('URL', 'http://cursophp.localhost/celke/');
        define('URLADM', 'http://cursophp.localhost/celke/adm/');

        define('CONTROLLER', 'Home');
        define('CONTROLLERERRO', 'Erro');

        //Credenciais do banco de dados
        define('HOST', 'localhost');
        define('USER', 'root');
        define('PASS', '');
        define('DBNAME', 'curso_celke');
        define('PORT', 3306);

        define('EMAILADM', 'cesar@celke.com.br');
    }
}

?>