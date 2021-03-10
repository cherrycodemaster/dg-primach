        <div class="header_top" id="home">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="logo text-left">
                    <h1>
                        <a class="navbar-brand" href="index.php">
                            <img class="logo-img" src="./images/dg-primach-logo.jpg">
                        </a>
                    </h1>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        
                    </span>

                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav m-sm-0 text-right">
                        <li class="nav-item <?php if($page1=='home'){echo 'active';} ?>">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown <?php if($page1=='about'){echo 'active';} ?>">
                            <a class="nav-link" href="about.php" id="navbarDropdown">
                                About
                                <i class="fas fa-angle-down d-none d-md-none d-lg-none d-xl-inline"></i>
                            </a>
                            <i class="fas fa-angle-down dropdown-toggle d-inline d-md-inline d-lg-none d-xl-none" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="<?php if($page2=='corporate-profile'){echo 'active';} ?>"><a class="dropdown-item" href="corporate-profile.php">Corporate Profile</a></li>
                                <li class="<?php if($page2=='management-team'){echo 'active';} ?>"><a class="dropdown-item sr-only" href="management-team.php">Management Team</a></li>
                                <li class="<?php if($page2=='achievements'){echo 'active';} ?>"><a class="dropdown-item" href="achievements.php">Achievements</a></li>
                                <li class="<?php if($page2=='quality-management'){echo 'active';} ?>"><a class="dropdown-item" href="quality-management.php">Quality Management</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown <?php if($page1=='why-dg-primach'){echo 'active';} ?>">
                            <a class="nav-link" href="why-dg-primach.php" id="navbarDropdown">
                                Why DG PRIMACH
                                <i class="fas fa-angle-down d-none d-md-none d-lg-none d-xl-inline"></i>
                            </a>
                            <i class="fas fa-angle-down dropdown-toggle d-inline d-md-inline d-lg-none d-xl-none" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="<?php if($page2=='high-reliability'){echo 'active';} ?>"><a class="dropdown-item" href="high-reliability.php">High Reliability</a></li>
                                <li class="<?php if($page2=='precise-and-efficient'){echo 'active';} ?>"><a class="dropdown-item" href="precise-and-efficient.php">Precise and Efficient</a></li>
                                <li class="<?php if($page2=='nature'){echo 'active';} ?>"><a class="dropdown-item" href="nature.php">Designed for People and Nature</a></li>
                                <li class="<?php if($page2=='mobility'){echo 'active';} ?>"><a class="dropdown-item" href="mobility.php">Mobility</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown <?php if($page1=='products'){echo 'active';} ?>">
                            <a class="nav-link" href="products.php" id="navbarDropdown">
                                Products
                                <i class="fas fa-angle-down d-none d-md-none d-lg-none d-xl-inline"></i>
                            </a>
                            <i class="fas fa-angle-down dropdown-toggle d-inline d-md-inline d-lg-none d-xl-none" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <li class="dropdown-submenu <?php if($page2=='dg-primach'){echo 'active';} ?>"><a class="dropdown-item dropdown-toggle" href="#">DG Series</a>
                                    <ul class="dropdown-menu">
                                        <li class="<?php if($page3=='compact-series'){echo 'active';} ?>"><a class="dropdown-item" href="compact-series.php">Compact Series</a></li>
                                        <li class="<?php if($page3=='mobile-series'){echo 'active';} ?>"><a class="dropdown-item" href="mobile-series.php">Mobile Series</a></li>
                                        <li class="<?php if($page3=='recycling-series'){echo 'active';} ?>"><a class="dropdown-item" href="recycling-series.php">Recycling Series</a></li>
                                        <li class="<?php if($page3=='standard-series'){echo 'active';} ?>"><a class="dropdown-item" href="standard-series.php">Standard Series</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu <?php if($page2=='primach'){echo 'active';} ?>"><a class="dropdown-item dropdown-toggle" href="#">Primach Series</a>
                                    <ul class="dropdown-menu">
                                        <li class="<?php if($page3=='compact-series'){echo 'active';} ?>"><a class="dropdown-item" href="compact-series.php">Compact Series</a></li>
                                        <li class="<?php if($page3=='mobile-series'){echo 'active';} ?>"><a class="dropdown-item" href="mobile-series.php">Mobile Series</a></li>
                                        <li class="<?php if($page3=='recycling-series'){echo 'active';} ?>"><a class="dropdown-item" href="recycling-series.php">Recycling Series</a></li>
                                        <li class="<?php if($page3=='standard-series'){echo 'active';} ?>"><a class="dropdown-item" href="standard-series.php">Standard Series</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if($page2=='retrofitting-and-special-systems'){echo 'active';} ?>"><a class="dropdown-item" href="retrofitting-and-special-systems.php">Retrofitting and Special Systems</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown <?php if($page1=='support'){echo 'active';} ?>">
                            <a class="nav-link" href="support.php" id="navbarDropdown">
                                Support
                                <i class="fas fa-angle-down d-none d-md-none d-lg-none d-xl-inline"></i>
                            </a>
                            <i class="fas fa-angle-down dropdown-toggle d-inline d-md-inline d-lg-none d-xl-none" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <li class="<?php if($page2=='installation-and-commissioning'){echo 'active';} ?>"><a class="dropdown-item" href="installation-and-commissioning.php">Installation and Commissioning</a></li>
                                <li class="<?php if($page2=='project-based-operation-support'){echo 'active';} ?>"><a class="dropdown-item" href="project-based-operation-support.php">Project Based Operation Support</a></li>
                                <li class="<?php if($page2=='amp-management'){echo 'active';} ?>"><a class="dropdown-item" href="amp-management.php">Asphalt Mixing Plant Management <br>and Remote Monitoring</a></li>
                                <li class="<?php if($page2=='service-support'){echo 'active';} ?>"><a class="dropdown-item" href="service-support.php">Service and Parts Support</a></li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link" href="news-and-media.php" id="navbarDropdown">
                                News & Media
                                <i class="fas fa-angle-down d-none d-md-none d-lg-none d-xl-inline"></i>
                            </a>
                            <i class="fas fa-angle-down dropdown-toggle d-inline d-md-inline d-lg-none d-xl-none" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="dg-primach-news.php">DG PRIMACH News</a></li>
                                <li><a class="dropdown-item" href="dg-primach-media.php">DG PRIMACH Media</a></li>
                            </ul>
                        </li> -->
                        <li class="nav-item <?php if($page1=='contact'){echo 'active';} ?>">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
