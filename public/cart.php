<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

<!-- header start -->
<?php include(TEMPLATE_FRONT . DS . "navbar.php"); ?>
<!--header end-->

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
                            <span>Shopping Cart</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->


<!-- cart start -->
<section class="cart-page section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <form action="" method="post">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="business" value="miotmay@gmail.com">
                    <div class="cart-area">
                        <div class="cart-details">
                            <div class="cart-item">
                                <span class="cart-head">My cart:</span>
                                <span class="c-items">4 items</span>                            
                            </div>
                            <?php display_message(); ?>
                            <?php cart(); ?>
                        </div>
                    </div>
                              
            </div>
            <div class="col-xl-3 col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="cart-total">
                    <div class="cart-price">
                        <span>Subtotal</span>
                        <span class="total">$78.44 CAD</span>
                    </div>
                    <div class="cart-info">
                        <h4>Shipping info</h4>
                        <form>
                            <label>Country</label>
                            <select class="form-select" aria-label="Default select example">
                                <option>---</option>
                                <option>Afghanistan</option>
                                <option>Åland Islands</option>
                                <option>Albania</option>
                                <option>Algeria</option>
                                <option>Andorra</option>
                                <option>Angola</option>
                                <option>Anguilla</option>
                                <option>Antigua & Barbuda</option>
                                <option>Argentina</option>
                                <option>Armenia</option>
                                <option>Aruba</option>
                                <option>Ascension Island</option>
                                <option>Australia</option>
                                <option>Austria</option>
                                <option>Azerbaijan</option>
                                <option>Bahamas</option>
                                <option>Bahrain</option>
                            </select>
                            <label>Zip/postal code</label>
                            <input type="text" name="code" placeholder="Zip/postal code">
                        </form>
                        <a href="javascript:void(0)" class="cart-calculate">Calculate</a>
                    </div>
                    <div class="shop-total">
                        <span>Item Total</span>
                        <span class="total-amount">
                            <?php echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0"; ?>
                        </span>
                    </div>
                    <div class="shop-total">
                        <span>Price Total</span>
                        <span class="total-amount">&#36;
                            <?php  echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; ?>
                        </span>
                    </div>
                    <a href="checkout.php" class="check-link">Checkout</a>
                </div>
            </div>
            </form> 
        </div>
    </div>
</section>
<!-- cart end -->




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