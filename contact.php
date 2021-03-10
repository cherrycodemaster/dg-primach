<!DOCTYPE html>
<html>

<head>
    <!-- Title -->
    <title>Contact Us - DG Primach - Asphalt Mixing Plant</title>
    <meta name="description" content="DG PRIMACH is one of the leading manufacturers of Asphalt Mixing Plants (AMP), specialized heavy machinery and equipment for Hot Mix Asphalt (HMA), Warm Mix Asphalt (WMA), Stone Mastic Asphalt (SMA), Reclaimed Asphalt Pavement (RAP), modified asphalt, bitumen, as well as emulsion, meeting high standards and requirements for construction and maintenance projects of world class infrastructure, road, highway and airport.">
    <meta name="keywords" content="Smelter a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <!-- Meta, Links, Scripts -->
    <?php include("./meta.php") ?>
</head>

<body>
    <header>
        <!-- Navigation Bar -->
        <?php
            $page1 = "contact";
            include("./header.php");
        ?>
    </header>

    <!--//header-->
    <div class="banner-inner">
        <h1 class="banner-title">Contact</h1>
    </div>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact Us</li>
    </ol>
    <!--//banner-->
    <!--/Contact-->
    <section class="services">
        <div class="container">

            <div class="row inner-sec-wthree">
                <div class="contact-map">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.0916517823853!2d78.42543861435348!3d17.407388706810966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9706cd7a0147%3A0x7c67f865a86ee847!2sDG+Primach+India+pvt+ltd.!5e0!3m2!1sen!2sin!4v1543157947341" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="address row">
                    <div class="col-md-4 address-grid-inf-w3layouts" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="fas fa-phone-volume" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6>Phone Number</h6>
                                <p>+91 89776 46046</p>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 address-grid-inf-w3layouts" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="far fa-envelope" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6>Email Address</h6>
                                <p>Email :
                                    <a href="mailto:info@dg-primach.in">info@dg-primach.in</a>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 address-grid-inf-w3layouts" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="fas fa-map-marker-alt" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6>Location</h6>
                                <p>
                                    1st Floor in 37/B, Banjara Hills, Hyderabad.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="contact_grid_right">
                    <h6>Drop a line</h6>
                    <form action="email-admin.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <!-- <label for="full_name">Full Name</label> -->
                                <input type="text" class="form-control" id="full_name" name="fullName" placeholder="Full Name" required="true">
                            </div>
                            <div class="form-group col-md-6">
                                <!-- <label for="company_name">Company Name</label> -->
                                <input type="text" class="form-control" id="company_name" name="companyName" placeholder="Company Name" required="true">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <!-- <label for="email">Email</label> -->
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="true">
                            </div>
                            <div class="form-group col-md-6">
                                <!-- <label for="phone">Phone</label> -->
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- <label for="message">Message</label> -->
                            <textarea class="form-control" id="message" name="message" placeholder="Message..." required="true"></textarea>
                        </div>
                        <button type="submit" name="submit">Submit</button>
                        <button type="reset">Clear</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--//Contact-->
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

