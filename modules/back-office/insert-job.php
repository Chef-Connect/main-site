<?php

session_start();

include("back-office-security.php");
include("../shared/bdd-connexion.php");

$sql="INSERT INTO jobs(description, responsabilities, requirements, location, salary, position, employer_name, image_name) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
$reqPrepare = $bdd->prepare($sql);
$reqPrepare->execute(array($_POST['description'], $_POST['responsabilities'], $_POST['requirements'], $_POST['location'], $_POST['salary'], $_POST['position'], $_POST['employer_name'], $_POST['image_name']));

header('Location: back-office.php?job=done');
