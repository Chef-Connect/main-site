<?php
session_start();
include("../shared/bdd-connexion.php");
$sql = "SELECT * FROM blog WHERE ID=". $_GET['id'] ."";
$reponse = $bdd->query($sql);
$row = $reponse->fetch();
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
        <link href="../shared/css/header.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../shared/css/end-page.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/contenu-blog.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../../font-awesome/public/css/fontello.css" rel="stylesheet"/>
    </head>

    <body>
        <?php include('../shared/header.php'); ?>
            <div class="page-container">
                <div class="img" style="background-image: url('../../assets/img/<?php echo $row["image_name"]; ?>')"></div> 
                <h1> <?php echo $row['blog_title']; ?> </h1>
                <div class="border-bottom"></div>
                <div class="content-container">
                    <?php echo $row['blog_content']; ?> 
                </div>
            </div>
            <script src="js/contenu-blog.js" type="text/javascript"> </script>
    </body>
</html>