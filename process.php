<?php

$db = "save_data";
$host = "localhost";
$user = "root";
$pass = "password";

try {

      $conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
}
catch (PDOException $e) {

      $error = $e->getMessage();
      echo "Erro: $error";
}


