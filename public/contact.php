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



<!-- map area start -->
<section class="contact section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="map-area">
                    <div class="map-title">
                        <h1>Contact us</h1>
                    </div>
                    <!-- <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126572.60843180324!2d72.77816346362009!3d21.169989019558837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e1!3m2!1sen!2sin!4v1612272594330!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div> -->
                    <div class="map-details section-t-padding">
                        <div class="contact-info">
                            <div class="contact-details">
                                <h4>Drop us message</h4>
                                <form name="sentMessage" id="contactForm" method="post">
                                    <?php send_message(); ?>
                                    <label>Your name</label>
                                    <input type="text" name="name" placeholder="Enter your name">
                                    <label>Email</label>
                                    <input type="text" name="email" placeholder="Enter your email address">
                                    <label>Subject</label>
                                    <input type="text" name="subject" placeholder="Subject">
                                    <label>Message</label>
                                    <textarea name="message" rows="5" placeholder="Your message here..."></textarea>
                                    <button name="submit" type="submit" class="btn-style1">Submit <i class="ti-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="information">
                                <h4>Get in touch</h4>
                                <p class="info-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum earum eveniet dolorum suscipit nesciunt incidunt animi repudiandae ab at, tenetur distinctio voluptate vel illo similique.</p>
                                <div class="contact-in">
                                    <ul class="info-details">
                                        <li><i class="fa fa-street-view"></i></li>
                                        <li>
                                            <h4>Address</h4>
                                            <p>255 Parker St. Englishtown, NJ 07726</p>
                                        </li>
                                    </ul>
                                    <ul class="info-details">
                                        <li><i class="fa fa-phone"></i></li>
                                        <li>
                                            <h4>Phone</h4>
                                            <p>+12345678999</p>
                                        </li>
                                    </ul>
                                    <ul class="info-details">
                                        <li><i class="fa fa-envelope"></i></li>
                                        <li>
                                            <h4>Email</h4>
                                            <p>yoursite@demo.com</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- map area end -->



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