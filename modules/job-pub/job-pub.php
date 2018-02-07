<?php
    session_start();

    include('../shared/bdd-connexion.php');


    if(isset($_GET['id']) === false){
        $_SESSION['ID'] = 1;
    }else{
        $_SESSION['ID'] = htmlspecialchars($_GET['id']);
    }

    $sql="SELECT * FROM jobs WHERE ID=". $_SESSION['ID'] ."";
    $reponse = $bdd->query($sql);
    $premiereLigne = $reponse->fetch();
    $image_name = $premiereLigne['image_name'];



?>
<!doctype html>
<html lang="en">
    <head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112799119-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-112799119-1');
        </script>
        <meta charset="utf-8">
        <title>We connect great chefs with great companies</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700" rel="stylesheet">
         <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="icon" href="../../assets/img/logo-coloured.png" type="image/png"/>
        <link rel="shortcut icon" href="../../assets/img/logo-coloured.png" type="image/png"/>        
        <link href="../shared/css/reset.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/job-pub.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../shared/css/header.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../../font-awesome/public/css/fontello.css" rel="stylesheet"/>
    </head>

    <body>

        <?php include('../shared/header.php'); ?>

            <div class="main-container">
                <div class="job-listing">
                    <div class="job-image" style = "background-image: url('../../assets/img/<?php echo $image_name; ?>')">
                        <div class="job-filter">
                            <div class="job-content">
                                <h1><?php echo($premiereLigne['employer_name']);?></h1>
                                <div class="job-position"><?php echo($premiereLigne['position']);?></div>
                            </div>
                        </div>
                    </div>
                    <div class="content-container">
                        <h2> Description : </h2>
                        <p><?php echo $premiereLigne['description']; ?></p>
                        <h2> Responsibilities : </h2>
                        <p><?php echo $premiereLigne['responsabilities']; ?></p>
                        <h2> Requirements :</h2>
                        <p><?php echo $premiereLigne['requirements']; ?></p>
                    </div>
                    <div class="detail-container">
                        <div class="detail-wrapper">
                            <h1> Job Detail </h1>
                            <div class="container">
                                <i class="icon-trophee"></i>
                                <div class="content">
                                    <h2> Post: </h2> 
                                    <h3> <?php echo($premiereLigne['position']);?> </h3> 
                                </div>
                            </div>
                            <div class="container">
                                <i class="icon-geo-marker-stroke"></i>
                                <div class="content">
                                    <h2> Location: </h2>
                                    <h3> <?php echo($premiereLigne['location']);?> </h3>
                                </div>    
                            </div>
                            <div class="container">
                                <img class="img-picto-3" src="moneybag2.png"/>
                                <div class="content">
                                    <h2> Salary: </h2>
                                    <h3><?php echo($premiereLigne['salary']);?>$</h3>                     
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrapper">
                            <a href="../job-apply/job-apply.php">
                                <div class="btn-container"> apply for the job </div>
                            </a>
                            <a href="../job-listing/job.php">
                                <div class="btn-container transparent"> go back to job listing </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>   
            <script src="js/job-pub.js" type="text/javascript"></script>      
    </body>
</html>