<?php
declare(strict_types=1);

/**
 * @author Nils Minten <nils@momoyoga.com>
 */
class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database;
    public $conn;

    function __construct(string $database)
    {
        $this->database = $database;
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
    }

    function query (string $sql) {
        return $this->conn->query($sql);
    }

    function verify () {
        return (!$this->conn->connect_error);
    }

    function __destruct()
    {
        $this->conn->close();
    }
}
