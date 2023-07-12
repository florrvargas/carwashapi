<?php

// Se importará para la conexión a Base de datos MySQL
// use mysqli;

class Database
{
    // Declaración de las credenciales necesarias para la conexión a la base de datos
    protected $db_host;
    protected $db_user;
    protected $db_pass;
    protected $db_name;

    protected $connection;

    public function __construct()
    {
        $this->db_host = getenv('DB_HOST');
        $this->db_user = getenv('DB_USER');
        $this->db_pass = getenv('DB_PASS');
        $this->db_name = getenv('DB_NAME');
        
        $this->connection();
    }

    public function connection()
    {
        $this->connection = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

        if ($this->connection->connect_error) {
            die('Connection error: ' . $this->connection->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }

}
?>
