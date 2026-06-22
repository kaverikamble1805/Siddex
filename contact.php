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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>

    <body>
        <div class="body-overlay"></div>

        <!-- navbar -->
        <?php include 'reusable/navbar.php'; ?>
        <!-- end: Header Area -->
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
                                        <h1 class="tj-page-title">Contact Us</h1>
                                        <div class="tj-page-link">
                                            <span><i class="fa-solid fa-house"></i></span>
                                            <span>
                                                <a href="index.php">Home</a>
                                            </span>
                                            <span><i class="fa-solid fa-chevron-right"></i></span>
                                            <span>
                                                <span>Contact Us</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-header-overlay" data-bg-image="assets/images/shape/pheader-overlay.webp"></div>
                    </section>
                    <!-- end: Breadcrumb Section -->

                    <!-- start: Contact Top Section -->
                    <div class="tj-contact-area section-gap">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="sec-heading text-center">
                                        <span class="sub-title wow fadeInUp" data-wow-delay=".1s"><i
                                                class="tji-box"></i>Contact info</span>
                                        <h2 class="sec-title title-anim"><span>Reach</span> Out to Us</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-gap-4">
                                <div class="col-xl-3 col-lg-6 col-sm-6">
                                    <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="contact-icon">
                                            <i class="tji-location-3"></i>
                                        </div>
                                        <h3 class="contact-title">Our Location</h3>
                                        <p>993 Renner Burg, West Rond, MT 94251-030</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-6">
                                    <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="contact-icon">
                                            <i class="tji-envelop"></i>
                                        </div>
                                        <h3 class="contact-title">Email us</h3>
                                        <ul class="contact-list">
                                            <li><a href="mailto:support@bexon.com">support@bexon.com</a></li>
                                            <li><a href="mailto:info@bexon.com">info@bexon.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-6">
                                    <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="contact-icon">
                                            <i class="tji-phone"></i>
                                        </div>
                                        <h3 class="contact-title">Call us</h3>
                                        <ul class="contact-list">
                                            <li><a href="tel:10095447818">+1 (009) 544-7818</a></li>
                                            <li><a href="tel:10098801810">+1 (009) 880-1810</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-6">
                                    <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".9s">
                                        <div class="contact-icon">
                                            <i class="tji-chat"></i>
                                        </div>
                                        <h3 class="contact-title">Live chat</h3>
                                        <ul class="contact-list">
                                            <li><a href="mailto:livechat@bexon.com">livechat@bexon.com</a></li>
                                            <li class="active"><a href="contact.php">Need help?</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: Contact Top Section -->

                    <!-- start: Contact Section -->
                    <section class="tj-contact-section-2 section-bottom-gap">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact-form wow fadeInUp" data-wow-delay=".1s">
                                        <h3 class="title">Feel Free to Get in Touch or Visit our Location.</h3>
                                        <form id="contact-form">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-input">
                                                        <input type="text" name="conName" placeholder="Full Name*"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-input">
                                                        <input type="email" name="conEmail" placeholder="Email Address*"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-input">
                                                        <input type="tel" name="conPhone" placeholder="Phone number*"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-input">
                                                        <div class="tj-nice-select-box">
                                                            <div class="tj-select">
                                                                <select name="conSubject">
                                                                    <option value="">Chose a option</option>
                                                                    <option value="Business Strategy">Business Strategy
                                                                    </option>
                                                                    <option value="Customer Experience">Customer
                                                                        Experience</option>
                                                                    <option value="Sustainability and ESG">
                                                                        Sustainability and ESG</option>
                                                                    <option value="Training and Development">Training
                                                                        and Development</option>
                                                                    <option value="IT Support & Maintenance">IT Support
                                                                        & Maintenance</option>
                                                                    <option value="Marketing Strategy">Marketing
                                                                        Strategy</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-input message-input">
                                                        <textarea name="conMessage" id="message"
                                                            placeholder="Type message*" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="submit-btn">
                                                    <button class="tj-primary-btn" type="submit">
                                                        <span class="btn-text"><span>Submit Now</span></span>
                                                        <span class="btn-icon"><i
                                                                class="fa-solid fa-arrow-right"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="map-area wow fadeInUp" data-wow-delay=".3s">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d316440.5712687838!2d-74.01091796224334!3d40.67186885683901!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1745918398047!5m2!1sen!2sbd"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- end: Contact Section -->

                </main>

                <!-- start: Footer Section -->
                <!-- navbar -->
                <?php include 'reusable/footer.php'; ?>
                <!-- end: Footer Section -->
            </div>
        </div>

        <!-- BEGIN: Contact Form Success Modal Message -->
        <div class="modal" id="message_sent" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header alert alert-success" role="alert">
                        <h5 class="modal-title">Message Sent Successfully</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Thank you for contacting us. We will get back to you shortly.<br>Have a great day!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Contact Form Success Modal Message -->

        <!-- BEGIN: Contact Form Fail Modal Message -->
        <div class="modal" id="message_fail" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header alert alert-danger" role="alert">
                        <h5 class="modal-title">Error</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Oops! Something went wrong, please try again.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
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