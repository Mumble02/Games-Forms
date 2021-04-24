<?php
ob_start(); 

$games_id = filter_input(INPUT_GET,'id');
try {
    //connect to db 
    require('connect.php'); 

    //conn
    $conn = dbo(); 

    //create a query 
    $sql = "DELETE FROM games WHERE user_id = :games_id;"; 

    //prepare that query 
    $statement = $conn->prepare($sql);

    //bind 
    $statement->bindParam(':games_id', $games_id); 

    //execute
    $statement->execute(); 

    //close connection 
    $statement->closeCursor(); 
    header('location:view.php'); 
}
catch(PDOException $e) {
    header('location:error.php'); 
}

ob_flush();
?>