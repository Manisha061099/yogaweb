<?php
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"])) {
        //Display Name and Age in Get Method
        echo "Welcome " . $_POST['name'];
        echo "You are " . $_POST['email'];
        echo "You are " . $_POST['subject'] ;
        echo "You are " . $_POST['message'] ;

        exit();
    }
    ?>
    
    