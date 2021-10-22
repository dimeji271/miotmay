<?php 

$upload_directory = "uploads";

// helper functions

function last_id(){

    global $connection;
    
    return mysqli_insert_id($connection);
}

function set_message($msg){
    if(!empty($msg)){
        $_SESSION['message'] = $msg;
    }else{
        $msg = "";
    }
}

function display_message(){
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function redirect($location){
    return header("Location: $location ");
}

function query($sql){
    global $connection;

    return mysqli_query($connection, $sql);
}

function confirm($result){
    global $connection;

    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
    }
}

function escape_string($string){
    global $connection;

    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result){
    return mysqli_fetch_array($result);
}

/********************* FRONT END FUNCTIONS ************************/
// get products

function get_products(){

    $query = query(" SELECT * FROM products ");
    confirm($query);

    while($row = fetch_array($query)){

        $product_image = display_image($row['product_image']);

        $product = <<<DELIMETER

        <div class="swiper-slide">
        <div class="h-t-pro">
            <div class="tred-pro">
                <div class="tr-pro-img">
                    <a href="product.php?id={$row['product_id']}">
                        <img src="../resources/{$product_image}" class="img-fluid" alt="image">
                    </a>
                </div>
                <div class="Pro-lable">
                    <span class="p-text">New</span>
                </div>
                <div class="pro-icn">
                    <a target="_blank" href="../resources/_cart.php?add={$row['product_id']}" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                    <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                </div>
            </div>
            <div class="caption">
                <h3><a href="product.php">{$row['product_title']}</a></h3>
                <div class="pro-price">
                    <span class="new-price">&#36;{$row['product_price']}</span>
                    <?php get_products(); ?>
                </div>
            </div>
        </div>
        </div>

DELIMETER;

        echo $product;
    }
}

function get_categories(){
    $query = query("SELECT * FROM categories");
    confirm($query);

    while($row = fetch_array($query)){

        $category_links = <<<DELIMETER

        <li class='supmenu-li'><a href='category.php?id={$row['cat_id']}'>{$row['cat_title']}</a></li>

DELIMETER;

echo $category_links;

    }
}

function get_categories2(){
    $query = query("SELECT * FROM categories");
    confirm($query);

    while($row = fetch_array($query)){

        $category_links = <<<DELIMETER

        <li class="grid-list-option">
            <a href='category.php?id={$row['cat_id']}'>{$row['cat_title']}<span class="grid-items">(6)</span></a>
        </li>


DELIMETER;

echo $category_links;

    }
}


function get_products_in_cat_page(){

    $query = query(" SELECT * FROM products WHERE product_category_id = " . escape_string($_GET['id']) . "");
    confirm($query);

    while($row = fetch_array($query)){
        $product = <<<DELIMETER

        <li class="grid-items">
            <div class="tred-pro">
                <div class="tr-pro-img">
                    <a href="product.php?id={$row['product_id']}">
                        <img class="img-fluid" src="image/pro/pro-img-1.jpg" alt="pro-img1">
                        <img class="img-fluid additional-image" src="image/pro/pro-img-01.jpg" alt="additional image">
                    </a>
                </div>
                <div class="Pro-lable">
                    <span class="p-text">New</span>
                </div>
                <div class="pro-icn">
                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                    <a href="../resources/_cart.php?add={$row['product_id']}" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                </div>
            </div>
            <div class="caption">
                <h3><a href="product.php?id={$row['product_id']}">{$row['product_title']}</a></h3>
                <div class="pro-price">
                    <span class="new-price">&#36;{$row['product_price']}</span>
                    <?php get_products_in_cat_page(); ?>
                </div>
            </div>
        </li>

DELIMETER;

        echo $product;
    }
}

function get_products_in_cart_page(){

    $query = query(" SELECT * FROM products ");
    confirm($query);

    while($row = fetch_array($query)){
        $product = <<<DELIMETER

        <li class="grid-items">
            <div class="tred-pro">
                <div class="tr-pro-img">
                    <a href="product.php?id={$row['product_id']}">
                        <img class="img-fluid" src="image/pro/pro-img-1.jpg" alt="pro-img1">
                        <img class="img-fluid additional-image" src="image/pro/pro-img-01.jpg" alt="additional image">
                    </a>
                </div>
                <div class="Pro-lable">
                    <span class="p-text">New</span>
                </div>
                <div class="pro-icn">
                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                    <a href="../resources/_cart.php?add={$row['product_id']}" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                </div>
            </div>
            <div class="caption">
                <h3><a href="product.php?id={$row['product_id']}">{$row['product_title']}</a></h3>
                <div class="pro-price">
                    <span class="new-price">&#36;{$row['product_price']}</span>
                    <?php get_products_in_cat_page(); ?>
                </div>
            </div>
        </li>

DELIMETER;

        echo $product;
    }
}

