<?php

session_start();

if($_POST['email']=="info@chef-connect.com" && $_POST['password']=="10Plongee,"){
    $_SESSION['adminKey'] = "1Hu5Lok";
    header('Location: back-office.php');
}else{
    $_SESSION['adminKey'] = "";
    header('Location: back-office-login.php?error=true');
}


?>