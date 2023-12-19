<?php

require_once("connection.php");
require_once("dao/SaveDAO.php");

$saveDao = new SaveDAO($conn);

$name = $_POST["name"];
$lastname = $_POST["lastname"];
$age = $_POST["age"];
$country = $_POST["country"];

$newSave = new Save();

$newSave->setName($name);
$newSave->setLastname($lastname);
$newSave->setAge($age);
$newSave->setCountry($country);

$saveDao->create($newSave);

header("Location: index.php");