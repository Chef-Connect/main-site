<?php
$target_dir = "../../assets/img/";
$fileName = $_FILES["image"]["name"];

$target_file_path = $target_dir . basename($fileName);

move_uploaded_file($_FILES["image"]["tmp_name"], $target_file_path);
header('Location: back-office.php');
?>