<?php
     // unset($_SERVER['PHP_AUTH_USER']);
    if(!isset($_SERVER['PHP_AUTH_USER'])){
        header('WWW-Authenticate: Basic realm="The Registration"');
        header('HTTP/1.0 401 Unauthorized');
        echo "Hey you forgot to log in";
    } 
    else {
        if($_SERVER['PHP_AUTH_USER'] !=="Mumble"){
            echo "Hey wanna log in with the correct username you imposter";
            exit();
        }

        if($_SERVER['PHP_AUTH_PW'] !== "mumble"){
            echo "Log in with the correct password or else!";
            exit;
        }
        echo "You have gained access!!!";
    }

?>