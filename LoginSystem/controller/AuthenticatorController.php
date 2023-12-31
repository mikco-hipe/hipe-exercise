<?php

    include("../model/DatabaseModel.php");

    class AuthenticatorController
    {
        private $db;
        private $validUsername;
        private $validPassword;

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