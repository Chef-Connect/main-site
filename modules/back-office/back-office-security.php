<?php

if (isset($_SESSION['adminKey']) === true){
    if ($_SESSION['adminKey'] !== "1Hu5Lok"){
        header('Location: back-office-login.php');
    }
}else{
    header('Location: back-office-login.php');
}