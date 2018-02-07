<?php 

include("../shared/bdd-connexion.php");

session_start();

if (isset($_GET['page']) === false){
    $pageIndex = 1;
}else{
    $pageIndex = htmlspecialchars($_GET['page']);
}

$_SESSION['pageIndex'] = $pageIndex;

$indexOfFirstJob = ($pageIndex - 1) * 8;

$sql = "SELECT * FROM jobs ORDER BY ID DESC LIMIT " . $indexOfFirstJob . ", 8";
$rawData = $bdd->query($sql);

$sqlo = "SELECT COUNT(*) FROM jobs";
$reponse = $bdd->query($sqlo);
$row = $reponse->fetch();
$jobNumber = $row[0];
