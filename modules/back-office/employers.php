<?php
    session_start();
    
    include("back-office-security.php");
    include("../shared/bdd-connexion.php");

    if (isset($_GET['page']) === false){
        $pageIndex = 1;
    }else{
        $pageIndex = $_GET['page'];
    }

    $_SESSION['pageIndex'] = $pageIndex;

    $indexOfFirstEmployer = ($pageIndex - 1) * 10;

    $sql = "SELECT * FROM employers ORDER BY ID DESC LIMIT " . $indexOfFirstEmployer . ", 10";
    $reponse = $bdd->query($sql);

    $sqlo = "SELECT COUNT(*) FROM employers";
    $answer = $bdd->query($sqlo);
    $rowSecond = $answer->fetch();
    $employersNumber = $rowSecond[0];

    ?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Foundry Multi-purpose HTML Template</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700" rel="stylesheet">
        <link href="../shared/css/reset.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/header.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/employers.css" rel="stylesheet" type="text/css" media="all" />
    </head>
            <style type="text/css"> 
<!-- 
    a { 
        text-decoration: none; 
        color: white; 
    } 
--> 
</style>
    <body>
        <div class="page-container">
        <?php include("header.php"); ?>
            <div class="list-container">
                <h1 class="list-title">List of <span>Employers</span></h1>
                <?php while($row = $reponse->fetch()){ ?>
                <a href="employers.php?delete=true&id=<?php echo $row['ID']; ?>">
                    <div class="delete-container">
                        <div class="delete"> Delete </div>
                    </div>
                </a>
                <div class="list-item-row">
                    <div class="item-col col1">
                        <div class="name"><?php echo $row['name']; ?></div>
                        <div class="nationality"><?php echo $row['email']; ?></div>
                    </div>
                    <div class="item-col col2">
                        <div class="email"><?php echo $row['position']; ?></div>
                        <div class="phone"><?php echo $row['salary']; ?>$/year</div>
                    </div>
                    <div class="item-col col3">
                        <div class="start-date"><?php echo $row['business_name']; ?></div>
                    </div>
                    <div class="item-col col4">
                        <div class="phone-number"><?php echo $row['phone_number']; ?></div>
                        <div class="additional-information"><?php echo $row['additional_information']; ?></div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php if(isset($_GET['delete'])===false){

            }else if($_GET['delete']==true){ ?>
                <div class="note-container">
                    <div class="note-content">
                        <p> Are you sure you want to delete</br>
                        this application ? </p>
                        <a href="delete-employers.php?id=<?php echo $_GET['id'] ?>"><div class="btn-container">Yes</div></a>
                        <a href="employers.php"><div class="btn-container">No</div></a>
                    </div>
                </div>
            <?php } ?>
             <div class="btn-page">
                 <?php if ($pageIndex>1){ ?>
                    <a href="change-employer-page.php?page=precedente">
                    <div class="button-container">
                        <div class="button"> Page Précédente </div>
                    </div>
                    </a>
                <?php } ?>
                <?php if($pageIndex*10 <= $employersNumber){ ?>
                    <a href="change-job-page.php?page=suivante">
                    <div class="button-container">
                        <div class="button"> Page Suivante </div>
                    </div>
                    </a>
                <?php } ?>
            </div>
        </div>

    </body>
</html>