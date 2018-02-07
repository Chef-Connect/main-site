<?php
session_start();
include("back-office-security.php");
include("../shared/bdd-connexion.php");

$_SESSION['ID'] = $_GET['id'];
$sql="SELECT * FROM jobs WHERE ID = ". $_SESSION['ID'] ." ";

$reponse = $bdd->query($sql);

$row = $reponse->fetch();

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Foundry Multi-purpose HTML Template</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700" rel="stylesheet">
        <link href="../shared/css/reset.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/header.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/edit-page.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../../font-awesome/public/css/fontello.css" rel="stylesheet"/>
    </head>
    <body>
    <div class="page-container">
        <?php include("header.php"); ?>
            <div class="page-content">
                <form action="transition-edit-page.php" method="post">
                <div class="left-container">
                    <div class="content-container">
                        <h2> Description : </h2>
                        <textarea class="big-textarea" name="description"><?php echo $row['description']; ?></textarea>
                        <h2> Responsibilities : </h2>
                        <textarea class="big-textarea" name="responsabilities"><?php echo $row['responsabilities']; ?></textarea>
                        <h2> Requirements :</h2>
                        <textarea class="big-textarea" name="requirements"><?php echo $row['requirements']; ?></textarea>
                    </div>
                    <div class="detail-container">
                        <h1> Job Detail </h1>
                        <div class="container">
                            <i class="icon-trophee"></i>
                            <div class="content">
                                <h2> Post: </h2> 
                                <textarea class="little-textarea" name="position"><?php echo($row['position']);?> </textarea> 
                            </div>
                        </div>
                        <div class="container">
                            <i class="icon-geo-marker-stroke"></i>
                            <div class="content">
                                <h2> Location: </h2>
                                <textarea class="little-textarea" name="location"><?php echo($row['location']);?> </textarea>
                            </div>    
                        </div>
                        <div class="container">
                            <img class="img-picto-3" src="moneybag2.png"/>
                            <div class="content">
                                <h2> salary : ($ per year) </h2>
                                <textarea class="little-textarea" name="salary"><?php echo($row['salary']);?></textarea>                     
                            </div>
                        </div>
                        <div class="container">
                            <i class="icon-geo-marker-stroke"></i>
                            <div class="content">
                                <h2> employer-name : </h2>
                                <textarea class="little-textarea" name="employer_name"><?php echo($row['employer_name']);?></textarea>                     
                            </div>
                        </div>
                        <div class="container">
                            <i class="icon-geo-marker-stroke"></i>
                            <div class="content">
                                <h2> image-name : </h2>
                                <textarea class="little-textarea" name="image_name"><?php echo($row['image_name']);?></textarea>                     
                            </div>
                        </div>
                        <input type="submit" class="btn-container" value="Submit"></input>
                </form>
            </div>
        </div>
    </body>
</html>

