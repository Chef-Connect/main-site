<?php

session_start();
include("back-office-security.php");
include("../shared/bdd-connexion.php");

$sql = "UPDATE jobs SET description ='". $_POST['description'] ."', responsabilities ='". $_POST['responsabilities'] ."', requirements='". $_POST['requirements'] ."',
location ='". $_POST['location'] ."', position ='". $_POST['position'] ."', salary ='". $_POST['salary'] ."',
employer_name ='". $_POST['employer_name'] ."', image_name ='". $_POST['image_name'] ."' WHERE ID=". $_SESSION['ID'] ."";

$bdd->exec($sql);
header('Location: job-listing.php');


?>