<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title><?php if(isset($_title)){ echo $_title.' | '; } ?><?= $this->config->config['title'] ?></title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <!-- Favicons -->
        <link href="<?= base_url() ?>assets/img/favicon.png" rel="icon">
        <link href="<?= base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">
        <!-- Template Main CSS File -->
        <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <!-- ======= Top Bar ======= -->
        <section id="topbar" class="d-none d-lg-block">
            <div class="container d-flex">
                <div class="contact-info mr-auto">
                    <i class="icofont-envelope"></i><a href="mailto:tirmiz786@gmail.com">tirmiz786@gmail.com</a>
                    <i class="icofont-phone"></i> +91 972 2809 786
                </div>
                <div class="social-links">
                    <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                </div>
            </div>
        </section>
        <!-- ======= Header ======= -->
        <header id="header">
            <div class="container d-flex">
                <div class="logo mr-auto">
                    <a href="<?= base_url('home') ?>"><img src="<?= base_url() ?>assets/img/logo.png" alt="" class="img-fluid" style="margin-top: 4px;"></a>
                </div>
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="<?= menu(1,'home',true) ?>"><a href="<?= base_url('home') ?>">Home</a></li>
                        <li class="<?= menu(1,'about') ?>"><a href="<?= base_url('about') ?>">About</a></li>
                        <li class="drop-down <?= menu(1,'products') ?>"><a href="#">Products</a>
                            <ul>
                                <!-- <li><a href="<?= base_url('products/sample') ?>">Sample</a></li> -->
                                <li><a href="<?= base_url('cold-storage') ?>">Cold storage Spares, Sales & Service</a></li>
                                <li><a href="<?= base_url('pharmaceutics-machinery') ?>">Pharmaceutics Machinery & Spares</a></li>
                                <li><a href="<?= base_url('products/sample') ?>">Plastic Metal Testing Machinery</a></li>
                                <li><a href="<?= base_url('products/sample') ?>">Pipe Fitting & Valves</a></li>
                                <li><a href="<?= base_url('products/sample') ?>">Air Conditioning Plants</a></li>
                                <li><a href="<?= base_url('products/sample') ?>">Fabrication Products</a></li>
                                <li><a href="<?= base_url('products/sample') ?>">Furnitures</a></li>
                                <li><a href="<?= base_url('products/sample') ?>">Clothing</a></li>
                                <li><a href="<?= base_url('products/sample') ?>">Garments & Hosiery Products</a></li>
                                <li><a href="<?= base_url('products/sample') ?>">Cutlery & Ornaments</a></li>
                                <li><a href="<?= base_url('products/sample') ?>">Groceries</a></li>
                                <li><a href="<?= base_url('products/sample') ?>">Dairy Products</a></li>
                                <li><a href="<?= base_url('products/sample') ?>">Fruits & Vegetables</a></li>
                            </ul>
                        </li>
                        <li class="<?= menu(1,'whyus') ?>"><a href="<?= base_url('whyus') ?>">Why us</a></li>
                        <li class="<?= menu(1,'gallery') ?>"><a href="<?= base_url('gallery') ?>">Gallery</a></li>
                        <li class="<?= menu(1,'contact') ?>"><a href="<?= base_url('contact') ?>">Contact</a></li>
                    </ul>
                </nav>
                <!-- .nav-menu -->
            </div>
        </header>
        <!-- End Header -->

        <?php if($this->uri->segment(1) == "" || $this->uri->segment(1) == "home"){ ?>
            <!-- Hero -->
            <section id="hero">
                <div class="hero-container">
                    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                        <div class="carousel-inner" role="listbox">
                            <!-- Slide 1 -->
                            <div class="carousel-item active" style="background: url(assets/images/banner1.jpg); background-repeat: no-repeat;background-size: cover;">
                                <div class="carousel-container">
                                    <div class="carousel-content">
                                        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Tirmizi</span></h2>
                                        <p class="animate__animated animate__fadeInUp" style="width:80%;">Let’s Make Your Business Explore The World Safely</p>
                                        <!--<a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>-->
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" style="background: url(assets/images/banner2.jpg); background-repeat: no-repeat;background-size: cover;">
                                <div class="carousel-container">
                                    <div class="carousel-content">
                                        <h2 class="animate__animated animate__fadeInDown"><span>Import Export</span> Services</h2>
                                        <!-- <p class="animate__animated animate__fadeInUp" style="width:80%;">Let’s Make Your Business Explore The World Safely</p> -->
                                        <!--<a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>-->
                                    </div>
                                </div>
                            </div>
                            <!-- 
                                <div class="carousel-item" style="background: url(assets/img/slide/slide-2.jpg)">
                                  <div class="carousel-container">
                                    <div class="carousel-content">
                                      <h2 class="animate__animated fanimate__adeInDown">Lorem <span>Ipsum Dolor</span></h2>
                                      <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                      <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                                    </div>
                                  </div>
                                </div>
                                
                                <div class="carousel-item" style="background: url(assets/img/slide/slide-3.jpg)">
                                  <div class="carousel-container">
                                    <div class="carousel-content">
                                      <h2 class="animate__animated animate__fadeInDown">Sequi ea <span>Dime Lara</span></h2>
                                      <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                      <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                                    </div>
                                  </div>
                                </div>-->
                        </div>
                        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>
            <!-- End Hero -->
        <?php } ?>

        <main id="main">
            <?php if($this->uri->segment(1) != "" && $this->uri->segment(1) != "home"){ ?>
                <!-- ======= Breadcrumbs ======= -->
                <section id="breadcrumbs" class="breadcrumbs">
                    <div class="container">
                        <ol>
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
                            <li><?php if(isset($_title)){ echo $_title; } ?></li>
                        </ol>
                        <h2><?php if(isset($_title)){ echo $_title; } ?></h2>
                    </div>
                </section>
                <!-- End Breadcrumbs -->
            <?php } ?>