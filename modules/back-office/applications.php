<?php
    session_start();
    include("back-office-security.php");
    include("../shared/bdd-connexion.php");

    if (isset($_GET['page']) === false){
        $pageIndex = 1;
    }else{
        $pageIndex = htmlspecialchars($_GET['page']);
    }

    $_SESSION['pageIndex'] = $pageIndex;

    $indexOfFirstApplicant = ($pageIndex - 1) * 10;

    $sql = "SELECT * FROM candidates ORDER BY ID DESC LIMIT " . $indexOfFirstApplicant . ", 10";
    $reponse = $bdd->query($sql);

    $sqlo = "SELECT COUNT(*) FROM candidates";
    $answer = $bdd->query($sqlo);
    $rowSecond = $answer->fetch();
    $candidatesNumber = $rowSecond[0];

    ?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Foundry Multi-purpose HTML Template</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700" rel="stylesheet">
        <link href="../shared/css/reset.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/header.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/applications.css" rel="stylesheet" type="text/css" media="all" />
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
                <h1 class="list-title">List of <span>applicants</span></h1>
                <?php while($row = $reponse->fetch()){
                    $sqli ="SELECT * FROM jobs WHERE ID = ". $row['job_id'] ."";
                    $thirdAnswer = $bdd->query($sqli);
                    $rowThird = $thirdAnswer->fetch();
                ?>
                <a href="applications.php?delete=true&id=<?php echo $row['ID']; ?>">
                    <div class="delete-container">
                        <div class="delete"> Delete </div>
                    </div>
                </a>
                <div class="list-item-row">
                    <div class="item-col col1">
                        <div class="name"><?php echo $row['first_last_name']; ?></div>
                        <div class="nationality"><?php echo $row['nationality']; ?></div>
                    </div>
                    <div class="item-col col2">
                        <div class="email"><?php echo $row['email']; ?></div>
                        <div class="phone"><?php echo $row['phone_number']; ?></div>
                    </div>
                    <div class="item-col col3">
                        <div class="start-date"><?php echo $row['start_date']; ?></div>
                        <div class="working-rights"><?php echo $row['working_rights']; ?></div>
                    </div>
                    <div class="item-col col4">
                        <a href="../../uploads/<?php echo $row['resume']; ?>"><div class="upload-button"><?php echo $row['resume']; ?></div></a>
                        <a href="../../uploads/<?php echo $row['cover']; ?>"><div class="upload-button"><?php echo $row['cover']; ?></div></a>
                    </div>
                    <div class="item-col col5">
                        <div class="employer-name"><?php echo $rowThird['employer_name']; ?></div>
                    </div>
                    <div class="item-col col6">
                        <div class="position-job"><?php echo $rowThird['position']; ?></div>
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
                        <a href="delete.php?id=<?php echo $_GET['id'] ?>"><div class="btn-container">Yes</div></a>
                        <a href="applications.php"><div class="btn-container">No</div></a>
                    </div>
                </div>
            <?php } ?>
             <div class="btn-page">
                 <?php if ($pageIndex>1){ ?>
                    <a href="change-applicant-page.php?page=precedente">
                    <div class="button-container">
                        <div class="button"> Page Précédente </div>
                    </div>
                    </a>
                <?php } ?>
                <?php if($pageIndex*10 <= $candidatesNumber){ ?>
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