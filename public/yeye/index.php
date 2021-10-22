<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- title -->
        <title>MiotMay - Skincare Beauty Products</title>
        <meta name="description" content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries."/>
        <meta name="keywords" content="organic food theme, vegetables, foof store, eCommerce html template, responsive, electronics store, furniture wood, fashion, furniture, mobile, watches, electronics, computers accessories, toys, jewellery, restaurant accessories"/>
        <meta name="author" content="spacingtech_webify">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="shortcut icon" type="image/favicon" href="image/fevicon.png">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- simple-line icon -->
        <link rel="stylesheet" type="text/css" href="css/simple-line-icons.css">
        <!-- font-awesome icon -->
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <!-- themify icon -->
        <link rel="stylesheet" type="text/css" href="css/themify-icons.css">
        <!-- ion icon -->
        <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
        <!-- owl slider -->
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
        <!-- swiper -->
        <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
        <!-- animation -->
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <!-- style -->
        <link rel="stylesheet" type="text/css" href="css/style7.css">
        <link rel="stylesheet" type="text/css" href="css/responsive7.css">
    </head>
    <body class="home-7">
<!-- header start -->
<!-- header start -->
<header class="header-area">
    <div class="header-main-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="header-main">
                        <!-- logo start -->
                        <div class="header-element logo">
                            <a href="index7.html">
                                <img src="image/logo.png" alt="logo-image" class="img-fluid">
                            </a>
                        </div>
                        <!-- logo end -->
                        <!-- main menu start -->
                        <div class="header-element megamenu-content">
                            <div class="mainwrap">
                                <ul class="main-menu">
                                    <li class="menu-link parent">
                                        <a href="index7.html" class="link-title">
                                            <span class="sp-link-title">Home</span>
                                            <!-- <i class="fa fa-angle-down"></i> -->
                                        </a>
                                        <!-- <a href="#collapse-top-home" data-bs-toggle="collapse" class="link-title link-title-lg">
                                            <span class="sp-link-title">Home</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a> -->
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="javascript:void(0)" class="link-title">
                                            <span class="sp-link-title">Shop</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <a href="#collapse-top-mega-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                            <span class="sp-link-title">Shop</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-submenu mega-menu collapse" id="collapse-top-mega-menu">
                                            <li class="megamenu-li parent">
                                                <h2 class="sublink-title">Antioxidants</h2>
                                                <a href="#collapse-top-sub-mega-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                    <span>Antioxidants</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-supmenu collapse" id="collapse-top-sub-mega-menu">
                                                <?php

                                                $query = "SELECT * FROM categories";
                                                $send_query = mysqli_query($connection, $query);

                                                if(!$send_query){
                                                    die("QUERY FAILED" . mysqli_error($connection));
                                                }

                                                while($row = mysqli_fetch_array($send_query)){
                                                    echo "<li class='supmenu-li'><a href='product-style-6.html'>{$row['cat_title']}</a></li>";
                                                }

                                                ?>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Green Tea</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Carotene Oil</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Organics nut gifts</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Niacinamide</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Licrorise Oreo Extract</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Milk almond</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-li parent">
                                                <h2 class="sublink-title">Botanical Extracts</h2>
                                                <a href="#collapse-top-fruits-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                    <span>Mixedfruits</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-supmenu collapse" id="collapse-top-fruits-menu">
                                                    <li class="supmenu-li"><a href="product-style-6.html">Green Tea</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Carotene Oil</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Organics nut gifts</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Niacinamide</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Licrorise Oreo Extract</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Milk almond</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-li parent">
                                                <h2 class="sublink-title">Essential Oils</h2>
                                                <a href="#collapse-top-banana-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                    <span>Bananas & plantains</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-supmenu collapse" id="collapse-top-banana-menu">
                                                    <li class="supmenu-li"><a href="product-style-6.html">Green Tea</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Carotene Oil</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Organics nut gifts</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Niacinamide</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Licrorise Oreo Extract</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Milk almond</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-li parent">
                                                <h2 class="sublink-title">Exfoliating Agents</h2>
                                                <a href="#collapse-top-apple-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                    <span>Apples berries</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-supmenu collapse" id="collapse-top-apple-menu">
                                                    <li class="supmenu-li"><a href="product-style-6.html">Green Tea</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Carotene Oil</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Organics nut gifts</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Niacinamide</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Licrorise Oreo Extract</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Milk almond</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="javascript:void(0)" class="link-title">
                                            <span class="sp-link-title">Collection</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <a href="#collapse-top-banner-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                            <span class="sp-link-title">Collection</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-submenu banner-menu collapse" id="collapse-top-banner-menu">
                                            <li class="menu-banner">
                                                <a href="grid-list.html" class="menu-banner-img"><img src="image/menu-banner01.jpg" alt="menu-image" class="img-fluid"></a>
                                                <a href="grid-list.html" class="menu-banner-title"><span>Bestseller</span></a>
                                            </li>
                                            <li class="menu-banner">
                                                <a href="grid-list.html" class="menu-banner-img"><img src="image/menu-banner02.jpg" alt="menu-image" class="img-fluid"></a>
                                                <a href="grid-list.html" class="menu-banner-title"><span>Special product</span></a>
                                            </li>
                                            <li class="menu-banner">
                                                <a href="grid-list.html" class="menu-banner-img"><img src="image/menu-banner03.jpg" alt="mneu image" class="img-fluid"></a>
                                                <a href="grid-list.html" class="menu-banner-title"><span>Featured product</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="javascript:void(0)" class="link-title">
                                            <span class="sp-link-title">Pages</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <a href="#collapse-top-page-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                            <span class="sp-link-title">Pages</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-submenu sub-menu collapse" id="collapse-top-page-menu">
                                            <li class="submenu-li">
                                                <a href="about-us.html" class="submenu-link">About us</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="javascript:void(0)" class="g-l-link"><span>Account</span> <i class="fa fa-angle-right"></i></a>
                                                <a href="#account-menu" data-bs-toggle="collapse" class="sub-link"><span>Account</span> <i class="fa fa-angle-down"></i></a>
                                                <ul class="collapse blog-style-1" id="account-menu">
                                                    <li>
                                                        <a href="order-history.html" class="sub-style"><span>Order</span></a>
                                                        <a href="order-history.html" class="blog-sub-style"><span>Order</span></a>
                                                        <a href="profile.html" class="sub-style"><span>Profile</span></a>
                                                        <a href="profile.html" class="blog-sub-style"><span>Profile</span></a>
                                                        <a href="pro-addresses.html" class="sub-style"><span>Address</span></a>
                                                        <a href="pro-addresses.html" class="blog-sub-style"><span>Address</span></a>
                                                        <a href="pro-wishlist.html" class="sub-style"><span>Wishlist</span></a>
                                                        <a href="pro-wishlist.html" class="blog-sub-style"><span>Wishlist</span></a>
                                                        <a href="pro-tickets.html" class="sub-style"><span>My tickets</span></a>
                                                        <a href="pro-tickets.html" class="blog-sub-style"><span>My tickets</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="billing-info.html" class="submenu-link">Billing info</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="cancellation.html" class="submenu-link">Cancellation</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="cart.html" class="submenu-link">Cart page</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="coming-soon.html" class="submenu-link">Coming-soon</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="faq%27s.html" class="submenu-link">Faq's</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="forgot-password.html" class="submenu-link">Forgot passowrd</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="order-complete.html" class="submenu-link">Order complete</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="tracking.html" class="submenu-link">Track page</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="contact.html" class="submenu-link">Contact us</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="payment-policy.html" class="submenu-link">Payment policy</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="privacy-policy.html" class="submenu-link">privacy policy</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="return-policy.html" class="submenu-link">Return policy</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="terms-conditions.html" class="submenu-link">Terms & conditions</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="wishlist.html" class="submenu-link">Wishlist</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="sitemap.html" class="submenu-link">Sitemap</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="fnf-page.html" class="submenu-link">4 not 4</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <!-- BLOG CODE -->

                                    <li class="menu-link parent">
                                        <a href="javascript:void(0)" class="link-title">
                                            <span class="sp-link-title">FAQs</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <a href="#feature1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                            <span class="sp-link-title">FAQs</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-submenu mega-menu collapse" id="feature1">
                                            <li class="megamenu-li parent">
                                                <h2 class="sublink-title">Header style</h2>
                                                <a href="#feature01" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                    <span>Header style</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-supmenu collapse" id="feature01">
                                                    <li class="supmenu-li"><a href="header-style-1.html">Header style 1</a></li>
                                                    <li class="supmenu-li"><a href="header-style-2.html">Header style 2</a></li>
                                                    <li class="supmenu-li"><a href="header-style-3.html">Header style 3</a></li>
                                                    <li class="supmenu-li"><a href="header-style-4.html">Header style 4</a></li>
                                                    <li class="supmenu-li"><a href="header-style-5.html">Header style 5</a></li>
                                                    <li class="supmenu-li"><a href="header-style-6.html">Header style 6</a></li>
                                                    <li class="supmenu-li"><a href="header-style-7.html">Header style 7</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-li parent">
                                                <h2 class="sublink-title">Footer style</h2>
                                                <a href="#feature02" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                    <span>Footer style</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-supmenu collapse" id="feature02">
                                                    <li class="supmenu-li"><a href="footer-style-1.html">Footer style 1</a></li>
                                                    <li class="supmenu-li"><a href="footer-style-2.html">Footer style 2</a></li>
                                                    <li class="supmenu-li"><a href="footer-style-3.html">Footer style 3</a></li>
                                                    <li class="supmenu-li"><a href="footer-style-4.html">Footer style 4</a></li>
                                                    <li class="supmenu-li"><a href="footer-style-5.html">Footer style 5</a></li>
                                                    <li class="supmenu-li"><a href="footer-style-6.html">Footer style 6</a></li>
                                                    <li class="supmenu-li"><a href="footer-style-7.html">Footer style 7</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-li parent">
                                                <h2 class="sublink-title">Product details</h2>
                                                <a href="#feature03" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                    <span>Product details</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-supmenu collapse" id="feature03">
                                                    <li class="supmenu-li"><a href="product.html">Product details style 1</a></li>
                                                    <li class="supmenu-li"><a href="product-style-2.html">Product details style 2</a></li>
                                                    <li class="supmenu-li"><a href="product-style-3.html">Product details style 3</a></li>
                                                    <li class="supmenu-li"><a href="product-style-4.html">Product details style 4</a></li>
                                                    <li class="supmenu-li"><a href="product-style-5.html">Product details style 5</a></li>
                                                    <li class="supmenu-li"><a href="product-style-6.html">Product details style 6</a></li>
                                                    <li class="supmenu-li"><a href="product-style-7.html">Product details style 7</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-li parent">
                                                <h2 class="sublink-title">Other style</h2>
                                                <a href="#feature04" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                    <span>Other style</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-supmenu collapse" id="feature04">
                                                    <li class="supmenu-li"><a href="checkout-1.html">Checkout style 1</a></li>
                                                    <li class="supmenu-li"><a href="checkout-2.html">Checkout style 2</a></li>
                                                    <li class="supmenu-li"><a href="checkout-3.html">Checkout style 3</a></li>
                                                    <li class="supmenu-li"><a href="cart.html">Cart style 1</a></li>
                                                    <li class="supmenu-li"><a href="cart-2.html">Cart style 2</a></li>
                                                    <li class="supmenu-li"><a href="cart-3.html">Cart style 3</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- main menu end -->
                        <div class="search-area">
                            <!-- search start -->
                            <div class="header-element search-wrap">
                                <input type="text" name="search" placeholder="Search products">
                                <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                            </div>
                            <!-- search end -->
                            <div class="header-element right-block-box">
                                <ul class="shop-element">
                                    <li class="side-wrap nav-toggler">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                                        <span class="line"></span>
                                        </button>
                                    </li>
                                    <li class="top-home-li">
                                        <!-- currency start -->
                                        <!-- <div class="currency">
                                            <div class="currency-drop">
                                                <div class="eur">
                                                    <span class="cur-name">Cad</span>
                                                </div>
                                                <ul class="all-currency">
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <span class="cur-name">AFN</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <span class="cur-name">BDT</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <span class="cur-name">CAD</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <span class="cur-name">EUR</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <span class="cur-name">GBP</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <span class="cur-name">INR</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <span class="cur-name">SAR</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <span class="cur-name">USD</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> -->
                                        <!-- currency start -->
                                        <!-- mobile search start -->
                                        <div class="r-search">
                                            <a href="#r-search-modal" class="search-popuup" data-bs-toggle="modal"><i class="ion-ios-search-strong"></i></a>
                                        </div>
                                        <!-- mobile search end -->
                                    </li>
                                    <li class="side-wrap user-wrap">
                                        <div class="acc-desk">
                                            <div class="user-icon">
                                                <span><a href="account.html"><i class="icon-user"></i></a></span>
                                            </div>
                                        </div>
                                        <div class="acc-mob">
                                            <a href="account.html" class="user-icon">
                                                <span><i class="icon-user"></i></span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="side-wrap wishlist-wrap">
                                        <a href="wishlist.html" class="header-wishlist">
                                            <span class="wishlist-icon"><i class="icon-heart"></i></span>
                                            <span class="wishlist-counter">0</span>
                                        </a>
                                    </li>
                                    <li class="side-wrap cart-wrap">
                                        <div class="shopping-widget">
                                            <div class="shopping-cart">
                                                <a href="javascript:void(0)" class="cart-count">
                                                    <span class="cart-icon-wrap">
                                                        <span class="cart-icon"><i class="icon-handbag"></i></span>
                                                        <span id="cart-total" class="bigcounter">5</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- minicart start -->
    <div class="mini-cart">
        <a href="javascript:void(0)" class="shopping-cart-close"><i class="ion-close-round"></i></a>
        <div class="cart-item-title">
            <p>
                <span class="cart-count-desc">There are</span>
                <span class="cart-count-item bigcounter">4</span>
                <span class="cart-count-desc">Products</span>
            </p>
        </div>
        <ul class="cart-item-loop">
            <li class="cart-item">
                <div class="cart-img">
                    <a href="product-style-7.html">
                        <img src="image/cart-img.jpg" alt="cart-image" class="img-fluid">
                    </a>
                </div>
                <div class="cart-title">
                    <h6><a href="product-style-7.html">Fresh apple 5kg</a></h6>
                    <div class="cart-pro-info">
                        <div class="cart-qty-price">
                            <span class="quantity">1 x </span>
                            <span class="price-box">$250.00 USD</span>
                        </div>
                        <div class="delete-item-cart">
                            <a href="empty-cart.html"><i class="icon-trash icons"></i></a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-img">
                    <a href="product-style-7.html">
                        <img src="image/cart-img02.jpg" alt="cart-image" class="img-fluid">
                    </a>
                </div>
                <div class="cart-title">
                    <h6><a href="product-style-7.html">Natural grassbean 4kg</a></h6>
                    <div class="cart-pro-info">
                        <div class="cart-qty-price">
                            <span class="quantity">1 x </span>
                            <span class="price-box">$300.00 USD</span>
                        </div>
                        <div class="delete-item-cart">
                            <a href="empty-cart.html"><i class="icon-trash icons"></i></a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-img">
                    <a href="product-style-7.html">
                        <img src="image/cart-img03.jpg" alt="cart-image" class="img-fluid">
                    </a>
                </div>
                <div class="cart-title">
                    <h6><a href="product-style-7.html">Organic coconut juice 5ltr</a></h6>
                    <div class="cart-pro-info">
                        <div class="cart-qty-price">
                            <span class="quantity">1 x </span>
                            <span class="price-box">$250.00 USD</span>
                        </div>
                        <div class="delete-item-cart">
                            <a href="empty-cart.html"><i class="icon-trash icons"></i></a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-img">
                    <a href="product-style-7.html">
                        <img src="image/cart-img04.jpg" alt="cart-image" class="img-fluid">
                    </a>
                </div>
                <div class="cart-title">
                    <h6><a href="product-style-7.html">Orange juice 5ltr</a></h6>
                    <div class="cart-pro-info">
                        <div class="cart-qty-price">
                            <span class="quantity">1 x </span>
                            <span class="price-box">$350.00 USD</span>
                        </div>
                        <div class="delete-item-cart">
                            <a href="empty-cart.html"><i class="icon-trash icons"></i></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="subtotal-title-area">
            <li class="subtotal-info">
                <div class="subtotal-titles">
                    <h6>Sub total:</h6>
                    <span class="subtotal-price">$750.00 USD</span>
                </div>
            </li>
            <li class="mini-cart-btns">
                <div class="cart-btns">
                    <a href="cart.html" class="btn btn-style1"><span>View cart</span></a>
                    <a href="checkout-1.html" class="btn btn-style1"><span>Checkout</span></a>
                </div>
            </li>
        </ul>
    </div>
    <!-- minicart end -->
    <!-- mobile menu start -->
    <div class="header-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="main-menu-area">
                        <div class="main-navigation navbar-expand-xl">
                            <div class="box-header menu-close">
                                <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                            </div>
                            <div class="navbar-collapse" id="navbarContent">
                                <!-- main-menu start -->
                                <div class="megamenu-content">
                                    <div class="mainwrap">
                                        <ul class="main-menu">
                                            <li class="menu-link parent">
                                                <!-- <a href="index7.html" class="link-title">
                                                    <span class="sp-link-title">Home</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a> -->
                                                <a href="index7.html" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                    <span class="sp-link-title">Home</span>
                                                    <!-- <i class="fa fa-angle-down"></i> -->
                                                </a>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="javascript:void(0)" class="link-title">
                                                    <span class="sp-link-title">Shop</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <a href="#collapse-mega-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                    <span class="sp-link-title">Shop</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-submenu mega-menu collapse" id="collapse-mega-menu">
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Antioxidants</h2>
                                                        <a href="#collapse-sub-mega-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                            <span>Antioxidants</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="collapse-sub-mega-menu">
                                                            <li class="supmenu-li"><a href="product-style-6.html">Green Tea</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Carotene Oil</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Organics nut gifts</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Niacinamide</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Licrorise Oreo Extract</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Milk almond</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Botanical Extracts</h2>
                                                        <a href="#collapse-fruits-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                            <span>Botanical Extracts</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="collapse-fruits-menu">
                                                            <li class="supmenu-li"><a href="product-style-6.html">Green Tea</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Carotene Oil</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Organics nut gifts</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Niacinamide</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Licrorise Oreo Extract</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Milk almond</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Essential Oils</h2>
                                                        <a href="#collapse-banana-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                            <span>Essential Oils</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="collapse-banana-menu">
                                                            <li class="supmenu-li"><a href="product-style-6.html">Green Tea</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Carotene Oil</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Organics nut gifts</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Niacinamide</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Licrorise Oreo Extract</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Milk almond</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Exfoliating Agents</h2>
                                                        <a href="#collapse-apple-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                            <span>Exfoliating Agents</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="collapse-apple-menu">
                                                            <li class="supmenu-li"><a href="product-style-6.html">Green Tea</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Carotene Oil</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Organics nut gifts</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Niacinamide</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Licrorise Oreo Extract</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Milk almond</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="javascript:void(0)" class="link-title">
                                                    <span class="sp-link-title">Collection</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <a href="#collapse-banner-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                    <span class="sp-link-title">Collection</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-submenu banner-menu collapse" id="collapse-banner-menu">
                                                    <li class="menu-banner">
                                                        <a href="grid-list.html" class="menu-banner-img"><img src="image/menu-banner01.jpg" alt="menu-image" class="img-fluid"></a>
                                                        <a href="grid-list.html" class="menu-banner-title"><span>Bestseller</span></a>
                                                    </li>
                                                    <li class="menu-banner">
                                                        <a href="grid-list.html" class="menu-banner-img"><img src="image/menu-banner02.jpg" alt="menu-image" class="img-fluid"></a>
                                                        <a href="grid-list.html" class="menu-banner-title"><span>Special product</span></a>
                                                    </li>
                                                    <li class="menu-banner">
                                                        <a href="grid-list.html" class="menu-banner-img"><img src="image/menu-banner03.jpg" alt="mneu image" class="img-fluid"></a>
                                                        <a href="grid-list.html" class="menu-banner-title"><span>Featured product</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="javascript:void(0)" class="link-title">
                                                    <span class="sp-link-title">Pages</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <a href="#collapse-page-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                    <span class="sp-link-title">Pages</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-submenu sub-menu collapse" id="collapse-page-menu">
                                                    <li class="submenu-li">
                                                        <a href="about-us.html" class="submenu-link">About us</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="javascript:void(0)" class="g-l-link"><span>Account</span> <i class="fa fa-angle-right"></i></a>
                                                        <a href="#account-menu01" data-bs-toggle="collapse" class="sub-link"><span>Account</span> <i class="fa fa-angle-down"></i></a>
                                                        <ul class="collapse blog-style-1" id="account-menu01">
                                                            <li>
                                                                <a href="order-history.html" class="sub-style"><span>Order</span></a>
                                                                <a href="order-history.html" class="blog-sub-style"><span>Order</span></a>
                                                                <a href="profile.html" class="sub-style"><span>Profile</span></a>
                                                                <a href="profile.html" class="blog-sub-style"><span>Profile</span></a>
                                                                <a href="pro-addresses.html" class="sub-style"><span>Address</span></a>
                                                                <a href="pro-addresses.html" class="blog-sub-style"><span>Address</span></a>
                                                                <a href="pro-wishlist.html" class="sub-style"><span>Wishlist</span></a>
                                                                <a href="pro-wishlist.html" class="blog-sub-style"><span>Wishlist</span></a>
                                                                <a href="pro-tickets.html" class="sub-style"><span>My tickets</span></a>
                                                                <a href="pro-tickets.html" class="blog-sub-style"><span>My tickets</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="billing-info.html" class="submenu-link">Billing info</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="cancellation.html" class="submenu-link">Cancellation</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="cart.html" class="submenu-link">Cart page</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="coming-soon.html" class="submenu-link">Coming-soon</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="faq%27s.html" class="submenu-link">Faq's</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="forgot-password.html" class="submenu-link">Forgot passowrd</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="order-complete.html" class="submenu-link">Order complete</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="tracking.html" class="submenu-link">Track page</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="contact.html" class="submenu-link">Contact us</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="payment-policy.html" class="submenu-link">Payment policy</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="privacy-policy.html" class="submenu-link">privacy policy</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="return-policy.html" class="submenu-link">Return policy</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="terms-conditions.html" class="submenu-link">Terms & conditions</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="wishlist.html" class="submenu-link">Wishlist</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="sitemap.html" class="submenu-link">Sitemap</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="fnf-page.html" class="submenu-link">4 not 4</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- BLOG MOBILE CODE -->
                                            <li class="menu-link parent">
                                                <a href="javascript:void(0)" class="link-title">
                                                    <span class="sp-link-title">Feature</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <a href="#feature10" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                    <span class="sp-link-title">Feature</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-submenu mega-menu collapse" id="feature10">
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Header style</h2>
                                                        <a href="#feature08" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                            <span>Header style</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="feature08">
                                                            <li class="supmenu-li"><a href="header-style-1.html">Header style 1</a></li>
                                                            <li class="supmenu-li"><a href="header-style-2.html">Header style 2</a></li>
                                                            <li class="supmenu-li"><a href="header-style-3.html">Header style 3</a></li>
                                                            <li class="supmenu-li"><a href="header-style-4.html">Header style 4</a></li>
                                                            <li class="supmenu-li"><a href="header-style-5.html">Header style 5</a></li>
                                                            <li class="supmenu-li"><a href="header-style-6.html">Header style 6</a></li>
                                                            <li class="supmenu-li"><a href="header-style-7.html">Header style 7</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Footer style</h2>
                                                        <a href="#feature07" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                            <span>Footer style</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="feature07">
                                                            <li class="supmenu-li"><a href="footer-style-1.html">Footer style 1</a></li>
                                                            <li class="supmenu-li"><a href="footer-style-2.html">Footer style 2</a></li>
                                                            <li class="supmenu-li"><a href="footer-style-3.html">Footer style 3</a></li>
                                                            <li class="supmenu-li"><a href="footer-style-4.html">Footer style 4</a></li>
                                                            <li class="supmenu-li"><a href="footer-style-5.html">Footer style 5</a></li>
                                                            <li class="supmenu-li"><a href="footer-style-6.html">Footer style 6</a></li>
                                                            <li class="supmenu-li"><a href="footer-style-7.html">Footer style 7</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Product details</h2>
                                                        <a href="#feature06" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                            <span>Product details</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="feature06">
                                                            <li class="supmenu-li"><a href="product.html">Product details style 1</a></li>
                                                            <li class="supmenu-li"><a href="product-style-2.html">Product details style 2</a></li>
                                                            <li class="supmenu-li"><a href="product-style-3.html">Product details style 3</a></li>
                                                            <li class="supmenu-li"><a href="product-style-4.html">Product details style 4</a></li>
                                                            <li class="supmenu-li"><a href="product-style-5.html">Product details style 5</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Product details style 6</a></li>
                                                            <li class="supmenu-li"><a href="product-style-7.html">Product details style 7</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Other style</h2>
                                                        <a href="#feature05" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                            <span>Other style</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="feature05">
                                                            <li class="supmenu-li"><a href="checkout-1.html">Checkout style 1</a></li>
                                                            <li class="supmenu-li"><a href="checkout-2.html">Checkout style 2</a></li>
                                                            <li class="supmenu-li"><a href="checkout-3.html">Checkout style 3</a></li>
                                                            <li class="supmenu-li"><a href="cart.html">Cart style 1</a></li>
                                                            <li class="supmenu-li"><a href="cart-2.html">Cart style 2</a></li>
                                                            <li class="supmenu-li"><a href="cart-3.html">Cart style 3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- main-menu end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu end -->
    <!-- mobile search start -->
    <div class="modal fade" id="r-search-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="m-drop-search">
                        <input type="text" name="search" placeholder="Search products">
                        <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                    </div>
                    <button type="button" class="close" data-bs-dismiss="modal"><i class="ion-close-round"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile search end -->
