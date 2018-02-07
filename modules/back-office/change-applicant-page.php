<?php
session_start();
include("back-office-security.php");

if($_GET['page']=="suivante"){
    $newPageIndex = $_SESSION['pageIndex']+1;
    header('Location: applications.php?page=' . $newPageIndex);
}else if($_GET['page']=="precedente"){
    $newPageIndex = $_SESSION['pageIndex']-1;

    if($newPageIndex <1){
        $newPageIndex = 1;
    }
    header('Location: applications.php?page=' . $newPageIndex);
}

?>