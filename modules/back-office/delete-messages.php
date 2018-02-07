<?php
session_start();

include("back-office-security.php");

$_SESSION['ID'] = $_GET['id'];
include("../shared/bdd-connexion.php");

$sql = "DELETE FROM contact WHERE ID = ". $_SESSION['ID'] ."";
$bdd->exec($sql);

header('Location: messages.php');
?>