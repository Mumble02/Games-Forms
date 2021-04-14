<?php

  // If they're not logged in, redirect them
  session_start();
  if(!$_SESSION['user']){
    $_SESSION['errors'][] = "You must log in.";
    header("Location: login.php");
    exit();
  }

  // Assign the user
  $user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <title>You're Profile</title>
  </head>

  <body>
    <?php include_once('notification.php') ?>

    <div class="container">
      <header class="jumbotron my-5">
        <div class="row">
          <div class="col-5">
            <script src="https://www.avatarapi.com/js.aspx?email=<?= $user['email'] ?>&size=128"></script>
				
          </div>

          <div class="col-7">
            <h1 class="display-4">Hello and Welcome!<strong><?= "{$user['first_name']} {$user['last_name']}" ?></strong></h1>
            <p class="lead">Are you ready to game?</p>
            <hr class="my-4">
            <p>
              They've been waiting for...<strong>YOU!</strong>
            </p>
          </div>
        </div>
      </header>

      <a class="btn" href="logout.php">Logout</a>
      <a class="btn" href="deleteUser.php" onclick="return confirm('Are you sure?')">Delete Me</a>
    </div>
  </body>
</html>