<?php

include_once("connection.php");
include_once("dao/SaveDAO.php");

$saveDao = new SaveDAO($conn);

$saves = $saveDao->findAll();

?>

<h1>Insira um dado:</h1>

<form action="process.php" method="POST">
    <div>
       <label for="name">Nome: </label>
       <input type="text" name="name" placeholder="Insira o nome">
    </div>

    <div>
        <label for="lastname">Sobrenome: </label>
        <input type="text" name="lastname" placeholder="Insira o sobrenome">
    </div>

    <div>
        <label for="age">Idade:</label>
        <input type="number" name="age" placeholder="Insira sua idade">
    </div>


    <div>
        <label for="country">País:</label>
        <input type="text" name="country" placeholder="Insira o Pais de origem">
    </div>

    <input type="submit" value="Salvar">
</form>
<ul>
    <?php foreach($saves as $save): ?>
        <li><?= $save->getName() ?> - <?= $save->getLastname() ?> - <?= $save->getAge() ?> - <?= $save->getCountry() ?> </li>
    <?php endforeach; ?>
</ul>

