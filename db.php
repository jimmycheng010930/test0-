<?php


  $servername = "localhost"; //indirizzo ip
  $username = "root" ;
  $password = "" ;
  $nomeDB = "opere" ;

  // Create connection
  $db_remoto = new mysqli($servername, $username, $password, $nomeDB);

  // Check connection
  if ($db_remoto->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }




 ?>
