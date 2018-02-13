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
        <form action="add-image.php" method="post" enctype="multipart/form-data"> 
            <input type="file" name="image"/>
            <input type="submit" value="submit"/>
        </form>
            <div class="form-container">
                <h1>Add a <span>new job</span></h1>
                <div class="form-card">
                    <form action="insert-job.php" method="post" id="myForm">
                        <div class="border">
                            <h3> Description </h3>
                            <textarea name="description" id="description"></textarea>
                            <h3> Responsabilities </h3>
                            <textarea name="responsabilities" id="responsabilities"></textarea>
                            <h3> Requirements </h3>
                            <textarea name="requirements" id="requirements"></textarea>
                            <h3> Location </h3>
                            <input class="input" name="location" type="text" id="location"/>
                            <h3> Salary </h3>
                            <input class="input" name="salary" type="text" id="salary"/>
                            <h3> Position </h3>
                            <input class="input" name="position" type="text" id="position"/>
                            <h3> Employer Name </h3>
                            <input class="input" name="employer_name" type="text" id="employer_name"/>
                            <h3> Image Name</h3>
                            <input class="input" name="image_name" type="text" id="image_name"/></br>
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
                        <p> the job has been added to chef-connect </p>
                        <a href="back-office.php">
                            <div class="btn-container"> OK </div>
                        </a>
                    </div>
                </div>
        <?php } ?>
    <script src="script/new-job.js" type="text/javascript"></script>
    </body>
</html>