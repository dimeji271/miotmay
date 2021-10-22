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
                            <span>User Login</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->


<!-- login start -->
<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="login-area">
                    <div class="login-box">
                        <h1>Login</h1>                        
                        <p class="bg-custom-danger"><?php display_message(); ?></p>
                        <form class="" action="" method="post" enctype="multipart/form-data">

                            <?php login_user2(); ?>
                            <label>Username</label>
                            <input type="text" name="username" placeholder="Username">
                            <label>Password</label>
                            <input type="password" name="user_password" placeholder="Password">
                            <input type="submit" name="login" class="btn-style1" value="Login">
                            <!-- <a  class="btn-style1">Sign in</a> -->
                            <a href="forgot-password.php" class="re-password">Forgot your password?</a>
                        </form>
                    </div>
                    <div class="login-account">
                        <h4>Don't have an account?</h4>
                        <a href="register.php" class="ceate-a">Create account</a>
                        <div class="login-info">
                            <a href="terms-conditions.php" class="terms-link"><span>*</span> Terms & conditions.</a>
                            <p>Your privacy and security are important to us. For more information on how we use your data read our <a href="privacy-policy.php">privacy policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login end -->




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