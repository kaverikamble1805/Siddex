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
                                        <h1 class="tj-page-title">My cart</h1>
                                        <div class="tj-page-link">
                                            <span><i class="fa-solid fa-house"></i></span>
                                            <span>
                                                <a href="index.php">Home</a>
                                            </span>
                                            <span><i class="fa-solid fa-chevron-right"></i></span>
                                            <span>
                                                <span>Cart</span>
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


                    <!-- start: Cart Section -->
                    <section class="full-width tj-page__area section-gap">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tj-page__container">
                                        <!-- page content -->
                                        <div class="woocommerce">
                                            <div class="woocommerce-notices-wrapper"></div>
                                            <div class="row cart-wrapper ">
                                                <div class="col-sm-12">
                                                    <form class="woocommerce-cart-form section-bottom-gap">

                                                        <div class="shop_table_wrapper">
                                                            <table
                                                                class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="product-thumbnail">Product</th>
                                                                        <th class="product-name"></th>
                                                                        <th class="product-price">Price</th>
                                                                        <th class="product-quantity">Quantity</th>
                                                                        <th class="product-subtotal">Subtotal</th>
                                                                        <th class="product-remove">&nbsp;</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <tr
                                                                        class="woocommerce-cart-form__cart-item cart_item">
                                                                        <td class="product-thumbnail"
                                                                            data-title="Product">
                                                                            <a href="shop-details.php"><img
                                                                                    src="./../assets/images/product/product-1.webp"
                                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                    alt="Personal holding earbud"></a>
                                                                        </td>
                                                                        <td class="product-name" data-title="Name">
                                                                            <h5><a href="shop-details.php">Personal
                                                                                    holding earbud</a></h5>
                                                                        </td>
                                                                        <td class="product-price" data-title="Price">
                                                                            <span
                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                        class="woocommerce-Price-currencySymbol">$</span>200.00</bdi></span>
                                                                        </td>
                                                                        <td class="product-quantity tj-cart-quantity"
                                                                            data-title="Quantity">
                                                                            <div class="tj-product-quantity">
                                                                                <div class="quantity">
                                                                                    <label
                                                                                        class="screen-reader-text"></label>
                                                                                    <span
                                                                                        class="qty_button minus tj-cart-minus">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </span>
                                                                                    <input type="text"
                                                                                        class="input-text tj-cart-input qty tj-cart-input text"
                                                                                        value="1">
                                                                                    <span
                                                                                        class="qty_button plus tj-cart-plus ">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </span>
                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                        <td class="product-subtotal"
                                                                            data-title="Subtotal">
                                                                            <span
                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                        class="woocommerce-Price-currencySymbol">$</span>200.00</bdi></span>
                                                                        </td>
                                                                        <td class="product-remove">
                                                                            <a href="#" class="remove">×</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr
                                                                        class="woocommerce-cart-form__cart-item cart_item">
                                                                        <td class="product-thumbnail"
                                                                            data-title="Product">
                                                                            <a href="shop-details.php"><img
                                                                                    src="./../assets/images/product/product-7.webp"
                                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                    alt="Base booster speaker"></a>
                                                                        </td>
                                                                        <td class="product-name" data-title="Name">
                                                                            <h5><a href="shop-details.php">Base
                                                                                    booster speaker</a></h5>
                                                                        </td>

                                                                        <td class="product-price" data-title="Price">
                                                                            <span
                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                        class="woocommerce-Price-currencySymbol">$</span>200.00</bdi></span>
                                                                        </td>

                                                                        <td class="product-quantity tj-cart-quantity"
                                                                            data-title="Quantity">
                                                                            <div class="tj-product-quantity">
                                                                                <div class="quantity">
                                                                                    <label
                                                                                        class="screen-reader-text"></label>
                                                                                    <span
                                                                                        class="qty_button minus tj-cart-minus">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </span>
                                                                                    <input type="text"
                                                                                        class="input-text tj-cart-input qty tj-cart-input text"
                                                                                        value="1">
                                                                                    <span
                                                                                        class="qty_button plus tj-cart-plus ">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </span>
                                                                                </div>

                                                                            </div>
                                                                        </td>

                                                                        <td class="product-subtotal"
                                                                            data-title="Subtotal">
                                                                            <span
                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                        class="woocommerce-Price-currencySymbol">$</span>200.00</bdi></span>
                                                                        </td>

                                                                        <td class="product-remove">
                                                                            <a href="#" class="remove"
                                                                                aria-label="Remove this item">×</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr
                                                                        class="woocommerce-cart-form__cart-item cart_item">

                                                                        <td class="product-thumbnail"
                                                                            data-title="Product">
                                                                            <a href="shop-details.php"><img
                                                                                    src="./../assets/images/product/product-6.webp"
                                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                    alt="Cool mini USB fan"></a>
                                                                        </td>

                                                                        <td class="product-name" data-title="Name">
                                                                            <h5><a href="shop-details.php">Cool
                                                                                    mini USB fan</a></h5>
                                                                        </td>

                                                                        <td class="product-price" data-title="Price">
                                                                            <span
                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                        class="woocommerce-Price-currencySymbol">$</span>50.00</bdi></span>
                                                                        </td>

                                                                        <td class="product-quantity tj-cart-quantity"
                                                                            data-title="Quantity">
                                                                            <div class="tj-product-quantity">
                                                                                <div class="quantity">
                                                                                    <label
                                                                                        class="screen-reader-text"></label>
                                                                                    <span
                                                                                        class="qty_button minus tj-cart-minus">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </span>
                                                                                    <input type="text"
                                                                                        class="input-text tj-cart-input qty tj-cart-input text"
                                                                                        value="1">
                                                                                    <span
                                                                                        class="qty_button plus tj-cart-plus ">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </span>
                                                                                </div>

                                                                            </div>
                                                                        </td>

                                                                        <td class="product-subtotal"
                                                                            data-title="Subtotal">
                                                                            <span
                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                        class="woocommerce-Price-currencySymbol">$</span>50.00</bdi></span>
                                                                        </td>

                                                                        <td class="product-remove">
                                                                            <a href="#" class="remove">×</a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="cart_totals_action_wrap">
                                                            <div class="actions">
                                                                <div class="row rg-30 align-items-center">
                                                                    <div class="col-md-8">
                                                                        <div class="coupon">
                                                                            <input type="text" name="coupon_code"
                                                                                class="input-text" id="coupon_code"
                                                                                value="" placeholder="Coupon code">

                                                                            <button type="submit" class="tj-primary-btn"
                                                                                name="apply_coupon"
                                                                                value="Apply coupon">
                                                                                <span class="btn-text"><span>Apply
                                                                                        coupon</span></span>
                                                                                <span class="btn-icon"><i
                                                                                        class="fa-solid fa-chevron-right-long"></i></span>

                                                                            </button>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="tj-cart-update-btn text-md-end">
                                                                            <button type="submit"
                                                                                class="update-cart tj-primary-btn"
                                                                                name="update_cart" value="Update cart"
                                                                                disabled="">
                                                                                <span class="btn-text"><span>Update
                                                                                        cart</span></span>
                                                                                <span class="btn-icon"><i
                                                                                        class="fa-solid fa-chevron-right-long"></i></span>

                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" id="woocommerce-cart-nonce"
                                                                    name="woocommerce-cart-nonce">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-sm-12">

                                                    <div class="cart-collaterals">
                                                        <div class="cart_totals ">
                                                            <h3>Cart totals</h3>
                                                            <table class="shop_table shop_table_responsive">
                                                                <tbody>
                                                                    <tr class="cart-subtotal">
                                                                        <th>Subtotal</th>
                                                                        <td data-title="Subtotal"><span
                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                        class="woocommerce-Price-currencySymbol">$</span>450.00</bdi></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="order-total">
                                                                        <th>Total</th>
                                                                        <td data-title="Total"><strong><span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">$</span>450.00</bdi></span></strong>
                                                                        </td>
                                                                    </tr>


                                                                </tbody>
                                                            </table>

                                                            <div class="wc-proceed-to-checkout">
                                                                <a href="checkout.php"
                                                                    class="tj-primary-btn checkout-button button alt wc-forward">
                                                                    <span class="btn-text"><span>Proceed to
                                                                            checkout</span></span>
                                                                    <span class="btn-icon"><i
                                                                            class="fa-solid fa-chevron-right-long"></i></span>

                                                                </a>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
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