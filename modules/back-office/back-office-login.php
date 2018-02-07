<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Foundry Multi-purpose HTML Template</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700" rel="stylesheet">
        <link href="../shared/css/reset.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/back-office-login.css" rel="stylesheet" type="text/css" media="all" />
    </head>

    <body>
        <div class="page-container">
            <div class="centered-container">
                <div class="logo-container">
                    <img src="../../assets/img/logo-coloured.png" class="logo">
                    <div class="logo-name">Chef-connect</div>
                </div>
                <div class="form-container">
                    <form action="verification.php" method="post">
                        <div class="input-label">Email</div>
                        <input type="text" name="email" class="login-input" autofocus/>
                        <div class="input-label">Mot de passe</div>
                        <input type="password" name="password" class="login-input" />
                        <input type="submit" class="submit-button" />
                    </form>
                    
                    <a href="../home/home.php">
                        <div class="return-link">Retourner au site</div>
                    </a>
                    
                </div>
            </div>
        </div>
    </body>
</html>