//FUNCTION LOGIN USER 1(FIRST LOGIN USER I USED, CURRENTLY NOT IN USE. MIGHT DELETE LATER)
function login_user(){
    if(isset($_POST['login'])){
        $username = escape_string($_POST['username']);
        $user_password = escape_string($_POST['user_password']);

        $query = query("SELECT * FROM users WHERE username = '{$username}' AND user_password = '{$user_password}' ");
        confirm($query);

        if(mysqli_num_rows($query) == 0){
            set_message("Invalid Username/Password");
            redirect("login.php");
        }else{
            $_SESSION['username'] = $username;
            redirect("admin");
        }
    }
}


//FUNCTION LOGIN USER 2(ADVANCED LOGIN USER)
function login_user2(){
    global $connection; 

    if(isset($_POST['login'])){
        $username = escape_string($_POST['username']);
        $user_password = escape_string($_POST['user_password']);
        // $user_status = $_POST['user_status'];        
    
        $query = "SELECT * FROM users WHERE username = '{$username}' ";
        $select_user_query = mysqli_query($connection, $query);
        confirm($select_user_query);        
    
        while($row = mysqli_fetch_array($select_user_query)){            
            $db_username = $row['username'];
            $db_user_password = $row['user_password'];
            $db_user_email = $row['user_email'];
            $db_user_firstname = $row['user_firstname'];
            $db_user_lastname = $row['user_lastname'];
            $db_user_status = $row['user_status'];            
        }
    
        if($username !== $db_username || $user_password !== $db_user_password){
            set_message("Invalid Email/Password");
            redirect("login.php");
        }
        else if($username == $db_username && $user_password == $db_user_password && $db_user_status == 1){
            $_SESSION['username'] = $db_username;
            $_SESSION['user_password'] = $db_user_password;
            $_SESSION['user_firstname'] = $db_user_firstname;
            $_SESSION['user_lastname'] = $db_user_lastname;
            $_SESSION['user_email'] = $db_user_email;
            $_SESSION['user_status'] = $db_user_status;            
            
            
            redirect("admin");
        }else if($username == $db_username && $user_password == $db_user_password && $db_user_status == 0){
            $_SESSION['username'] = $db_username;
            $_SESSION['user_password'] = $db_user_password;
            $_SESSION['user_firstname'] = $db_user_firstname;
            $_SESSION['user_lastname'] = $db_user_lastname;
            $_SESSION['user_email'] = $db_user_email;
            $_SESSION['user_status'] = $db_user_status;
                  
            redirect("profile.php");
        }
        else{
            redirect("login.php");
        }
    }
}


//REGISTER USER FUNCTION
function register_user(){

    if(isset($_POST['register'])){
        $username = escape_string($_POST['username']);
        $user_firstname = escape_string($_POST['user_firstname']);
        $user_lastname = escape_string($_POST['user_lastname']);
        $user_email = escape_string($_POST['user_email']);
        $user_password = escape_string($_POST['user_password']);

        $hash = password_hash($user_password, PASSWORD_DEFAULT );

		$query = query("SELECT * FROM users WHERE user_email = '{$user_email}' ");

		$count = mysqli_num_rows($query);

        //check if email already exists
		if($count != 0){
			set_message("Email already exists, kindly sign up with a different email.");
            redirect("register.php");
		}else{
            if(strlen($user_password) < 8){
                set_message("Password must be at least 8 characters.");
                redirect("register.php");
            }else{
                $query = query("INSERT INTO users(username, user_firstname, user_lastname, user_email, user_password, user_status) VALUES('{$username}', '{$user_firstname}', '{$user_lastname}', '{$user_email}', '{$user_password}', 0) ");
                confirm($query);
                set_message("Registeration Successful, please login to continue");
                redirect("login.php");
            }
        }
    }
}

