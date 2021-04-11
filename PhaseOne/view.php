<?php require('header.php'); ?>
    <?php

    //connect to db 
    require('connect.php'); 

    //set up our query 
    $sql = "SELECT * FROM games"; 

    //prepare the query 

    $statement = $db->prepare($sql); 

    //execute the query 
    $statement->execute(); 

    //use fetchAll to store results 
    $records = $statement->fetchAll(); 

    //echo out top of table 

    echo "<table class='table table-striped'><tbody>"; 

    foreach($records as $record) {
        echo"<tr><td>". $record['first_name']. 
        "</td><td>" . $record['last_name'] . "</td><td>" . $record['genre'] . "</td><td>" . $record['location'] . "</td><td>" . $record['age'] . "</td><td>" . $record['email']. "</td><td>" . $record['favgame']."</td><td><a href='delete.php?id=" . $record['user_id']. "'> Delete Game </a></td><td><a href='index.php?id=" . $record['user_id']. "'>Edit Game </a></td></tr>"; 
    }

    echo "</tbody></table>"; 


    //close the DB connection 
    $statement->closeCursor(); 

    ?>
<?php require('footer.php'); ?>