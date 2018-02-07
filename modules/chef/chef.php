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
        <link href="../shared/css/header.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../shared/css/end-page.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/chef.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../../font-awesome/public/css/fontello.css" rel="stylesheet"/>
    </head>

    <body>
        <?php include('../shared/header.php'); ?>
        <div class="img"></div> 
            <div class="img-filter">
                <h1> Find a chef </h1>
            </div>
        <div class="page2container">
            <div class="main-container">
                <img class="background-image" src="../../assets/img/australia.png"/>
                <div><img class="title"src="../../assets/img/title-1.png"/></div>
                <div class="written-title">How it works ? </div>
                <div class="description-container">
                    <img class="picto"src="../../assets/img/apply.png"/>
                    <h2> Enquire </h2>
                    <p> Find the chef you need </p>
                </div>
                <div class="description-container center-description">
                    <img class="picto"src="../../assets/img/chef.png"/>
                    <h2> Connect </h2>
                    <p> Identify talent</p>
                </div>
                <div class="description-container">
                    <img class="picto"src="../../assets/img/sign.png"/>
                    <h2> Hire </h2>
                    <p> Endorse the successful candidate </p>
                </div>
            </div>
        </div>
        <div class="page3container">
             <div class="box-container service box-image">
                <div class="box-filter">
                    <div class="content-container">
                        <div class="title"><span class="bold">Culinary Excellence </div>
                        <img class="picto" src="../../assets/img/forks.png"/>
                        <p> We look for passion,
                         versatility and culinary expertise</br> in all of our candidates<span class="hidden-content">
                          and have access to a domestic</br>
                          and international network of chefs.</span></p>
                    </div>
                </div> 
            </div>
            <div class="box-container australia box-image">
                <div class="box-filter">
                    <div class="content-container">
                        <div class="title"> <span class="bold">Empower your kitchen </div>
                        <img class="picto" src="../../assets/img/forks.png"/>
                        <p>We empower you and your business to make the best decisions possible<span class="hidden-content"></br> by carefully
                         selecting and presenting chefs specific to your needs.</br>
                          We want you to stand out from the crowd.</span>  </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="transition-page">
            <img  class="title" src="../../assets/img/title-3.png"/>
        </div>
        <div class="form-image" id="form-section"> 
            <div class="form-filter">
            <div class="form-container">
                <div class="border">
                    <div class="written-title"> Find your chef </div>
                    <form action="../transition-chef/transition-chef.php" method="post" id="myform">
                        <div class="left-container">
                            <h3> Position </h3>
                            <select name="position" class="input" id="position">
                                <option value="rien"></option>
                                <option value="Commis">Commis</option>
                                <option value="chef">Chef</option>
                                <option value="Demi-chef">Demi-chef</option>
                                <option value="Chef de Partie">Chef de Partie</option>
                                <option value="Junior sous-chef">Junior sous-chef</option>
                                <option value="Sous-chef">Sous-chef</option>
                                <option value="Head chef">Head chef</option>
                                <option value="Executive chef">Executive chef</option>
                                <option value="Pastry chef">Pastry chef</option>
                            </select>
                            <h3> Salary ($ per year) </h3>
                            <input class="input" type="text" name="salary" id="salary"/>
                            <h3> Name </h3>
                            <input class="input" type="text" name="name" id="name"/>
                            <h3> Business Name </h3>
                            <input class="input" type="text" name="business-name" id="business-name"/>
                        </div>
                        <div class="right-container">
                                <h3> Email </h3>
                                <input class="input" type="text" name="email" id="email"/>
                                <h3> Phone number </h3>
                                <input class="input" type="text" name="phone-number" id="phone-number"/>
                            <div class="information-container">
                                <h3> Additional Information </h3>
                                <textarea class="additional-input" name="additional-information"></textarea>
                            </div>
                        </div>    
                        <div class="submit-button" id="submit">Submit</div>
                    </form>
                </div>
            </div> 
            </div>
        </div>
        
        <div class="note-container" id="note-container">
            <div class="note-content">
                <i class="icon-danger"></i>
                <h1> Warning </h1>
                <p> you need to fill in </br>
                all the sections </p>
                <div class="submit-button" id="got-it">Got it !</div>
            </div>
        </div>
        
        <?php if(isset($_GET['note']) ===false){ 

        }else if(htmlspecialchars($_GET['note']=="thanks")){?>
            <div class="note-container thanks-container">
                <div class="note-content">
                    <i class="icon-check"></i>
                    <h1> Thank you </h1>
                    <p> Thank you for your enquire </br>
                    We will get back to you as soon as possible. </p>
                    <a href="../employers/employers.php"><div class="submit-button">Got it !</div></a>
                </div>
            </div>
        <?php } ?> 
    <script src="js/chef.js" type="text/javascript"></script>

    <?php include("../shared/end-page.php"); ?>
    </body>
 </html>   