function send_message(){
    if(isset($_POST['submit'])){
        $to = "fashyemitte@gmail.com";
        $form_name = $_POST['name'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $headers = "From: {$form_name} {$email} ";

        $result = mail($to, $subject, $message, $headers);

        if(!$result){
            echo "ERROR";
        }else{
            echo "SENT";
        }
    }
}



/***********************BACK END FUNCTIONS **************************/

//DISPLAY ORDERS FROM ORDERS TABLE FUCNTION
function display_orders(){
    $query = query("SELECT * FROM orders");
    confirm($query);

    while($row = fetch_array($query)){
        $orders = <<<DELIMETER

        <tr>
            <td>{$row['order_id']}</td>
            <td>{$row['order_amount']}</td>  
            <td>{$row['order_transaction']}</td>
            <td>{$row['order_currency']}</td>
            <td>{$row['order_status']}</td>
            <td><a class="btn btn-danger" href="../../resources/templates/back/delete_order.php?id={$row['order_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>

        DELIMETER;

        echo $orders;

    }
}

//DISPLAY IMAGE FUNCTION
function display_image($picture){
    global $upload_directory;

    return $upload_directory . DS . $picture;
}

//DISPLAY PRODUCTS FROM PRODUCT TABLE FUNCTION
function get_products_in_admin(){

    $query = query(" SELECT * FROM products ");
    confirm($query);

    while($row = fetch_array($query)){

        $category = show_product_category_title($row['product_category_id']);
        
        $product_image = display_image($row['product_image']);
        
        $product = <<<DELIMETER

        <tr>
            <td>{$row['product_id']}</td>
            <td>{$row['product_title']}</br>
                <a href="index.php?edit_product&id={$row['product_id']}"><img width="100" src="../../resources/uploads/{$product_image}" alt="{$row['product_title']}"></a>
            </td>  
            <td>{$category}</td>
            <td>{$row['product_price']}</td>
            <td>{$row['product_quantity']}</td>
            <td><a class="btn btn-danger" href="../../resources/templates/back/delete_product.php?id={$row['product_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>

DELIMETER;

        echo $product;
    }

}

//RELATING CATEGORIES AND PRODUCTS TABLE
function show_product_category_title($product_category_id){
    $category_query = query("SELECT * FROM categories WHERE cat_id = '{$product_category_id}' " );
    confirm($category_query);

    while($category_row = fetch_array($category_query)){
        return $category_row['cat_title'];
    }
}

//ADDING PRODUCTS IN ADMIN TO PRODUCT TABLE FUNCTION
function add_product(){
    if(isset($_POST['publish'])){
        $product_title = escape_string($_POST['product_title']);
        $product_category_id = escape_string($_POST['product_category_id']);
        $product_price = escape_string($_POST['product_price']);
        $product_description = escape_string($_POST['product_description']);
        $product_short_desc = escape_string($_POST['product_short_desc']);
        $product_quantity = escape_string($_POST['product_quantity']);
        $product_image = escape_string($_FILES['file']['name']);
        $image_temp_location = escape_string($_FILES['file']['tmp_name']);


        move_uploaded_file($image_temp_location, UPLOAD_FOLDER . DS . $product_image);

        $query = query("INSERT INTO products(product_title, product_category_id, product_price, product_description, product_short_desc, product_quantity, product_image) VALUES('{$product_title}', '{$product_category_id}', '{$product_price}', '{$product_description}', '{$product_short_desc}', '{$product_quantity}', '{$product_image}')");
        $last_id = last_id();
        confirm($query);    
        set_message("Product with ID {$last_id} added");
        redirect("index.php?products");
        

    }
}

//GET CATEGORIES IN ADD_PRODUCTS IN ADMIN FUNCTION
function get_categories_add_product(){
    $query = query("SELECT * FROM categories");
    confirm($query);

    while($row = fetch_array($query)){

        $category_options = <<<DELIMETER

        <option value="{$row['cat_id']}">{$row['cat_title']}</option>
        
DELIMETER;

echo $category_options;

    }
}

//UPDATE PRODUCTS IN ADMIN FUNCTIONS
function update_product(){
    if(isset($_POST['update'])){
        $product_title = escape_string($_POST['product_title']);
        $product_category_id = escape_string($_POST['product_category_id']);
        $product_price = escape_string($_POST['product_price']);
        $product_description = escape_string($_POST['product_description']);
        $product_short_desc = escape_string($_POST['product_short_desc']);
        $product_quantity = escape_string($_POST['product_quantity']);
        $product_image = escape_string($_FILES['file']['name']);
        $image_temp_location = escape_string($_FILES['file']['tmp_name']);

        if(empty($product_image)){
            $get_picture = query("SELECT product_image FROM products WHERE product_id = " . escape_string($_GET['id'] . " "));
            confirm($get_picture);

            while($pic = fetch_array($get_picture)){
                $product_image = $pic['product_image'];
            }
        }


        move_uploaded_file($image_temp_location , UPLOAD_DIRECTORY . DS . $product_image);

        $query = "UPDATE products SET ";
        $query .= "product_title = '{$product_title }', ";
        $query .= "product_category_id = '{$product_category_id }', ";
        $query .= "product_price = '{$product_price }', ";
        $query .= "product_description = '{$product_description }', ";
        $query .= "product_short_desc = '{$product_short_desc }', ";
        $query .= "product_quantity = '{$product_quantity }', ";
        $query .= "product_image = '{$product_image }' ";
        $query .= "WHERE product_id=" . escape_string($_GET['id']);
        
        $send_update_query = query($query);        
        confirm($send_update_query);
        set_message("Product updated");
        redirect("index.php?products");
        

    }
}

//DISPLAY CATEGORIES IN ADMIN FUNCTION
function display_categories_in_admin(){

    $category_query = query("SELECT * FROM categories");
    confirm($category_query);

    while($row = fetch_array($category_query)){
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];

        $category = <<<DELIMETER
        <tr>
            <td>{$cat_id}</td>
            <td>{$cat_title}</td>
            <td><a class="btn btn-danger" href="../../resources/templates/back/delete_category.php?id={$row['cat_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>
        DELIMETER;

        echo $category;
    }
}

