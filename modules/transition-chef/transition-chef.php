<?php


    if(empty($_POST['name'])===true){
        header('Location: ../chef/chef.php?error=rien#form-section');
        exit;
    }
    if(empty($_POST['email'])===true){
        header('Location: ../chef/chef.php?error=rien#form-section');
        exit;
    }
    if(empty($_POST['phone-number'])===true){
        header('Location: ../chef/chef.php?error=rien#form-section');
        exit;
    }
    if(empty($_POST['salary'])===true){
        header('Location: ../chef/chef.php?error=rien#form-section');
        exit;
    }
    if(empty($_POST['business-name'])===true){
        header('Location: ../chef/chef.php?error=rien#form-section');
        exit;
    }
    if($_POST['position']=="rien"){
        header('Location: ../chef/chef.php?error=rien#form-section');
        exit;
    }

    
    include("../shared/bdd-connexion.php");

    $sql = "INSERT INTO employers(position, salary, name, business_name, email, phone_number, additional_information) VALUES (?,?,?,?,?,?,?)";
    $reqPrepare = $bdd->prepare($sql);
    $reqPrepare->execute(array($_POST['position'], $_POST['salary'], $_POST['name'], $_POST['business-name'], $_POST['email'], $_POST['phone-number'], $_POST['additional-information']));
    header('Location: ../chef/chef.php?note=thanks');



?>