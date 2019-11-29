<?php
declare(strict_types=1);

/**
 * @author Nils Minten <nils@momoyoga.com>
 */
class Database {
    private $servername = "localhost";
    private $username = "api";
    private $password = "ESgyAI5vgbMVzf7";
    private $database;
    public $conn;

    function __construct($database)
    {
        $this->database = $database;
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
    }

    function getDatabase() {
        return $this->database;
    }

    function query ($sql) {
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
