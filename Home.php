<?php require('./user/SecurityAction.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<?php
$title = "Acceuil";
$nav = "home";
include('../OceanEyes/assets/head.php');
include('../OceanEyes/assets/Boostrap.php');
include('../OceanEyes/assets/Brand.php');
include('../OceanEyes/assets/Lnks.php');
?>

<body>
    <br>
    <div class="jumbotron">
        <div class="container">
            <div class="page-header text-center">
                <h4 class="hm">Bienvenue sur OceanEyes</h4>
            </div>
            <blockquote>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam iusto quis nostrum accusantium est, aliquam esse minus debitis neque obcaecati cum numquam consequuntur accusamus saepe iure odio voluptate error inventore doloremque. Porro aliquam doloremque esse repellendus recusandae non numquam odio, vero impedit iste quisquam nostrum, soluta magni! Fugit, autem ex.
                </p>
            </blockquote>

            <!-- carousel    -->
            <div id="my_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <!-- CAROUSEL 0 -->
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="content-section text-center">
                                <strong class="lead">bmw m3 competition GT</strong>
                                <div class="section-img">
                                    <div><img src="./img/1.jpg" class="size"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CAROUSEL 1 -->
                    <div class="carousel-item">
                        <div class="container">
                            <div class="content-section text-center">
                                <strong class="lead">bmw m2</strong>
                                <div class="section-img">
                                    <div><img src="./img/4.jpg" class="size"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CAROUSEL 2 -->
                    <div class="carousel-item">
                        <div class="container">
                            <div class="content-section text-center">
                                <stron class="lead">bmw M4 competition black edition</strong>
                                    <div class="section-img">
                                        <div><img src="./img/5.jpg" class="size"></div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- VIDEO -->
                    <div class="carousel-item">
                        <div class="container">
                            <div class="content-section text-center">
                                <strong class="lead">Ghettoven TRIAD </strong>
                                <div class="section-img">
                                    <div><video class="size" controls>
                                            <source src="./video/Ghettoven Triad(720p).mp4" type="video/mp4">
                                        </video></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT LEFT -->
                <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                    <i class="fa fa-long-arrow-left" style="font-size:24px; padding-top: 4px;"></i>
                </a>
                <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                    <i class="fa fa-long-arrow-right" style="font-size:24px; padding-top: 4px;"></i>
                </a>
            </div>
        </div>
    </div>
    </div>
    <?php include('./page/Script.php') ?>
</body>
<?php
include('./assets/Footer.php');
?>

</html>