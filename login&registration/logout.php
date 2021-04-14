<?php
session_start();

unset($_SESSION['user']);

$_SESSSION['successes'][] = "You have sucessfully logged out!";
header("Location: ./login.php");
exit();