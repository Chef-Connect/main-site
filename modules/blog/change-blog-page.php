<?php
session_start();


if(htmlspecialchars($_GET['page']=="suivante")){
    $newPageIndex = $_SESSION['pageIndex']+1;

    header('Location: blog.php?page=' . $newPageIndex);
}else if(htmlspecialchars($_GET['page']=="precedente")){
    $newPageIndex = $_SESSION['pageIndex']-1;

    if($newPageIndex <1){
        $newPageIndex = 1;
    }

    header('Location: blog.php?page=' . $newPageIndex);
}

?>