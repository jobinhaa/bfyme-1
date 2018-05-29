<?php

  // $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

  // $server = $url["localhost"];
  // $username = $url["root"];
  // $password = $url["B@y350"];
  // $db = substr($url["bfyme"], 1);
  // $con= new mysqli($server, $username, $password, $db);
  
  $server = 'localhost';
  $username = 'root';
  $password = 'B@y350';
  $db = 'bfyme';
  $con= mysqli_connect($server, $username, $password, $db);



  if(!$con) {
    die('Erro de conexão');
  }
?>