</header>
<!--header end-->
<!--header end-->
        <!--home page slider start-->
        <!--home page slider start-->
<section class="slider">
    <div class="home-slider7 owl-carousel owl-theme">
        <div class="items">
            <div class="img-back" style="background-image:url(image/slider19.jpg);">
                <div class="h-s-content">
                    <span class="slider-slogan">Top selling!</span>
                    <h1>Skincare Products from N2,000</h1>
                    <a href="grid-list.html" class="btn btn-style1"><span>Shop now</span></a>
                </div>
            </div>
        </div>
        <div class="items">
            <div class="img-back" style="background-image:url(image/slider18.jpg);">
                <div class="h-s-content">
                    <span class="slider-slogan">Top selling!</span>
                    <h1>20% off all Beauty Products</h1>
                    <a href="grid-list.html" class="btn btn-style1"><span>Shop now</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--home page slider start-->
        <!--home page slider start-->
        <!-- service start -->
        <!-- service start -->
<section class="service-7">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="service">
                    <div class="service-box">
                        <div class="s-box">
                            <div class="service-image">
                                <a href="javascript:void(0)">
                                    <img src="image/sc-icon1.png" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3>BIOACTIVES</h3>
                                <span>Natural Ingredients</span>
                            </div>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="s-box">
                            <div class="service-image">
                                <a href="javascript:void(0)">
                                    <img src="image/sc-icon2.png" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3>COSMECEUTICALS</h3>
                                <span>Clinically-Proven Actives</span>
                            </div>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="s-box">
                            <div class="service-image">
                                <a href="javascript:void(0)">
                                    <img src="image/sc-icon3.png" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3>SUSTAINABILITY</h3>
                                <span>Ethical Sourcing</span>
                            </div>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="s-box">
                            <div class="service-image">
                                <a href="javascript:void(0)">
                                    <img src="image/sc-icon4.png" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3>WORLDWIDE</h3>
                                <span>International Shipping</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service end -->
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
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div> -->
                                                    <div class="pro-price">
                                                        <span class="new-price">N11,700.00 NGN</span>
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
                                                        <span class="new-price">N11,700.00 NGN</span>
                                                        <span class="old-price"><del>N11,700.00 NGN</del></span>
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
                                                        <span class="new-price">N11,700.00 NGN</span>
                                                        <span class="old-price"><del>N11,700.00 NGN</del></span>
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
                                                        <span class="new-price">N11,700.00 NGN</span>
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
                                                        <span class="new-price">N11,700.00 NGN</span>
                                                        <span class="old-price"><del>N11,700.00 NGN</del></span>
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
                                                        <span class="new-price">N11,700.00 NGN</span>
                                                        <span class="old-price"><del>N11,700.00 NGN</del></span>
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
                                                        <span class="new-price">N11,700.00 NGN</span>
                                                        <span class="old-price"><del>N11,700.00 NGN</del></span>
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
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div> -->
                                                    <div class="pro-price">
                                                        <span class="new-price">N11,700.00 NGN</span>
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
                                                        <span class="new-price">N11,700.00 NGN</span>
                                                        <span class="old-price"><del>N11,700.00 NGN</del></span>
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
                                                        <span class="new-price">N11,700.00 NGN</span>
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
                                            <img src="image/layout-7/1.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-2">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/layout-7/2.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-3">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/layout-7/3.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-4">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/layout-7/4.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-5">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/layout-7/5.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-6">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/layout-7/6.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-7">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/layout-7/7.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-8">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/layout-7/8.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs quick-slider owl-carousel owl-theme">
                                    <li class="nav-item items">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#image-1"><img src="image/layout-7/1.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-2"><img src="image/layout-7/2.jpg" class="img-fluid" alt="iamge"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-3"><img src="image/layout-7/3.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-4"><img src="image/layout-7/4.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-5"><img src="image/layout-7/5.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-6"><img src="image/layout-7/6.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-7"><img src="image/layout-7/7.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-8"><img src="image/layout-7/8.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="quick-caption">
                                <h4>Fresh organic reachter</h4>
                                <div class="quick-price">
                                    <span class="new-price">$350.00 USD</span>
                                    <span class="old-price"><del>$399.99 USD</del></span>
                                </div>
                                <div class="quick-rating">
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
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
        
        <!-- footer start -->
