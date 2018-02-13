<?php 
    session_start();
    include("back-office-security.php");
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Foundry Multi-purpose HTML Template</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700" rel="stylesheet">
        <link href="../shared/css/reset.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/header.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/back-office.css" rel="stylesheet" type="text/css" media="all" />
    </head>
    <body>
        <div class="page-container">
            <?php include("header.php"); ?>
            <div class="form-container">
            <h1>Add a <span>new blog</span></h1>
                <div class="form-card">
                    <form action="insert-blog.php" method="post" id="myForm">
                        <div class="border"> 
                            <h3> Blog-title </h3>
                            <input class="input" name="blog_title" type="text" id="blog_title"/>
                            <h3> Image Name</h3>
                            <input class="input" name="image_name" type="text" id="image_name"/></br>   
                            <h3> Blog-content </h3>
                            <textarea name="blog_content" id="blog_content"></textarea>
                            <input type="submit" value="validate" class="submit-button" id="submit-button"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php if(isset($_GET['job'])===false){ 

        }else if($_GET['job']=="done"){ ?>
                <div class="add-container">
                    <div class="add-content">
                        <p> the blog has been added to chef-connect </p>
                        <a href="add-blog.php">
                            <div class="btn-container"> OK </div>
                        </a>
                    </div>
                </div>
        <?php } ?>
        <script src="script/new-blog.js" type="text/javascript"></script>
    </body>
</html>
