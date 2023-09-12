<?php
    include "../env.php";
    
    class DatabaseModel
    {
        
        public $conn;

        public function getConnection()
        {
            $this->conn = null;

            new EnvGlobal();

            try {

                $dbHost = getenv('DB_HOST');
                $dbUser = getenv('DB_NAME');
                $dbUsername = getenv('DB_USERNAME');
                $dbPassword = getenv('DB_PASSWORD');

                $this->conn = new PDO(
                    "mysql:host=" . $dbHost. ";dbname=" . $dbUser,
                    $dbUsername,
                    $dbPassword
                );
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $exception) {
                echo "Connection error: " . $exception->getMessage();
            }

            return $this->conn;
        }
    }
?>
