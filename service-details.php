<?php
$service = $_GET['service'] ?? 'website-design';

$services = [

'website-design' => [

    'title' => 'Website Designing',

    'image' => 'assets/images/services/website.png',

    'description' => 'We create responsive, modern and SEO-friendly websites that help businesses establish a strong online presence.',

    'features' => [
        'Responsive Design',
        'UI/UX Design',
        'SEO Friendly',
        'Fast Loading',
        'Mobile Optimized'
    ],

    'details_title' => 'Professional Website Design Services',

    'details_description' => 'Our website design services focus on creating visually appealing, responsive, and user-friendly websites that represent your brand and convert visitors into customers. Every design is optimized for performance, accessibility, and search engines to help your business grow online.',

    'benefits' => [
        [
            'title' => 'Responsive Design',
            'description' => 'Your website looks perfect on desktops, tablets, and smartphones.'
        ],
        [
            'title' => 'SEO Optimized',
            'description' => 'Built with search engine best practices to improve online visibility.'
        ],
        [
            'title' => 'Fast Performance',
            'description' => 'Optimized code and images ensure quick loading times.'
        ]
    ],

    'faq' => [

        [
            'question' => 'How long does it take to design a website?',
            'answer' => 'Most business websites are completed within 1–3 weeks depending on the project scope.'
        ],

        [
            'question' => 'Will my website be mobile friendly?',
            'answer' => 'Yes. Every website we build is fully responsive and optimized for all devices.'
        ],

        [
            'question' => 'Can you redesign my existing website?',
            'answer' => 'Yes. We can modernize your current website while preserving your existing content if required.'
        ]
    ]
],

];

