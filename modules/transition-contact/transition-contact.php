<?php

    if($_POST['name']==""){
        header('Location: ../contact-page/contact-page.php?error=rien');
        exit;
    }
    if($_POST['email']==""){
        header('Location: ../contact-page/contact-page.php?error=rien');
        exit;
    }
    if($_POST['phone-number']==""){
        header('Location: ../contact-page/contact-page.php?error=rien');
        exit;
    }
    if($_POST['subject']==""){
        header('Location: ../contact-page/contact-page.php?error=rien');
        exit;
    }
    include("../shared/bdd-connexion.php");

    $sql = "INSERT INTO contact(name, email, phone, subject, message) VALUES (?,?,?,?,?)";
    $reqPrepare = $bdd->prepare($sql);
    $reqPrepare->execute(array($_POST['name'], $_POST['email'], $_POST['phone-number'], $_POST['subject'], $_POST['message']));
    header('Location: ../contact-page/contact-page.php?note=thanks');

?>