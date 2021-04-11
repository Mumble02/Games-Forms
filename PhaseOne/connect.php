<?php
try {
    //try to connect to database 
    //data source name 
    $dsn = 'mysql:host=172.31.22.43;dbname=Steph200462383';
    $username = 'Steph200462383'; 
    $password = 'pgfGRpjkEl';
    //create instance of PDO object
    $db = new PDO($dsn,$username, $password); 
    echo 'You have connected successfully!'; 
}

catch(PDOException $e) {
    //display error message if things go wrong! 
    $error_message = $e->getMessage();
    echo 'Oops something went wrong!' . $error_message . '!'; 
}

?>