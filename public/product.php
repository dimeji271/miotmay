<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

<!-- header start -->
<?php include(TEMPLATE_FRONT . DS . "navbar.php"); ?>
<!--header end-->       
        <!-- breadcumb start -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumb-start">
                            <ul class="breadcrumb-url">
                                <li class="breadcrumb-url-li">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="breadcrumb-url-li">
                                    <span>Skincare Products</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcumb end -->
<?php

$query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . "" );
    confirm($query);

    while($row = fetch_array($query)):

?> 
        <!-- content area start -->
        <section class="section-tb-padding">
            <div class="container">
                <div class="left-right-column">
                    <div class="left-column">
                        <!-- special products start -->
                        <div class="special-product left-section-b-padding">
                            <div class="left-section-title">
                                <h4>Special <span>product</span></h4>
                            </div>
                            <a href="#special-pro" data-bs-toggle="collapse" class="responsive-collapse">Special <span> products</span><i class="fa fa-angle-down"></i></a>
                            <div class="special-pro swiper-container collapse" id="special-pro">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/6.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">South indian palakpaner</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$93.00 USD</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/7.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">Delicius chiken hotdogs</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$167.00 USD</span>
                                                    <span class="old-price"><del>$179.00 USD</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/8.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">Desc butter chiken</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$230.00 USD</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/9.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">Fryed lupis food</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$130.00 USD</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/10.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">Kathiyavadi Gujarati sandvich</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$126.00 USD</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/11.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">Peri peri chiken</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$130.00 USD</span>
                                                    <span class="old-price"><del>$150.00 USD</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/12.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">South indian palakpaner</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$117.00 USD</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/13.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">Special corn noodels</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$133.00 USD</span>
                                                    <span class="old-price"><del>$145.00 USD</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/14.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">Special egypt pasta</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$139.00 USD</span>
                                                    <span class="old-price"><del>$160.00 USD</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/15.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">Vegetable italian salad</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$580.00 USD</span>
                                                    <span class="old-price"><del>$590.00 USD</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/16.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">West indian onionsalad</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$93.00 USD</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/13.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">Special corn noodels</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$133.00 USD</span>
                                                    <span class="old-price"><del>$145.00 USD</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- special products end -->
                        <!-- big sale start -->
                        <div class="left-deal-bg" style="background-image: url(image/banner34.jpg);">
                            <div class="left-deal-c">
                                <h2>Big <span>50%</span></h2>
                                <h4>Offer</h4>
                                <a href="javascript:void(0)">Only Accessories Fashion</a>
                            </div>
                        </div>
                        <!-- big sale end -->
                        <!-- home brand start -->
                        <div class="left-section-t-padding">
                            <div class="left-section-title">
                                <h4>Our <span>brand</span></h4>
                            </div>
                            <div class="home3-brand owl-carousel owl-theme">
                                <div class="items">
                                    <img src="image/brand/home-123/l1.png" class="img-fluid" alt="brand-image">
                                </div>
                                <div class="items">
                                    <img src="image/brand/home-123/l2.png" class="img-fluid" alt="brand-image">
                                </div>
                                <div class="items">
                                    <img src="image/brand/home-123/l3.png" class="img-fluid" alt="brand-image">
                                </div>
                                <div class="items">
                                    <img src="image/brand/home-123/l4.png" class="img-fluid" alt="brand-image">
                                </div>
                                <div class="items">
                                    <img src="image/brand/home-123/l5.png" class="img-fluid" alt="brand-image">
                                </div>
                                <div class="items">
                                    <img src="image/brand/home-123/l6.png" class="img-fluid" alt="brand-image">
                                </div>
                                <div class="items">
                                    <img src="image/brand/home-123/l7.png" class="img-fluid" alt="brand-image">
                                </div>
                                <div class="items">
                                    <img src="image/brand/home-123/l8.png" class="img-fluid" alt="brand-image">
                                </div>
                            </div>
                        </div>
                        <!-- home brand end -->
                        <!-- trending products left start -->
                        <div class="tred-product left-section-t-padding">
                            <div class="left-section-title">
                                <h4>Trending <span>products</span></h4>
                            </div>
                            <a href="#tred-products" data-bs-toggle="collapse" class="responsive-collapse">Special <span> products</span><i class="fa fa-angle-down"></i></a>
                            <div class="trening-left-pro swiper-container collapse" id="tred-products">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/6.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">South indian palakpaner</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$93.00 USD</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/7.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">Delicius chiken hotdogs</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$167.00 USD</span>
                                                    <span class="old-price"><del>$179.00 USD</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/8.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">Desc butter chiken</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$230.00 USD</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/9.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">Fryed lupis food</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$130.00 USD</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/10.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">Kathiyavadi Gujarati sandvich</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$126.00 USD</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/11.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">Peri peri chiken</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$130.00 USD</span>
                                                    <span class="old-price"><del>$150.00 USD</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/12.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">South indian palakpaner</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$117.00 USD</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/13.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">Special corn noodels</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$133.00 USD</span>
                                                    <span class="old-price"><del>$145.00 USD</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/14.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">Special egypt pasta</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$139.00 USD</span>
                                                    <span class="old-price"><del>$160.00 USD</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/15.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">Vegetable italian salad</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$580.00 USD</span>
                                                    <span class="old-price"><del>$590.00 USD</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/16.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">West indian onionsalad</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$93.00 USD</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-7.html">
                                                        <img src="image/layout-7/1.jpg" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-7.html">American mayonise pizza</a></h3>
                                                <div class="pro-price">
                                                    <span class="new-price">$167.00 USD</span>
                                                    <span class="old-price"><del>$179.00 USD</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- trending products end -->
                    </div>
                    <div class="right-column">
                        <!-- product info start -->
                        <section class="pro-page">
                            <div class="row pro-image">
                                <div class="col-xl-5 col-lg-6 col-md-6 col-12 larg-image">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="image-11">
                                            <a href="javascript:void(0)" class="long-img">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/layout-7/pro-page/2.jpg)">
                                                    <img src="image/layout-7/pro-page/2.jpg" class="img-fluid" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="tab-pane fade" id="image-22">
                                            <a href="javascript:void(0)" class="long-img">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/layout-7/pro-page/3.jpg)">
                                                    <img src="image/layout-7/pro-page/3.jpg" class="img-fluid" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="tab-pane fade" id="image-33">
                                            <a href="javascript:void(0)" class="long-img">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/layout-7/pro-page/4.jpg)">
                                                    <img src="image/layout-7/pro-page/4.jpg" class="img-fluid" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="tab-pane fade" id="image-44">
                                            <a href="javascript:void(0)" class="long-img">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/layout-7/pro-page/9.jpg)">
                                                    <img src="image/layout-7/pro-page/9.jpg" class="img-fluid" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="tab-pane fade" id="image-55">
                                            <a href="javascript:void(0)" class="long-img">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/layout-7/pro-page/10.jpg)">
                                                    <img src="image/layout-7/pro-page/10.jpg" class="img-fluid" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="tab-pane fade" id="image-66">
                                            <a href="javascript:void(0)" class="long-img">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/layout-7/pro-page/13.jpg)">
                                                    <img src="image/layout-7/pro-page/13.jpg" class="img-fluid" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="tab-pane fade" id="image-77">
                                            <a href="javascript:void(0)" class="long-img">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/layout-7/pro-page/16.jpg)">
                                                    <img src="image/layout-7/pro-page/16.jpg" class="img-fluid" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs pro-page-slider owl-carousel owl-theme">
                                        <li class="nav-item items">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#image-11"><img src="image/layout-7/pro-page/2.jpg" class="img-fluid" alt="image"></a>
                                        </li>
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-22"><img src="image/layout-7/pro-page/3.jpg" class="img-fluid" alt="iamge"></a>
                                        </li>
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-33"><img src="image/layout-7/pro-page/4.jpg" class="img-fluid" alt="image"></a>
                                        </li>
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-44"><img src="image/layout-7/pro-page/9.jpg" class="img-fluid" alt="image"></a>
                                        </li>
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-55"><img src="image/layout-7/pro-page/10.jpg" class="img-fluid" alt="image"></a>
                                        </li>
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-66"><img src="image/layout-7/pro-page/13.jpg" class="img-fluid" alt="image"></a>
                                        </li>
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-77"><img src="image/layout-7/pro-page/16.jpg" class="img-fluid" alt="image"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-7 col-lg-6 col-md-6 col-12 pro-info">
                                    <h4><?php echo $row['product_title']; ?></h4>
                                    <div class="pro-availabale">
                                        <span class="available">Availability:</span>
                                        <span class="pro-instock">In stock</span>
                                    </div>
                                    <div class="pro-price">
                                        <span class="new-price"><?php echo "&#36;" . $row['product_price']; ?></span>
                                        <span class="old-price"><del>$200.00 CAD</del></span>
                                    </div>
                                    <!-- <span class="pro-details">Hurry up! only <span class="pro-number">7</span> products left in stock!</span> -->
                                    <ul class="contdown_row">
                                        <li class="countdown_section">
                                            <span id="days" class="countdown_timer">254</span>
                                            <span class="countdown_title">Day</span>
                                        </li>
                                        <li class="countdown_section">
                                            <span id="hours" class="countdown_timer">11</span>
                                            <span class="countdown_title">Hrs</span>
                                        </li>
                                        <li class="countdown_section">
                                            <span id="minutes" class="countdown_timer">33</span>
                                            <span class="countdown_title">Min</span>
                                        </li>
                                        <li class="countdown_section">
                                            <span id="seconds" class="countdown_timer">36</span>
                                            <span class="countdown_title">Sec</span>
                                        </li>
                                    </ul>
                                    <p><?php echo $row['product_short_desc']; ?></p>
                                    <div class="pro-items">
                                        <span class="pro-size">Size:</span>
                                        <ul class="pro-wight">
                                            <li><a href="javascript:void(0)" class="active">5KG</a></li>
                                            <li><a href="javascript:void(0)">2KG</a></li>
                                            <li><a href="javascript:void(0)">3KG</a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-lable">
                                        <span class="pro-size">Material:</span>
                                        <ul class="pro-wight">
                                            <li><a href="javascript:void(0)" class="active">India,</a></li>
                                            <li><a href="javascript:void(0)">Canada</a></li>
                                        </ul>
                                    </div>
                                    <div class="product-color">
                                        <span class="color-label">Color:</span>
                                        <span class="color">
                                            <a href="javascript:void(0)" class="active"><span></span></a>
                                            <a href="javascript:void(0)"><span></span></a>
                                            <a href="javascript:void(0)"><span></span></a>
                                        </span>
                                    </div>
                                    <div class="pro-qty">
                                        <span class="qty">Quantity:</span>
                                        <div class="plus-minus">
                                            <span>
                                                <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                                <input type="text" name="name" value="1">
                                                <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="pro-btn">
                                        <a href="wishlist.html" class="btn btn-style1"><span><i class="fa fa-heart"></i></span></a>
                                        <a href="../resources/_cart.php?add=<?php echo $row['product_id']; ?>" class="btn btn-style1"><span><i class="fa fa-shopping-bag"></i> Add to cart</span></a>
                                        <a href="checkout-1.html" class="btn btn-style1"><span>Buy now</span></a>
                                    </div>
                                    <div class="share">
                                        <span class="share-lable">Product code:</span>
                                        <ul class="share-icn">
                                            <li>01133-9-9</li>
                                        </ul>
                                    </div>
                                    <div class="share">
                                        <span class="share-lable">Share:</span>
                                        <ul class="share-icn">
                                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pay-img">
                                        <a href="checkout-1.html">
                                            <img src="image/pay-image.jpg" class="img-fluid" alt="pay-image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- product info end -->
                        <!-- product page tab start -->
                        <section class="row pro-page-content section-tb-padding">
                            <div class="col">
                                <div class="pro-page-tab">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tab-1">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Additional Information</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Reviews</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tab-1">
                                            <div class="tab-1content">
                                                <h4>Product details</h4>
                                                <p class="tab-description">
                                                    <?php echo $row['product_description']; ?>
                                                </p>
                                            </div>
                                            <div class="tab-2content">
                                                <h4>Benefits</h4>
                                                <ul class="tab-description">
                                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                                                    <li>Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.</li>
                                                    <li>type here your detail one by one li more add</li>
                                                    <li>has been the industry’s standard dummy text ever since. Lorem Ips</li>
                                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.</li>
                                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade show" id="tab-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe height="630" src="https://www.youtube.com/embed/0etCKCAsImI" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade show" id="tab-5">
                                            <div class="more-description table-responsive">
                                                <table class="table table-bordered table-elastic table-condensed" style="font-size: 9px;">
                                                    <thead>
                                                        <tr class="top">
                                                            <th rowspan="2" scope="col">Vegetables<br> Serving Size<br> (gram weight/<br> ounce weight)</th>
                                                            <th rowspan="2" scope="col">Calories</th>
                                                            <th rowspan="2" scope="col">Calories<br> from Fat</th>
                                                            <th colspan="2" scope="col">Total Fat</th>
                                                            <th colspan="2" scope="col">Sodium</th>
                                                            <th colspan="2" scope="col">Potassium</th>
                                                            <th colspan="2" scope="col">Total<br> Carbo-hydrate</th>
                                                            <th colspan="2" scope="col">Dietary<br> Fiber</th>
                                                            <th scope="col">Sugars</th>
                                                            <th scope="col">Protein</th>
                                                            <th scope="col">Vitamin A</th>
                                                            <th scope="col">Vitamin C</th>
                                                            <th scope="col">Calcium</th>
                                                            <th scope="col">Iron</th>
                                                        </tr>
                                                        <tr class="text-center" style="font-size: 90%;">
                                                            <th scope="col">(g)</th>
                                                            <th scope="col">(%DV)</th>
                                                            <th scope="col">(mg)</th>
                                                            <th scope="col">(%DV)</th>
                                                            <th scope="col">(mg)</th>
                                                            <th scope="col">(%DV)</th>
                                                            <th scope="col">(g)</th>
                                                            <th scope="col">(%DV)</th>
                                                            <th scope="col">(g)</th>
                                                            <th scope="col">(%DV)</th>
                                                            <th scope="col">(g)</th>
                                                            <th scope="col">(g)</th>
                                                            <th scope="col">(%DV)</th>
                                                            <th scope="col">(%DV)</th>
                                                            <th scope="col">(%DV)</th>
                                                            <th scope="col">(%DV)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="alert alert-warning">
                                                            <th scope="row">Asparagus<br> 5 spears<br> (93 g/3.3 oz)</th>
                                                            <td>20</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>230</td>
                                                            <td>7</td>
                                                            <td>4</td>
                                                            <td>1</td>
                                                            <td>2</td>
                                                            <td>8</td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                            <td>10</td>
                                                            <td>15</td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Bell Pepper<br> 1 medium<br> (148 g/5.3 oz)</th>
                                                            <td>25</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>40</td>
                                                            <td>2</td>
                                                            <td>220</td>
                                                            <td>6</td>
                                                            <td>6</td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                            <td>8</td>
                                                            <td>4</td>
                                                            <td>1</td>
                                                            <td>4</td>
                                                            <td>190</td>
                                                            <td>2</td>
                                                            <td>4</td>
                                                        </tr>
                                                        <tr class="alert alert-warning">
                                                            <th scope="row">Broccoli<br> 1 medium stalk<br> (148 g/5.3 oz)</th>
                                                            <td>45</td>
                                                            <td>0</td>
                                                            <td>0.5</td>
                                                            <td>1</td>
                                                            <td>80</td>
                                                            <td>3</td>
                                                            <td>460</td>
                                                            <td>13</td>
                                                            <td>8</td>
                                                            <td>3</td>
                                                            <td>3</td>
                                                            <td>12</td>
                                                            <td>2</td>
                                                            <td>4</td>
                                                            <td>6</td>
                                                            <td>220</td>
                                                            <td>6</td>
                                                            <td>6</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Carrot<br> 1 carrot, 7" long,<br> 1 1/4" diameter<br> (78 g/2.8 oz)</th>
                                                            <td>30</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>60</td>
                                                            <td>3</td>
                                                            <td>250</td>
                                                            <td>7</td>
                                                            <td>7</td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                            <td>8</td>
                                                            <td>5</td>
                                                            <td>1</td>
                                                            <td>110</td>
                                                            <td>10</td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr class="alert alert-warning">
                                                            <th scope="row">Cauliflower<br> 1/6 medium head<br> (99 g/3.5 oz)</th>
                                                            <td>25</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>30</td>
                                                            <td>1</td>
                                                            <td>270</td>
                                                            <td>8</td>
                                                            <td>5</td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                            <td>8</td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                            <td>0</td>
                                                            <td>100</td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Celery<br> 2 medium stalks<br> (110 g/3.9 oz)</th>
                                                            <td>15</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>115</td>
                                                            <td>5</td>
                                                            <td>260</td>
                                                            <td>7</td>
                                                            <td>4</td>
                                                            <td>1</td>
                                                            <td>2</td>
                                                            <td>8</td>
                                                            <td>2</td>
                                                            <td>0</td>
                                                            <td>10</td>
                                                            <td>15</td>
                                                            <td>4</td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr class="alert alert-warning">
                                                            <th scope="row">Cucumber<br> 1/3 medium<br> (99 g/3.5 oz)</th>
                                                            <td>10</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>140</td>
                                                            <td>4</td>
                                                            <td>2</td>
                                                            <td>1</td>
                                                            <td>1</td>
                                                            <td>4</td>
                                                            <td>1</td>
                                                            <td>1</td>
                                                            <td>4</td>
                                                            <td>10</td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Green (Snap) Beans<br> 3/4 cup cut<br> (83 g/3.0 oz)</th>
                                                            <td>20</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>200</td>
                                                            <td>6</td>
                                                            <td>5</td>
                                                            <td>2</td>
                                                            <td>3</td>
                                                            <td>12</td>
                                                            <td>2</td>
                                                            <td>1</td>
                                                            <td>4</td>
                                                            <td>10</td>
                                                            <td>4</td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr class="alert alert-warning">
                                                            <th scope="row">Green&nbsp;Cabbage<br> 1/12 medium head<br> (84 g/3.0 oz)</th>
                                                            <td>25</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>20</td>
                                                            <td>1</td>
                                                            <td>190</td>
                                                            <td>5</td>
                                                            <td>5</td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                            <td>8</td>
                                                            <td>3</td>
                                                            <td>1</td>
                                                            <td>0</td>
                                                            <td>70</td>
                                                            <td>4</td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Green Onion<br> 1/4 cup chopped<br> (25 g/0.9 oz)</th>
                                                            <td>10</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>10</td>
                                                            <td>0</td>
                                                            <td>70</td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                            <td>1</td>
                                                            <td>1</td>
                                                            <td>4</td>
                                                            <td>1</td>
                                                            <td>0</td>
                                                            <td>2</td>
                                                            <td>8</td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr class="alert alert-warning">
                                                            <th scope="row">Iceberg Lettuce<br> 1/6 medium head<br> (89 g/3.2 oz)</th>
                                                            <td>10</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>10</td>
                                                            <td>0</td>
                                                            <td>125</td>
                                                            <td>4</td>
                                                            <td>2</td>
                                                            <td>1</td>
                                                            <td>1</td>
                                                            <td>4</td>
                                                            <td>2</td>
                                                            <td>1</td>
                                                            <td>6</td>
                                                            <td>6</td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Leaf Lettuce<br> 1 1/2 cups shredded<br> (85 g/3.0 oz)</th>
                                                            <td>15</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>35</td>
                                                            <td>1</td>
                                                            <td>170</td>
                                                            <td>5</td>
                                                            <td>2</td>
                                                            <td>1</td>
                                                            <td>1</td>
                                                            <td>4</td>
                                                            <td>1</td>
                                                            <td>1</td>
                                                            <td>130</td>
                                                            <td>6</td>
                                                            <td>2</td>
                                                            <td>4</td>
                                                        </tr>
                                                        <tr class="alert alert-warning">
                                                            <th scope="row">Mushrooms<br> 5 medium<br> (84 g/3.0 oz)</th>
                                                            <td>20</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>15</td>
                                                            <td>0</td>
                                                            <td>300</td>
                                                            <td>9</td>
                                                            <td>3</td>
                                                            <td>1</td>
                                                            <td>1</td>
                                                            <td>4</td>
                                                            <td>0</td>
                                                            <td>3</td>
                                                            <td>0</td>
                                                            <td>2</td>
                                                            <td>0</td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Onion<br> 1 medium<br> (148 g/5.3 oz)</th>
                                                            <td>45</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>5</td>
                                                            <td>0</td>
                                                            <td>190</td>
                                                            <td>5</td>
                                                            <td>11</td>
                                                            <td>4</td>
                                                            <td>3</td>
                                                            <td>12</td>
                                                            <td>9</td>
                                                            <td>1</td>
                                                            <td>0</td>
                                                            <td>20</td>
                                                            <td>4</td>
                                                            <td>4</td>
                                                        </tr>
                                                        <tr class="alert alert-warning">
                                                            <th scope="row">Potato<br> 1 medium<br> (148 g/5.3 oz)</th>
                                                            <td>110</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>620</td>
                                                            <td>18</td>
                                                            <td>26</td>
                                                            <td>9</td>
                                                            <td>2</td>
                                                            <td>8</td>
                                                            <td>1</td>
                                                            <td>3</td>
                                                            <td>0</td>
                                                            <td>45</td>
                                                            <td>2</td>
                                                            <td>6</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Radishes<br> 7 radishes<br> (85 g/3.0 oz)</th>
                                                            <td>10</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>55</td>
                                                            <td>2</td>
                                                            <td>190</td>
                                                            <td>5</td>
                                                            <td>3</td>
                                                            <td>1</td>
                                                            <td>1</td>
                                                            <td>4</td>
                                                            <td>2</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>30</td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr class="alert alert-warning">
                                                            <th scope="row">Summer Squash<br> 1/2 medium<br> (98 g/3.5 oz)</th>
                                                            <td>20</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>260</td>
                                                            <td>7</td>
                                                            <td>4</td>
                                                            <td>1</td>
                                                            <td>2</td>
                                                            <td>8</td>
                                                            <td>2</td>
                                                            <td>1</td>
                                                            <td>6</td>
                                                            <td>30</td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Sweet Corn<br> kernels from 1<br> medium ear<br> (90 g/3.2 oz)</th>
                                                            <td>90</td>
                                                            <td>20</td>
                                                            <td>2.5</td>
                                                            <td>4</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>250</td>
                                                            <td>7</td>
                                                            <td>18</td>
                                                            <td>6</td>
                                                            <td>2</td>
                                                            <td>8</td>
                                                            <td>5</td>
                                                            <td>4</td>
                                                            <td>2</td>
                                                            <td>10</td>
                                                            <td>0</td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr class="alert alert-warning">
                                                            <th scope="row">Sweet Potato<br> 1 medium, 5" long,<br> 2" diameter<br> (130 g/4.6 oz)</th>
                                                            <td>100</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>70</td>
                                                            <td>3</td>
                                                            <td>440</td>
                                                            <td>13</td>
                                                            <td>23</td>
                                                            <td>8</td>
                                                            <td>4</td>
                                                            <td>16</td>
                                                            <td>7</td>
                                                            <td>2</td>
                                                            <td>120</td>
                                                            <td>30</td>
                                                            <td>4</td>
                                                            <td>4</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Tomato<br> 1 medium<br> (148 g/5.3 oz)</th>
                                                            <td>25</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>20</td>
                                                            <td>1</td>
                                                            <td>340</td>
                                                            <td>10</td>
                                                            <td>5</td>
                                                            <td>2</td>
                                                            <td>1</td>
                                                            <td>4</td>
                                                            <td>3</td>
                                                            <td>1</td>
                                                            <td>20</td>
                                                            <td>40</td>
                                                            <td>2</td>
                                                            <td>4</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- product page tab end -->
                        <!-- releted product start -->
                        <section class="pro-releted">
                            <div class="section-title">
                                <span>You might also like</span>
                                <h2>Related products</h2>
                            </div>
                            <div class="releted-products-7 owl-carousel owl-theme">
                                <div class="items">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="product-style-7.html">
                                                    <img src="image/layout-7/6.jpg" class="img-fluid" alt="image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-text">New</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="product-style-7.html">South indian palakpaner</a></h3>
                                            <div class="pro-price">
                                                <span class="new-price">$93.00 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="product-style-7.html">
                                                    <img src="image/layout-7/7.jpg" class="img-fluid" alt="image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-12%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="product-style-7.html">Delicius chiken hotdogs</a></h3>
                                            <div class="pro-price">
                                                <span class="new-price">$167.00 USD</span>
                                                <span class="old-price"><del>$179.00 USD</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="product-style-7.html">
                                                    <img src="image/layout-7/8.jpg" class="img-fluid" alt="image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-text">New</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="product-style-7.html">Desc butter chiken</a></h3>
                                            <div class="pro-price">
                                                <span class="new-price">$230.00 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="product-style-7.html">
                                                    <img src="image/layout-7/9.jpg" class="img-fluid" alt="image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-text">New</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="product-style-7.html">Fryed lupis food</a></h3>
                                            <div class="pro-price">
                                                <span class="new-price">$130.00 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="product-style-7.html">
                                                    <img src="image/layout-7/10.jpg" class="img-fluid" alt="image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-text">New</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="product-style-7.html">Kathiyavadi Gujarati sandvich</a></h3>
                                            <div class="pro-price">
                                                <span class="new-price">$126.00 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="product-style-7.html">
                                                    <img src="image/layout-7/11.jpg" class="img-fluid" alt="image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-20%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="product-style-7.html">Peri peri chiken</a></h3>
                                            <div class="pro-price">
                                                <span class="new-price">$130.00 USD</span>
                                                <span class="old-price"><del>$150.00 USD</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="product-style-7.html">
                                                    <img src="image/layout-7/12.jpg" class="img-fluid" alt="image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-text">New</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="product-style-7.html">South indian palakpaner</a></h3>
                                            <div class="pro-price">
                                                <span class="new-price">$117.00 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="product-style-7.html">
                                                    <img src="image/layout-7/13.jpg" class="img-fluid" alt="image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-12%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="product-style-7.html">Special corn noodels</a></h3>
                                            <div class="pro-price">
                                                <span class="new-price">$133.00 USD</span>
                                                <span class="old-price"><del>$145.00 USD</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="product-style-7.html">
                                                    <img src="image/layout-7/14.jpg" class="img-fluid" alt="image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-21%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="product-style-7.html">Special egypt pasta</a></h3>
                                            <div class="pro-price">
                                                <span class="new-price">$139.00 USD</span>
                                                <span class="old-price"><del>$160.00 USD</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="product-style-7.html">
                                                    <img src="image/layout-7/15.jpg" class="img-fluid" alt="image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-10%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="product-style-7.html">Vegetable italian salad</a></h3>
                                            <div class="pro-price">
                                                <span class="new-price">$580.00 USD</span>
                                                <span class="old-price"><del>$590.00 USD</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="product-style-7.html">
                                                    <img src="image/layout-7/16.jpg" class="img-fluid" alt="image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-text">New</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="product-style-7.html">West indian onionsalad</a></h3>
                                            <div class="pro-price">
                                                <span class="new-price">$93.00 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="product-style-7.html">
                                                    <img src="image/layout-7/1.jpg" class="img-fluid" alt="image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-12%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="product-style-7.html">American mayonise pizza</a></h3>
                                            <div class="pro-price">
                                                <span class="new-price">$167.00 USD</span>
                                                <span class="old-price"><del>$179.00 USD</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="product-style-7.html">
                                                    <img src="image/layout-7/2.jpg" class="img-fluid" alt="image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-text">New</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="product-style-7.html">Breakfast eggplant special</a></h3>
                                            <div class="pro-price">
                                                <span class="new-price">$230.00 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </section>
        <!-- releted product end -->

        <?php include(TEMPLATE_FRONT . DS . "footer2.php"); ?>

        <!-- back to top start -->
        <a href="javascript:void(0)" class="scroll" id="top">
            <span><i class="fa fa-angle-double-up"></i></span>
        </a>
        <!-- back to top end -->
        <div class="mm-fullscreen-bg"></div>
        <!-- jquery -->
        <script src="js/modernizr-2.8.3.min.js"></script>
        <script src="js/jquery-3.6.0.min.js"></script>
        <!-- bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- popper -->
        <script src="js/popper.min.js"></script>
        <!-- fontawesome -->
        <script src="js/fontawesome.min.js"></script>
        <!-- owl carousal -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- swiper -->
        <script src="js/swiper.min.js"></script>
        <!-- custom -->
        <script src="js/custom.js"></script>
    </body>

</html>