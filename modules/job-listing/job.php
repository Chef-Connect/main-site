<?php include ('job-logic.php');
    $inHome = true;
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
        <link href="css/job.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../shared/css/header.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../shared/css/end-page.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../../font-awesome/public/css/fontello.css" rel="stylesheet"/>
    </head>
            <style type="text/css"> 
<!-- 
    a { 
        text-decoration: none; 
        color: rgb(50,50,50); 
    } 
--> 
</style>
    <body>
        <?php include('../shared/header.php'); ?>
        <div class="img">
        <div class="img-filter">
            <h1> Explore Jobs </h1>
        </div>
        </div>
        <div class="main-container">
            <select name="position" id="position">
                <option value="executive chef">executive chef</option>
                <option value="sous chef">sous chef</option>
            </select>
            <?php while($row = $rawData->fetch()){ ?>

            <a href="../job-pub/job-pub.php?id=<?php echo $row['ID']; ?>">
            <div class="job-listing">
                <div class="job-image" style="background-image: url('../../assets/img/<?php echo $row["image_name"]; ?>')"> </div>
                <div class="job-content">
                    <div class="job-provider"><?php echo $row['employer_name']; ?></div>
                    <div class="job-title"><?php echo $row['position']; ?></div>
                    <div class="details-container">
                        <img class="img-picto" src="../../assets/img/geo.png"/>
                        <div class="details city"><?php echo $row['location']; ?></div>
                        <img class="img-picto" src="../../assets/img/money.png"/>
                        <div class="details money">$ <?php echo $row['salary']; ?>/year</div>
                    </div>
                </div>
            </div>
            </a>
            <?php } ?>
            <a href="../job-apply/job-apply.php?id=0">
            <div class="job-listing nojob">
            <div class="job-image logo"> </div>
                <div class="job-content">
                    <h1> Didn't find the job you were looking for?</br>Leave us your informations</br> We will contact you shortly </h1>
                </div>
            </div>
            </a>
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
        <?php include("../shared/end-page.php"); ?>
        <script src="js/job.js" type="text/javascript"></script>
    </body>
</html>