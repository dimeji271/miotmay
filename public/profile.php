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
        $user_password = $row['user_password'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_email = $row['user_email'];        
        $user_phone_number = $row['user_phone_number'];        
    }
}

?>

<?php 

if(isset($_POST['update_profile'])){
    // global $connection;

    $user_firstname = escape_string($_POST['user_firstname']);
    $user_lastname = escape_string($_POST['user_lastname']);
    $user_email = escape_string($_POST['user_email']);
    $user_phone_number = escape_string($_POST['user_phone_number']);
    $user_password = escape_string($_POST['user_password']);                        

    $query = "UPDATE users SET ";
    $query .= "user_firstname = '{$user_firstname }', ";
    $query .= "user_lastname = '{$user_lastname }', ";
    $query .= "user_email = '{$user_email }', ";
    $query .= "user_phone_number = '{$user_phone_number }', ";
    $query .= "user_password = '{$user_password }' "; 
    $query .= "WHERE username = '{$username}' ";

    $update_user_query = mysqli_query($connection, $query);

    confirm($update_user_query);
    set_message("Profile successfully updated");    

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

<!-- Update Profile Start -->
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
                                <li class="profile-li"><a href="profile.php" class="active">Profile</a></li>
                                <li class="profile-li"><a href="profile-addresses.php">Address</a></li>
                                <li class="profile-li"><a href="profile-wishlist.php"><span>Payment Methods</span> <span class="pro-count">3</span></a></li>
                                <li class="profile-li"><a href="profile-tickets.php"><span>Account Details</span> <span class="pro-count">4</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="profile-form">
                        <p>Hello user (not user? <a href="logout.php">Log out</a>)</p>
                        <hr>
                        <p>From your account dashboard, you can view your recent orders, manage your shipping and billing addresses, and edit your personal details.</p>
                        <hr>
                        <form method="post">
                            <ul class="pro-input-label">
                                <li>
                                    <label>First name</label>
                                    <input type="text" name="user_firstname" placeholder="First name" value="<?php echo $user_firstname; ?>">
                                </li>
                                <li>
                                    <label>Last name</label>
                                    <input type="text" name="user_lastname" placeholder="Last name" value="<?php echo $user_lastname; ?>">
                                </li>
                            </ul>
                            <ul class="pro-input-label">
                                <li>
                                    <label>E-mail address</label>
                                    <input type="text" name="user_email" placeholder="E-mail address" value="<?php echo $user_email; ?>" readonly>
                                </li>
                                <li>
                                    <label>Phone number</label>
                                    <input type="text" name="user_phone_number" placeholder="Phone number" value="<?php echo $user_phone_number; ?>">
                                </li>
                            </ul>
                            <ul class="pro-input-label">
                                <li>
                                    <label>New password</label>
                                    <input type="password" name="user_password" placeholder="New password">
                                </li>
                                <!-- <li>
                                    <label>Confirm password</label>
                                    <input type="text" name="name" placeholder="Confirm password">
                                </li> -->
                            </ul>
                            <ul class="pro-submit">
                                <!-- <li>
                                    <input type="checkbox" name="name">
                                    <label>Subscribe me to newsletter</label>
                                </li> -->
                                <li>
                                    <div class="form-group">
                                        <input type="submit" name="update_profile" class="btn btn-style1" value="Update Profile">
                                    </div>    
                                    <!-- <a href="profile.html" class="btn btn-style1">Update profile</a> -->
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Update Profile End -->



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