<section class="footer-7 section-top-bottom-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer-bottom">
                            <div class="footer-link">
                                <div class="f-info">
                                    <ul class="footer-first">
                                        <li class="logo-content">
                                            <a href="index7.html">
                                                <img src="image/logo.png" class="img-fluid f-logo-image" alt="logo-image">
                                            </a>
                                        </li>
                                        <li class="logo-content footer-details">
                                            <ul class="f-map">
                                                <li class="map-icn"><i class="ion-ios-location"></i></li>
                                                <li class="map-text">
                                                    <p>419 Centrefield 10th floor</p>
                                                    <p>Near where no one knows</p>
                                                </li>
                                            </ul>
                                            <ul class="f-contact">
                                                <li class="call-icn"><i class="ion-ios-telephone"></i></li>
                                                <li class="contact-link">
                                                    <a href="tel:1-800-222-000">Phone: 1-000-666-000</a>
                                                    <a href="mailto:demo@demo.com">Email: coding@coding.com</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="f-link">
                                    <h2 class="h-footer">Services</h2>
                                    <a href="#services" data-bs-toggle="collapse" class="h-footer">
                                        <span>Services</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="f-link-ul collapse" id="services" data-bs-parent="#footer-accordian">
                                        <li class="f-link-ul-li"><a href="about-us.html">About MiotMay</a></li>
                                        <li class="f-link-ul-li"><a href="faq%27s.html">FAQs</a></li>
                                        <li class="f-link-ul-li"><a href="contact.html">Contact us</a></li>
                                        <li class="f-link-ul-li"><a href="blog-style-7-3-grid.html">News</a></li>
                                        <li class="f-link-ul-li"><a href="sitemap.html">Sitemap</a></li>
                                    </ul>
                                </div>
                                <div class="f-link">
                                    <h2 class="h-footer">Privacy & terms</h2>
                                    <a href="#privacy" data-bs-toggle="collapse" class="h-footer">
                                        <span>Privacy & terms</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="f-link-ul collapse" id="privacy" data-bs-parent="#footer-accordian">
                                        <li class="f-link-ul-li"><a href="payment-policy.html">Payment policy</a></li>
                                        <li class="f-link-ul-li"><a href="privacy-policy.html">Privacy policy</a></li>
                                        <li class="f-link-ul-li"><a href="return-policy.html">Return policy</a></li>
                                        <li class="f-link-ul-li"><a href="shipping-policy.html">Shipping policy</a></li>
                                        <li class="f-link-ul-li"><a href="terms-conditions.html">Terms & conditions</a></li>
                                    </ul>
                                </div>
                                <div class="f-link">
                                    <h2 class="h-footer">My account</h2>
                                    <a href="#account" data-bs-toggle="collapse" class="h-footer">
                                        <span>My account</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="f-link-ul collapse" id="account" data-bs-parent="#footer-accordian">
                                        <li class="f-link-ul-li"><a href="account.html">My account</a></li>
                                        <li class="f-link-ul-li"><a href="cart.html">My cart</a></li>
                                        <li class="f-link-ul-li"><a href="tracking.html">Order history</a></li>
                                        <li class="f-link-ul-li"><a href="wishlist.html">My wishlist</a></li>
                                        <li class="f-link-ul-li"><a href="addresses.html">My address</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer end -->
        <!-- copyright start -->
        <section class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="f-bottom">
                            <p>Copyright <i class="fa fa-copyright"></i> MiotMay</p>
                            <img src="image/payment.png" class="img-fluid" alt="p-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- copyright end -->
        <!-- newsletter pop-up start -->
        <div class="vegist-popup animated modal fadeIn" id="myModal1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup-content">
                            <!-- popup close button start -->
                            <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close" class="close-btn"><i class="ion-close-round"></i></a>
                            <!-- popup close button end -->
                            <!-- popup content area start -->
                            <div class="pop-up-newsletter" style="background-image: url(image/news-popup.jpg);">
                                <div class="logo-content">
                                    <a href="index1.html"><img src="image/logo1.png" alt="image" class="img-fluid"></a>
                                    <h4>Become a subscriber</h4>
                                    <span>Subscribe to get the notification of latest posts</span>
                                </div>
                                <div class="subscribe-area">
                                    <input type="text" name="comment" placeholder="Your email address">
                                    <a href="index1.html" class="btn btn-style1"><span>Subscribe</span></a>
                                </div>
                            </div>
                            <!-- popup content area end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter pop-up end -->

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

<!-- Mirrored from spacingtech.com/html/vegist-final/vegist/index7.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Sep 2021 00:11:13 GMT -->
</html>