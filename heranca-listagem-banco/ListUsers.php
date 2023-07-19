<?php

class ListUsers extends Conn{

    public object $conn;

    public function list(): array{

        $this->conn = $this->conectar();
        $query_users = "SELECT id, nome, email FROM usuarios ORDER BY id DESC LIMIT 40";
        $result_users = $this->conn->prepare($query_users);
        $result_users->execute();
        $retorno = $result_users->fetchAll();

        return $retorno;
    }

}

?>