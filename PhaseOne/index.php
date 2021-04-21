<?php require('header.php'); 

//initialize variables, will be used if editing info 
$id = null; 
$firstname = null; 
$lastname = null; 
$location = null; 
$genre = null; 
$email = null; 
$age = null; 
$favgame = null; 

if(!empty($_GET['id']) && (is_numeric($_GET['id']))) {
    $id = filter_input(INPUT_GET, 'id'); 
    //connect to the databaseS
    require('connect.php'); 
    //set up query 
    $sql = "SELECT * FROM games WHERE user_id = :user_id;";
    // prepare 
    $statement = $db->prepare($sql);
    //bind 
    $statement->bindParam(':user_id', $id); 
    //execute 
    $statement->execute(); 

    $records = $statement->fetchAll(); 

    foreach($records as $record) :
     $firstname = $record['first_name']; 
     $lastname = $record['last_name']; 
     $location = $record['location']; 
     $genre= $record['genre']; 
     $email = $record['email']; 
     $age = $record['age'];
     $favgame = $record['favgame'];

    endforeach; 
    //close DB connection 
    $statement->closeCursor(); 

    }
?>
    <main>
        <form action="process.php" method="post">
            <input type="hidden" name="user_id" value="<?php echo $id ?>">
            <div class="form-group">
                <label for="fname"> First Name </label>
                <input type="text" name="fname" id="fname" class="form-control" value="<?php echo $firstname ?>">
            </div> 
            <div class="form-group">
                <label for="lname"> Last Name </label>
             <input type="text" name="lname" id="lname" class="form-control" value="<?php echo $lastname ?>"> 
            </div>
            <div class="form-group">
                <label for="genre"> Genre </label>
                <input type="text" name="genre" id="genre" class="form-control" value="<?php echo $genre ?>">
            </div>
            <div class="form-group">
                <label for="location"> Your Location </label>
                <input type="text" name="location" id="location" class="form-control" value="<?php echo $location ?>">
            </div> 
            <div class="form-group">
             <label for="email"> Your Email </label>
             <input type="email" name="email" id="email" class="form-control" value="<?php echo $email ?>"> 
            </div>
            <div class="form-group">
                <label for="age"> Your Age </label>
                <input type="number" name="age" id="age"class="form-control" value="<?php echo $age ?>">
            </div> 
            <div class="form-group">
                <label for="favgame"> What is your favourite game? </label>
                <input type="text" name="favgame" id="favgame" class="form-control" value="<?php echo $favgame ?>"> 
            </div>
            <input type="submit" value="submit" name="submit" class="btn btn-primary">
        </form>

      
    </main>
    <?php require('footer.php'); ?>