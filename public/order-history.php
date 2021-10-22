<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

<!-- header start -->
<?php include(TEMPLATE_FRONT . DS . "navbar.php"); ?>
<!--header end-->


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
                            <span>Order History</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<!-- order history start -->
<section class="order-histry-area section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="order-history">
                    <div class="profile">
                        <div class="order-pro">
                            <div class="pro-img">
                                <a href="javascript:void(0)"><img src="image/user-ava.jpg" alt="img" class="img-fluid"></a>
                            </div>
                            <div class="order-name">
                                <h4>Andrew louise</h4>
                                <span>Joined April 06, 2021</span>
                            </div>
                        </div>
                        <div class="order-his-page">
                            <ul class="profile-ul">
                                <li class="profile-li"><a href="order-history.php" class="active"><span>Orders</span> <span class="pro-count">5</span></a></li>
                                <li class="profile-li"><a href="profile.php">Profile</a></li>
                                <li class="profile-li"><a href="profile-addresses.php">Address</a></li>
                                <li class="profile-li"><a href="profile-wishlist.php"><span>Wishlist</span> <span class="pro-count">3</span></a></li>
                                <li class="profile-li"><a href="profile-tickets.php"><span>My tickets</span> <span class="pro-count">4</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="order-info">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Order #</th>
                                    <th>Date purchased</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>78A643CD409</td>
                                    <td>April 08, 2021</td>
                                    <td class="canceled">Canceled</td>
                                    <td>$760.50</td>
                                </tr>
                                <tr>
                                    <td>34VB5540K83</td>
                                    <td>April 11, 2021</td>
                                    <td class="process">In progress</td>
                                    <td>$760.50</td>
                                </tr>
                                <tr>
                                    <td>78A643CD409</td>
                                    <td>April 15, 2021</td>
                                    <td class="delayed">Delayed</td>
                                    <td>$760.50</td>
                                </tr>
                                <tr>
                                    <td>78A643CD409</td>
                                    <td>April 18, 2021</td>
                                    <td class="delivered">Delivered</td>
                                    <td>$760.50</td>
                                </tr>
                                <tr>
                                    <td>78A643CD409</td>
                                    <td>April 21, 2021</td>
                                    <td class="delivered">Delivered</td>
                                    <td>$760.50</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- order history end -->

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