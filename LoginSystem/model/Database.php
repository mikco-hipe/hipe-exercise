<?php

class Database {
    private $dbHost;
    private $dbUsername;
    private $dbPassword;
    private $dbName;
    private $dbConnection;

    public function __construct($dbHost, $dbUsername, $dbPassword, $dbName){
        $this->dbHost = $dbHost;
        $this->dbUsername = $dbUsername;
        $this->dbPassword = $dbPassword;
        $this->dbName = $dbName;
    }

    public function connect(){
        $this->dbConnection = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);

        if ($this->dbConnection->connect_error){
            die("Connection failed: " . $this->dbConnection->connect_error);
        }
    }

    public function getConnection(){
        return $this->dbConnection;
    }

    public function close(){
        if ($this->dbConnection){
            $this->dbConnection->close();
        }
    }
}

$database = new Database("localhost", "admin", "1234", "user_authentication");
$database->connect();
$dbConnection = $database->getConnection();

$database->close();
?>
