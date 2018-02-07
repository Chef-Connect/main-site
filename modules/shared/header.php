<?php if (isset($inHome) === true){ ?>
<div class="header" id="header">
<?php }else{ ?>
<div class="header darken-header" id="header">
<?php } ?>

    <div class="nav-left-part">
        <a href="../home/home.php"><img src="../../assets/img/logo-red.png" class="logo" alt="logo" /></a>
    </div>
    <div class="nav-right-part">
        <a href="../chef/chef.php"><div class="menu-item employer"> I am an employer </div></a>
        <a href="../job-listing/job.php"><div class="menu-item explore"> Explore jobs </div></a>
        <div class="burger-container" id="burger-container"> 
            <div class="border"> </div>
            <div class="border"> </div>
            <div class="border"> </div>
            <div class="burger-slide-container">
                <div class="burger-triangle"></div>
                <div class="menu-item-burger">
                    <a href="../job-listing/job.php">
                        <img class="picto" src="../../assets/img/toque-noir.png"/>
                        <h2 class="menu-item-show-burger"> Candidate </h2>
                    </a>
                    <a href="../chef/chef.php">
                        <i class="icon-hand-shake"></i>
                        <h2 class="menu-item-show-burger"> Employer </h2>
                    </a>
                </div>
                <div>
                <a href="../employers/employers.php">
                    <i class="icon-profile"></i>
                    <h2 class="menu-item-show-burger"> About us </h2>
                </a>
                </div>
                <div>
                <a href="../contact-page/contact-page.php">
                    <i class="icon-mail"></i>
                    <h2 class="menu-item-show-burger"> Contact us </h2>
                </a>
                </div>
            </div>
        </div>
    </div>
</div>