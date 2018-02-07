<?php
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
        <link href="css/contact-page.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../shared/css/header.css" rel="stylesheet" type="text/css" media="all" />
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
        <div class="background-container">
            <div class="img-filter">
                <div class="popup-container">
                    <form action="../transition-contact/transition-contact.php" method="post" id="myform">
                    <h1> Contact Us </h1>
                    <div class="left-container">
                        <h3> Full name </h3>
                        <input type="text" class="input" name="name" id="name"/>
                        <h3> Email </h3>
                        <input type="text" class="input" name="email" id="email"/>
                        <h3> Phone </h3>
                        <input type="text" class="input" name="phone-number" id="phone-number"/>
                    </div>
                    <div class="right-container">
                        <h3> Subject </h3>
                        <input type="text" class="input" name="subject" id="subject"/>
                        <div class="message-container">
                            <h3> Message </h3>
                            <textarea class="additional-input" name="message"></textarea>
                        </div>
                    </div>
                    <div class="submit-button" id="submit">Send Message </div>
                    </form>
                </div>
            </div>
        </div>
            <div class="note-container" id="note-container">
                <div class="note-content">
                    <i class="icon-danger"></i>
                    <h1> Warning </h1>
                    <p> you need to fill in </br>
                    all the sections</p>
                    <div class="submit-button" id="got-it">Got it !</div>
                </div>
            </div>

        <?php if(isset($_GET['note']) === false){

        }else if(htmlspecialchars($_GET['note']=="thanks")){?>
            <div class="note-container thanks-container">
                <div class="note-content">
                    <i class="icon-check"></i>
                    <h1> Thank you </h1>
                    <p> Thank you for sending us a message </br>
                    We will get back to you as soon as possible. </p>
                    <a href="../home/home.php"><div class="submit-button">Got it !</div></a>
                </div>
            </div>
        <?php } ?> 
        <script src="js/contact-page.js" type="text/javascript"></script>
    </body>
</html>