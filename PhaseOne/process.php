<?php 
        ob_start(); 
        require('header.php');

        //1. create variables to store info 

        $first_name = filter_input(INPUT_POST, 'fname');
        $last_name = filter_input(INPUT_POST, 'lname');
        $genre = filter_input(INPUT_POST, 'genre');
        $location = filter_input(INPUT_POST, 'location');
        $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $favgame = filter_input(INPUT_POST, 'favgame');
        //intiailize id 
        $id = null;
        $id = filter_input(INPUT_POST, 'user_id'); 


        //set up a flag variable for debugging 
        $ok = true; 

        //some form validation 

        if($age === false) {
            echo "<p> Please use a numeric value for age </p>"; 
            $ok = false; 
        }

        if($email === false) {
            echo "<p> Please use a proper email address </p>";
            $ok = false;  
        }

        if($ok === true) {
            try {
                //connect to db 
                require('connect.php');

                //conn
                $conn = dbo(); 

                //set up SQL query 

                if(!empty($id)) {
                  $sql = "UPDATE games SET first_name = :firstname, last_name = :lastname, genre = :genre, location = :location, email = :email, age = :age, favgame = :favgame WHERE user_id = :user_id;"; 

                }
                else {
                    $sql = "INSERT into games (first_name, last_name, genre, location, email, age, favgame) VALUES (:firstname, :lastname, :genre, :location, :email, :age, :favgame);";
                }


                //call the prepare method of the PDO object 
                $statement = $conn->prepare($sql);

                //bind parameters using the bindParam method of the PDO Statement Object 
                $statement->bindParam(':firstname', $first_name);
                $statement->bindParam(':lastname', $last_name);
                $statement->bindParam(':genre', $genre);
                $statement->bindParam(':location', $location);
                $statement->bindParam(':email', $email);
                $statement->bindParam(':age', $age);
                $statement->bindParam(':favgame', $favgame);

                //bind $id if updating 
                if(!empty($id)) {
                    $statement->bindParam(':user_id', $id); 
                }               

                //execute the query 
                $statement->execute(); 

                //echo '<p> Success, your tune has been added!</p> ';
                //close DB connection 
                $statement->closeCursor(); 
                header('location:view.php');

            
            }
            catch(PDOException $e) {
             header('location:error.php');  
            }
        }
        require('footer.php'); 
        ob_flush(); 
        ?>