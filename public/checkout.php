<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

<!-- header start -->
<?php include(TEMPLATE_FRONT . DS . "navbar.php"); ?>
<!--header end-->

<?php

if(!isset($_SESSION['username'])){
  redirect("../public");
}

update_profile();

if(isset($_SESSION['username'])){
    global $connection;

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
        $user_address = $row['user_address'];
        $user_zip_code = $row['user_zip_code'];
        $user_city = $row['user_city'];
        $user_company_name = $row['user_company_name'];
    }
}   


?>

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
                            <span>Checkout</span>
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
                        <form action="shipping-details.php" method="post">
                            <h2>Billing details</h2>
                            <div class="billing-form">
                                <ul class="billing-ul input-2">
                                    <li class="billing-li">
                                        <label>First Name *</label>
                                        <input type="text" name="user_firstname" placeholder="First name" value="<?php echo $user_firstname; ?>" required>
                                    </li>
                                    <li class="billing-li">
                                        <label>Last name *</label>
                                        <input type="text" name="user_lastname" placeholder="Last name" value="<?php echo $user_lastname; ?>" required>
                                    </li>
                                </ul>
                                <ul class="billing-ul">
                                    <li class="billing-li">
                                        <label>Company name (Optional)</label>
                                        <input type="text" name="user_company_name" placeholder="Company Name" value="<?php echo $user_company_name; ?>">
                                    </li>
                                </ul>
                                <ul class="billing-ul">
                                    <li class="billing-li">
                                        <label>Country</label>                                        
                                        <select id="country" name="user_country">
                                            <option>select country</option>
                                        </select>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="billing-li">
                                        <label for="state">State *</label>
                                        <span id="state-code"><input type="text" name="state" id="state"></span>
                                    </li>
                                </ul>
                                <ul class="billing-ul">
                                    <li class="billing-li">
                                        <label>Street address *</label>
                                        <input type="text" name="user_address" placeholder="Address" value="<?php echo $user_address; ?>" required>
                                    </li>
                                </ul>                                
                                <ul class="billing-ul">
                                    <li class="billing-li">
                                        <label>City/Town *</label>
                                        <input type="text" name="user_city" placeholder="City" value="<?php echo $user_city; ?>" required>
                                    </li>
                                </ul>                               
                                <ul class="billing-ul">
                                    <li class="billing-li">
                                        <label>Postcode/ZIP</label>
                                        <input type="text" name="user_zip_code" placeholder="ZIP" value="<?php echo $user_zip_code; ?>">
                                    </li>
                                </ul>
                                <ul class="billing-ul input-2">
                                    <li class="billing-li">
                                        <label>Email Address *</label>
                                        <input type="text" name="user_email" placeholder="Email Address" value="<?php echo $user_email; ?>" required>
                                    </li>
                                    <li class="billing-li">
                                        <label>Phone</label>
                                        <input type="text" name="user_phone_number" placeholder="Phone" value="<?php echo $user_phone_number; ?>">
                                    </li>
                                </ul>                                                              
                            </div>
<script>
// user country code for selected option
let user_country_code = "IN";

(function () {
    // script https://www.html-code-generator.com/html/drop-down/country-region

    // Get the country name and state name from the imported script.
    let country_list = country_and_states['country'];
    let states_list = country_and_states['states'];

    // creating country name drop-down
    let option =  '';
    option += '<option>select country</option>';
    for(let country_code in country_list){
        // set selected option user country
        let selected = (country_code == user_country_code) ? ' selected' : '';
        option += '<option value="'+country_code+'"'+selected+'>'+country_list[country_code]+'</option>';
    }
    document.getElementById('country').innerHTML = option;

    // creating states name drop-down
    let text_box = '<input type="text" class="input-text" id="state">';
    let state_code_id = document.getElementById("state-code");

    function create_states_dropdown() {
        // get selected country code
        let country_code = document.getElementById("country").value;
        let states = states_list[country_code];
        // invalid country code or no states add textbox
        if(!states){
            state_code_id.innerHTML = text_box;
            return;
        }
        let option = '';
        if (states.length > 0) {
            option = '<select id="state">\n';
            for (let i = 0; i < states.length; i++) {
                option += '<option value="'+states[i].code+'">'+states[i].name+'</option>';
            }
            option += '</select>';
        } else {
            // create input textbox if no states 
            option = text_box
        }
        state_code_id.innerHTML = option;
    }

    // country select change event
    const country_select = document.getElementById("country");
    country_select.addEventListener('change', create_states_dropdown);

    create_states_dropdown();
})();

</script>
                            <div class="billing-details">                            
                                <h2>Shipping details</h2>
                                <ul class="shipping-form">
                                    <li class="check-box">
                                        <input type="checkbox" name="--">
                                        <label>Ship to a different address?</label>
                                    </li>
                                    <li class="comment-area">
                                        <label>Order notes(Optional)</label>
                                        <textarea name="comments" rows="4" cols="80"></textarea>
                                    </li>
                                </ul>
                            </div>                                               
                    </div>
                    <div class="order-area">
                        <h2>Your Order (<?php echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0"; ?>)</h2>
                        <ul class="order-history">
                            <li class="order-details">
                                <span>Product</span>
                                <span>Total</span>
                            </li>
                            <?php cart_in_checkout(); ?>
                            <li class="order-details">
                                <span><strong>Subtotal:</strong></span>
                                <span><strong>&#36;<?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; ?>
                                </strong></span>
                            </li>                            
                            <li class="order-details">
                                <span>Total:</span>
                                <span><strong>&#36;<?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; ?>
                            </li>                            
                        </ul>
                        <div class="checkout-btn">
                            <button type="submit" name="submit" class="btn-style1">Proceed</a>
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