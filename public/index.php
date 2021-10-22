<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header2.php"); ?>

<!-- header start -->
<?php include(TEMPLATE_FRONT . DS . "navbar.php"); ?>
<!--header end-->
        <!--home page slider start-->
        <?php include(TEMPLATE_FRONT . DS . "slider.php"); ?>
        <!--home page slider start-->
        <!-- service start -->
        <?php include(TEMPLATE_FRONT . DS . "service.php"); ?>
        <!-- service end -->
        <!-- category start -->
        <section class="category-7 section-top-bottom-padding">
            <div class="container">
                <div class="row">
                    <div class="col category-col">
                        <div class="category-main">
                            <div class="cate-7 owl-carousel owl-theme">
                                <div class="items">
                                    <div class="category">
                                        <a href="grid-list.html" class="back-image" style="background-image: url(image/category-image/home-7/banner1.png);">
                                            <div class="cate-content">
                                                <span class="category-title">Anti-aging</span>
                                                <h3>Skin <span class="cate-bold">Products</span></h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="category">
                                        <a href="grid-list.html" class="back-image" style="background-image: url(image/category-image/home-7/banner2.png);">
                                            <div class="cate-content">
                                                <span class="category-title">Skin Soothing</span>
                                                <h3>Skin <span class="cate-bold">Products</span></h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="category">
                                        <a href="grid-list.html" class="back-image" style="background-image: url(image/category-image/home-7/banner3.png);">
                                            <div class="cate-content">
                                                <span class="category-title">Exfoliation</span>
                                                <h3>Skin <span class="cate-bold">Products</span></h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="category">
                                        <a href="grid-list.html" class="back-image" style="background-image: url(image/category-image/home-7/banner4.png);">
                                            <div class="cate-content">
                                                <span class="category-title">Hair Repair</span>
                                                <h3>Hair <span class="cate-bold">Products</span></h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- category end -->
        <!-- Our Products Tab start -->
        <section class="products-tab-7 section-bottom-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <span>Our products</span>                        
                            <h2>Top Recommended Products</h2>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#home">New Arrivals</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile">Skin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#contact">Hair</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#lunch">Body</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content tab-pro-slider">
                            <div class="tab-pane fade show active" id="home">
                                <div class="home-7-tab swiper-container">
                                    <div class="swiper-wrapper">                                        
                                        <?php get_products(); ?>                                        
                                    </div>
                                </div>
                                <div class="swiper-buttons">
                                    <div class="content-buttons">
                                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                        <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <div class="home-7-tab swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product-style-7.html">
                                                            <img src="image/layout-7/product3.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product4.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product5.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product6.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product1.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product2.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product3.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product4.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product5.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product6.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product1.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product2.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product3.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product4.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
                                                    <div class="pro-price">
                                                        <span class="new-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-buttons">
                                    <div class="content-buttons">
                                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                        <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact">
                                <div class="home-7-tab swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product-style-7.html">
                                                            <img src="image/layout-7/product5.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product6.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product1.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product2.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product3.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product4.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product5.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product6.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product1.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product2.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product3.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product4.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product5.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
                                                    <div class="pro-price">
                                                        <span class="new-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-buttons">
                                    <div class="content-buttons">
                                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                        <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="lunch">
                                <div class="home-7-tab swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product-style-7.html">
                                                            <img src="image/layout-7/product6.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product1.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product2.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product3.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product4.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product5.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product6.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product1.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product2.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product3.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product4.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product5.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
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
                                                            <img src="image/layout-7/product6.png" class="img-fluid" alt="image">
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
                                                    <h3><a href="product-style-7.html">olive squalane</a></h3>
                                                    <!-- <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
                                                    <div class="pro-price">
                                                        <span class="new-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-buttons">
                                    <div class="content-buttons">
                                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                        <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Products Tab end -->
        <!-- banner start -->
        <section class="banner-7">
            <div class="all-banner">
                <div class="banner-area">
                    <div class="banner-grid">
                        <img src="image/layout-7/96.png" class="img-fluid" alt="banner-image">
                        <a href="grid-list.html" class="btn btn-style3">Shop now</a>
                    </div>
                </div>
                <div class="banner-area">
                    <div class="off-banner">
                        <img src="image/layout-7/97.png" class="img-fluid" alt="banner-image">
                        <div class="banner-content">
                            <span class="bannre-title">Flawless Skin</span>
                            <h2>We deliver <span class="b-off">the best products</span></h2>
                        </div>
                    </div>
                </div>
                <div class="banner-area">
                    <div class="banner-grid">
                        <img src="image/layout-7/98.png" class="img-fluid" alt="banner-image">
                        <a href="grid-list.html" class="btn btn-style3">Shop now</a>
                    </div>
                </div>
                <div class="banner-area">
                    <div class="banner-grid">
                        <img src="image/layout-7/99.png" class="img-fluid" alt="banner-image">
                        <a href="grid-list.html" class="btn btn-style3">Shop now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner end -->
        <!-- special products start -->
        <section class="special-pro-7 section-top-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <span>Trending Products</span>
                            <h2>Today's Trend</h2>
                        </div>
                        <div class="special-7 owl-carousel owl-theme">
                            <div class="items">
                                <div class="h-t-pro">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product-style-7.html">
                                                <img src="image/layout-7/product1.png" class="img-fluid" alt="image">
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
                                        <h3><a href="product-style-7.html">Olive Squalane</a></h3>
                                        <!-- <div class="rating">
                                            <i class="fa fa-star b-star"></i>
                                            <i class="fa fa-star b-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div> -->
                                        <div class="pro-price">
                                            <span class="new-price">N9000.00 NGN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="h-t-pro">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product-style-7.html">
                                                <img src="image/layout-7/product2.png" class="img-fluid" alt="image">
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
                                        <h3><a href="product-style-7.html">Olive Squalane</a></h3>
                                        <div class="pro-price">
                                            <span class="new-price">N9000.00 NGN</span>
                                            <span class="old-price"><del>N9000.00 NGN</del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="h-t-pro">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product-style-7.html">
                                                <img src="image/layout-7/product3.png" class="img-fluid" alt="image">
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
                                        <h3><a href="product-style-7.html">Olive Squalane</a></h3>
                                        <div class="pro-price">
                                            <span class="new-price">N9000.00 NGN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="h-t-pro">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product-style-7.html">
                                                <img src="image/layout-7/product4.png" class="img-fluid" alt="image">
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
                                        <h3><a href="product-style-7.html">Olive Squalane</a></h3>
                                        <div class="pro-price">
                                            <span class="new-price">N9000.00 NGN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="h-t-pro">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product-style-7.html">
                                                <img src="image/layout-7/product5.png" class="img-fluid" alt="image">
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
                                        <h3><a href="product-style-7.html">Olive Squalane</a></h3>
                                        <div class="pro-price">
                                            <span class="new-price">N9000.00 NGN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="h-t-pro">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product-style-7.html">
                                                <img src="image/layout-7/product6.png" class="img-fluid" alt="image">
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
                                        <h3><a href="product-style-7.html">Olive Squalane</a></h3>
                                        <div class="pro-price">
                                            <span class="new-price">N9000.00 NGN</span>
                                            <span class="old-price"><del>N9000.00 NGN</del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="h-t-pro">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product-style-7.html">
                                                <img src="image/layout-7/product1.png" class="img-fluid" alt="image">
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
                                        <h3><a href="product-style-7.html">Olive Squalane</a></h3>
                                        <div class="pro-price">
                                            <span class="new-price">N9000.00 NGN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="h-t-pro">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product-style-7.html">
                                                <img src="image/layout-7/product2.png" class="img-fluid" alt="image">
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
                                        <h3><a href="product-style-7.html">Olive Squalane</a></h3>
                                        <div class="pro-price">
                                            <span class="new-price">N9000.00 NGN</span>
                                            <span class="old-price"><del>N9000.00 NGN</del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="h-t-pro">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product-style-7.html">
                                                <img src="image/layout-7/product3.png" class="img-fluid" alt="image">
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
                                        <h3><a href="product-style-7.html">Olive Squalane</a></h3>
                                        <div class="pro-price">
                                            <span class="new-price">N9000.00 NGN</span>
                                            <span class="old-price"><del>N9000.00 NGN</del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="h-t-pro">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product-style-7.html">
                                                <img src="image/layout-7/product4.png" class="img-fluid" alt="image">
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
                                        <h3><a href="product-style-7.html">Olive Squalane</a></h3>
                                        <div class="pro-price">
                                            <span class="new-price">N9000.00 NGN</span>
                                            <span class="old-price"><del>N9000.00 NGN</del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="h-t-pro">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product-style-7.html">
                                                <img src="image/layout-7/product5.png" class="img-fluid" alt="image">
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
                                        <h3><a href="product-style-7.html">Olive Squalane</a></h3>
                                        <div class="pro-price">
                                            <span class="new-price">N9000.00 NGN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="h-t-pro">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product-style-7.html">
                                                <img src="image/layout-7/product6.png" class="img-fluid" alt="image">
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
                                        <h3><a href="product-style-7.html">Olive Squalane</a></h3>
                                        <div class="pro-price">
                                            <span class="new-price">N9000.00 NGN</span>
                                            <span class="old-price"><del>N9000.00 NGN</del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="h-t-pro">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product-style-7.html">
                                                <img src="image/layout-7/product1.png" class="img-fluid" alt="image">
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
                                        <h3><a href="product-style-7.html">Olive Squalane</a></h3>
                                        <div class="pro-price">
                                            <span class="new-price">N9000.00 NGN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Trending Products end -->

        <!-- quick veiw start -->
        <section class="quick-view">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Product quickview</h5>
                            <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a>
                        </div>
                        <div class="quick-veiw-area">
                            <div class="quick-image">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="image-1">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/layout-7/product1.png" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-2">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/layout-7/product2.png" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-3">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/layout-7/product3.png" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-4">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/layout-7/product4.png" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-5">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/layout-7/product5.png" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-6">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/layout-7/product6.png" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-7">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/layout-7/product1.png" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-8">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/layout-7/product2.png" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs quick-slider owl-carousel owl-theme">
                                    <li class="nav-item items">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#image-1"><img src="image/layout-7/product1.png" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-2"><img src="image/layout-7/product2.png" class="img-fluid" alt="iamge"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-3"><img src="image/layout-7/product3.png" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-4"><img src="image/layout-7/product4.png" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-5"><img src="image/layout-7/product5.png" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-6"><img src="image/layout-7/product6.png" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-7"><img src="image/layout-7/product1.png" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-8"><img src="image/layout-7/product2.png" class="img-fluid" alt="image"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="quick-caption">
                                <h4>Olive squalane</h4>
                                <div class="quick-price">
                                    <span class="new-price">N3350.00 USD</span>
                                    <span class="old-price"><del>N3399.99 USD</del></span>
                                </div>
                                <!-- <div class="quick-rating">
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div> -->
                                <div class="pro-description">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                                </div>
                                <div class="pro-size">
                                    <label>Size: </label>
                                    <select>
                                        <option>1 ltr</option>
                                        <option>3 ltr</option>
                                        <option>5 ltr</option>
                                    </select>
                                </div>
                                <div class="plus-minus">
                                    <span>
                                        <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                        <input type="text" name="name" value="1">
                                        <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                    </span>
                                    <a href="cart.html" class="quick-cart"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="wishlist.html" class="quick-wishlist"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- quick veiw end -->
        <!-- News Letter start -->
        <section class="news-letter1">
            <div class="news-7-bg" style="background-image: url(image/layout-7/news-bg3.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home-news">
                                <div class="section-title">
                                    <span>Recent news</span>
                                    <h2>Get the latest deals</h2>
                                </div>
                                <form>
                                    <input type="text" name="search" placeholder="Enter your email address">
                                    <button class="news-submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News Letter end -->
        
        <?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>

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