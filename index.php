<?php
$page = basename($_SERVER['PHP_SELF']);

$base_url = "http://localhost/siddex1/Siddex";

?>
<!doctype php>
<php class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">

        <!-- Site Title -->
        <title>Bexon - Corporate Business php Template</title>

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">

        <!-- CSS here -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/bexon-icons.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/swiper.min.css">
        <link rel="stylesheet" href="assets/css/venobox.min.css">
        <link rel="stylesheet" href="assets/css/odometer-theme-default.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>

    <body>
        <div class="body-overlay"></div>

        <div class="tj-preloader is-loading">
            <div class="tj-preloader-inner">
                <div class="tj-preloader-ball-wrap">
                    <!-- <div class="tj-preloader-ball-inner-wrap">
                        <div class="tj-preloader-ball-inner">
                            <div class="tj-preloader-ball"></div>
                        </div>
                        <div class="tj-preloader-ball-shadow"></div>
                    </div> -->
                    <div id="tj-weave-anim" class="tj-preloader-text">Loading...</div>
                </div>
            </div>
            <div class="tj-preloader-overlay"></div>
        </div>
        <!-- Preloader end -->
        <!-- back to top start -->

        <!-- back to top end -->

        <!-- start: Search Popup -->
        <div class="search-popup-overlay"></div>
        <!-- end: Search Popup -->

        <!-- start: Hamburger Menu -->
        <div class="hamburger-area d-lg-none">
            <div class="hamburger_bg"></div>
            <div class="hamburger_wrapper">
                <div class="hamburger_inner">
                    <div class="hamburger_top d-flex align-items-center justify-content-between">
                        <div class="hamburger_logo">
                            <a href="index.php" class="mobile_logo">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a>
                        </div>
                        <div class="hamburger_close">
                            <button class="hamburger_close_btn"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                    </div>
                    <div class="hamburger-search-area">
                        <h5 class="hamburger-title">Search Now!</h5>
                        <div class="hamburger_search">
                            <form method="get" action="index.php">
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                <input type="search" autocomplete="off" name="s" value="" placeholder="Search here...">
                            </form>
                        </div>
                    </div>
                    <div class="hamburger_menu">
                        <div class="mobile_menu"></div>
                    </div>
                    <div class="hamburger-infos">
                        <h5 class="hamburger-title">Contact Info</h5>
                        <div class="contact-info">
                            <div class="contact-item">
                                <span class="subtitle">Phone</span>
                                <a class="contact-link" href="tel:8089091313">808-909-1313</a>
                            </div>
                            <div class="contact-item">
                                <span class="subtitle">Email</span>
                                <a class="contact-link" href="mailto:info@bexon.com">info@bexon.com</a>
                            </div>
                            <div class="contact-item">
                                <span class="subtitle">Location</span>
                                <span class="contact-link">993 Renner Burg, West Rond, MT 94251-030</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hamburger-socials">
                    <h5 class="hamburger-title">Follow Us</h5>
                    <div class="social-links style-3">
                        <ul>
                            <li><a href="https://www.facebook.com/" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li><a href="https://x.com/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/" target="_blank"><i
                                        class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Hamburger Menu -->

        <!-- start: Header Area -->
        <header class="header-area h9-header header-absolute section-gap-x">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header-wrapper">
                            <!-- site logo -->
                            <div class="site_logo">
                                <a class="logo" href="index.php"><img src="assets/images/logo.png" alt=""></a>
                            </div>

                            <!-- navigation -->
                            <div class="menu-area d-none d-lg-inline-flex align-items-center">
                                <nav id="mobile-menu" class="mainmenu">
                                    <ul>
                                        <li class="<?= $page == 'index.php' ? 'current-menu-ancestor' : '' ?>"><a
                                                href="<?= $base_url ?>/index.php">Home</a>
                                        </li>
                                        <li class="<?= $page == 'about.php' ? 'current-menu-item' : '' ?>"><a
                                                href="<?= $base_url ?>/about.php">About Us</a>
                                        </li>
                                        <li
                                            class="has-dropdown <?= $page == 'service-details.php' ? 'current-menu-item' : '' ?>">
                                            <a href="service-details.php?service=website-design">Services</a>

                                            <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">
                                                <li>
                                                    <div class="mega-menu-wrapper">

                                                        <!-- OUR EXPERTISE -->
                                                        <div class="mega-menu-pages-single">
                                                            <div class="mega-menu-pages-single-inner">
                                                                <h6 class="mega-menu-title">OUR EXPERTISE</h6>

                                                                <div class="mega-menu-list">
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=website-design">Website
                                                                        Designing & Development</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=retail-ecommerce">E-commerce
                                                                        Development</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=domain-hosting">Domain
                                                                        &
                                                                        Hosting</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- MEDIA & PR -->
                                                        <div class="mega-menu-pages-single">
                                                            <div class="mega-menu-pages-single-inner">
                                                                <h6 class="mega-menu-title">MEDIA & PR</h6>

                                                                <div class="mega-menu-list">
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=influencer-marketing">Influencer
                                                                        Marketing</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=voice-call-centre">Voice
                                                                        Call Centre</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=social-media">Social
                                                                        Media Management</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=digital-marketing">Digital
                                                                        Marketing</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=whatsapp-business-api">WhatsApp
                                                                        Business API</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- TRENDING TECHNOLOGY -->
                                                        <div class="mega-menu-pages-single">
                                                            <div class="mega-menu-pages-single-inner">
                                                                <h6 class="mega-menu-title">TRENDING TECHNOLOGY</h6>

                                                                <div class="mega-menu-list">
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=app-development">App
                                                                        Development</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=web-app-development">Web
                                                                        App
                                                                        Development</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=ai&ml-development">AI
                                                                        & ML
                                                                        Development</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=digital-engineering">Digital
                                                                        Engineering</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=api-services">API
                                                                        Services</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Right Side Banner -->
                                                        <div class="mega-menu-pages-single">
                                                            <div class="mega-menu-pages-single-inner">
                                                                <div class="feature-box">
                                                                    <div class="feature-content">
                                                                        <h2 class="title">Need Help?</h2>
                                                                        <span>Let's Build Your Business Online</span>

                                                                        <a class="read-more feature-contact"
                                                                            href="tel:+918321890640">
                                                                            <i class="fa-solid fa-phone"></i>
                                                                            <span>+91 83218 90640</span>
                                                                        </a>
                                                                    </div>

                                                                    <div class="feature-images">
                                                                        <img src="assets/images/service/service-ad.webp"
                                                                            alt="Services">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li
                                            class="has-dropdown <?= $page == 'product-details.php' ? 'current-menu-item' : '' ?>">
                                            <a href="<?= $base_url ?>/product-details.php">Products</a>
                                            <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">
                                                <li>
                                                    <div class="mega-menu-wrapper">

                                                        <div class="mega-menu-pages-single">
                                                            <div class="mega-menu-pages-single-inner">
                                                                <h6 class="mega-menu-title">Ecommerce Product</h6>
                                                                <div class="mega-menu-list">
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=multi-vendor-web-app">Multi
                                                                        Vendor (Web + APP)</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=multi-vendor-reactjs">Multi
                                                                        Vendor (ReactJs)</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=online-grocery-webapi">Online
                                                                        Grocery (Web + APP)</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=online-grocery-apionly">Online
                                                                        Grocery (APP Only)</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=ecomm-single-vendor">Ecomm
                                                                        Single Vendor (Web + APP)</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=ecomm-single-vendor-web">Ecommerce
                                                                        Single Vendor (Web)</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=ecomm-single-vendor-app">Ecommerce
                                                                        Single Vendor (APP)</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="mega-menu-pages-single">
                                                            <div class="mega-menu-pages-single-inner">
                                                                <h6 class="mega-menu-title">CMS</h6>
                                                                <div class="mega-menu-list">
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=mass-attendance">Mass
                                                                        Attendance Management System</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=human-resource">Human
                                                                        Resource Management System</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=community-management">Community
                                                                        Management</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=ecommerce-solution">E-commerce
                                                                        Solution</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=mlm-software">MLM
                                                                        (Multi-Level Marketing) Software</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=industry-erp">Industry
                                                                        Automation ERP</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=ecommerce-platform">E-commerce
                                                                        Platform For Digital
                                                                        Production</a>

                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="mega-menu-pages-single">
                                                            <div class="mega-menu-pages-single-inner">
                                                                <h6 class="mega-menu-title">CMS</h6>
                                                                <div class="mega-menu-list">
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=smart-farming">Smart
                                                                        Farming & Agriculture
                                                                        Solutions</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=news-portal">News
                                                                        Portal Design & Development</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=grocery-application">Grocery
                                                                        Application Development</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=college-management">College
                                                                        Management System</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=food-delivery">Food
                                                                        Delivery Application</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=vehicle-tracking">Vehicle
                                                                        Tracking System</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=classified-application">Classified
                                                                        Application</a>
                                                                </div>
                                                            </div>

                                                        </div>


                                                        <div class="col-12 col-lg-3 mega-menu-pages-single">
                                                            <div class="mega-menu-pages-single-inner">
                                                                <div class="feature-box">
                                                                    <div class="feature-content">
                                                                        <h2 class="title">Modern</h2>
                                                                        <span>Home Makeover</span>
                                                                        <a class="read-more feature-contact"
                                                                            href="tel:8321890640">
                                                                            <i class="fa-solid fa-phone"></i>
                                                                            <span>+8 (321) 890-640</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="feature-images">
                                                                        <img src="assets/images/service/service-ad.webp"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="<?= $page == 'careers.php' ? 'current-menu-item' : '' ?>"><a
                                                href="<?= $base_url ?>/careers.php">Career</a></li>
                                        <li class="has-dropdown <?= $page == 'shop.php' ? 'current-menu-item' : '' ?>">
                                            <a href="<?= $base_url ?>/shop/shop.php">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?= $base_url ?>/shop/shop.php">Shop</a></li>
                                                <li><a href="<?= $base_url ?>/shop/shop-details.php">Shop Details</a>
                                                </li>
                                                <li><a href="<?= $base_url ?>/shop/cart.php">Cart</a></li>
                                                <li><a href="<?= $base_url ?>/shop/checkout.php">Checkout</a></li>
                                                <li><a href="<?= $base_url ?>/shop/wishlist.php">Wishlist</a></li>
                                                <li><a href="<?= $base_url ?>/shop/login.php">Login</a></li>
                                            </ul>
                                        </li>
                                        <li class="<?= $page == 'contact.php' ? 'current-menu-item' : '' ?>"><a
                                                href="<?= $base_url ?>/contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>

                            <!-- header right info -->
                            <div class="header-right-item d-none d-lg-inline-flex">
                                <div class="header-search">
                                    <button class="search">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                    <button type="button" class="search_close_btn">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>

                                <div class="header-button">
                                    <a class="tj-primary-btn" href="contact.php">
                                        <span class="btn-text"><span>Let’s Talk</span></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>

                            <!-- menu bar -->
                            <div class="menu_bar mobile_menu_bar d-lg-none">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search Popup -->
            <div class="search_popup">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="tj_search_wrapper">
                                <div class="search_form">
                                    <form action="#">
                                        <div class="search_input">
                                            <div class="search-box">
                                                <input class="search-form-input" type="text"
                                                    placeholder="Type Words and Hit Enter" required>
                                                <button type="submit">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end: Header Area -->

        <!-- start: Header Area -->
        <header class="header-area header-3 header-duplicate header-sticky section-gap-x">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header-wrapper">
                            <!-- site logo -->
                            <div class="site_logo">
                                <a class="logo" href="index.php"><img src="assets/images/logo.png" alt=""></a>
                            </div>

                            <!-- navigation -->
                            <div class="menu-area d-none d-lg-inline-flex align-items-center">
                                <nav class="mainmenu">
                                    <ul>
                                        <li class="<?= $page == 'index.php' ? 'current-menu-ancestor' : '' ?>"><a
                                                href="<?= $base_url ?>/index.php">Home</a>

                                        </li>
                                        <li class="<?= $page == 'about.php' ? 'current-menu-item' : '' ?>"><a
                                                href="<?= $base_url ?>/about.php">About Us</a>

                                        </li>
                                        <li class=" has-dropdown
                                                <?= $page == 'service-details.php' ? 'current-menu-item' : '' ?>">
                                            <a href="service-details.php?service=website-design">Services</a>

                                            <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">
                                                <li>
                                                    <div class="mega-menu-wrapper">

                                                        <!-- OUR EXPERTISE -->
                                                        <div class="mega-menu-pages-single">
                                                            <div class="mega-menu-pages-single-inner">
                                                                <h6 class="mega-menu-title">OUR EXPERTISE</h6>

                                                                <div class="mega-menu-list">
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=website-design">Website
                                                                        Designing & Development</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=retail-ecommerce">E-commerce
                                                                        Development</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=domain-hosting">Domain
                                                                        &
                                                                        Hosting</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- MEDIA & PR -->
                                                        <div class="mega-menu-pages-single">
                                                            <div class="mega-menu-pages-single-inner">
                                                                <h6 class="mega-menu-title">MEDIA & PR</h6>

                                                                <div class="mega-menu-list">
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=influencer-marketing">Influencer
                                                                        Marketing</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=voice-call-centre">Voice
                                                                        Call Centre</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=social-media">Social
                                                                        Media Management</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=digital-marketing">Digital
                                                                        Marketing</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=whatsapp-business-api">WhatsApp
                                                                        Business API</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- TRENDING TECHNOLOGY -->
                                                        <div class="mega-menu-pages-single">
                                                            <div class="mega-menu-pages-single-inner">
                                                                <h6 class="mega-menu-title">TRENDING TECHNOLOGY</h6>

                                                                <div class="mega-menu-list">
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=app-development">App
                                                                        Development</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=web-app-development">Web
                                                                        App
                                                                        Development</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=ai&ml-development">AI
                                                                        & ML
                                                                        Development</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=digital-engineering">Digital
                                                                        Engineering</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/service-details.php?service=api-services">API
                                                                        Services</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Right Side Banner -->
                                                        <div class="mega-menu-pages-single">
                                                            <div class="mega-menu-pages-single-inner">
                                                                <div class="feature-box">
                                                                    <div class="feature-content">
                                                                        <h2 class="title">Need Help?</h2>
                                                                        <span>Let's Build Your Business
                                                                            Online</span>

                                                                        <a class="read-more feature-contact"
                                                                            href="tel:+918321890640">
                                                                            <i class="fa-solid fa-phone"></i>
                                                                            <span>+91 83218 90640</span>
                                                                        </a>
                                                                    </div>

                                                                    <div class="feature-images">
                                                                        <img src="assets/images/service/service-ad.webp"
                                                                            alt="Services">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li
                                            class="has-dropdown <?= $page == 'product-details.php' ? 'current-menu-item' : '' ?>">
                                            <a href="product-details.php">Products</a>
                                            <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">
                                                <li>
                                                    <div class="mega-menu-wrapper">

                                                        <div class="mega-menu-pages-single">
                                                            <div class="mega-menu-pages-single-inner">
                                                                <h6 class="mega-menu-title">Ecommerce Product</h6>
                                                                <div class="mega-menu-list">
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=multi-vendor-web-app">Multi
                                                                        Vendor (Web + APP)</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=multi-vendor-reactjs">Multi
                                                                        Vendor (ReactJs)</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=online-grocery-webapi">Online
                                                                        Grocery (Web + APP)</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=online-grocery-apionly">Online
                                                                        Grocery (APP Only)</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=ecomm-single-vendor">Ecomm
                                                                        Single Vendor (Web + APP)</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=ecomm-single-vendor-web">Ecommerce
                                                                        Single Vendor (Web)</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=ecomm-single-vendor-app">Ecommerce
                                                                        Single Vendor (APP)</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="mega-menu-pages-single">
                                                            <div class="mega-menu-pages-single-inner">
                                                                <h6 class="mega-menu-title">CMS</h6>
                                                                <div class="mega-menu-list">
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=mass-attendance">Mass
                                                                        Attendance Management System</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=human-resource">Human
                                                                        Resource Management System</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=community-management">Community
                                                                        Management</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=ecommerce-solution">E-commerce
                                                                        Solution</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=mlm-software">MLM
                                                                        (Multi-Level Marketing) Software</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=industry-erp">Industry
                                                                        Automation ERP</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=ecommerce-platform">E-commerce
                                                                        Platform For Digital
                                                                        Production</a>

                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="mega-menu-pages-single">
                                                            <div class="mega-menu-pages-single-inner">
                                                                <h6 class="mega-menu-title">CMS</h6>
                                                                <div class="mega-menu-list">
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=smart-farming">Smart
                                                                        Farming & Agriculture
                                                                        Solutions</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=news-portal">News
                                                                        Portal Design & Development</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=grocery-application">Grocery
                                                                        Application Development</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=college-management">College
                                                                        Management System</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=food-delivery">Food
                                                                        Delivery Application</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=vehicle-tracking">Vehicle
                                                                        Tracking System</a>
                                                                    <a
                                                                        href="<?= $base_url ?>/product-details.php?product=classified-application">Classified
                                                                        Application</a>
                                                                </div>
                                                            </div>

                                                        </div>


                                                        <div class="col-12 col-lg-3 mega-menu-pages-single">
                                                            <div class="mega-menu-pages-single-inner">
                                                                <div class="feature-box">
                                                                    <div class="feature-content">
                                                                        <h2 class="title">Modern</h2>
                                                                        <span>Home Makeover</span>
                                                                        <a class="read-more feature-contact"
                                                                            href="tel:8321890640">
                                                                            <i class="fa-solid fa-phone"></i>
                                                                            <span>+8 (321) 890-640</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="feature-images">
                                                                        <img src="assets/images/service/service-ad.webp"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="<?= $page == 'careers.php' ? 'current-menu-item' : '' ?>"><a
                                                href="<?= $base_url ?>/careers.php">Career</a></li>

                                        <li class="has-dropdown <?= $page == 'shop.php' ? 'current-menu-item' : '' ?>">
                                            <a href="<?= $base_url ?>/shop/shop.php">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?= $base_url ?>/shop/shop.php">Shop</a></li>
                                                <li><a href="<?= $base_url ?>/shop/shop-details.php">Shop Details</a>
                                                </li>
                                                <li><a href="<?= $base_url ?>/shop/cart.php">Cart</a></li>
                                                <li><a href="<?= $base_url ?>/shop/checkout.php">Checkout</a></li>
                                                <li><a href="<?= $base_url ?>/shop/wishlist.php">Wishlist</a></li>
                                                <li><a href="<?= $base_url ?>/shop/login.php">Login</a></li>
                                            </ul>
                                        </li>
                                        <li class="<?= $page == 'contact.php' ? 'current-menu-item' : '' ?>"><a
                                                href="<?= $base_url ?>/contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>

                            <!-- header right info -->
                            <div class="header-right-item d-none d-lg-inline-flex">
                                <div class="header-search">
                                    <button class="search">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                    <button type="button" class="search_close_btn">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="header-button">
                                    <a class="tj-primary-btn" href="contact.php">
                                        <span class="btn-text"><span>Let’s Talk</span></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>

                            <!-- menu bar -->
                            <div class="menu_bar mobile_menu_bar d-lg-none">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search Popup -->
            <div class="search_popup">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="tj_search_wrapper">
                                <div class="search_form">
                                    <form action="#">
                                        <div class="search_input">
                                            <div class="search-box">
                                                <input class="search-form-input" type="text"
                                                    placeholder="Type Words and Hit Enter" required>
                                                <button type="submit">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end: Header Area -->

        <div id="smooth-wrapper">
            <div id="smooth-content">
                <main id="primary" class="site-main">
                    <div class="top-space-15"></div>
                    <!-- start: Banner Section -->
                    <section class="h9-hero">
                        <div class="h9-hero-inner">
                            <div class="h9-hero-bg-image" data-bg-image="assets/images/hero/h9-hero-bg.webp"></div>
                            <div class="h9-hero-item-wrapper">
                                <div class="h9-hero-content">
                                    <h1 class="h9-hero-title text-anim">Empower <span class="wow fadeInLeft"
                                            data-wow-delay="0.3s"></span>
                                        Your Business.
                                    </h1>
                                    <div class="h9-hero-desc-area">
                                        <h4 class="title wow fadeInUp" data-wow-delay="0.5s">Solutions That Scale.</h4>
                                        <div class="desc-inner wow fadeInUp" data-wow-delay="0.7s">
                                            <p class="desc">Recognized by the industry leaders, of our award-winning
                                                team has are <a href="portfolio.php">Proven record</a> of delivering
                                                excellence across an projects.
                                                Recognized by the industry leaders, of our award.</p>
                                            <a class="tj-primary-btn" href="contact.php">
                                                <span class="btn-text"><span>Get Started</span></span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="h9-hero-social wow fadeInUp" data-wow-delay="0.9s">
                                        <div class="social-links style-3">
                                            <ul>
                                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                                            class="fa-brands fa-facebook-f"></i></a>
                                                </li>
                                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                                            class="fa-brands fa-instagram"></i></a>
                                                </li>
                                                <li><a href="https://x.com/" target="_blank"><i
                                                            class="fa-brands fa-x-twitter"></i></a></li>
                                                <li><a href="https://www.linkedin.com/" target="_blank"><i
                                                            class="fa-brands fa-linkedin-in"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="h9-hero-img  img-parallax wow fadeInUp" data-wow-delay="0.9s">
                                    <img src="assets/images/hero/h9-hero-img.webp" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="h7-hero-shape h9-hero-shape-1 wow fadeInUpBig" data-wow-delay="1s"><img
                                class="tj-anim-move-var-big" src="assets/images/shape/h7-hero-blur-1.png" alt=""></div>
                        <div class="h7-hero-shape h9-hero-shape-2 wow fadeInDownBig" data-wow-delay="1.2s"><img
                                class="tj-anim-move-var-big-reverse" src="assets/images/shape/h7-hero-blur-2.png"
                                alt=""></div>
                    </section>
                    <!-- end: Banner Section -->

                    <!-- start: Choose Section -->
                    <section id="choose" class="tj-choose-section section-gap">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="sec-heading style-8 sec-heading-centered">
                                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Choose the Best</span>
                                        <h2 class="sec-title title-anim">Empowering Business with Expertise.</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-gap-4 rightSwipeWrap">
                                <div class="col-md-6 col-lg-4">
                                    <div class="choose-box customers-box h9-choose-box right-swipe">
                                        <h4 class="title">Providing the Our Best Business Solution Ever.</h4>
                                        <div class="customers-inner">
                                            <div class="customers">
                                                <ul>
                                                    <li class="wow fadeInLeft" data-wow-delay=".5s"><img
                                                            src="assets/images/testimonial/client-1.webp" alt=""></li>
                                                    <li class="wow fadeInLeft" data-wow-delay=".6s"><img
                                                            src="assets/images/testimonial/client-2.webp" alt=""></li>
                                                    <li class="wow fadeInLeft" data-wow-delay=".7s"><img
                                                            src="assets/images/testimonial/client-3.webp" alt=""></li>
                                                    <li class="wow fadeInLeft" data-wow-delay=".8s"><img
                                                            src="assets/images/testimonial/client-4.webp" alt=""></li>

                                                </ul>
                                            </div>
                                            <div class="rating-area">
                                                <div class="star-ratings">
                                                    <div class="fill-ratings" style="width: 100%">
                                                        <span>★★★★★</span>
                                                    </div>
                                                    <div class="empty-ratings">
                                                        <span>★★★★★</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="customers-text">100+ happy customer.</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="choose-box h9-choose-box right-swipe">
                                        <div class="choose-content">
                                            <div class="choose-icon">
                                                <i class="tji-award"></i>
                                            </div>
                                            <h4 class="title">Award-Winning Expertise</h4>
                                            <p class="desc">Recognized by industry leaders, our award-winning team has a
                                                proven record of
                                                delivering
                                                excellence across projects.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="choose-box h9-choose-box h9-choose-bg right-swipe"
                                        data-bg-image="assets/images/choose/h9-choose-bg.webp">
                                        <div class="choose-content">
                                            <h4 class="title">Dedicated Support</h4>
                                            <p class="desc">Our team is always available for address expert concerns,
                                                providing quick and
                                                effective
                                                solution to keep your business.</p>
                                            <a class="text-btn" href="contact.php">
                                                <span class="btn-text"><span>Contact Us</span></span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- end: Choose Section -->

                    <!-- start: Maquee Area -->
                    <section class="h5-maquee z-2">
                        <div class="h5-maquee-inner">
                            <div class="swiper h5-maquee-slider">
                                <div class="swiper-wrapper  h5-maquee-slider-wrapper">
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Innovation</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Success</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Leadership</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Enterprise</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Business Growth</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Corporate</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Results</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Innovation</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Success</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Leadership</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Enterprise</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Business Growth</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div dir="rtl" class="h5-maquee-inner h5-maquee-inner-rtl">
                            <div class="swiper h5-maquee-slider">
                                <div class="swiper-wrapper  h5-maquee-slider-wrapper">
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Innovation</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Success</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Leadership</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Enterprise</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Business Growth</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Corporate</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Results</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Innovation</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Success</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Leadership</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Enterprise</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h5-maquee-slider-item">
                                        <div class="marquee-box">
                                            <div class="marquee-icon-wrapper">
                                                <div class="marquee-icon"><i class="fa-solid fa-star"></i></div>
                                            </div>
                                            <div class="marquee-title">
                                                <h4 class="title">Business Growth</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- end: Maquee Area -->

                    <!-- start: About Section -->
                    <section class="h9-about-section section-bottom-gap">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="sec-heading style-8 h9-sec-heading">
                                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s">About our
                                            company</span>
                                        <h2 class="sec-title title-highlight wow fadeInUp" data-wow-delay=".3s">
                                            <span>Our Stories</span> on
                                            Begins
                                            Passion Driven by Purpose, and
                                            Fueled by a Relentless Pursuit of Results and Client Real Success.
                                        </h2>
                                    </div>
                                    <div class="h9-about-area">
                                        <div class="about-img-area h9-about-img wow fadeInLeft" data-wow-delay=".3s">
                                            <div class="about-img overflow-hidden">
                                                <img data-speed=".8" src="assets/images/about/h9-about.webp" alt="">
                                            </div>
                                            <div class="box-area">
                                                <div class="author-info wow fadeInUp" data-wow-delay=".3s">
                                                    <h4 class="title">Eade Marren</h4>
                                                    <span class="designation">CEO & Founder</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h9-about-content">
                                            <p class="desc wow fadeInUp" data-wow-delay=".4s">Recognize that exceptional
                                                customer experiences
                                                are at
                                                the heart of every successful
                                                business. Our Customer Experience Solutions are crafted to help you
                                                transform every interaction
                                                your
                                                customers have with your brand busin into a meaningful and positive
                                                experience. We believe that
                                                understanding the customer.</p>
                                            <div class="h9-about-funfact wow fadeInUp" data-wow-delay=".6s">
                                                <div class="countup-item">
                                                    <div class="inline-content">
                                                        <span class="odometer countup-number" data-count="20"></span>
                                                        <span class="count-plus">M</span>
                                                    </div>
                                                    <span class="count-text">Reach Worldwide empower dreams
                                                        everywhere.</span>
                                                </div>
                                                <div class="countup-item">
                                                    <div class="inline-content">
                                                        <span class="odometer countup-number" data-count="8.5"></span>
                                                        <span class="count-plus">X</span>
                                                    </div>
                                                    <span class="count-text">Faster Growth starts smart solutions
                                                        today.</span>
                                                </div>
                                            </div>
                                            <div class="about-btn-area-2 wow fadeInUp" data-wow-delay=".7s">
                                                <a class="tj-primary-btn" href="about.php">
                                                    <span class="btn-text"><span>Learn More</span></span>
                                                    <span class="btn-icon"><i
                                                            class="fa-solid fa-arrow-right"></i></span>
                                                </a>
                                                <a class="video-btn video-popup" data-autoplay="true"
                                                    data-vbtype="video" data-maxwidth="1200px"
                                                    href="https://www.youtube.com/watch?v=MLpWrANjFbI">
                                                    <span class="play-btn"><i class="fa-solid fa-play"></i></span>
                                                    <span class="video-text">Play our reels</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- end: About Section -->

                    <!-- start: Service Section -->
                    <section
                        class="h9-service section-gap  section-gap-x tj-sticky-panel-container-2 tj-progress-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-4 ">
                                    <div class="sec-heading style-8  tj-sticky-panel-2">
                                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s">CHOOSE THE BEST</span>
                                        <h2 class="sec-title title-anim">Scalable business services</h2>
                                        <div class="h9-service-more wow fadeInUp" data-wow-delay=".3s">
                                            <a class="tj-primary-btn" href="service.php">
                                                <span class="btn-text"><span>More services</span></span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-8 ">
                                    <div class="h9-service-scroll-progress tj-scroll-progress tj-sticky-panel-2">
                                        <div class="tj-scroll-progress-item active">
                                            <h5 class="tj-scroll-progress-sln">01.</h5>
                                            <div class="tj-scroll-progress-ind">
                                                <div class="tj-scroll-progress-ind-inner"></div>
                                            </div>
                                        </div>
                                        <div class="tj-scroll-progress-item">
                                            <h5 class="tj-scroll-progress-sln">02.</h5>
                                            <div class="tj-scroll-progress-ind">
                                                <div class="tj-scroll-progress-ind-inner"></div>
                                            </div>
                                        </div>
                                        <div class="tj-scroll-progress-item">
                                            <h5 class="tj-scroll-progress-sln">03.</h5>
                                            <div class="tj-scroll-progress-ind">
                                                <div class="tj-scroll-progress-ind-inner"></div>
                                            </div>
                                        </div>
                                        <div class="tj-scroll-progress-item">
                                            <h5 class="tj-scroll-progress-sln">04.</h5>
                                            <div class="tj-scroll-progress-ind">
                                                <div class="tj-scroll-progress-ind-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-wrapper h9-service-wrapper">
                                        <div class="service-item style-5 tj-progress-item">
                                            <div class="service-content-area">
                                                <div class="service-icon">
                                                    <i class="tji-service-1"></i>
                                                </div>
                                                <div class="service-content">
                                                    <h4 class="title"><a href="service-details.php">Business Strategy
                                                            Development</a></h4>
                                                    <p class="desc">Recognize that exceptional customer experiences are
                                                        at the heart of every
                                                        successful
                                                        business. Our Customer Experience Solutions are crafted to help
                                                        you transform every
                                                        interaction
                                                        your customers have with your brand busin.</p>
                                                </div>
                                                <a href="service-details.php" class="h9-service-nav">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                            </div>
                                            <div class="service-img">
                                                <img src="assets/images/service/h9-service-1.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="service-item style-5 tj-progress-item">
                                            <div class="service-content-area">
                                                <div class="service-icon">
                                                    <i class="tji-service-2"></i>
                                                </div>
                                                <div class="service-content">
                                                    <h4 class="title"><a href="service-details.php">Customer Experience
                                                            Solutions</a></h4>
                                                    <p class="desc">Recognize that exceptional customer experiences are
                                                        at the heart of every
                                                        successful
                                                        business. Our Customer Experience Solutions are crafted to help
                                                        you transform every
                                                        interaction
                                                        your customers have with your brand busin.</p>
                                                </div>
                                                <a href="service-details.php" class="h9-service-nav">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                            </div>
                                            <div class="service-img">
                                                <img src="assets/images/service/h9-service-2.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="service-item style-5 tj-progress-item">
                                            <div class="service-content-area">
                                                <div class="service-icon">
                                                    <i class="tji-service-3"></i>
                                                </div>
                                                <div class="service-content">
                                                    <h4 class="title"><a href="service-details.php">Sustainability and
                                                            ESG Consulting</a></h4>
                                                    <p class="desc">Recognize that exceptional customer experiences are
                                                        at the heart of every
                                                        successful
                                                        business. Our Customer Experience Solutions are crafted to help
                                                        you transform every
                                                        interaction
                                                        your customers have with your brand busin.</p>
                                                </div>
                                                <a href="service-details.php" class="h9-service-nav">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                            </div>
                                            <div class="service-img">
                                                <img src="assets/images/service/h9-service-3.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="service-item style-5 tj-progress-item">
                                            <div class="service-content-area">
                                                <div class="service-icon">
                                                    <i class="tji-service-4"></i>
                                                </div>
                                                <div class="service-content">
                                                    <h4 class="title"><a href="service-details.php">Marketing Strategy &
                                                            Campaigns</a></h4>
                                                    <p class="desc">Recognize that exceptional customer experiences are
                                                        at the heart of every
                                                        successful
                                                        business. Our Customer Experience Solutions are crafted to help
                                                        you transform every
                                                        interaction
                                                        your customers have with your brand busin.</p>
                                                </div>
                                                <a href="service-details.php" class="h9-service-nav">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                            </div>
                                            <div class="service-img">
                                                <img src="assets/images/service/service-6.webp" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-shape-1">
                            <img src="assets/images/shape/pattern-2.svg" alt="">
                        </div>
                        <div class="bg-shape-2">
                            <img src="assets/images/shape/pattern-3.svg" alt="">
                        </div>
                        <div class="bg-shape-3">
                            <img src="./assets/images/shape/h7-testimonial-shape-blur.svg" alt="">
                        </div>
                    </section>
                    <!-- end: Service Section -->

                    <!-- start: Team Section -->
                    <section class="tj-team-section-2 section-gap">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="sec-heading style-8 sec-heading-centered">
                                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Meet Our Team</span>
                                        <h2 class="sec-title title-anim">Empowering Business with Expertise.</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="h9-team-wrapper">
                                        <div class="h9-team-item-wrap">
                                            <div class="team-item wow fadeInUp" data-wow-delay=".3s">
                                                <div class="team-content">
                                                    <h3 class="title"><a href="team-details.php">Eade Marren</a></h3>
                                                    <span class="designation">Chief Executive</span>
                                                </div>
                                                <div class="team-img">
                                                    <img src="assets/images/team/team-1.webp" alt="Images">
                                                </div>
                                                <a class="text-btn" href="team-details.php">
                                                    <span class="btn-text"><span>Know More</span></span>
                                                    <span class="btn-icon"><i
                                                            class="fa-solid fa-arrow-right"></i></span>
                                                </a>
                                            </div>
                                            <div class="team-item wow fadeInUp" data-wow-delay=".3s">
                                                <div class="team-content">
                                                    <h3 class="title"><a href="team-details.php">Savannah Ngueen</a>
                                                    </h3>
                                                    <span class="designation">Chief Executive</span>
                                                </div>
                                                <div class="team-img">
                                                    <img src="assets/images/team/team-2.webp" alt="Images">
                                                </div>
                                                <a class="text-btn" href="team-details.php">
                                                    <span class="btn-text"><span>Know More</span></span>
                                                    <span class="btn-icon"><i
                                                            class="fa-solid fa-arrow-right"></i></span>
                                                </a>
                                            </div>
                                            <div class="team-item wow fadeInUp" data-wow-delay=".3s">
                                                <div class="team-content">
                                                    <h3 class="title"><a href="team-details.php">Emma Richardson</a>
                                                    </h3>
                                                    <span class="designation">Chief Executive</span>
                                                </div>
                                                <div class="team-img">
                                                    <img src="assets/images/team/team-3.webp" alt="Images">
                                                </div>
                                                <a class="text-btn" href="team-details.php">
                                                    <span class="btn-text"><span>Know More</span></span>
                                                    <span class="btn-icon"><i
                                                            class="fa-solid fa-arrow-right"></i></span>
                                                </a>
                                            </div>
                                            <div class="team-item wow fadeInUp" data-wow-delay=".3s">
                                                <div class="team-content">
                                                    <h3 class="title"><a href="team-details.php">Nathaniel Ellington</a>
                                                    </h3>
                                                    <span class="designation">Chief Executive</span>
                                                </div>
                                                <div class="team-img">
                                                    <img src="assets/images/team/team-4.webp" alt="Images">
                                                </div>
                                                <a class="text-btn" href="team-details.php">
                                                    <span class="btn-text"><span>Know More</span></span>
                                                    <span class="btn-icon"><i
                                                            class="fa-solid fa-arrow-right"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- end: Team Section -->

                    <!-- start: Project Section -->
                    <section class="tj-project-section-3 h9-project section-gap section-gap-x">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="sec-heading-wrap">
                                        <div class="heading-wrap-content">
                                            <div class="sec-heading style-8">
                                                <span class="sub-title wow fadeInUp" data-wow-delay=".3s">OUR
                                                    PORTFOLIO</span>
                                                <h2 class="sec-title title-anim">Empowering Business with Expertise.
                                                </h2>
                                            </div>
                                            <div class="slider-navigation d-none d-md-inline-flex wow fadeInUp"
                                                data-wow-delay=".5s">
                                                <div class="slider-prev">
                                                    <span class="anim-icon">
                                                        <i class="fa-solid fa-chevron-left"></i>
                                                        <i class="fa-solid fa-chevron-left"></i>
                                                    </span>
                                                </div>
                                                <div class="slider-next">
                                                    <span class="anim-icon">
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="project-wrapper h9-project-wrapper wow fadeInUp" data-wow-delay=".4s">
                                        <div class="swiper h9-project-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="project-item">
                                                        <div class="project-img">
                                                            <img src="assets/images/project/project-6.webp" alt="">
                                                        </div>
                                                        <div class="project-content">
                                                            <span class="categories"><a
                                                                    href="portfolio-details.php">Business</a></span>
                                                            <div class="project-text">
                                                                <h4 class="title"><a href="portfolio-details.php">Event
                                                                        Management Platform</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="project-item">
                                                        <div class="project-img">
                                                            <img src="assets/images/project/project-7.webp" alt="">
                                                        </div>
                                                        <div class="project-content">
                                                            <span class="categories"><a
                                                                    href="portfolio-details.php">Business</a></span>
                                                            <div class="project-text">
                                                                <h4 class="title"><a
                                                                        href="portfolio-details.php">Rebranding Strategy
                                                                        for a Growing</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="project-item">
                                                        <div class="project-img">
                                                            <img src="assets/images/project/project-8.webp" alt="">
                                                        </div>
                                                        <div class="project-content">
                                                            <span class="categories"><a
                                                                    href="portfolio-details.php">Business</a></span>
                                                            <div class="project-text">
                                                                <h4 class="title"><a
                                                                        href="portfolio-details.php">Interactive
                                                                        Learning Platform</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="project-item">
                                                        <div class="project-img">
                                                            <img src="assets/images/project/project-9.webp" alt="">
                                                        </div>
                                                        <div class="project-content">
                                                            <span class="categories"><a
                                                                    href="portfolio-details.php">Business</a></span>
                                                            <div class="project-text">
                                                                <h4 class="title"><a
                                                                        href="portfolio-details.php">Environmental
                                                                        Impact Dashboard</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-pagination-area"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-shape-1">
                            <img src="assets/images/shape/pattern-2.svg" alt="">
                        </div>
                        <div class="bg-shape-2">
                            <img src="assets/images/shape/pattern-3.svg" alt="">
                        </div>
                    </section>
                    <!-- end: Project Section -->

                    <!-- start: Testimonial Section -->
                    <section class="h9-testimonial section-gap">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 order-2 order-lg-1">
                                    <div class="h9-testimonial-wrap">
                                        <div class="testimonial-item wow fadeInUpBig" data-wow-delay=".2s">
                                            <div class="star-ratings">
                                                <div class="fill-ratings" style="width: 100%">
                                                    <span>★★★★★</span>
                                                </div>
                                                <div class="empty-ratings">
                                                    <span>★★★★★</span>
                                                </div>
                                            </div>
                                            <div class="desc">
                                                <p>“Working with Bexon has been a game-changer business. Their team's
                                                    profession alism, attention
                                                    to
                                                    detail, and innovative solutions have help streamline operations our
                                                    goals faster than imagined.
                                                    We
                                                    truly feel like a valued partner.”</p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-inner">
                                                    <div class="author-header">
                                                        <h5 class="title">Nathaniel Ellington</h5>
                                                        <span class="designation">Chief Executive</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-item style-2 wow fadeInUpBig" data-wow-delay=".4s">
                                            <div class="star-ratings">
                                                <div class="fill-ratings" style="width: 100%">
                                                    <span>★★★★★</span>
                                                </div>
                                                <div class="empty-ratings">
                                                    <span>★★★★★</span>
                                                </div>
                                            </div>
                                            <div class="desc">
                                                <p>“Working with Bexon has been a game-changer business. Their team's
                                                    profession alism, attention
                                                    to
                                                    detail, and innovative solutions have help streamline operations our
                                                    goals faster than imagined.
                                                    We
                                                    truly feel like a valued partner.”</p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-inner">
                                                    <div class="author-header">
                                                        <h5 class="title">Nathaniel Ellington</h5>
                                                        <span class="designation">Chief Executive</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 order-1 order-lg-2">
                                    <div class="h9-testimonial-heading">
                                        <div class="sec-heading style-8">
                                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Clients
                                                Testimonials</span>
                                            <h2 class="sec-title title-anim">Our Trusted Clients.</h2>
                                        </div>
                                        <div class="testimonial-img wow fadeInUpBig" data-wow-delay=".3s">
                                            <img src="assets/images/testimonial/h9-testimonial-img.webp" alt="">
                                        </div>
                                        <div class="shape-icon wow fadeIn" data-wow-delay=".5s"><img
                                                src="assets/images/shape/big-icon.png" alt=""></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 order-3 order-lg-3">
                                    <div class="h9-testimonial-wrap style-2">
                                        <div class="testimonial-item style-2 wow fadeInUpBig" data-wow-delay=".2s">
                                            <div class="star-ratings">
                                                <div class="fill-ratings" style="width: 100%">
                                                    <span>★★★★★</span>
                                                </div>
                                                <div class="empty-ratings">
                                                    <span>★★★★★</span>
                                                </div>
                                            </div>
                                            <div class="desc">
                                                <p>“Working with Bexon has been a game-changer business. Their team's
                                                    profession alism, attention
                                                    to
                                                    detail, and innovative solutions have help streamline operations our
                                                    goals faster than imagined.
                                                    We
                                                    truly feel like a valued partner.”</p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-inner">
                                                    <div class="author-header">
                                                        <h5 class="title">Nathaniel Ellington</h5>
                                                        <span class="designation">Chief Executive</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-item wow fadeInUpBig" data-wow-delay=".4s">
                                            <div class="star-ratings">
                                                <div class="fill-ratings" style="width: 100%">
                                                    <span>★★★★★</span>
                                                </div>
                                                <div class="empty-ratings">
                                                    <span>★★★★★</span>
                                                </div>
                                            </div>
                                            <div class="desc">
                                                <p>“Working with Bexon has been a game-changer business. Their team's
                                                    profession alism, attention
                                                    to
                                                    detail, and innovative solutions have help streamline operations our
                                                    goals faster than imagined.
                                                    We
                                                    truly feel like a valued partner.”</p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-inner">
                                                    <div class="author-header">
                                                        <h5 class="title">Nathaniel Ellington</h5>
                                                        <span class="designation">Chief Executive</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- end: Testimonial Section -->

                    <!-- start: Client Section -->
                    <section class="tj-client-section-2 h6-client section-gap-x wow fadeInUp" data-wow-delay=".4s">
                        <div class="container-fluid client-container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="h6-client-title-wrapper">
                                        <h6 class="h6-client-title">we’re proud to partner with best-in-class clients
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="swiper client-slider client-slider-2 h6-client-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide client-item">
                                                <div class="client-logo">
                                                    <img src="assets/images/brands/brand-1-light.webp" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide client-item">
                                                <div class="client-logo">
                                                    <img src="assets/images/brands/brand-2-light.webp" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide client-item">
                                                <div class="client-logo">
                                                    <img src="assets/images/brands/brand-3-light.webp" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide client-item">
                                                <div class="client-logo">
                                                    <img src="assets/images/brands/brand-4-light.webp" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide client-item">
                                                <div class="client-logo">
                                                    <img src="assets/images/brands/brand-5-light.webp" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide client-item">
                                                <div class="client-logo">
                                                    <img src="assets/images/brands/brand-6-light.webp" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- end: Client Section -->

                    <!-- start: Blog Section -->
                    <section class="h5-blog section-gap fix">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="sec-heading-wrap style-8">
                                        <div class="heading-wrap-content">
                                            <div class="sec-heading style-8">
                                                <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Insights &
                                                    Ideas</span>
                                                <h2 class="sec-title text-anim">The Ultimate Resource.</h2>
                                            </div>
                                            <div class="btn-area wow fadeInUp" data-wow-delay=".8s">
                                                <a class="tj-primary-btn" href="blog.php">
                                                    <span class="btn-text"><span>More Blogs</span></span>
                                                    <span class="btn-icon"><i
                                                            class="fa-solid fa-arrow-right"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="h5-blog-wrapper h9-blog-wrapper">
                                        <div class="blog-item style-2 h5-blog-item wow fadeInLeft" data-wow-delay=".3s">
                                            <div class="blog-thumb">
                                                <a href="blog-details.php"><img src="assets/images/blog/h5-blog-1.webp"
                                                        alt=""></a>
                                                <div class="blog-date">
                                                    <span class="date">28</span>
                                                    <span class="month">Feb</span>
                                                </div>
                                            </div>
                                            <div class="blog-content">
                                                <div class="title-area">
                                                    <div class="blog-meta">
                                                        <span class="categories"><a
                                                                href="blog-details.php">Business</a></span>
                                                        <span>By <a href="blog-details.php">Ellinien Loma</a></span>
                                                    </div>
                                                    <h4 class="title"><a href="blog-details.php">Harnessing Digital
                                                            Transform a Roadmap
                                                            Businesses.</a>
                                                    </h4>
                                                </div>
                                                <a class="text-btn" href="blog-details.php">
                                                    <span class="btn-text"><span>Read More</span></span>
                                                    <span class="btn-icon"><i
                                                            class="fa-solid fa-arrow-right"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="blog-item  style-2 h5-blog-item wow fadeInRight"
                                            data-wow-delay=".4s">
                                            <div class="blog-thumb">
                                                <a href="blog-details.php"><img src="assets/images/blog/h5-blog-2.webp"
                                                        alt=""></a>
                                                <div class="blog-date">
                                                    <span class="date">28</span>
                                                    <span class="month">Feb</span>
                                                </div>
                                            </div>
                                            <div class="blog-content">
                                                <div class="title-area">
                                                    <div class="blog-meta">
                                                        <span class="categories"><a
                                                                href="blog-details.php">Business</a></span>
                                                        <span>By <a href="blog-details.php">Ellinien Loma</a></span>
                                                    </div>
                                                    <h4 class="title"><a href="blog-details.php">Mastering Change
                                                            Management Lessons for
                                                            Businesses.</a></h4>
                                                </div>
                                                <a class="text-btn" href="blog-details.php">
                                                    <span class="btn-text"><span>Read More</span></span>
                                                    <span class="btn-icon"><i
                                                            class="fa-solid fa-arrow-right"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="blog-item style-2 h5-blog-item wow fadeInRight"
                                            data-wow-delay=".5s">
                                            <div class="blog-thumb">
                                                <a href="blog-details.php"><img src="assets/images/blog/h5-blog-3.webp"
                                                        alt=""></a>
                                                <div class="blog-date">
                                                    <span class="date">28</span>
                                                    <span class="month">Feb</span>
                                                </div>
                                            </div>
                                            <div class="blog-content">
                                                <div class="title-area">
                                                    <div class="blog-meta">
                                                        <span class="categories"><a
                                                                href="blog-details.php">Business</a></span>
                                                        <span>By <a href="blog-details.php">Ellinien Loma</a></span>
                                                    </div>
                                                    <h4 class="title"><a href="blog-details.php">Harnessing Digital
                                                            Transform a Roadmap
                                                            Businesses.</a></h4>
                                                </div>
                                                <a class="text-btn" href="blog-details.php">
                                                    <span class="btn-text"><span>Read More</span></span>
                                                    <span class="btn-icon"><i
                                                            class="fa-solid fa-arrow-right"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- end: Blog Section -->
                </main>
                <?php include 'reusable/footer.php'; ?>
            </div>
        </div>
        <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> </a></div>

        <a href="https://wa.me/76778 89831" target="_blank" class="whatsapp-float">
            <img src="assets/images/whatsapp.png" alt="WhatsApp">
        </a>
        <!-- JS here -->
        <script src="assets/js/jquery.min.js" defer></script>
        <script src="assets/js/bootstrap.bundle.min.js" defer></script>
        <script src="assets/js/gsap.min.js" defer></script>
        <script src="assets/js/ScrollSmoother.js" defer></script>
        <script src="assets/js/gsap-scroll-to-plugin.min.js" defer></script>
        <script src="assets/js/gsap-scroll-trigger.min.js" defer></script>
        <script src="assets/js/gsap-split-text.min.js" defer></script>
        <script src="assets/js/jquery.nice-select.min.js" defer></script>
        <script src="assets/js/swiper.min.js" defer></script>
        <script src="assets/js/odometer.min.js" defer></script>
        <script src="assets/js/venobox.min.js" defer></script>
        <script src="assets/js/appear.min.js" defer></script>
        <script src="assets/js/wow.min.js" defer></script>
        <script src="assets/js/meanmenu.js" defer></script>
        <script src="assets/js/main.js" defer></script>


    </body>
</php>