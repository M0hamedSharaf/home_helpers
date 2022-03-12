<?php
 include $_SERVER['DOCUMENT_ROOT'] . "/functions/functions.php";
?>
<?php include frontLayout('head.php'); ?>
<!-- Header Start -->
<div class="header home" style="background: linear-gradient(
      rgba(0, 83, 156, 1),
      rgba(0, 83, 156, 0.9),
      rgba(0, 83, 156, 1)
    ),
    url(<?= asset('site/img/header.jpg') ?>)">
    <div class="container-fluid">
        <div class="header-top row align-items-center">
            <div class="col-lg-3">
                <div class="brand">
                    <a href="<?= getPageSite('index.php'); ?>">
                        Home Helper
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="topbar">
                    <div class="topbar-col">
                        <a href="tel:+012 345 67890"><i class="fa fa-phone-alt"></i>+012 345 67890</a>
                    </div>
                    <div class="topbar-col">
                        <a href="mailto:info@example.com"><i class="fa fa-envelope"></i>info@example.com</a>
                    </div>
                    <div class="topbar-col">
                        <div class="topbar-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                

                <?php include frontLayout('navbar.php'); ?>




            </div>
        </div>


        <?php include components('hero.php'); ?>

        
    </div>
</div>
<!-- Header End -->


<!-- About Start -->
<?php include components('about.php'); ?>
<!-- About End -->


<!-- Workers Start -->
<?php include components('workers.php'); ?>
<!-- Workers End -->


<!-- Feature Start -->
<?php include components('feature.php'); ?>
<!-- Feature End -->


<!-- Team Start -->
<?php include components('team.php'); ?>
<!-- Team End -->


<!-- FAQs Start -->
<?php include components('faq.php'); ?>
<!-- FAQs End -->


<?php include frontLayout('footer.php'); ?>