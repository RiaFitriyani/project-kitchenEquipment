<?php
require_once 'classes/Product.php';
require_once 'classes/ProductType.php';
$productType = new ProductType;
$resultProductType = $productType->all();

?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>Debaco - eCommerce Bootstrap 5 Template</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!-- Google fonts include -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,900" rel="stylesheet">

    <!-- All Vendor & plugins CSS include -->
    <link href="assets/css/vendor.css" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Start Header Area -->
    <header class="header-area header-transparent">
        <!-- main header start -->
        <div class="main-header d-none d-lg-block">
            <div class="header-main-area">
                <!-- header middle area start -->
                <div class="header-middle-area">
                    <div class="container">
                        <div class="header-middle-inner">
                            <div class="row align-items-center">
                                <!-- header search box area start -->
                                <div class="col-lg-4">

                                </div>
                                <!-- header search box area end -->

                                <!-- start logo area -->
                                <div class="col-lg-4">
                                    <div class="logo text-center">
                                        <a href="index.html">
                                            <img src="assets/img/logo/logo.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- start logo area -->

                                <!-- mini cart area start -->
                                <div class="col-lg-4">
                                    <div class="header-configure-wrapper">
                                        <div class="header-configure-area">
                                            <ul class="nav justify-content-end">
                                                <li>
                                                    <a href="page/auth/login.php">
                                                        <i class="lnr lnr-user"></i>
                                                    </a>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- mini cart area end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- header middle area end -->

                <!-- main menu area start -->
                <div class="header-meny-style-2 sticky">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-menu-area">
                                    <div class="main-menu menu-style-2">
                                        <!-- main menu navbar start -->
                                        <nav class="desktop-menu">
                                            <ul>
                                                <li class="active">
                                                    <a href="index.php">Home</a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <!-- main menu navbar end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main menu area end -->
            </div>
        </div>
        <!-- main header start -->

        <!-- mobile header start -->
        <div class="mobile-header d-lg-none d-md-block sticky">
            <!--mobile header top start -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mobile-main-header">
                            <div class="mobile-logo">
                                <a href="index.php">
                                    <img src="assets/img/logo/logo.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="mobile-menu-toggler">
                                <div class="mini-cart-wrap">
                                    <a href="cart.html">
                                        <i class="lnr lnr-cart"></i>
                                    </a>
                                </div>
                                <div class="mobile-menu-btn">
                                    <div class="off-canvas-btn">
                                        <i class="lnr lnr-menu"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile header top start -->
        </div>
        <!-- mobile header end -->
    </header>
    <!-- end Header Area -->

    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="lnr lnr-cross"></i>
            </div>

            <div class="off-canvas-inner">


                <!-- mobile menu start -->
                <div class="mobile-navigation">

                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->



    <!-- main wrapper start -->
    <main>
        <!-- slider area start -->
        <section class="slider-area">
            <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
                <!-- single slider item start -->
                <div class="hero-single-slide ">
                    <div class="hero-slider-item hero-slider-item_2 bg-img" data-bg="assets/img/slider/home2-slide1.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="hero-slider-content hero-slider-content_2 slide-1">
                                        <h5>sale offer 10% off this week</h5>
                                        <h1>new table napkins</h1>
                                        <p>The napkin is highly absorbent.</p>
                                        <a href="javascript:;" class="store-link">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item end -->

                <!-- single slider item start -->
                <div class="hero-single-slide">
                    <div class="hero-slider-item hero-slider-item_2 bg-img" data-bg="assets/img/slider/home2-slide2.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="hero-slider-content hero-slider-content_2 slide-2">
                                        <h5>sale offer 20% off this week</h5>
                                        <h1>new oven gloves</h1>
                                        <p>The napkin is highly absorbent.</p>
                                        <a href="javascript:;" class="store-link">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item start -->

                <!-- single slider item start -->
                <div class="hero-single-slide">
                    <div class="hero-slider-item hero-slider-item_2 bg-img" data-bg="assets/img/slider/home2-slide3.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="hero-slider-content hero-slider-content_2 slide-3">
                                        <h5>sale offer 50% off this week</h5>
                                        <h1>glass napkin ring</h1>
                                        <p>Square Transparent Glass Napkin Ring.</p>
                                        <a href="javascript:;" class="store-link">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item start -->
            </div>
        </section>
        <!-- slider area end -->

        <!-- service policy start -->
        <section class="service-policy-area section-space pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <!-- start policy single item -->
                        <div class="service-policy-item">
                            <div class="icons">
                                <img src="assets/img/icon/free_shipping.png" alt="">
                            </div>
                            <h5>free shipping</h5>
                            <p>Free shipping all order</p>
                        </div>
                        <!-- end policy single item -->
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- start policy single item -->
                        <div class="service-policy-item">
                            <div class="icons">
                                <img src="assets/img/icon/money_back.png" alt="">
                            </div>
                            <h5>Money Return</h5>
                            <p>30 days for free return</p>
                        </div>
                        <!-- end policy single item -->
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- start policy single item -->
                        <div class="service-policy-item">
                            <div class="icons">
                                <img src="assets/img/icon/support247.png" alt="">
                            </div>
                            <h5>Online Support</h5>
                            <p>Support 24 hours a day</p>
                        </div>
                        <!-- end policy single item -->
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- start policy single item -->
                        <div class="service-policy-item">
                            <div class="icons">
                                <img src="assets/img/icon/promotions.png" alt="">
                            </div>
                            <h5>Deals & Promotions</h5>
                            <p>Price savings, discounts</p>
                        </div>
                        <!-- end policy single item -->
                    </div>
                </div>
            </div>
        </section>
        <!-- service policy end -->

        <!-- banner statistics start -->
        <section class="banner-statistics section-space pb-0">
            <div class="container">
                <div class="row mbn-30">
                    <!-- start store item -->
                    <div class="col-md-4">
                        <div class="banner-item mb-30">
                            <figure class="banner-thumb">
                                <a href="#">
                                    <img src="assets/img/banner/img1-top-debaco1.jpg" alt="">
                                </a>
                                <figcaption class="banner-content">
                                    <h5 class="text1">Top Trending</h5>
                                    <h3 class="text2">Table Runners</h3>
                                    <h4 class="text3">collection</h4>
                                    <a class="store-link" href="#">discover now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start store item -->

                    <!-- start store item -->
                    <div class="col-md-4">
                        <div class="banner-item mb-30">
                            <figure class="banner-thumb">
                                <a href="#">
                                    <img src="assets/img/banner/img1-top-debaco2.jpg" alt="">
                                </a>
                                <figcaption class="banner-content text-center">
                                    <h5 class="text1">black fridays !</h5>
                                    <h3 class="text2">sale up to 50% off</h3>
                                    <h4 class="text3">dinning ware</h4>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start store item -->

                    <!-- start store item -->
                    <div class="col-md-4">
                        <div class="banner-item mb-30">
                            <figure class="banner-thumb">
                                <a href="#">
                                    <img src="assets/img/banner/img1-top-debaco3.jpg" alt="">
                                </a>
                                <figcaption class="banner-content">
                                    <h5 class="text1">new arrivals</h5>
                                    <h3 class="text2">classic</h3>
                                    <h4 class="text3">flatware</h4>
                                    <a class="store-link" href="#">discover now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start store item -->
                </div>
            </div>
        </section>
        <!-- banner statistics end -->


        <!-- banner statistics start -->
        <section class="banner-statistics section-space pt-0">
            <div class="container">
                <div class="row mbn-30">
                    <!-- start store item -->
                    <div class="col-md-6 col-sm-6 order-1">
                        <div class="banner-item mb-30">
                            <figure class="banner-thumb">
                                <a href="#">
                                    <img src="assets/img/banner/img1-middle-debaco1.jpg" alt="">
                                </a>
                                <figcaption class="banner-content">
                                    <h3 class="text2">cutlery</h3>
                                    <a class="store-link" href="#">shop now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start store item -->

                    <!-- start store item -->
                    <div class="col-md-3 col-sm-6 order-3 order-md-2">
                        <div class="banner-item mb-30">
                            <figure class="banner-thumb">
                                <a href="#">
                                    <img src="assets/img/banner/img2-middle-debaco1.jpg" alt="">
                                </a>
                                <figcaption class="banner-content">
                                    <h3 class="text2">apron</h3>
                                    <a class="store-link" href="#">shop now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start store item -->

                    <!-- start store item -->
                    <div class="col-md-3 col-sm-6 order-4 order-md-3">
                        <div class="banner-item mb-30">
                            <figure class="banner-thumb">
                                <a href="#">
                                    <img src="assets/img/banner/img3-middle-debaco1.jpg" alt="">
                                </a>
                                <figcaption class="banner-content">
                                    <h3 class="text2">napkins</h3>
                                    <a class="store-link" href="#">shop now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start store item -->

                    <!-- start store item -->
                    <div class="col-md-3 col-sm-6 order-5 order-md-4">
                        <div class="banner-item mb-30">
                            <figure class="banner-thumb">
                                <a href="#">
                                    <img src="assets/img/banner/img4-middle-debaco1.jpg" alt="">
                                </a>
                                <figcaption class="banner-content">
                                    <h3 class="text2">pitchers</h3>
                                    <a class="store-link" href="#">shop now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start store item -->

                    <!-- start store item -->
                    <div class="col-md-6 col-sm-6 order-2 order-md-5">
                        <div class="banner-item mb-30">
                            <figure class="banner-thumb">
                                <a href="#">
                                    <img src="assets/img/banner/img5-middle-debaco1.jpg" alt="">
                                </a>
                                <figcaption class="banner-content">
                                    <h3 class="text2">dinnerware</h3>
                                    <a class="store-link" href="#">shop now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start store item -->

                    <!-- start store item -->
                    <div class="col-md-3 col-sm-6 order-6">
                        <div class="banner-item mb-30">
                            <figure class="banner-thumb">
                                <a href="#">
                                    <img src="assets/img/banner/img6-middle-debaco1.jpg" alt="">
                                </a>
                                <figcaption class="banner-content">
                                    <h3 class="text2">accessories</h3>
                                    <a class="store-link" href="#">shop now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start store item -->
                </div>
            </div>
        </section>
        <!-- banner statistics end -->

        <!-- our product area start -->
        <section class="our-product section-space pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2>our Products</h2>
                            <p>Accumsan vitae pede lacus ut ullamcorper sollicitudin quisque libero</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- product tab menu start -->
                        <div class="tab-menu">
                            <ul class="nav justify-content-center">
                                <li>
                                    <a class="active" data-bs-toggle="tab" href="#all">All</a>
                                </li>
                                <?php foreach ($resultProductType as $productType) : ?>
                                    <?php
                                    $slug = '';
                                    $slug = str_replace(' ', '-', $productType->name);
                                    ?>
                                    <li><a data-bs-toggle="tab" href="#<?= $slug ?>"><?= $productType->name ?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <!-- product tab menu start -->

                        <!-- product tab container start -->
                        <div class="product-container">
                            <div class="tab-content">
                                <!-- all product tab start -->
                                <div class="tab-pane fade show active" id="all">
                                    <div class="product-carousel-wrapper">
                                        <div class="product-carousel--4_2 slick-row-15 slick-sm-row-10 slick-arrow-style">
                                            <?php
                                            $products = Product::all();
                                            foreach ($products as $product) :
                                            ?>
                                                <!-- product single item start -->
                                                <div class="product-item">
                                                    <figure class="product-thumb">
                                                        <a href="detail.php?id=<?= $product->id ?>">
                                                            <img class="pri-img" src="assets/img/product/product-1.jpg" alt="product">
                                                            <img class="sec-img" src="assets/img/product/product-2.jpg" alt="product">
                                                        </a>
                                                    </figure>
                                                    <div class="product-caption">
                                                        <div class="product-identity">
                                                            <p class="manufacturer-name">
                                                                <a href="detail.php?id=<?= $product->id ?>">
                                                                    <?= $product->product_type_name ?></a>
                                                            </p>
                                                            <div class="ratings">
                                                                <span><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                        </div>

                                                        <p class="product-name">
                                                            <a href="detail.php?id=<?= $product->id ?>"><?= $product->name ?></a>
                                                        </p>
                                                        <div class="price-box">
                                                            <span class="price-regular">Rp. <?= number_format($product->sell_price, 0, ',', '.') ?></span>
                                                            <span class="price-old"><del>Rp. <?= number_format($product->purchase_price, 0, ',', '.') ?></del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product single item end -->
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                </div>
                                <?php foreach ($resultProductType as $productType) : ?>
                                    <?php
                                    $slug = '';
                                    $slug = str_replace(' ', '-', $productType->name);
                                    ?>
                                    <div class="tab-pane fade" id="<?= $slug ?>">
                                        <div class="product-carousel-wrapper">
                                            <div class="product-carousel--4_2 slick-row-15 slick-sm-row-10 slick-arrow-style">
                                                <?php
                                                $products = Product::where('product_type_id', '=', $productType->id);
                                                foreach ($products as $product) :
                                                ?>
                                                    <!-- product single item start -->
                                                    <div class="product-item">
                                                        <figure class="product-thumb">
                                                            <a href="detail.php?id=<?= $product->id ?>">
                                                                <img class="pri-img" src="assets/img/product/product-1.jpg" alt="product">
                                                                <img class="sec-img" src="assets/img/product/product-2.jpg" alt="product">
                                                            </a>
                                                        </figure>
                                                        <div class="product-caption">
                                                            <div class="product-identity">
                                                                <p class="manufacturer-name">
                                                                    <a href="detail.php?id=<?= $product->id ?>">
                                                                        <?= $product->product_type_name ?></a>
                                                                </p>
                                                                <div class="ratings">
                                                                    <span><i class="lnr lnr-star"></i></span>
                                                                    <span><i class="lnr lnr-star"></i></span>
                                                                    <span><i class="lnr lnr-star"></i></span>
                                                                    <span><i class="lnr lnr-star"></i></span>
                                                                    <span><i class="lnr lnr-star"></i></span>
                                                                </div>
                                                            </div>

                                                            <p class="product-name">
                                                                <a href="detail.php?id=<?= $product->id ?>"><?= $product->name ?></a>
                                                            </p>
                                                            <div class="price-box">
                                                                <span class="price-regular">Rp. <?= number_format($product->sell_price, 0, ',', '.') ?></span>
                                                                <span class="price-old"><del>Rp. <?= number_format($product->purchase_price, 0, ',', '.') ?></del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- product single item end -->
                                                <?php endforeach ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <!-- product tab container end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- our product area end -->


    </main>
    <!-- main wrapper end -->

    <!-- Start Footer Area Wrapper -->
    <footer class="footer-wrapper common-bg">
        <!-- footer bottom area start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 order-2 order-md-1">
                        <div class="copyright-text">
                            <p>&copy; 2022 <b>Debaco</b> Made with <i class="fa fa-heart text-danger"></i> by <a href="https://hasthemes.com/"><b>HasThemes</b></a></p>
                        </div>
                    </div>
                    <div class="col-md-6 order-1 order-md-2">
                        <div class="payment-method">
                            <img src="assets/img/payment.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom area end -->

    </footer>
    <!-- End Footer Area Wrapper -->

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->

    <!-- All vendor & plugins & active js include here -->
    <!--All Vendor Js -->
    <script src="assets/js/vendor.js"></script>
    <!-- Active Js -->
    <script src="assets/js/active.js"></script>
</body>

</html>