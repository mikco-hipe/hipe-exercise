<?php 

    // setting authentications
    $validUsername = "admin";
    $validPassword = "1234";
    
    if(isset($_POST['login'])){
        $enteredUsername = $_POST['username'];
        $enteredPassword = $_POST['password'];

        // performs validations, compares to the hardcoded inputs
        if($enteredUsername==$validUsername && $enteredPassword==$validPassword){
            echo "Login Verified";
            exit();
        }
        else{
            echo "Oops! Access Denied";
            exit();
        }
    }

?>