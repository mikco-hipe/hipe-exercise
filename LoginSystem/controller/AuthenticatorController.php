<?php

    class AuthenticatorController
    {
        private $validUsername;
        private $validPassword;

        public function __construct($username, $password) 
        {
            $this->validUsername = $username;
            $this->validPassword = $password;
        }

        public function authenticate($enteredUsername, $enteredPassword) 
        {
            if (isset($_POST['login'])) {
                $enteredUsername = $_POST['username'];
                $enteredPassword = $_POST['password'];
        
                $authenticator = new AuthenticatorController("admin", "1234");
        
                $result = $authenticator->authenticate($enteredUsername, $enteredPassword);
                echo $result;

                return "Login Verified";
            }
            else {
                return "Access Denied";
            }
        }
    }

    

