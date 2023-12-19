<?php


$db_name = "save_data";
$host = "localhost";
$user = "root";
$pass = "password";

try {
      $conn = new PDO("mysql:db_name=$db_name;host=$host", $user, $pass);

}

catch (PDOException $e) {

      $error = $e->getMessage();
      echo "Erro: $error";

}