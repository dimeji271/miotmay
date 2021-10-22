<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

<!-- header start -->
<?php include(TEMPLATE_FRONT . DS . "navbar.php"); ?>
<!--header end-->


<?php 

    process_transaction();

?>


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
                            <span>Order Complete</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->


<!-- Order complete start -->
<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="order-area">
                    <div class="order-price">
                        <ul class="total-order">
                            <li>
                                <span class="order-no">Order no. 1724</span>
                                <span class="order-date">23th jan 2021 3:04 pm</span>
                            </li>
                            <li>
                                <span class="total-price">Order total</span>
                                <span class="amount">$1199.00</span>
                            </li>
                        </ul>
                    </div>
                    <div class="order-details">
                        <span class="text-success order-i"><i class="fa fa-check-circle"></i></span>
                        <h4>Thank you for order</h4>
                        <span class="order-s">Your order will ship within few hours</span>
                        <a href="tracking.html" class="tracking-link btn btn-style1">Tracking details</a>
                    </div>
                    <div class="order-delivery">
                        <ul class="delivery-payment">
                            <li class="delivery">
                                <h5>Delivery address</h5>
                                <p>Lorem ipsum</p>
                                <span class="order-span">7003 fairway street</span>
                                <span class="order-span">New york</span>
                                <span class="order-span">NY 10033</span>
                                <span class="order-span">USA</span>
                                <span class="order-span">Mobile No :+11-123456789</span>
                            </li>
                            <li class="pay">
                                <h5>Payment summary</h5>
                                <p class="transition">Transaction No : 66282856617</p>
                                <span class="order-span p-label">
                                    <span class="n-price">Price</span>
                                    <span class="o-price">$876.00</span>
                                </span>
                                <span class="order-span p-label">
                                    <span class="n-price">Shipping charge</span>
                                    <span class="o-price">$100.00</span>
                                </span>
                                <span class="order-span p-label">
                                    <span class="n-price">Order Total</span>
                                    <span class="o-price">$100.00</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Order complete end -->


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