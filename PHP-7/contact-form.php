<?php 
    if(isset($_POST['submit'])){
        $enteredName = $_POST['name'];
        $enteredEmail = $_POST['email'];
        $enteredMessage = $_POST['message'];

        echo $enteredName, '<br>';
        echo $enteredEmail, '<br>';
        echo $enteredMessage, '<br>';
    }
?>