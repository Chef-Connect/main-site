<?php

session_start();

include("back-office-security.php");
include("../shared/bdd-connexion.php");

$sql="INSERT INTO blog(blog_title, image_name, blog_content) VALUES(?, ?, ?)";
$reqPrepare = $bdd->prepare($sql);
$reqPrepare->execute(array($_POST['blog_title'], $_POST['image_name'], $_POST['blog_content']));

header('Location: add-blog.php?job=done');