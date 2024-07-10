<?php

class DatabaseConfig {
    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $connection;

    public function __construct($host, $user, $pass, $dbname) {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
    }

    public function connect() {
        $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        if ($this->connection->connect_error) {
            die("Erro ao conectar ao banco de dados: " . $this->connection->connect_error);
        }

        return $this->connection;
    }
}

?>
