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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/bexon-icons.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/swiper.min.css">
        <link rel="stylesheet" href="assets/css/venobox.min.css">
        <link rel="stylesheet" href="assets/css/odometer-theme-default.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/shop.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>

    <body>
        <div class="body-overlay"></div>

        <!-- navbar -->
        <?php include 'reusable/navbar.php'; ?>

        <div id="smooth-wrapper">
            <div id="smooth-content">
                <main id="primary" class="site-main">
                    <div class="space-for-header"></div>
                    <!-- start: Breadcrumb Section -->
                    <section class="tj-page-header section-gap-x" data-bg-image="assets/images/bg/pheader-bg.webp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tj-page-header-content text-center">
                                        <h1 class="tj-page-title">My wishlist</h1>
                                        <div class="tj-page-link">
                                            <span><i class="tji-home"></i></span>
                                            <span>
                                                <a href="index.php">Home</a>
                                            </span>
                                            <span><i class="tji-arrow-right"></i></span>
                                            <span>
                                                <span>Wishlist</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-header-overlay" data-bg-image="assets/images/shape/pheader-overlay.webp"></div>
                    </section>
                    <!-- end: Breadcrumb Section -->


                    <!-- start: Wishlist Section -->
                    <section class="full-width tj-page__area section-gap">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tj-page__container">
                                        <div class="tj-entry__content">
                                            <div class="woosw-list">
                                                <table class="woosw-items">
                                                    <tbody>
                                                        <tr class="woosw-item">
                                                            <td class="woosw-item--remove"><span>×</span></td>
                                                            <td class="woosw-item--image">
                                                                <a href="shop-details.php">
                                                                    <img src="./assets/images/product/product-8.webp"
                                                                        alt="">
                                                                </a>
                                                            </td>
                                                            <td class="woosw-item--info">
                                                                <div class="woosw-item--name">
                                                                    <a href="shop-details.php">
                                                                        Super fast charger
                                                                    </a>
                                                                </div>
                                                                <div class="woosw-item--price">
                                                                    <del aria-hidden="true">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">$</span>
                                                                            40.00
                                                                        </span>
                                                                    </del>
                                                                    <ins aria-hidden="true">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">$</span>
                                                                            25.00
                                                                        </span>
                                                                    </ins>
                                                                </div>
                                                            </td>
                                                            <td class="woosw-item--actions">
                                                                <div class="woosw-item--stock">
                                                                    <div class="product-stock">
                                                                        <span class="stock out-of-stock">Out of
                                                                            stock</span>
                                                                    </div>
                                                                </div>
                                                                <div class="woosw-item--atc">
                                                                    <p class="product woocommerce add_to_cart_inline ">
                                                                        <a href="shop-details.php"
                                                                            class="cart-button button tj-cart-btn stock-out  product_type_simple product-add-cart-btn">
                                                                            <span class="btn-icon">
                                                                                <i class="fal fa-shopping-cart"></i>
                                                                                <i class="fal fa-shopping-cart"></i>
                                                                            </span>
                                                                            <span class="btn-text">
                                                                                <span>Add to
                                                                                    cart</span>
                                                                            </span>
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="woosw-item">
                                                            <td class="woosw-item--remove"><span>×</span></td>
                                                            <td class="woosw-item--image">
                                                                <a href="shop-details.php">
                                                                    <img src="./assets/images/product/product-7.webp"
                                                                        alt="">
                                                                </a>
                                                            </td>
                                                            <td class="woosw-item--info">
                                                                <div class="woosw-item--name">
                                                                    <a href="shop-details.php">
                                                                        booster speaker
                                                                    </a>
                                                                </div>
                                                                <div class="woosw-item--price">
                                                                    <ins aria-hidden="true">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">$</span>
                                                                            200.00
                                                                        </span>
                                                                    </ins>
                                                                </div>
                                                            </td>
                                                            <td class="woosw-item--actions">
                                                                <div class="woosw-item--stock">
                                                                    <div class="product-stock">
                                                                        <span class="stock in-stock">10 in stock</span>
                                                                    </div>
                                                                </div>
                                                                <div class="woosw-item--atc">
                                                                    <p class="product woocommerce add_to_cart_inline ">
                                                                        <a href="shop-details.php"
                                                                            class="cart-button button tj-cart-btn stock-out  product_type_simple product-add-cart-btn">
                                                                            <span class="btn-icon">
                                                                                <i class="fal fa-shopping-cart"></i>
                                                                                <i class="fal fa-shopping-cart"></i>
                                                                            </span>
                                                                            <span class="btn-text">
                                                                                <span>Add to
                                                                                    cart</span>
                                                                            </span>
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="woosw-item">
                                                            <td class="woosw-item--remove"><span>×</span></td>
                                                            <td class="woosw-item--image">
                                                                <a href="shop-details.php">
                                                                    <img src="./assets/images/product/product-1.webp"
                                                                        alt="">
                                                                </a>
                                                            </td>
                                                            <td class="woosw-item--info">
                                                                <div class="woosw-item--name">
                                                                    <a href="shop-details.php">
                                                                        Personal
                                                                        holding earbud
                                                                    </a>
                                                                </div>
                                                                <div class="woosw-item--price">
                                                                    <del aria-hidden="true">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">$</span>
                                                                            240.00
                                                                        </span>
                                                                    </del>
                                                                    <ins aria-hidden="true">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">$</span>
                                                                            200.00
                                                                        </span>
                                                                    </ins>
                                                                </div>
                                                            </td>
                                                            <td class="woosw-item--actions">
                                                                <div class="woosw-item--stock">
                                                                    <div class="product-stock">
                                                                        <span class="stock in-stock">10 in stock</span>
                                                                    </div>
                                                                </div>
                                                                <div class="woosw-item--atc">
                                                                    <p class="product woocommerce add_to_cart_inline ">
                                                                        <a href="shop-details.php"
                                                                            class="cart-button button tj-cart-btn stock-out  product_type_simple product-add-cart-btn">
                                                                            <span class="btn-icon">
                                                                                <i class="fal fa-shopping-cart"></i>
                                                                                <i class="fal fa-shopping-cart"></i>
                                                                            </span>
                                                                            <span class="btn-text">
                                                                                <span>Add to
                                                                                    cart</span>
                                                                            </span>
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><!-- /woosw-list -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
                <!-- start: Footer Section -->
                <!-- navbar -->
                <?php include 'reusable/footer.php'; ?>
                <!-- end: Footer Section -->
            </div>
        </div>

        <!-- END: Contact Form Fail Modal Message End -->
        <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> </a></div>

        <a href="https://wa.me/76778 89831" target="_blank" class="whatsapp-float">
            <img src="assets/images/whatsapp.png" alt="WhatsApp">
        </a>
        <!-- JS here -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/gsap.min.js"></script>
        <script src="assets/js/ScrollSmoother.js"></script>
        <script src="assets/js/gsap-scroll-to-plugin.min.js"></script>
        <script src="assets/js/gsap-scroll-trigger.min.js"></script>
        <script src="assets/js/gsap-split-text.min.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <script src="assets/js/swiper.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/venobox.min.js"></script>
        <script src="assets/js/appear.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/meanmenu.js"></script>
        <script src="assets/js/validate.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

    </html>
</php>