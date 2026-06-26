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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>

    <body>
        <div class="body-overlay"></div>

        <!-- navbar -->
        <?php require_once '../reusable/navbar.php';  ?>


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
                                        <h1 class="tj-page-title">Shop</h1>
                                        <div class="tj-page-link">
                                            <span><i class="fa-solid fa-house"></i></span>
                                            <span>
                                                <a href="index.php">Home</a>
                                            </span>
                                            <span><i class="fa-solid fa-chevron-right"></i></span>
                                            <span>
                                                <span>Products</span>
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

                    <!-- start: Shop Section -->
                    <div class="tj-product-area section-gap slidebar-stickiy-container">
                        <div class="container">
                            <div class="row rg-50">
                                <div class="col-xl-8 col-lg-8 col-md-12">
                                    <div
                                        class="tj-shop-listing d-flex flex-wrap align-items-center mb-40 justify-content-between">
                                        <div class="tj-shop-listing-number">
                                            <p class="tj-shop-list-title">
                                                Showing 1–6 of 9 results </p>
                                        </div>
                                        <div class="tj-shop-listing-popup">
                                            <div class="tj-shop-from">
                                                <form class="-ordering" method="get">
                                                    <select name="orderby" class="orderby" aria-label="Shop order">
                                                        <option value="popularity">Sort by popularity</option>
                                                        <option value="rating">Sort by average rating</option>
                                                        <option value="date" selected="selected">Sort by latest</option>
                                                        <option value="price">Sort by price: low to high</option>
                                                        <option value="price-desc">Sort by price: high to low</option>
                                                    </select>
                                                    <input type="hidden" name="paged" value="1">
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tj-shop-item-wrapper">
                                        <div class="row rg-30 row-cols-xl-2 row-cols-lg-2 row-cols-md-2 row-cols-1">
                                            <div class="tj-product">
                                                <div class="tj-product-item">
                                                    <div class="tj-product-thumb">
                                                        <a href="/shop/shop-details.php">
                                                            <img src="./../assets/images/product/product-1.webp" alt="">
                                                        </a>

                                                        <div class="tj-product-badge product-on-sale">
                                                            <span class="onsale">Sale</span>
                                                        </div>

                                                        <!-- product action -->
                                                        <div class="tj-product-action">
                                                            <div class="tj-product-action-item d-flex flex-column">
                                                                <div
                                                                    class="tj-product-action-btn product-add-wishlist-btn">
                                                                    <button>Add to
                                                                        wishlist</button> <span
                                                                        class="tj-product-action-btn-tooltip">Add to
                                                                        wishlist</span>
                                                                </div>

                                                                <div class="tj-product-action-btn">
                                                                    <a class="tj-quick-product-details"
                                                                        href="#tj-product-modal-1"
                                                                        data-vbtype="inline"><i
                                                                            class="fal fa-eye"></i></a>
                                                                    <span class="tj-product-action-btn-tooltip">Quick
                                                                        view</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tj-product-cart-btn">
                                                            <a href="#" data-quantity="1"
                                                                class="cart-button button tj-cart-btn stock-available "><span
                                                                    class="btn-icon"><i
                                                                        class="fal fa-shopping-cart"></i><i
                                                                        class="fal fa-shopping-cart"></i></span><span
                                                                    class="btn-text"><span>Add to
                                                                        cart</span></span></a>
                                                        </div>
                                                    </div>
                                                    <div class="tj-product-content">
                                                        <div class="tj-product-tag d-none">
                                                            <a href="/shop/shop-details.php"> Power</a>
                                                        </div>
                                                        <h3 class="tj-product-title">
                                                            <a href="/shop/shop-details.php">Personal
                                                                holding earbud</a>
                                                        </h3>

                                                        <div class="tj-product-price-wrapper">

                                                            <span
                                                                class="price"><del><span><bdi><span>$</span>240.00</bdi></span></del>
                                                                <ins><span><bdi><span>$</span>200.00</bdi></span></ins></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tj-product">
                                                <div class="tj-product-item">
                                                    <div class="tj-product-thumb">
                                                        <a href="/shop/shop-details.php">
                                                            <img src="./../assets/images/product/product-2.webp" alt="">
                                                        </a>

                                                        <div class="tj-product-badge product-on-sale">
                                                            <span class="onsale sold-out">Sold</span>
                                                        </div>

                                                        <!-- product action -->
                                                        <div class="tj-product-action">
                                                            <div class="tj-product-action-item d-flex flex-column">
                                                                <div
                                                                    class="tj-product-action-btn product-add-wishlist-btn">
                                                                    <button>Add to
                                                                        wishlist</button> <span
                                                                        class="tj-product-action-btn-tooltip">Add to
                                                                        wishlist</span>
                                                                </div>

                                                                <div class="tj-product-action-btn">
                                                                    <a class="tj-quick-product-details"
                                                                        href="#tj-product-modal-1"
                                                                        data-vbtype="inline"><i
                                                                            class="fal fa-eye"></i></a> <span
                                                                        class="tj-product-action-btn-tooltip">Quick
                                                                        view</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tj-product-content">
                                                        <div class="tj-product-tag d-none">
                                                            <a
                                                                href="https://solvior.themejunction.net/product-category/charger/ ">
                                                                Charger</a>
                                                        </div>
                                                        <h3 class="tj-product-title">
                                                            <a href="/shop/shop-details.php">Echo tune wireless
                                                                headphones</a>
                                                        </h3>

                                                        <div class="tj-product-price-wrapper">

                                                            <span
                                                                class="price"><del><span><bdi><span>$</span>300.00</bdi></span></del>
                                                                <ins><span><bdi><span>$</span>250.00</bdi></span></ins></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tj-product">
                                                <div class="tj-product-item">
                                                    <div class="tj-product-thumb">
                                                        <a href="/shop/shop-details.php">
                                                            <img src="./../assets/images/product/product-7.webp" alt="">
                                                        </a>


                                                        <!-- product action -->
                                                        <div class="tj-product-action">
                                                            <div class="tj-product-action-item d-flex flex-column">
                                                                <div
                                                                    class="tj-product-action-btn product-add-wishlist-btn">
                                                                    <button>Add to
                                                                        wishlist</button> <span
                                                                        class="tj-product-action-btn-tooltip">Add to
                                                                        wishlist</span>
                                                                </div>

                                                                <div class="tj-product-action-btn">
                                                                    <a class="tj-quick-product-details"
                                                                        href="#tj-product-modal-1"
                                                                        data-vbtype="inline"><i
                                                                            class="fal fa-eye"></i></a> <span
                                                                        class="tj-product-action-btn-tooltip">Quick
                                                                        view</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tj-product-cart-btn">
                                                            <a href="?add-to-cart=5401" data-quantity="1"
                                                                class="cart-button button tj-cart-btn stock-available "><span
                                                                    class="btn-icon"><i
                                                                        class="fal fa-shopping-cart"></i><i
                                                                        class="fal fa-shopping-cart"></i></span><span
                                                                    class="btn-text"><span>Add to
                                                                        cart</span></span></a>
                                                        </div>
                                                    </div>
                                                    <div class="tj-product-content">
                                                        <div class="tj-product-tag d-none">
                                                            <a href="h/shop/shop-details.php"> Speaker</a>
                                                        </div>
                                                        <h3 class="tj-product-title">
                                                            <a href="/shop/shop-details.php">Base
                                                                booster speaker</a>
                                                        </h3>

                                                        <div class="tj-product-price-wrapper">

                                                            <span
                                                                class="price"><span><bdi><span>$</span>200.00</bdi></span></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tj-product">
                                                <div class="tj-product-item">
                                                    <div class="tj-product-thumb">
                                                        <a href="/shop/shop-details.php">
                                                            <img src="./../assets/images/product/product-6.webp" alt="">
                                                        </a>


                                                        <!-- product action -->
                                                        <div class="tj-product-action">
                                                            <div class="tj-product-action-item d-flex flex-column">
                                                                <div
                                                                    class="tj-product-action-btn product-add-wishlist-btn">
                                                                    <button>Add to
                                                                        wishlist</button> <span
                                                                        class="tj-product-action-btn-tooltip">Add to
                                                                        wishlist</span>
                                                                </div>

                                                                <div class="tj-product-action-btn">
                                                                    <a class="tj-quick-product-details"
                                                                        href="#tj-product-modal-1"
                                                                        data-vbtype="inline"><i
                                                                            class="fal fa-eye"></i></a> <span
                                                                        class="tj-product-action-btn-tooltip">Quick
                                                                        view</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tj-product-cart-btn">
                                                            <a href="#"
                                                                class="cart-button button tj-cart-btn stock-available "><span
                                                                    class="btn-icon"><i
                                                                        class="fal fa-shopping-cart"></i><i
                                                                        class="fal fa-shopping-cart"></i></span><span
                                                                    class="btn-text"><span>Add to
                                                                        cart</span></span></a>
                                                        </div>
                                                    </div>
                                                    <div class="tj-product-content">
                                                        <div class="tj-product-tag d-none">
                                                            <a href="/shop/shop-details.php"> Power</a>
                                                        </div>
                                                        <h3 class="tj-product-title">
                                                            <a href="/shop/shop-details.php">Cool mini USB
                                                                fan</a>
                                                        </h3>

                                                        <div class="tj-product-price-wrapper">

                                                            <span
                                                                class="price"><span><bdi><span>$</span>50.00</bdi></span></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tj-product">
                                                <div class="tj-product-item">
                                                    <div class="tj-product-thumb">
                                                        <a href="/shop/shop-details.php">
                                                            <img src="./../assets/images/product/product-5.webp" alt="">
                                                        </a>


                                                        <!-- product action -->
                                                        <div class="tj-product-action">
                                                            <div class="tj-product-action-item d-flex flex-column">
                                                                <div
                                                                    class="tj-product-action-btn product-add-wishlist-btn">
                                                                    <button>Add to
                                                                        wishlist</button> <span
                                                                        class="tj-product-action-btn-tooltip">Add to
                                                                        wishlist</span>
                                                                </div>

                                                                <div class="tj-product-action-btn">
                                                                    <a class="tj-quick-product-details"
                                                                        href="#tj-product-modal-1"
                                                                        data-vbtype="inline"><i
                                                                            class="fal fa-eye"></i></a> <span
                                                                        class="tj-product-action-btn-tooltip">Quick
                                                                        view</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tj-product-cart-btn">
                                                            <a href="#"
                                                                class="cart-button button tj-cart-btn stock-available "><span
                                                                    class="btn-icon"><i
                                                                        class="fal fa-shopping-cart"></i><i
                                                                        class="fal fa-shopping-cart"></i></span><span
                                                                    class="btn-text"><span>Add to
                                                                        cart</span></span></a>
                                                        </div>
                                                    </div>
                                                    <div class="tj-product-content">
                                                        <div class="tj-product-tag d-none">
                                                            <a href="/shop/shop-details.php"> Cover</a>
                                                        </div>
                                                        <h3 class="tj-product-title">
                                                            <a href="/shop/shop-details.php">Pure
                                                                white slim cover</a>
                                                        </h3>

                                                        <div class="tj-product-price-wrapper">

                                                            <span
                                                                class="price"><span><bdi><span>$</span>30.00</bdi></span></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tj-product">
                                                <div class="tj-product-item">
                                                    <div class="tj-product-thumb">
                                                        <a href="/shop/shop-details.php">
                                                            <img src="./../assets/images/product/product-4.webp" alt="">
                                                        </a>

                                                        <div class="tj-product-badge product-on-sale">
                                                            <span class="onsale">Sale</span>
                                                        </div>

                                                        <!-- product action -->
                                                        <div class="tj-product-action">
                                                            <div class="tj-product-action-item d-flex flex-column">
                                                                <div
                                                                    class="tj-product-action-btn product-add-wishlist-btn">
                                                                    <button>Add to
                                                                        wishlist</button> <span
                                                                        class="tj-product-action-btn-tooltip">Add to
                                                                        wishlist</span>
                                                                </div>

                                                                <div class="tj-product-action-btn">
                                                                    <a class="tj-quick-product-details"
                                                                        href="#tj-product-modal-1"
                                                                        data-vbtype="inline"><i
                                                                            class="fal fa-eye"></i></a> <span
                                                                        class="tj-product-action-btn-tooltip">Quick
                                                                        view</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tj-product-cart-btn">
                                                            <a href="#"
                                                                class="cart-button button tj-cart-btn stock-available "><span
                                                                    class="btn-icon"><i
                                                                        class="fal fa-shopping-cart"></i><i
                                                                        class="fal fa-shopping-cart"></i></span><span
                                                                    class="btn-text"><span>Add to
                                                                        cart</span></span></a>
                                                        </div>
                                                    </div>
                                                    <div class="tj-product-content">
                                                        <div class="tj-product-tag d-none">
                                                            <a href="h/shop/shop-details.php"> Speaker</a>
                                                        </div>
                                                        <h3 class="tj-product-title">
                                                            <a href="/shop/shop-details.php">Hi-Fi
                                                                bluetooth speaker</a>
                                                        </h3>

                                                        <div class="tj-product-price-wrapper">

                                                            <span
                                                                class="price"><del><span><bdi><span>$</span>800.00</bdi></span></del>
                                                                <ins><span><bdi><span>$</span>600.00</bdi></span></ins></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="basic-pagination text-start">
                                                    <nav class=" tj-pagination shop">
                                                        <ul class="page-numbers">
                                                            <li><span class="page-numbers current">1</span></li>
                                                            <li><a aria-label="Page 2" class="page-numbers"
                                                                    href="#">2</a></li>
                                                            <li><a class="next page-numbers" href="#"> <i
                                                                        class="fa-solid fa-chevron-right"></i>
                                                                </a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-12">
                                    <div class="tj-shop-sidebar slidebar-stickiy">
                                        <div id="_price_filter-2" class="product-widget widget_price_filter">
                                            <h5 class="product-widget-title">Filter by price</h5>
                                            <form>
                                                <div class="price_slider_wrapper">
                                                    <div class="price_slider" id="slider-range"></div> <!-- Added ID -->
                                                    <div class="price_slider_amount">
                                                        <button type="submit" class="button">Apply</button>
                                                        <div class="price_label">
                                                            <span class="from">$<span id="price-from">75</span></span>
                                                            &mdash;
                                                            <span class="to">$<span id="price-to">300</span></span>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="product-widget  widget_product_categories">
                                            <h5 class="product-widget-title">Categories</h5>
                                            <ul class="product-categories">
                                                <li><a href="/shop/shop-details.php">Bluetooth</a>
                                                    <span class="count">(1)</span>
                                                </li>
                                                <li><a href="/shop/shop-details.php">Charger</a> <span
                                                        class="count">(2)</span></li>
                                                <li><a href="/shop/shop-details.php">Cover</a> <span>(1)</span></li>
                                                <li><a href="/shop/shop-details.php">Power</a> <span
                                                        class="count">(2)</span>
                                                </li>
                                                <li><a
                                                        href="https://solvior.themejunction.net/product-category/speaker/">Speaker</a>
                                                    <span class="count">(3)</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-widget  widget_products">
                                            <h5 class="product-widget-title">Latest products</h5>
                                            <ul class="product_list_widget">
                                                <li class="tj-recent-product-list sidebar-recent-post">
                                                    <div class="single-post d-flex align-items-center ">
                                                        <div class="post-image">
                                                            <a href="/shop/shop-details.php">
                                                                <img width="300" height="300"
                                                                    src="./../assets/images/product/product-1.webp"
                                                                    class="attachment-_thumbnail size-_thumbnail"
                                                                    alt="Personal holding earbud">
                                                            </a>
                                                        </div>

                                                        <div class="post-header">
                                                            <h5 class="tj-product-title">
                                                                <a href="/shop/shop-details.php">
                                                                    Personal holding earbud </a>
                                                            </h5>
                                                            <div
                                                                class="tj-product-sidebar-rating-price tj-product-price">
                                                                <del><span><span>$</span>240.00</span></del>
                                                                <ins><span><span>$</span>200.00</span></ins>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </li>
                                                <li class="tj-recent-product-list sidebar-recent-post">
                                                    <div class="single-post d-flex align-items-center ">
                                                        <div class="post-image">
                                                            <a href="/shop/shop-details.php">
                                                                <img width="300" height="300"
                                                                    src="./../assets/images/product/product-2.webp"
                                                                    class="attachment-_thumbnail size-_thumbnail"
                                                                    alt="Super fast charger">
                                                            </a>
                                                        </div>

                                                        <div class="post-header">
                                                            <h5 class="tj-product-title">
                                                                <a href="/shop/shop-details.php">
                                                                    Echo tune wireless headphones</a>
                                                            </h5>
                                                            <div
                                                                class="tj-product-sidebar-rating-price tj-product-price">
                                                                <del><span><span>$</span>300.00</span></del>
                                                                <ins><span><span>$</span>250.00</span></ins>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </li>
                                                <li class="tj-recent-product-list sidebar-recent-post">
                                                    <div class="single-post d-flex align-items-center ">
                                                        <div class="post-image">
                                                            <a href="/shop/shop-details.php">
                                                                <img width="300" height="300"
                                                                    src="./../assets/images/product/product-7.webp"
                                                                    class="attachment-_thumbnail size-_thumbnail"
                                                                    alt="Base booster speaker"> </a>
                                                        </div>

                                                        <div class="post-header">
                                                            <h5 class="tj-product-title">
                                                                <a href="/shop/shop-details.php">
                                                                    Base booster speaker </a>
                                                            </h5>
                                                            <div
                                                                class="tj-product-sidebar-rating-price tj-product-price">
                                                                <span><span>$</span>200.00</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-widget  widget_product_tag_cloud">
                                            <h5 class="product-widget-title">Tags</h5>
                                            <div class="tagcloud"><a href="/shop/shop-details.php">Compact</a>
                                                <a href="/shop/shop-details.php">Durable</a>
                                                <a href="/shop/shop-details.php">Fast</a>
                                                <a href="/shop/shop-details.php" class="tag-cloud-link">Portable</a>
                                                <a href="/shop/shop-details.php" class="tag-cloud-link ">Powerful</a>
                                                <a href="/shop/shop-details.php" class="tag-cloud-link ">Reliable</a>
                                                <a href="/shop/shop-details.php" class="tag-cloud-link ">Retiable</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end: Shop Section -->
                </main>

                <?php require_once '../reusable/footer.php'; ?>
            </div>
        </div>
        <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> </a></div>

        <a href="https://wa.me/76778 89831" target="_blank" class="whatsapp-float">
            <img src="../assets/images/whatsapp.png" alt="WhatsApp">
        </a>
        <!-- JS here -->
        <script src="../assets/js/jquery.min.js" defer></script>
        <script src="../assets/js/bootstrap.bundle.min.js" defer></script>
        <script src="../assets/js/gsap.min.js" defer></script>
        <script src="../assets/js/ScrollSmoother.js" defer></script>
        <script src="../assets/js/gsap-scroll-to-plugin.min.js" defer></script>
        <script src="../assets/js/gsap-scroll-trigger.min.js" defer></script>
        <script src="../assets/js/gsap-split-text.min.js" defer></script>
        <script src="../assets/js/jquery.nice-select.min.js" defer></script>
        <script src="../assets/js/swiper.min.js" defer></script>
        <script src="../assets/js/odometer.min.js" defer></script>
        <script src="../assets/js/venobox.min.js" defer></script>
        <script src="../assets/js/appear.min.js" defer></script>
        <script src="../assets/js/wow.min.js" defer></script>
        <script src="../assets/js/meanmenu.js" defer></script>
        <script src="../assets/js/main.js" defer></script>

    </body>

</php>