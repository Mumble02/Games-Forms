<?php

  /*
    By converting the connect script into a function,
    we increase its versatility and avoid the potential
    of symbol naming collisions.
  */
  function dbo () {
    try {

    //   $dsn = 'mysql:host=172.31.22.43;dbname=Steph200462383';
    //   $username = 'Steph200462383'; 
    //   $password = 'pgfGRpjkEl'; */
      
      $dsn = 'mysql:host=localhost;dbname=games';
      $username = 'root'; 
      $password = '';  

      $db = new PDO($dsn,$username, $password); 

      // This attribute ensures that any SQL errors are reported
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $db;
    } catch (PDOException $error) {
      return "Issue connecting: {$error->getMessage()}";
    }
  }