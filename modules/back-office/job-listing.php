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

$indexOfFirstJob = ($pageIndex - 1) * 8;

$sql = "SELECT * FROM jobs ORDER BY ID DESC LIMIT " . $indexOfFirstJob . ", 8";
$rawData = $bdd->query($sql);

$sqlo = "SELECT COUNT(*) FROM jobs";
$reponse = $bdd->query($sqlo);
$row = $reponse->fetch();
$jobNumber = $row[0];


?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Foundry Multi-purpose HTML Template</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700" rel="stylesheet">
        <link href="../shared/css/reset.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/header.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/job-listing.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../../font-awesome/public/css/fontello.css" rel="stylesheet"/>
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
        <div class="main-container">
            <h1 class="job-title">Job <span>listing</span></h1>
            <?php while($row = $rawData->fetch()){ ?>
            <a href="../job-pub/job-pub.php?id=<?php echo $row['ID']; ?>">
            <div class="job-listing">
                <div class="job-image" style="background-image: url('../../assets/img/<?php echo $row["image_name"]; ?>')"> </div>
                <div class="job-content">
                    <div class="city"><?php echo $row['employer_name']; ?></div>
                    <div class="post"><?php echo $row['position']; ?></div>
                    <i class="icon-geo-marker-stroke"></i>
                    <div class="time"><?php echo $row['location']; ?></div>
                    <img class="img-picto-3" src="moneybag2.png"/>
                    <div class="money"><?php echo $row['salary']; ?>$</div>
                </div>
                    <a href="job-listing.php?delete=true&id=<?php echo $row['ID']; ?>">
                        <div class="delete"> Delete </div>
                    </a>
                    <a href="edit-page.php?id=<?php echo $row['ID']; ?>">
                        <div class="delete edit"> Edit </div>
                    </a>
            </div>
            </a>

            <?php } ?>

             <div class="btn-page">
                <?php if ($pageIndex>1){ ?>
                    <a href="change-job-page.php?page=precedente">
                    <div class="button-container">
                        <div class="button"> Previous Page </div>
                    </div>
                    </a>
                <?php } ?>
                <?php if($pageIndex*8 < $jobNumber){ ?>
                    <a href="change-job-page.php?page=suivante">
                    <div class="button-container">
                        <div class="button"> Next Page </div>
                    </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
        
            <?php if(isset($_GET['delete'])===false){

            }else if($_GET['delete']==true){ ?>
                <div class="note-container">
                    <div class="note-content">
                        <p> Are you sure you want to delete</br>
                        this job ? </p>
                        <a href="delete-page.php?id=<?php echo $_GET['id'] ?>"><div class="btn-container">Yes</div></a>
                        <a href="job-listing.php"><div class="btn-container">No</div></a>
                    </div>
                </div>
            <?php } ?>


    </body>
</html>