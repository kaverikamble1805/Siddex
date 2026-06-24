 <?php
    $page = basename($_SERVER['PHP_SELF']);
    ?>
 <!-- Preloader Start -->
 <div class="tj-preloader is-loading">
     <div class="tj-preloader-inner">
         <div class="tj-preloader-ball-wrap">
             <div class="tj-preloader-ball-inner-wrap">
                 <div class="tj-preloader-ball-inner">
                     <div class="tj-preloader-ball"></div>
                 </div>
                 <div class="tj-preloader-ball-shadow"></div>
             </div>
             <div id="tj-weave-anim" class="tj-preloader-text">Loading...</div>
         </div>
     </div>
     <div class="tj-preloader-overlay"></div>
 </div>
 <!-- Preloader end -->



 <!-- start: Search Popup -->
 <div class="search-popup-overlay"></div>
 <!-- end: Search Popup -->

 <!-- start: Offcanvas Menu -->
 <div class="tj-offcanvas-area d-none d-lg-block">
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
             <div class="offcanvas-text">
                 <p>Developing personalize our customer journeys to increase satisfaction & loyalty of our expansion
                     recognized
                     by industry leaders.</p>
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
             <div class="hamburger-infos">
                 <h5 class="hamburger-title">Contact Info</h5>
                 <div class="contact-info">
                     <div class="contact-item">
                         <span class="subtitle">Phone</span>
                         <a class="contact-link" href="tel:10095447818">+1 (009) 544-7818</a>
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
                     <li><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                     </li>
                     <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
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
 <!-- end: Offcanvas Menu -->

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
                     <li><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                     </li>
                     <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
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
 <header class="header-area header-1 section-gap-x">
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
                                 <li class="<?= $page == 'index.php' ? 'current-menu-item' : '' ?>"><a
                                         href="index.php">Home</a>
                                 </li>
                                 <li class="<?= $page == 'about.php' ? 'current-menu-item' : '' ?>"><a
                                         href="about.php">About Us</a>
                                 </li>
                                 <li class="has-dropdown">
                                     <a href="service-details.php?service=website-design">Services</a>

                                     <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">
                                         <li>
                                             <div class="mega-menu-wrapper">

                                                 <!-- OUR EXPERTISE -->
                                                 <div class="mega-menu-pages-single">
                                                     <div class="mega-menu-pages-single-inner">
                                                         <h6 class="mega-menu-title">OUR EXPERTISE</h6>

                                                         <div class="mega-menu-list">
                                                             <a href="service-details.php?service=website-design">Website
                                                                 Designing & Development</a>
                                                             <a href="service-details.php?service=retail-ecommerce">E-commerce
                                                                 Development</a>
                                                             <a href="service-details.php?service=domain-hosting">Domain
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
                                                             <a href="service-details.php?service=influencer-marketing">Influencer
                                                                 Marketing</a>
                                                             <a href="service-details.php?service=voice-call-centre">Voice
                                                                 Call Centre</a>
                                                             <a href="service-details.php?service=social-media">Social
                                                                 Media Management</a>
                                                             <a href="service-details.php?service=digital-marketing">Digital
                                                                 Marketing</a>
                                                             <a
                                                                 href="service-details.php?service=whatsapp-business-api">WhatsApp
                                                                 Business API</a>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <!-- TRENDING TECHNOLOGY -->
                                                 <div class="mega-menu-pages-single">
                                                     <div class="mega-menu-pages-single-inner">
                                                         <h6 class="mega-menu-title">TRENDING TECHNOLOGY</h6>

                                                         <div class="mega-menu-list">
                                                             <a href="service-details.php?service=app-development">App
                                                                 Development</a>
                                                             <a href="service-details.php?service=web-app-development">Web
                                                                 App
                                                                 Development</a>
                                                             <a href="service-details.php?service=ai&ml-development">AI
                                                                 & ML
                                                                 Development</a>
                                                             <a href="service-details.php?service=digital-engineering">Digital
                                                                 Engineering</a>
                                                             <a href="service-details.php?service=api-services">API
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
                                 <li class="has-dropdown <?= $page == 'index.php' ? 'current-menu-item' : '' ?>">
                                     <a href="product-details.php">Products</a>
                                     <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">
                                         <li>
                                             <div class="mega-menu-wrapper">

                                                 <div class="mega-menu-pages-single">
                                                     <div class="mega-menu-pages-single-inner">
                                                         <h6 class="mega-menu-title">Ecommerce Product</h6>
                                                         <div class="mega-menu-list">
                                                             <a href="product-details.php?product=multi-vendor-web-app">Multi
                                                                 Vendor (Web + APP)</a>
                                                             <a href="product-details.php?product=multi-vendor-reactjs">Multi
                                                                 Vendor (ReactJs)</a>
                                                             <a
                                                                 href="product-details.php?product=online-grocery-webapi">Online
                                                                 Grocery (Web + APP)</a>
                                                             <a
                                                                 href="product-details.php?product=online-grocery-apionly">Online
                                                                 Grocery (APP Only)</a>
                                                             <a href="product-details.php?product=ecomm-single-vendor">Ecomm
                                                                 Single Vendor (Web + APP)</a>
                                                             <a
                                                                 href="product-details.php?product=ecomm-single-vendor-web">Ecommerce
                                                                 Single Vendor (Web)</a>
                                                             <a
                                                                 href="product-details.php?product=ecomm-single-vendor-app">Ecommerce
                                                                 Single Vendor (APP)</a>
                                                         </div>
                                                     </div>

                                                 </div>
                                                 <div class="mega-menu-pages-single">
                                                     <div class="mega-menu-pages-single-inner">
                                                         <h6 class="mega-menu-title">CMS</h6>
                                                         <div class="mega-menu-list">
                                                             <a href="product-details.php?product=mass-attendance">Mass
                                                                 Attendance Management System</a>
                                                             <a href="product-details.php?product=human-resource">Human
                                                                 Resource Management System</a>
                                                             <a href="product-details.php?product=community-management">Community
                                                                 Management</a>
                                                             <a href="product-details.php?product=ecommerce-solution">E-commerce
                                                                 Solution</a>
                                                             <a href="product-details.php?product=mlm-software">MLM
                                                                 (Multi-Level Marketing) Software</a>
                                                             <a href="product-details.php?product=industry-erp">Industry
                                                                 Automation ERP</a>
                                                             <a href="product-details.php?product=ecommerce-platform">E-commerce
                                                                 Platform For Digital
                                                                 Production</a>

                                                         </div>
                                                     </div>

                                                 </div>
                                                 <div class="mega-menu-pages-single">
                                                     <div class="mega-menu-pages-single-inner">
                                                         <h6 class="mega-menu-title">CMS</h6>
                                                         <div class="mega-menu-list">
                                                             <a href="product-details.php?product=smart-farming">Smart
                                                                 Farming & Agriculture
                                                                 Solutions</a>
                                                             <a href="product-details.php?product=news-portal">News
                                                                 Portal Design & Development</a>
                                                             <a href="product-details.php?product=grocery-application">Grocery
                                                                 Application Development</a>
                                                             <a href="product-details.php?product=college-management">College
                                                                 Management System</a>
                                                             <a href="product-details.php?product=food-delivery">Food
                                                                 Delivery Application</a>
                                                             <a href="product-details.php?product=vehicle-tracking">Vehicle
                                                                 Tracking System</a>
                                                             <a
                                                                 href="product-details.php?product=classified-application">Classified
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
                                 <li class="<?= $page == 'index.php' ? 'current-menu-item' : '' ?>"><a
                                         href="careers.php">Career</a></li>
                                 <li class="has-dropdown <?= $page == 'shop.php' ? 'current-menu-item' : '' ?>"><a
                                         href="shop.php">Shop</a>
                                     <ul class="sub-menu">
                                         <li><a href="shop.php">Shop</a></li>
                                         <li><a href="shop-details.php">Shop Details</a></li>
                                         <li><a href="cart.php">Cart</a></li>
                                         <li><a href="#">Checkout</a></li>
                                         <li><a href="#">Wishlist</a></li>
                                         <li><a href="#">New</a></li>
                                         <li><a href="#">Login</a></li>
                                         <li><a href="#">Tracking</a></li>
                                         <li><a href="#">Order confirm</a></li>
                                         <li><a href="#">Registration</a></li>
                                     </ul>
                                 </li>
                                 <li class="<?= $page == 'contact.php' ? 'current-menu-item' : '' ?>"><a
                                         href="contact.php">Contact</a></li>
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
                         <div class="menu_bar menu_offcanvas d-none d-lg-inline-flex">
                             <span></span>
                             <span></span>
                             <span></span>
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
 <header class="header-area header-1 header-duplicate header-sticky section-gap-x">
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
                                 <li class="current-menu-ancestor"><a href="index.php">Home</a>

                                 </li>
                                 <li class="<?= $page == 'about.php' ? 'current-menu-item' : '' ?>"><a
                                         href="about.php">About Us</a>

                                 </li>
                                 <li class="has-dropdown">
                                     <a href="service-details.php?service=website-design">Services</a>

                                     <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">
                                         <li>
                                             <div class="mega-menu-wrapper">

                                                 <!-- OUR EXPERTISE -->
                                                 <div class="mega-menu-pages-single">
                                                     <div class="mega-menu-pages-single-inner">
                                                         <h6 class="mega-menu-title">OUR EXPERTISE</h6>

                                                         <div class="mega-menu-list">
                                                             <a href="service-details.php?service=website-design">Website
                                                                 Designing & Development</a>
                                                             <a href="service-details.php?service=retail-ecommerce">E-commerce
                                                                 Development</a>
                                                             <a href="service-details.php?service=domain-hosting">Domain
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
                                                             <a href="service-details.php?service=influencer-marketing">Influencer
                                                                 Marketing</a>
                                                             <a href="service-details.php?service=voice-call-centre">Voice
                                                                 Call Centre</a>
                                                             <a href="service-details.php?service=social-media">Social
                                                                 Media Management</a>
                                                             <a href="service-details.php?service=digital-marketing">Digital
                                                                 Marketing</a>
                                                             <a
                                                                 href="service-details.php?service=whatsapp-business-api">WhatsApp
                                                                 Business API</a>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <!-- TRENDING TECHNOLOGY -->
                                                 <div class="mega-menu-pages-single">
                                                     <div class="mega-menu-pages-single-inner">
                                                         <h6 class="mega-menu-title">TRENDING TECHNOLOGY</h6>

                                                         <div class="mega-menu-list">
                                                             <a href="service-details.php?service=app-development">App
                                                                 Development</a>
                                                             <a href="service-details.php?service=web-app-development">Web
                                                                 App
                                                                 Development</a>
                                                             <a href="service-details.php?service=ai&ml-development">AI
                                                                 & ML
                                                                 Development</a>
                                                             <a href="service-details.php?service=digital-engineering">Digital
                                                                 Engineering</a>
                                                             <a href="service-details.php?service=api-services">API
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
                                 <li class="has-dropdown <?= $page == 'index.php' ? 'current-menu-item' : '' ?>">
                                     <a href="product-details.php">Products</a>
                                     <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">
                                         <li>
                                             <div class="mega-menu-wrapper">

                                                 <div class="mega-menu-pages-single">
                                                     <div class="mega-menu-pages-single-inner">
                                                         <h6 class="mega-menu-title">Ecommerce Product</h6>
                                                         <div class="mega-menu-list">
                                                             <a href="product-details.php?product=multi-vendor-web-app">Multi
                                                                 Vendor (Web + APP)</a>
                                                             <a href="product-details.php?product=multi-vendor-reactjs">Multi
                                                                 Vendor (ReactJs)</a>
                                                             <a
                                                                 href="product-details.php?product=online-grocery-webapi">Online
                                                                 Grocery (Web + APP)</a>
                                                             <a
                                                                 href="product-details.php?product=online-grocery-apionly">Online
                                                                 Grocery (APP Only)</a>
                                                             <a href="product-details.php?product=ecomm-single-vendor">Ecomm
                                                                 Single Vendor (Web + APP)</a>
                                                             <a
                                                                 href="product-details.php?product=ecomm-single-vendor-web">Ecommerce
                                                                 Single Vendor (Web)</a>
                                                             <a
                                                                 href="product-details.php?product=ecomm-single-vendor-app">Ecommerce
                                                                 Single Vendor (APP)</a>
                                                         </div>
                                                     </div>

                                                 </div>
                                                 <div class="mega-menu-pages-single">
                                                     <div class="mega-menu-pages-single-inner">
                                                         <h6 class="mega-menu-title">CMS</h6>
                                                         <div class="mega-menu-list">
                                                             <a href="product-details.php?product=mass-attendance">Mass
                                                                 Attendance Management System</a>
                                                             <a href="product-details.php?product=human-resource">Human
                                                                 Resource Management System</a>
                                                             <a href="product-details.php?product=community-management">Community
                                                                 Management</a>
                                                             <a href="product-details.php?product=ecommerce-solution">E-commerce
                                                                 Solution</a>
                                                             <a href="product-details.php?product=mlm-software">MLM
                                                                 (Multi-Level Marketing) Software</a>
                                                             <a href="product-details.php?product=industry-erp">Industry
                                                                 Automation ERP</a>
                                                             <a href="product-details.php?product=ecommerce-platform">E-commerce
                                                                 Platform For Digital
                                                                 Production</a>

                                                         </div>
                                                     </div>

                                                 </div>
                                                 <div class="mega-menu-pages-single">
                                                     <div class="mega-menu-pages-single-inner">
                                                         <h6 class="mega-menu-title">CMS</h6>
                                                         <div class="mega-menu-list">
                                                             <a href="product-details.php?product=smart-farming">Smart
                                                                 Farming & Agriculture
                                                                 Solutions</a>
                                                             <a href="product-details.php?product=news-portal">News
                                                                 Portal Design & Development</a>
                                                             <a href="product-details.php?product=grocery-application">Grocery
                                                                 Application Development</a>
                                                             <a href="product-details.php?product=college-management">College
                                                                 Management System</a>
                                                             <a href="product-details.php?product=food-delivery">Food
                                                                 Delivery Application</a>
                                                             <a href="product-details.php?product=vehicle-tracking">Vehicle
                                                                 Tracking System</a>
                                                             <a
                                                                 href="product-details.php?product=classified-application">Classified
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
                                 <li class="<?= $page == 'index.php' ? 'current-menu-item' : '' ?>"><a
                                         href="careers.php">Career</a></li>

                                 <li class="has-dropdown <?= $page == 'shop.php' ? 'current-menu-item' : '' ?>"><a
                                         href="shop.php">Shop</a>
                                     <ul class="sub-menu">
                                         <li><a href="shop.php">Shop</a></li>
                                         <li><a href="shop-details.php">Shop Details</a></li>
                                         <li><a href="cart.php">Cart</a></li>
                                         <li><a href="#">Checkout</a></li>
                                         <li><a href="#">Wishlist</a></li>
                                         <li><a href="#">New</a></li>
                                         <li><a href="#">Login</a></li>
                                         <li><a href="#">Tracking</a></li>
                                         <li><a href="#">Order confirm</a></li>
                                         <li><a href="#">Registration</a></li>
                                     </ul>
                                 </li>
                                 <li <?= $page == 'shop.php' ? 'current-menu-item' : '' ?>"><a
                                         href="contact.php">Contact</a></li>
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
                         <div class="menu_bar menu_offcanvas d-none d-lg-inline-flex">
                             <span></span>
                             <span></span>
                             <span></span>
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