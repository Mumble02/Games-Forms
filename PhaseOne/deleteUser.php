<?

session_start();

 require_once("connect.php"); 
 dbo()->query("DELETE FROM users WHERE id = {$_SESSION['user']['id']}"); 


 unset($_SESSION['user']);
 $_SESSION['successes'][] = "You have successfully deleted your profile";
 
 header("Location: index.php"); 
 exit();