<!DOCTYPE html>
<html>

<head>
    <!-- Title -->
    <title>About Us - DG PRIMACH</title>
    <meta name="description" content="DG PRIMACH is one of the leading manufacturers of Asphalt Mixing Plants (AMP), specialized heavy machinery and equipment for Hot Mix Asphalt (HMA), Warm Mix Asphalt (WMA), Stone Mastic Asphalt (SMA), Reclaimed Asphalt Pavement (RAP), modified asphalt, bitumen, as well as emulsion, meeting high standards and requirements for construction and maintenance projects of world class infrastructure, road, highway and airport.">
    <meta name="keywords" content="Smelter a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <!-- Meta, Links, Scripts -->
    <?php include("./meta.php") ?>
</head>

<body>
    <header>
        <!-- Navigation Bar -->
        <?php
            $page1 = "about";
            include("./header.php");
        ?>
    </header>
    <!--//header-->

    <div class="banner-inner">
        <h1 class="banner-title">About</h1>
    </div>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
    </ol>

    <section class="banner-bottom">
        <div class="container">

            <!--/carousel-->
            <div class="banner">
                <div id="aboutCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#aboutCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#aboutCarousel" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item item1 active">
                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="carousel-item item2">
                            <div class="carousel-caption">

                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#aboutCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#aboutCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!--//carousel-->

            <!-- Three columns of text below the carousel -->
            <div class="row inner-sec-wthree">

                <div class="col-lg-6 bt-bottom-info" data-aos="fade-right">
                    <img src="images/plant_1.png" class="img-fluid" alt="About DG PRIMACH Plant 1">
                </div>
                <div class="col-lg-6 bt-bottom-info" data-aos="fade-left">
                    <img src="images/plant_2.jpg" class="img-fluid" alt="About DG PRIMACH Plant 2">
                </div>
                <div class="col bt-bottom-info" data-aos="fade-left">
                    <p class="mt-3">DG PRIMACH India Pvt Ltd is located in Hyderabad and is one of the leading suppliers of Asphalt Mixing Plants (AMP), specialized heavy machinery and auxiliary equipment for Hot Mix Asphalt (HMA), Warm Mix Asphalt (WMA), Stone Mastic Asphalt (SMA), Reclaimed Asphalt Pavement (RAP), modified asphalt, bitumen, emulsion, as well as DG PRIMACH product support.</p>
                    <p class="mt-3">Together with our business partners, we offer the best price, quality products and solutions to construction and maintenance projects of infrastructure, road, highway and airport across the world.</p>
                    <p class="mt-3">The management and engineering team behind DG PRIMACH are industry specialists with more than 30 years of experience and know how in the industry.</p>
                </div>
            </div>
            <!-- /.row -->
            
            <!-- Three columns of text below the carousel -->
            <div class="row inner-sec-wthree">

                <div class="col-12 bt-bottom-info" data-aos="fade-right">
                    <h5>OUR MISSION AND VISION</h5>
                </div>

                <div class="col-lg-6 bt-bottom-info ab_mis_vis" data-aos="fade-right">
                    <img src="images/about_mission.png" class="img-fluid" alt="DG PRIMACH Mission">
                    <h4>DG PRIMACH MISSION</h4>
                    <p class="mt-3">By discovering the potential of each individual market and developing it with our business partners, we aim to be a preferred heavy machinery supplier in the world.</p>
                </div>
                <div class="col-lg-6 bt-bottom-info ab_mis_vis" data-aos="fade-left">
                    <img src="images/about_vision.png" class="img-fluid" alt="Corporate Vision">
                    <h4>CORPORATE VISION</h4>
                    <p class="mt-3">“Contribute to building the world without boundaries” <br/>It is our vision that people all around the globe will benefit from the infrastructures built using DG PRIMACH machinery.</p>
                </div>
            </div>
            <!-- /.row -->

        </div>
    </section>
    <!---->
    <!--footer-->
    <footer>
        <?php include("./footer.php") ?>
    </footer>
    <!---->
    
    <!-- Copyright -->
    <?php include("./copyright.php") ?>

    <!-- Bottom Scripts -->
    <?php include("./bottom-scripts.php") ?>

</body>

</html>