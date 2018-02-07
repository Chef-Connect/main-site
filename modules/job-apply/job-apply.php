<?php
    session_start();
    include('../shared/bdd-connexion.php');

    if(isset($_GET['id']) === false){
        $sql="SELECT * FROM jobs WHERE ID=". $_SESSION['ID'] ."";
        $reponse = $bdd->query($sql);
        $premiereLigne = $reponse->fetch();
        $image_name = $premiereLigne['image_name'];
    }else if (htmlspecialchars($_GET['id']==0)){
        $_SESSION['ID']=0;
        $image_name = "employer-plate.jpeg";
    }
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
        <link href="../../font-awesome/public/css/fontello.css" rel="stylesheet"/>
        <link href="../shared/css/reset.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../shared/css/header.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/job-apply.css" rel="stylesheet" type="text/css" media="all" />
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

        <div class="form-image"style = "background-image: url('../../assets/img/<?php echo $image_name; ?>')"> 
            <div class="form-filter">
                <div class="form-container">
                    <form action="../transition-apply/transition-apply.php" method="post" enctype="multipart/form-data" id="myForm">
                    <?php if(isset($_GET['id']) === false){?>  
                        <h1> Apply<span class="hidden-content"> for your job</span> </h1>
                    <?php }else if(htmlspecialchars($_GET['id'] == 0)){ ?>
                        <div class="hidden-div"></div>
                    <?php } ?>
                        <div class="left-container">
                            <h3> First and last name </h3>
                            <input class="input" type="text" name="name" id="name"/>
                            <h3> Nationality </h3>
                            <input class="input" type="text" name="nationality" id="nationality"/>
                            <h3> working rights in Australia </h3>
                            <select name="Working-rights" id="Working-rights" class="input" >
                                <option value="rien"></option>
                                <option value="Australian or New Zealand citizen">Australian or New Zealand citizen</option>
                                <option value="Working Holiday">Working Holiday</option>
                                <option value="457 visa">457 visa</option>
                                <option value="I have no rights">I have no rights</option>
                            </select>
                            <h3> Start date </h3>
                            <select name="Start-date" id="Start-date" class="input">
                                <option value="rien"></option>
                                <option value="ASAP">ASAP</option>
                                <option value="1 to 2 weeks">1 to 2 weeks</option>
                                <option value="2 to 3 weeks">2 to 3 weeks</option>
                                <option value="3 to 4 weeks">3 to 4 weeks</option>
                                <option value="4 to 6 weeks">4 to 6 weeks</option>
                            </select>
                        </div>
                        <div class="right-container">
                            <h3> Email </h3>
                            <input class="input" type="text" name="email" id="email"/>
                            <h3> Phone number </h3>
                            <input class="input" type="text" name="phone-number" id="phone-number"/>
                            <div class="information-container">
                                <h3>Resume</h3>
                                <div class="upload-box" id="box-resume">
                                    <label for="resume"> Upload resume </label>
                                    <input type="file" class="file"  name="resume" id="resume"/>
                                    <div class="upload-status"><i class="icon-check"></i></div>
                                </div>
                                
                                <h3>Cover letter</h3>
                                <div class="upload-box" id="box-cover">
                                    <label for="cover"> Upload cover </label>
                                    <input type="file" class="file" name="cover" id="cover"/>
                                    <div class="upload-status"><i class="icon-check"></i></div>
                                </div>
                            </div>                
                        </div>
                        <div class="submit-button" id="submit">Submit</div>
                    </form>
                    
                </div> 
            </div>
        </div>
        <?php if(isset($_GET['note']) === false){

        }else if(htmlspecialchars($_GET['note']=="thanks")){  ?>
            <div class="note-container thanks-container">
                <div class="note-content">
                    <i class="icon-check"></i>
                    <h1> Thank you </h1>
                    <p> Thank you for applying for this job. </br>
                    We will get back to you as soon as possible. </p>
                    <a href="../job-listing/job.php"><div class="submit-button">Got it !</div></a>
                </div>
            </div>
    <?php } ?>
            <div class="note-container" id="note-container">
                <div class="note-content">
                    <i class="icon-danger"></i>
                    <h1> Warning </h1>
                    <p id="warning-text"></p>
                    <div class="submit-button" id="got-it">Got it !</div>
                </div>
            </div>

        <script src="js/job-apply.js" type="text/javascript"></script>
    </body>
</html>