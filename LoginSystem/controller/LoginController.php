<?php

    require_once('AuthenticatorController.php');

    // header("loginAttempt.php");
    // exit;
    //leave it here
    //$authenticator = new AuthenticatorController("", "");
    // remove this

    if (isset($_POST['login'])) {
        $enteredUsername = $_POST['username'];
        $enteredPassword = $_POST['password'];

        $authenticator = new AuthenticatorController("", "");

        $result = $authenticator->authenticate($enteredUsername, $enteredPassword);
        echo $result;
    }
?>