//ADD CATEGORY FUNCTION
function add_category(){
    if(isset($_POST['add_category'])){
        $cat_title = escape_string($_POST['cat_title']);

        if(empty($cat_title) || $cat_title == " "){
            echo "<h4 class='bg-danger'>Title cannot be empty</h4>";
        }else{
        $insert_category = query("INSERT INTO categories(cat_title) VALUES('{$cat_title}') ");
        confirm($insert_category);
        set_message("Category Added");

        }
    }
}

//ADMIN USERS
function display_users(){

    $user_query = query("SELECT * FROM users");
    confirm($user_query);

    while($row = fetch_array($user_query)){
        $user_id = $row['user_id'];
        $username = $row['username'];
        $user_email = $row['user_email'];
        $user_password = $row['user_password'];

        $category = <<<DELIMETER
        <tr>
            <td>{$user_id}</td>
            <td>{$username}
                <div class="action_links">
                    <a href="#">Delete</a>
                    <a href="#">Edit</a>
                </div>
            </td>                               
            <td>{$user_email}</td>
            <td>Olayemi</td>
            <td><a class="btn btn-danger" href="../../resources/templates/back/delete_user.php?id={$row['user_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>
        DELIMETER;

        echo $category;
    }
}

//ADD USERS IN ADMIN
function add_user(){
    
    if(isset($_POST['add_user'])){
        $username = escape_string($_POST['username']);
        $user_email = escape_string($_POST['user_email']);
        $user_password = escape_string($_POST['user_password']);
        // $user_photo = escape_string($_FILES['file']['name']);
        // $photo_temp = escape_string($_FILES['file']['tmp_name']);
        
        // move_uploaded_file($photo_temp, UPLOAD_DIRECTORY . DS. $user_photo);

        $query = query("INSERT INTO users(username, user_email, user_password, user_status) VALUES('{$username}', '{$user_email}', '{$user_password}', 1) ");
        confirm($query);

        set_message("Admin created");
        redirect("index.php?users");

        
    }
}

//GET REPORTS FUNCTION
function get_reports(){

    $query = query(" SELECT * FROM reports ");
    confirm($query);

    while($row = fetch_array($query)){        
        
        $report = <<<DELIMETER

        <tr>
            <td>{$row['report_id']}</td>
            <td>{$row['product_id']}</td>
            <td>{$row['order_id']}</td>
            <td>{$row['product_price']}</td>
            <td>{$row['product_title']}</td>              
            <td>{$row['product_quantity']}</td>
            <td><a class="btn btn-danger" href="../../resources/templates/back/delete_report.php?id={$row['report_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>

DELIMETER;

        echo $report;
    }

}

/********************************* NORMAL USER'S PROFILE ***********************************/

//UPDATE USER'S INFORMATION IN PROFILE FUNCTIONS(CURRENTLY NOT IN USE, SAME CODE IN USE IN PROFILE.PHP)
function update_profile(){

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
        

    }


function show_user_icon(){
    if(!isset($_SESSION['username'])){
    
    $user_icon = <<<DELIMETER

     <div class="acc-desk">
        <div class="user-icon">
            <span><a href="login.php"><i class="icon-user"></i></a></span>
        </div>
    </div>
    <div class="acc-mob">
        <a href="login.php" class="user-icon">
            <span><i class="icon-user"></i></span>
        </a>
    </div>
    
    DELIMETER;

    return $user_icon;
    
    }else{
        $user_icon2 = <<<DELIMETER

         <div class="acc-desk">
            <div class="user-icon">
                <span><a href="profile.php"><i class="icon-user"></i></a></span>
            </div>
        </div>
        <div class="acc-mob">
            <a href="profile.php" class="user-icon">
                <span><i class="icon-user"></i></span>
            </a>
        </div>
        
        DELIMETER;

        return $user_icon2;
    }
}

?>