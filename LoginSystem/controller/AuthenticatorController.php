<?php
    
    require_once('../model/DatabaseModel.php');

    class AuthenticatorController
    {
        private $db;

        public function __construct($username, $password)
        {
            $this->db = (new DatabaseModel())->getConnection(); 
            $this->validUsername = $username;
            $this->validPassword = $password;
        }

        public function authenticate($enteredUsername, $enteredPassword)
        {
            $query = "SELECT * FROM users WHERE username = :username AND password = :password";
            $stmt = $this->db->prepare($query);
            //var_dump($stmt);

            $stmt->bindParam(":username", $enteredUsername);
            $stmt->bindParam(":password", $enteredPassword);

            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return "Login Verified";
            } else {
                return "Access Denied!";
            }
        }
    }

    if (isset($_POST['login'])) {
        $enteredUsername = $_POST['username'];
        $enteredPassword = $_POST['password'];

        $authenticator = new AuthenticatorController("", "");

        $result = $authenticator->authenticate($enteredUsername, $enteredPassword);
        echo $result;
    }
?>
