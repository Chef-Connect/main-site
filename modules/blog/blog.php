<?php 
session_start();
include("../shared/bdd-connexion.php");
if (isset($_GET['page']) === false){
    $pageIndex = 1;
}else{
    $pageIndex = htmlspecialchars($_GET['page']);
}

$_SESSION['pageIndex'] = $pageIndex;

$indexOfFirstJob = ($pageIndex - 1) * 6;
$sql ="SELECT * FROM blog ORDER BY ID DESC LIMIT " . $indexOfFirstJob . ", 6";
$rawData = $bdd->query($sql);

$sqlo = "SELECT COUNT(*) FROM blog";
$reponse = $bdd->query($sqlo);
$answerRow = $reponse->fetch();
$articlesNb = $answerRow[0];

/* COMPUTE HOW MANY ARTICLES WILL BE DISPLAYED IN THE PAGE */
$articlesNbInPage = $articlesNb - ($pageIndex - 1) * 6;

if ($articlesNbInPage > 6){
    $articlesNbInPage = 6;
}


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
        <link href="css/blog.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../../font-awesome/public/css/fontello.css" rel="stylesheet"/>
    </head>

    <body>
        <?php include('../shared/header.php'); ?>
        <div class="page-container">
       
            <div class="content-container">
                <div class="row-container top-container">
                        <?php if($articlesNbInPage>=2){?>
                            <?php $row = $rawData->fetch(); ?>
                            <a href="../contenu-blog/contenu-blog.php?id=<?= $row['ID']; ?>">
                            <div class="article-container" style="background-image: url('../../assets/img/<?= $row["image_name"]; ?>')">
                                <div class="article-filter">
                                    <h1> <?= $row['blog_title']; ?> </h1>
                                </div>
                            </div>
                            </a>
                            <div class="void-container"></div>
                            <?php $row = $rawData->fetch(); ?>
                            <a href="../contenu-blog/contenu-blog.php?id=<?= $row['ID']; ?>">
                            <div class="article-container" style="background-image: url('../../assets/img/<?= $row["image_name"]; ?>')">
                                <div class="article-filter">
                                    <h1> <?= $row['blog_title']; ?> </h1>
                                </div>
                            </div>
                            </a>
                        <?php } ?>
                        <?php if($articlesNbInPage===4){?>
                            <div class="void-horizontal-container"></div>
                            <?php $row = $rawData->fetch(); ?>
                            <a href="../contenu-blog/contenu-blog.php?id=<?= $row['ID']; ?>">
                            <div class="article-container" style="background-image: url('../../assets/img/<?= $row["image_name"]; ?>')">
                                <div class="article-filter">
                                    <h1> <?= $row['blog_title']; ?> </h1>
                                </div>
                            </div>
                            </a>
                            <div class="void-container"></div>
                            <?php $row = $rawData->fetch(); ?>
                            <a href="../contenu-blog/contenu-blog.php?id=<?= $row['ID']; ?>">
                            <div class="article-container" style="background-image: url('../../assets/img/<?= $row["image_name"]; ?>')">
                                <div class="article-filter">
                                    <h1> <?= $row['blog_title']; ?> </h1>
                                </div>
                            </div>
                            </a>

                        <?php } ?>

                    </div>
                    <div class="row-container middle-container">
                        <?php if($articlesNbInPage>=5){?>
                            <?php $row = $rawData->fetch(); ?>
                            <a href="../contenu-blog/contenu-blog.php?id=<?= $row['ID']; ?>">
                            <div class="article-container" style="background-image: url('../../assets/img/<?= $row["image_name"]; ?>')">
                                <div class="article-filter">
                                    <h1> <?= $row['blog_title']; ?> </h1>
                                </div>
                            </div>
                            </a>
                            <div class="void-container"></div>
                            <?php $row = $rawData->fetch(); ?>
                            <a href="../contenu-blog/contenu-blog.php?id=<?= $row['ID']; ?>">
                            <div class="article-container" style="background-image: url('../../assets/img/<?= $row["image_name"]; ?>')">
                                <div class="article-filter">
                                    <h1> <?= $row['blog_title']; ?> </h1>
                                </div>
                            </div>
                            </a>
                            <div class="void-container"></div>
                            <?php $row = $rawData->fetch(); ?>
                            <a href="../contenu-blog/contenu-blog.php?id=<?= $row['ID']; ?>">
                            <div class="article-container" style="background-image: url('../../assets/img/<?= $row["image_name"]; ?>')">
                                <div class="article-filter">
                                    <h1> <?= $row['blog_title']; ?> </h1>
                                </div>
                            </div>      
                            </a>     
                        <?php } ?>                                                   
                    </div>
                    <div class="row-container bottom-container">
                        <?php if($articlesNbInPage === 1 || $articlesNbInPage === 3 || $articlesNbInPage === 6){?>
                            <?php $row = $rawData->fetch(); ?>
                            <a href="../contenu-blog/contenu-blog.php?id=<?= $row['ID']; ?>">
                            <div class="article-container" style="background-image: url('../../assets/img/<?= $row["image_name"]; ?>')">
                                <div class="article-filter">
                                    <h1> <?= $row['blog_title']; ?> </h1>
                                </div>
                            </div>  
                            </a>
                        <?php } ?>
                    </div>
                </div>
                
                <div class="btn-page">
                    <?php if ($pageIndex>1){ ?>
                        <a href="change-blog-page.php?page=precedente">
                            <div class="btn-container">
                                <div class="btn"> Previous page </div>
                            </div>
                        </a>
                    <?php } ?>
                    <?php if($pageIndex*6 < $articlesNb){ ?>
                        <a href="change-blog-page.php?page=suivante">
                            <div class="btn-container">
                                <div class="btn"> Next page </div>
                            </div>
                        </a>
                    <?php } ?>
                </div>
        </div>
        <script src="js/blog.js" type="text/javascript"> </script>
    </body>
   </html> 