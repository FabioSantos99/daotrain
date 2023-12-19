<?php

require_once("connection.php");
require_once("dao/SaveDAO.php");

$saveDao = new SaveDAO($conn);

$saves = $saveDao->findAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>DaoTrain</title>
      <link rel="stylesheet" href="css/styles.css">
</head>
<body>
      <div id="main-container">

      <h1>Dao Train Form</h1>

            <form action="process.php" method="POST">

            <div class="form-container">
                  <label for="name">Nome: </label>
                  <input type="text" id="name" name="name">

            </div>

            <div class="form-container">
                  <label for="lastname">Sobrenome: </label>
                  <input type="text" id="lastname" name="lastname">

            </div>

            <div class="form-container">
                  <label for="Age">Idade: </label>
                  <input type="number" id="age" name="age">

            </div>

            <div class="form-container">
                  <label for="country">País: </label>
                  <input type="text" id="country" name="country">

            </div>

                  <input type="submit" value="salvar">

            </form>

            <ul>
                  <?php foreach($saves as $save): ?>

                        <li><?= $save->getName() ?> -
                        <?= $save->getLastname() ?>-
                        <?= $save->getAge() ?> -
                        <?= $save->getCountry() ?>
                  </li>
                  
                  <?php endforeach; ?>
            </ul>

      </div>

     
</body>
</html>