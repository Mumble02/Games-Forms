
    <?php require('header.php'); ?>
    <div class="container">
        <div class="bg-light">
            <div class="row">
            <div class="col heading">
            <h1> Popular Games</h1>
            </div>
            <div class="col">
            <!-- STEP ONE - display all game titles in a dynamic list   -->
            <?php
            /*grab the titles of the game names from the table in 
            database and display in the browser */
            //connect to db 
            require('connect.php'); 

            //conn
            $conn = dbo(); 

            //set up SQL query
            $sql = "SELECT title from game_names;"; 

            //prepare the query 
            $statement = $conn->prepare($sql); 

            //execute 
            $statement->execute(); 

            //fetchALL
            $search_results = $statement->fetchAll(); 

            //create a list of results 
            echo "<ul>"; 
            foreach($search_results as $result) {
                echo "<li>" . $result['title'] . "</li>"; 
            }
            //close some tags 
            echo "</ul>"; 
            echo "</div>";
            echo "</div>";
            echo "</div>";
            //close connection 
            $statement->closeCursor(); 
            ?>

        <h2> Search for your games here: </h2> 
        <form action="search_results.php" method="get">
            <div class="row">
                <div class="col">
                    <input type ="text" name="name" placeholder="My name is" class="form-control">
                </div>
                <div class="col">
                    <input type="text" name="search" placeholder="I'm searching for..." class="form-control">
                </div>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>