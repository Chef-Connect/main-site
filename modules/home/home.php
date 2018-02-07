<?php
    include('../shared/bdd-connexion.php');
    $sql = "SELECT * FROM jobs ORDER BY ID DESC";
    $reponse = $bdd->query($sql);
    $reponse2 = $bdd->query($sql);

    $counter = 0;
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
        <link href="css/home.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../shared/css/header.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../shared/css/end-page.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../../font-awesome/public/css/fontello.css" rel="stylesheet"/>
        <meta property="og:url"                content="http://www.chef-connect.com/modules/home/home.php" />
        <meta property="og:type"/>
        <meta property="og:title"              content="We connect great chefs with great companies" />
        <meta property="og:description"        content="chef-connect supports global chef to succeed in australia. We help you with your visa and relocation.Export your skills with success." />
        <meta property ="og:image:type"        image/png/>  
        <meta property="og:image"              content="../../assets/img/logo-coloured.png" />
    </head>
            <style type="text/css"> 
<!-- 
    a { 
        text-decoration: none; 
        color:rgb(50,50,50);
    } 
--> 
</style>
    <body>
         
        <div class="background-container"> 
            <div class="home-filter">
                <?php include('../shared/header.php'); ?>
                <div class="middle-container">
                    <h2> Empowering <span class="bold">Australian kitchens.</span></br><span class="hidden-content"> Passionate about <span class="bold">Chefs</span>.</span>  </h2>
                    <div class="border"> </div>
                    <a class="job-link"href="../job-listing/job.php">
                        <div class="btn-container mobile">Explore Jobs </div>
                    </a>
                    <div class="btn-container hidden-content" id="main-explore-jobs"> Explore Jobs </div>
                </div>
            </div>
        </div>
        <div class="page2container">
            <div class="main-container">
                <img class="background-image" src="../../assets/img/australia.png"/>
                <div><img class="title"src="../../assets/img/title-1.png"/></div>
                <div class="written-title">How it works ? </div>
                <div class="description-container">
                    <img class="picto"src="../../assets/img/apply.png"/>
                    <h2> Apply </h2>
                    <p> Let us assess your skills </p>
                </div>
                <div class="description-container center-description">
                    <img class="picto"src="../../assets/img/chef.png"/>
                    <h2> Connect </h2>
                    <p> Explore opportunities</p>
                </div>
                <div class="description-container">
                    <img class="picto"src="../../assets/img/sign.png"/>
                    <h2> Sign </h2>
                    <p> Engage with an employer </p>
                </div>
            </div>
        </div>
        <div class="page3container">
             <div class="box-container service box-image">
                <div class="box-filter">
                    <div class="content-container">
                        <div class="title">Australia’s <span class="bold">food revolution </span></div>
                        <img class="picto" src="../../assets/img/forks.png"/>
                        <p>Australia offers some of the <span class="bold">world’s most incredible produce.</span>
                         <span class="hidden-content">Now more than ever,</br> kitchens around Australia need to evolve to keep up with the foodie appetite.</span></br>
                          We have job opportunities available <span class="bold">all over Australia.</span></p>
                    </div>
                </div> 
            </div>
            <div class="box-container australia box-image">
                <div class="box-filter">
                    <div class="content-container">
                        <div class="title"> Australian jobs.<span class="bold"> International connections.</span> </div>
                        <img class="picto" src="../../assets/img/forks.png"/>
                        <p><span class="bold">Be part of a global kitchen.</span> We believe in finding the right opportunity for the right chef.</br>
                         <span class="hidden-content">We provide support and advice for domestic and international placements,</br>
                          Australian visa applications and<span class="bold"> relocation assistance.</span></span> </p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
            <div class="job-ad-section" id="job-ad-section">
                <div><img  class="title" src="../../assets/img/title-2.png"/></div>
                <div class="written-title"> Job Previews </div>
                <?php while($row = $reponse->fetch()){ ?>
                    <?php 
                    if($counter==8){
                        break;
                    }
                    $counter = $counter + 1; 
                    ?>
                    <a class="job-ad-link" href="../job-pub/job-pub.php?id=<?php echo $row['ID']; ?>">
                        <div class="job-ad-container">
                            <div class="job-ad-image" style="background-image: url('../../assets/img/<?php echo $row['image_name']; ?>')">
                            </div>
                            <div class="job-ad-content">
                                <div class="job-title"><?php echo $row['position']; ?> </div>
                                <div class="job-provider"><span><?php echo $row['employer_name']; ?></span></div>
                                <div class="details-container">
                                    <div class="location-container">
                                        <img class="img-picto" src="../../assets/img/geo.png"/>
                                        <div class="details city"> <?php echo $row['location']; ?> </div>
                                    </div>
                                    <div class="salary-container">
                                        <img class="img-picto" src="../../assets/img/money.png"/>
                                        <div class="details">$ <?php echo $row['salary']; ?> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php } ?>
                <a href="../job-listing/job.php">
                    <div class="view-more"> View more... </div>
                </a>
            </div>
            <div class="job-ad-section deux">
                <div><img  class="title" src="../../assets/img/title-2.png"/></div>
                <div class="written-title"> Job Previews </div>
                <?php 
                $counter = 0;
                while($row = $reponse2->fetch()){
                    
                    if($counter === 3){
                        break;
                    }
                    $counter = $counter + 1; 
                    ?>
                    <a href="../job-pub/job-pub.php?id=<?php echo $row['ID']; ?>">
                        <div class="job-ad-container">
                            <div class="job-ad-image" style="background-image: url('../../assets/img/<?php echo $row['image_name']; ?>')">
                            </div>
                            <div class="job-ad-content">
                                <div class="job-title"><?php echo $row['position']; ?> </div>
                                <div class="job-provider">at <span><?php echo $row['employer_name']; ?></span></div>
                                <div class="details-container">
                                    <img class="img-picto" src="../../assets/img/geo.png"/>
                                    <div class="details city"> <?php echo $row['location']; ?> </div>
                                    <img class="img-picto" src="../../assets/img/money.png"/>
                                    <div class="details">$ <?php echo $row['salary']; ?>/year </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php } ?>
                <a href="../job-listing/job.php">
                    <div class="view-more"> View more... </div>
                </a>
            </div>
        <?php include("../shared/end-page.php"); ?>
    
    <script src="js/home.js" type="text/javascript"></script>
    
    </body>

</html>