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
        <link rel="shortcut icon" type="image/x-icon" href="../assets/images/fav.png">

        <!-- CSS here -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="../assets/css/animate.min.css">
        <link rel="stylesheet" href="../assets/css/bexon-icons.css">
        <link rel="stylesheet" href="../assets/css/nice-select.css">
        <link rel="stylesheet" href="../assets/css/swiper.min.css">
        <link rel="stylesheet" href="../assets/css/venobox.min.css">
        <link rel="stylesheet" href="../assets/css/odometer-theme-default.css">
        <link rel="stylesheet" href="../assets/css/meanmenu.css">
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/shop.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>

    <body>
        <div class="body-overlay"></div>

        <!-- navbar -->
        <?php require_once '../reusable/navbar.php'; ?>

        <div id="smooth-wrapper">
            <div id="smooth-content">
                <main id="primary" class="site-main">
                    <div class="space-for-header"></div>
                    <!-- start: Breadcrumb Section -->
                    <section class="tj-page-header section-gap-x" data-bg-image="../assets/images/bg/pheader-bg.webp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tj-page-header-content text-center">
                                        <h1 class="tj-page-title">Login</h1>
                                        <div class="tj-page-link">
                                            <span><i class="tji-home"></i></span>
                                            <span>
                                                <a href="index.html">Home</a>
                                            </span>
                                            <span><i class="fa-solid fa-chevron-right"></i></span>
                                            <span>
                                                <span>Login</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-header-overlay" data-bg-image="../assets/images/shape/pheader-overlay.webp">
                        </div>
                    </section>
                    <!-- end: Breadcrumb Section -->


                    <!-- start: Login Section -->
                    <section class="full-width tj-page__area section-gap">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tj-page__container">
                                        <div class="tj-entry__content">
                                            <div class="woocommerce">
                                                <div class="woo-login-form">
                                                    <h3>Login</h3>

                                                    <form class="woocommerce-form woocommerce-form-login login"
                                                        method="post" novalidate="">
                                                        <p
                                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                            <label for="username">Username or email address&nbsp;<span
                                                                    class="required" aria-hidden="true">*</span></label>
                                                            <input type="text" name="username" id="username"
                                                                autocomplete="username" value="" required=""
                                                                aria-required="true">
                                                        </p>
                                                        <p
                                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                            <label for="password">Password&nbsp;<span class="required"
                                                                    aria-hidden="true">*</span></label>
                                                            <span class="password-input"><input type="password"
                                                                    name="password" id="password"
                                                                    autocomplete="current-password" required=""
                                                                    aria-required="true"><button type="button"
                                                                    class="show-password-input"
                                                                    aria-label="Show password"
                                                                    aria-describedby="password"></button></span>
                                                        </p>

                                                        <div class="row form-row algin-items-center rg-15">
                                                            <div class="col-6">
                                                                <label
                                                                    class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                                                    <input
                                                                        class="woocommerce-form__input woocommerce-form__input-checkbox"
                                                                        name="rememberme" type="checkbox"
                                                                        id="rememberme" value="forever"> <span>Remember
                                                                        me</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-6 text-end">
                                                                <p class="woocommerce-LostPassword lost_password">
                                                                    <a href="password.html">Lost your
                                                                        password?</a>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <button type="submit"
                                                                    class="woocommerce-button button woocommerce-form-login__submit"
                                                                    name="login" value="Log in">
                                                                    <span class="btn-text"><span>Login</span></span>
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
                        </div>
                    </section>
                    <!-- end: Login Section -->
                </main>
                <!-- start: Footer Section -->
                <!-- navbar -->
                <?php require_once '../reusable/footer.php'; ?>
                <!-- end: Footer Section -->
            </div>
        </div>

        <!-- END: Contact Form Fail Modal Message End -->
        <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> </a></div>

        <a href="https://wa.me/76778 89831" target="_blank" class="whatsapp-float">
            <img src="../assets/images/whatsapp.png" alt="WhatsApp">
        </a>
        <!-- JS here -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/gsap.min.js"></script>
        <script src="../assets/js/ScrollSmoother.js"></script>
        <script src="../assets/js/gsap-scroll-to-plugin.min.js"></script>
        <script src="../assets/js/gsap-scroll-trigger.min.js"></script>
        <script src="../assets/js/gsap-split-text.min.js"></script>
        <script src="../assets/js/jquery.nice-select.min.js"></script>
        <script src="../assets/js/swiper.min.js"></script>
        <script src="../assets/js/odometer.min.js"></script>
        <script src="../assets/js/venobox.min.js"></script>
        <script src="../assets/js/appear.min.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/meanmenu.js"></script>
        <script src="../assets/js/validate.min.js"></script>
        <script src="../assets/js/main.js"></script>
    </body>

    </html>
</php>