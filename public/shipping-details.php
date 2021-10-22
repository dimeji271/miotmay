<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

<!-- header start -->
<?php include(TEMPLATE_FRONT . DS . "navbar.php"); ?>
<!--header end-->

<?php 

if(isset($_POST['submit'])){
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_company_name = $_POST['user_company_name'];
    $user_country = $_POST['user_country'];
    $user_address = $_POST['user_address'];
    $user_city = $_POST['user_city'];
    // $user_state = $_POST['user_state'];
    $user_zip_code = $_POST['user_zip_code'];
    $user_email = $_POST['user_email'];
    $user_phone_number = $_POST['user_phone_number'];
}

?>

<!-- breadcrumb start -->
<!-- <section class="about-breadcrumb">
    <div class="about-back section-tb-padding" style="background-image: url(image/about-image.jpg)">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-7">
                        <ul class="about-link">
                            <li class="go-home"><a href="index.php">Home</a></li>
                            <li class="about-p"><span>Collection</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
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
                            <a href="checkout.php">Billing Details</a>
                        </li>
                        <li class="breadcrumb-url-li">
                            <span>Shipping</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->


<!-- checkout page start -->
<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="checkout-area">
                    <div class="billing-area">
                        <form action="payment.php" method="post">
                            <h2>Shipping details</h2>
                            <div class="billing-form">                                
                                <ul class="billing-ul">
                                    <li class="billing-li">
                                        <label>Name:</label>
                                        <input type="text" name="full_name" placeholder="<?php echo $user_firstname . " " . $user_lastname; ?>" readonly />
                                    </li>
                                </ul>
                                <ul class="billing-ul">
                                    <li class="billing-li">
                                        <label>Contact:</label>
                                        <input type="text" name="user_email" placeholder="<?php echo $user_email; ?>" readonly />
                                    </li>
                                </ul>
                                <ul class="billing-ul">
                                    <li class="billing-li">
                                        <label>Ship To:</label>
                                        <input type="text" name="user_address" placeholder="<?php echo $user_address . ", " . $user_city // . ", " . $user_state; ?>"readonly />
                                    </li>
                                </ul>
                                <ul class="billing-ul">
                                    <li class="billing-li">
                                        <label>Country</label>
                                        <input type="text" name="user_country" placeholder="<?php echo $user_country; ?>" readonly />
                                    </li>
                                </ul>                                
                                </ul>
                            </div>
                                               
                    </div>
                    <div class="order-area">                        
                        <h2>Your Order (<?php echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0"; ?>)</h2>
                        <ul class="order-history">                           
                            <?php // cart_in_checkout(); ?>
                            <li class="order-details">
                                <span><strong>Item Subtotal:</strong></span>
                                <span><strong>&#36;<?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; ?>
                                </strong></span>
                            </li>
                            <li class="order-details">
                                <span><strong>Shipping Charge:</strong></span>
                                <span><strong>Free shipping</strong></span>
                            </li>
                            <li class="order-details">
                                <span>Total:</span>
                                <span><strong>&#36;<?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; ?>
                            </li>
                        </ul>                        
                        <ul class="order-form">
                            <li>                                    
                                <label>All transactions are secure and encrypted</label>
                            </li>
                            <li>
                                <input type="checkbox" name="--">
                                <label>Paystack</label>
                            </li>
                            <li>
                                <input type="checkbox" name="--">
                                <label>Bank Trasnfer</label>
                            </li>
                            <li class="pay-icon">
                                <a href="javascript:void(0)"><i class="fa fa-credit-card"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-cc-visa"></i></a>
                                <!-- <a href="javascript:void(0)"><i class="fa fa-cc-paypal"></i></a> -->
                                <a href="javascript:void(0)"><i class="fa fa-cc-mastercard"></i></a>
                            </li>
                        </ul>                    
                        <div class="checkout-btn">
                            <button type="submit" name="submit" class="btn-style1">Place Order</a>
                        </div>
                    </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- checkout page end -->



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