$data = $services[$service] ?? $services['website-design'];
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



        <!-- start: Header Area -->
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
                                        <h1 class="tj-page-title">Service Details</h1>
                                        <div class="tj-page-link">
                                            <span><i class="fa-solid fa-house"></i></span>
                                            <span>
                                                <a href="index.php">Home</a>
                                            </span>
                                            <span><i class="fa-solid fa-chevron-right"></i></span>
                                            <span>
                                                <span>Service Details</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-header-overlay" data-bg-image="assets/images/shape/pheader-overlay.webp"></div>
                    </section>
                    <!-- end: Breadcrumb Section -->

                    <!-- start: Blog Section -->
                    <section class="tj-blog-section section-gap slidebar-stickiy-container">
                        <div class="container">
                            <div class="row row-gap-5">
                                <div class="col-lg-8">
                                    <div class="post-details-wrapper">
                                        <div class="blog-images wow fadeInUp" data-wow-delay=".1s">
                                            <!-- <img src="assets/images/service/service-details.webp" alt="Images"> -->
                                            <img src="<?= $data['image']; ?>" alt="<?= $data['title']; ?>">
                                        </div>
                                        <!-- <h2 class="title title-anim">Transforming Customer: Tailored Solutions for
                                            Experiences.</h2> -->
                                        <h2 class="title title-anim">
                                            <?= $data['title']; ?>
                                        </h2>
                                        <div class="blog-text">
                                            <!-- <p class="wow fadeInUp" data-wow-delay=".3s">Recognize that exceptional
                                                customer experiences are at
                                                the
                                                heart of every successful business. Our
                                                Customer Experience Solutions are crafted to help you transform every
                                                interaction your customers
                                                have
                                                with your brand into a meaningful and positive experience. We believe
                                                that understanding the
                                                customer
                                                journey and providing personalized, seamless experiences can
                                                significantly enhance customer
                                                loyalty,
                                                satisfaction, and lifetime value.Our approach to customer experience is
                                                comprehensive and
                                                data-driven.
                                            </p>
                                            <p class="wow fadeInUp" data-wow-delay=".3s">Our approach to customer
                                                experience is comprehensive
                                                and
                                                data-driven. We begin by assessing your
                                                current customer touchpoints, identifying areas for improvement, and
                                                using insights to develop
                                                strategies that meet your customers’ evolving needs. From optimizing
                                                digital platforms.</p> -->
                                            <p>
                                                <?= $data['description']; ?>
                                            </p>
                                            <!-- <ul class="wow fadeInUp" data-wow-delay=".3s">
                                                <li><span><i class="tji-check"></i></span>Personalization at Scale</li>
                                                <li><span><i class="tji-check"></i></span>Improved Customer Retention
                                                </li>
                                                <li><span><i class="tji-check"></i></span>Data-Driven Insights</li>
                                                <li><span><i class="tji-check"></i></span>Omni-channel Integration</li>
                                                <li><span><i class="tji-check"></i></span>Customer Retention</li>
                                                <li><span><i class="tji-check"></i></span>Support Optimization</li>
                                                <li><span><i class="tji-check"></i></span>Proactive Engagement</li>
                                            </ul> -->
                                            <ul>
                                                <?php foreach($data['features'] as $feature): ?>
                                                <li>
                                                    <span><i class="fa-solid fa-check"></i></span>
                                                    <?= $feature; ?>
                                                </li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <div class="images-wrap">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="image-box wow fadeInUp" data-wow-delay=".3s">
                                                            <img src="assets/images/service/service-3.webp" alt="Image">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="image-box wow fadeInUp" data-wow-delay=".5s">
                                                            <img src="assets/images/service/service-4.webp" alt="Image">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <h3 class="wow fadeInUp" data-wow-delay=".3s">Our Range of Customer Services
                                            </h3>
                                            <p class="wow fadeInUp" data-wow-delay=".3s">At Bexon, we don't just focus
                                                on solving customer
                                                problems—we focus on creating experiences that
                                                delight and build lasting relationships. Whether it's through improving
                                                customer service
                                                operations,
                                                leveraging technology, or designing more engaging digital experiences,
                                                our team is here to help
                                                you
                                                exceed your customers' expectations every time. We help you understand
                                                your customers deeply,
                                                optimize
                                                their experience.</p> -->
                                            <h3><?= $data['details_title']; ?></h3>

                                            <p><?= $data['details_description']; ?></p>
                                            <!-- <div class="details-content-box">
                                                <div class="service-details-item wow fadeInUp" data-wow-delay=".2s">
                                                    <span class="number">01.</span>
                                                    <h6 class="title">Increased Customer <br>Satisfaction</h6>
                                                    <div class="desc">
                                                        <p>By prov consistent, personalized experience, customers are
                                                            more likely to feel valued a
                                                            satisfied, which directly.</p>
                                                    </div>
                                                </div>
                                                <div class="service-details-item wow fadeInUp" data-wow-delay=".4s">
                                                    <div class="service-number">
                                                        <span class="number">02.</span>
                                                        <h6 class="title">Improved Operational <br>Efficiency</h6>
                                                        <div class="desc">
                                                            <p>With our tools and strategies, your customer support
                                                                teams can handle inquiries faster,
                                                                while
                                                                automated systems.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="service-details-item wow fadeInUp" data-wow-delay=".6s">
                                                    <div class="service-number">
                                                        <span class="number">03.</span>
                                                        <h6 class="title">Insights for Continuous Improvement</h6>
                                                        <div class="desc">
                                                            <p>Our data-driven approach provides team with valuable
                                                                insights into customer behavior,
                                                                enabling to continual.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="details-content-box">

                                                <?php foreach($data['benefits'] as $index => $item): ?>

                                                <div class="service-details-item">

                                                    <span class="number">
                                                        <?= sprintf('%02d.', $index + 1); ?>
                                                    </span>

                                                    <h6 class="title"><?= $item['title']; ?></h6>

                                                    <div class="desc">
                                                        <p><?= $item['description']; ?></p>
                                                    </div>

                                                </div>

                                                <?php endforeach; ?>

                                            </div>
                                            <h3 class="wow fadeInUp" data-wow-delay=".3s">Frequently asked questions
                                            </h3>
                                            <!-- <div class="accordion tj-faq style-2" id="faqOne">
                                                <div class="accordion-item active wow fadeInUp" data-wow-delay=".3s">
                                                    <button class=" faq-title" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#faq-1" aria-expanded="true">What is Customer
                                                        Experience (CX) and why is it important?</button>
                                                    <div id="faq-1" class="collapse show" data-bs-parent="#faqOne">
                                                        <div class="accordion-body faq-text">
                                                            <p>Customer Experience (CX) refers to the overall impression
                                                                a customer has of a business
                                                                based
                                                                on their interactions across various touchpoints—whether
                                                                it’s a website visit, a customer
                                                                support call, or an in-store purchase. It encompasses
                                                                everything from ease of navigation
                                                                and
                                                                service quality to emotional connection and brand
                                                                perception.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                                    <button class="faq-title collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq-2"
                                                        aria-expanded="false">How can your Customer Experience Solutions
                                                        benefit?</button>
                                                    <div id="faq-2" class="collapse" data-bs-parent="#faqOne">
                                                        <div class="accordion-body faq-text">
                                                            <p>Our solutions optimize every touchpoint of the customer
                                                                journey, ensuring seamless,
                                                                personalized, and meaningful interactions. The benefits
                                                                include improved customer
                                                                satisfaction, higher retention rates, stronger brand
                                                                loyalty, and actionable insights to
                                                                continuously improve your customer engagement
                                                                strategies. We help integrate these channels
                                                                so
                                                                customers feel valued.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                                    <button class="faq-title collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq-3"
                                                        aria-expanded="false">How do you personalize the customer
                                                        experience?</button>
                                                    <div id="faq-3" class="collapse" data-bs-parent="#faqOne">
                                                        <div class="accordion-body faq-text">
                                                            <p>Getting started is easy! Simply reach out to us through
                                                                our contact form or give us a
                                                                call,
                                                                and
                                                                we’ll schedule a consultation to discuss your project
                                                                and how we can best assist you. Our
                                                                team
                                                                keeps you informed throughout the process, ensuring
                                                                quality control and timely delivery.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                                    <button class="faq-title collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq-4"
                                                        aria-expanded="false">What kind of tools do you use to improve
                                                        customer experience?</button>
                                                    <div id="faq-4" class="collapse" data-bs-parent="#faqOne">
                                                        <div class="accordion-body faq-text">
                                                            <p>Getting started is easy! Simply reach out to us through
                                                                our contact form or give us a
                                                                call,
                                                                and
                                                                we’ll schedule a consultation to discuss your project
                                                                and how we can best assist you. Our
                                                                team
                                                                keeps you informed throughout the process, ensuring
                                                                quality control and timely delivery.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                                    <button class="faq-title collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq-5"
                                                        aria-expanded="false">How do you collect customer
                                                        feedback?</button>
                                                    <div id="faq-5" class="collapse" data-bs-parent="#faqOne">
                                                        <div class="accordion-body faq-text">
                                                            <p>Getting started is easy! Simply reach out to us through
                                                                our contact form or give us a
                                                                call,
                                                                and
                                                                we’ll schedule a consultation to discuss your project
                                                                and how we can best assist you. Our
                                                                team
                                                                keeps you informed throughout the process, ensuring
                                                                quality control and timely delivery.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                                    <button class="faq-title collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq-6"
                                                        aria-expanded="false">Can you help improve our customer support
                                                        system?</button>
                                                    <div id="faq-6" class="collapse" data-bs-parent="#faqOne">
                                                        <div class="accordion-body faq-text">
                                                            <p>Getting started is easy! Simply reach out to us through
                                                                our contact form or give us a
                                                                call,
                                                                and
                                                                we’ll schedule a consultation to discuss your project
                                                                and how we can best assist you. Our
                                                                team
                                                                keeps you informed throughout the process, ensuring
                                                                quality control and timely delivery.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="accordion tj-faq style-2" id="faqOne">

                                                <?php foreach($data['faq'] as $key => $faq): ?>

                                                <div class="accordion-item <?= $key==0 ? 'active' : ''; ?>">

                                                    <button class="faq-title <?= $key!=0 ? 'collapsed' : ''; ?>"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#faq-<?= $key; ?>">

                                                        <?= $faq['question']; ?>

                                                    </button>

                                                    <div id="faq-<?= $key; ?>"
                                                        class="collapse <?= $key==0 ? 'show' : ''; ?>"
                                                        data-bs-parent="#faqOne">

                                                        <div class="accordion-body">
                                                            <p><?= $faq['answer']; ?></p>
                                                        </div>

                                                    </div>

                                                </div>

                                                <?php endforeach; ?>

                                            </div>

                                        </div>
                                        <div class="tj-post__navigation mb-0 wow fadeInUp" data-wow-delay=".3s">
                                            <!-- previous post -->
                                            <div class="tj-nav__post previous">
                                                <div class="tj-nav-post__nav prev_post">
                                                    <a href="service-details.php"><span><i
                                                                class="fa-solid fa-arrow-left"></i></span>Previous</a>
                                                </div>
                                            </div>
                                            <div class="tj-nav-post__grid">
                                                <a href="service.php"><i class="fa-solid fa-grip"></i></a>
                                            </div>
                                            <!-- next post -->
                                            <div class="tj-nav__post next">
                                                <div class="tj-nav-post__nav next_post">
                                                    <a href="service-details.php">Next<span><i
                                                                class="fa-solid fa-arrow-right"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="tj-main-sidebar slidebar-stickiy">
                                        <!-- <div class="tj-sidebar-widget service-categories wow fadeInUp"
                                            data-wow-delay=".1s">
                                            <h4 class="widget-title">More services</h4>
                                            <ul>
                                                <li><a class="active" href="service-details.php">Customer
                                                        Experience<span class="icon"><i
                                                                class="tji-arrow-right"></i></span></a></li>
                                                <li><a href="service-details.php">Training Programs<span
                                                            class="icon"><i class="fa-solid fa-chevron-right"></i></span></a></li>
                                                <li><a href="service-details.php">Business Strategy<span
                                                            class="icon"><i class="fa-solid fa-chevron-right"></i></span></a></li>
                                                <li><a href="service-details.php">Training Program<span class="icon"><i
                                                                class="tji-arrow-right"></i></span></a></li>
                                                <li><a href="service-details.php">ESG Consulting<span class="icon"><i
                                                                class="tji-arrow-right"></i></span></a></li>
                                                <li><a href="service-details.php">Development Hub<span class="icon"><i
                                                                class="tji-arrow-right"></i></span></a></li>
                                            </ul>
                                        </div> -->
                                        <div class="tj-sidebar-widget service-categories wow fadeInUp"
                                            data-wow-delay=".1s">
                                            <h4 class="widget-title">More Services</h4>

                                            <ul>
                                                <?php foreach($services as $key => $service): ?>
                                                <li>
                                                    <a href="service-details.php?service=<?= $key; ?>"
                                                        class="<?= ($service == $key) ? 'active' : ''; ?>">

                                                        <?= $service['title']; ?>

                                                        <span class="icon">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>

                                                    </a>
                                                </li>
                                                <?php endforeach; ?>
                                            </ul>

                                        </div>
                                        <div class="tj-sidebar-widget widget-feature-item wow fadeInUp"
                                            data-wow-delay=".3s">
                                            <div class="feature-box">
                                                <div class="feature-content">
                                                    <h2 class="title">Modern</h2>
                                                    <span>Home Makeover</span>
                                                    <a class="read-more feature-contact" href="tel:8321890640">
                                                        <i class="fa-solid fa-phone"></i>
                                                        <span>+8 (321) 890-640</span>
                                                    </a>
                                                </div>
                                                <div class="feature-images">
                                                    <img src="assets/images/services/service-ad.webp" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- end: Blog Section -->


                </main>

                <!-- start: Footer Section -->
                <?php include 'reusable/footer.php'; ?>
                <!-- end: Footer Section -->
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

    </html>