<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

<!-- header start -->
<?php include(TEMPLATE_FRONT . DS . "navbar.php"); ?>
<!--header end-->


<?php

if(!isset($_SESSION['username'])){
  redirect("../public");
}

?>


<?php 

if(isset($_SESSION['username'])){
    // global $connection;

    $username = $_SESSION['username'];

    $query = "SELECT * FROM users WHERE username = '{$username}' ";

    $select_user_profile_query = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($select_user_profile_query)){        
        $username = $row['username'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_company_name = $row['user_company_name'];
        $user_address = $row['user_address'];
        $user_city = $row['user_city'];
        $user_zip_code = $row['user_zip_code'];
    }
}

?>

<?php 

if(isset($_POST['update_address'])){
    // global $connection;

    $user_company_name = escape_string($_POST['user_company_name']);
    $user_address = escape_string($_POST['user_address']);
    $user_city = escape_string($_POST['user_city']);
    $user_zip_code = escape_string($_POST['user_zip_code']);                          

    $query = "UPDATE users SET ";
    $query .= "user_company_name = '{$user_company_name }', ";
    $query .= "user_address = '{$user_address }', ";
    $query .= "user_city = '{$user_city }', ";
    $query .= "user_zip_code = '{$user_zip_code }' ";    
    $query .= "WHERE username = '{$username}' ";

    $update_user_query = mysqli_query($connection, $query);

    confirm($update_user_query);
    set_message("Address successfully updated");    

}

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
                            <span>My Profile</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->
<p class="bg-success"><?php display_message(); ?></p>

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
                                <h4><?php echo $user_firstname . " " . $user_lastname; ?></h4>
                                <!-- <span>Joined April 06, 2021</span> -->
                            </div>
                        </div>
                        <div class="order-his-page">
                        <ul class="profile-ul">
                                <li class="profile-li"><a href="order-history.php"><span>Orders</span> <span class="pro-count">5</span></a></li>
                                <li class="profile-li"><a href="profile.php">Profile</a></li>
                                <li class="profile-li"><a href="profile-addresses.php" class="active">Address</a></li>
                                <li class="profile-li"><a href="profile-wishlist.php"><span>Payment Methods</span> <span class="pro-count">3</span></a></li>
                                <li class="profile-li"><a href="profile-tickets.php"><span>Account Details</span> <span class="pro-count">4</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="profile-address">
                        <p>Hello <?php echo $_SESSION['username']; ?> (not <?php echo $_SESSION['username']; ?>? <a href="logout.php">Log out</a>)</p>
                        <hr>
                        <p>From your account dashboard, you can view your recent orders, manage your shipping and billing addresses, and edit your personal details.</p>
                        <hr>
                        <form method="post">
                            <div class="pro-add-title">
                                <h4>Contact Address</h4>
                            </div>
                            <ul class="add-label-input">
                                <li>
                                    <label>Company</label>
                                    <input type="text" name="user_company_name" placeholder="Company" value="<?php echo $user_company_name; ?>">
                                </li>
                                <li>
                                    <label>Country</label>
                                    <select>
                                        <option>United states</option>
                                        <option>India</option>
                                        <option>Canada</option>
                                        <option>France</option>
                                        <option>Germany</option>
                                    </select>
                                </li>
                            </ul>
                            <ul class="add-label-input">
                                <li>
                                    <label>City</label>
                                    <input type="text" name="user_city" placeholder="City" value="<?php echo $user_city; ?>">
                                </li>
                                <li>
                                    <label>ZIP Code</label>
                                    <input type="number" name="user_zip_code" placeholder="ZIP code" value="<?php echo $user_zip_code; ?>">
                                </li>
                            </ul>
                            <ul class="add-label-input">
                                <li>
                                    <label>Address</label>
                                    <input type="text" name="user_address" placeholder="Address" value="<?php echo $user_address; ?>">
                                </li>
                                <!-- <li>
                                    <label>Address 1</label>
                                    <input type="text" name="name" placeholder="Confirm password">
                                </li> -->
                            </ul>
                            <ul class="pro-submit">
                                <li>
                                    <input type="checkbox" name="--">
                                    <label>Same as contact address</label>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <input type="submit" name="update_address" class="btn btn-style1" value="Update Address">
                                    </div>  
                                    <!-- <a href="pro-wishlist.html" class="btn btn-style1">Update address</a> -->
                                </li>
                            </ul>
                        </form>
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