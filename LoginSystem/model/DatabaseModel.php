<?php
class DatabaseModel
{
    // const DB_HOST = "mysql-server";
    // const DB_NAME = "user_authentication";
    // const DB_USERNAME = "root";
    // const DB_PASSWORD = "secret";
    private $host = "mysql-server";
    private $db_name = "user_authentication";
    private $username = "root";
    private $password = "secret";
    public $conn;

    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
