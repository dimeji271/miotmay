<?php require_once("config.php"); ?>

<?php 

if(isset($_GET['add'])){

    $query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['add']) . " ");
    confirm($query);

    while($row = fetch_array($query)){

        if($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]){
            $_SESSION['product_' . $_GET['add']]+=1;
            redirect("../public/cart.php");
        }else{
            set_message("Only " . $row['product_quantity'] . " " . "{$row['product_title']}" . " are available");
            redirect("../public/cart.php");
        }
    }

    // $_SESSION['product_' . $_GET['add']] +=1;
    // redirect("index.php");
}

if(isset($_GET['remove'])){
    $_SESSION['product_' . $_GET['remove']]--;
    if($_SESSION['product_' . $_GET['remove']] < 1){
        unset($_SESSION['item_total']);
        unset($_SESSION['item_quantity']);

        redirect("../public/cart.php");
    }else{
        redirect("../public/cart.php");
    }
}


if(isset($_GET['delete'])){
    $_SESSION['product_' . $_GET['delete']] = '0';
    unset($_SESSION['item_total']);
    unset($_SESSION['item_quantity']);

    redirect("../public/cart.php");

}


function cart(){

    $total = 0;
    $item_quantity = 0;
    $item_name = 1;
    $item_number = 1;
    $amount = 1;
    $quantity = 1;

    foreach($_SESSION as $name => $value){

        if($value > 0){

            if(substr($name, 0, 8 ) == "product_"){

                $length = strlen($name) - 8;

                $id = substr($name, 8 , $length);

                $query = query("SELECT * FROM products WHERE product_id = " . escape_string($id) . " ");
                confirm($query);
    
                while($row = fetch_array($query)){

                    $sub = $row['product_price'] * $value;
                    $item_quantity += $value;
    
                    $product = <<<DELIMETER
    
                    <div class="cart-all-pro">
                        <div class="cart-pro">
                            <div class="cart-pro-image">
                                <a href="product.php"><img src="image/cart-page/cart-1/image1.jpg" class="img-fluid" alt="image"></a>
                            </div>
                            <div class="pro-details">
                                <h4><a href="product.php">{$row['product_title']}</a></h4>
                                <span class="pro-size"><span class="size">Size:</span> 5kg</span>
                                <span class="pro-shop">Petro-demo</span>
                                <span class="cart-pro-price">&#36;{$row['product_price']}</span>
                            </div>
                        </div>
                        <div class="qty-item">
                            <div class="center">
                                <div class="plus-minus">
                                    <span>
                                        <a href="../resources/_cart.php?remove={$row['product_id']}" class='btn btn-warning'>-</a>
                                        <input type="text" name="name" value="{$value}">
                                        <a class='btn btn-success' href="../resources/_cart.php?add={$row['product_id']}" >+</a>
                                    </span>
                                </div>                    
                                <a href="../resources/_cart.php?delete={$row['product_id']}" class="pro-remove">Delete</a>
                            </div>
                        </div>
                        <div class="all-pro-price">
                            <span>&#36;{$sub}</span>
                        </div>
                    </div>

                    <input type="hidden" name="item_name_{$item_name}" value="{$row['product_title']}">
                    <input type="hidden" name="item_number_{$item_number}" value="{$row['product_id']}">
                    <input type="hidden" name="amount_{$amount}" value="{$row['product_price']}">
                    <input type="hidden" name="quantity_{$quantity}" value="{$value}">
            
    DELIMETER;
    
    echo $product;

    $item_name++;
    $item_number++;
    $amount++;
    $quantity++;
    
                }

    $_SESSION['item_total'] = $total += $sub;
    $_SESSION['item_quantity'] = $item_quantity;
    
            }
        }

    }

}


function cart_in_checkout(){

    $total = 0;
    $item_quantity = 0;

    foreach($_SESSION as $name => $value){

        if($value > 0){

            if(substr($name, 0, 8 ) == "product_"){

                $length = strlen($name) - 8;

                $id = substr($name, 8 , $length);

                $query = query("SELECT * FROM products WHERE product_id = " . escape_string($id) . " ");
                confirm($query);
    
                while($row = fetch_array($query)){

                    $sub = $row['product_price'] * $value;
                    $item_quantity += $value;
    
                    $product = <<<DELIMETER

                    <li class="order-details">
                        <span><a href="product.php?id={$row['product_id']}">{$row['product_title']} - 50ml × 2</a></span>
                        <span class="check-price">&#36;{$row['product_price']}</span>
                    </li>
            
    DELIMETER;
    
    echo $product;
    
                }

    $_SESSION['item_total'] = $total += $sub;
    $_SESSION['item_quantity'] = $item_quantity;
    
            }
        }

    }

}

function show_button(){
    if(isset($_SESSION['item_quantity'])){
    
    $checkout_button = <<<DELIMETER

    <button type="submit" name="submit" class="btn-style1">Checkout</a>
    
    DELIMETER;

    return $checkout_button;
    
    }
}



function process_transaction(){

    if(isset($_GET['tx'])){

        $amount = $_GET['amt'];
        $currency = $_GET['cc'];
        $transaction = $_GET['tx'];
        $status = $_GET['st'];            

        $total = 0;
        $item_quantity = 0;
    
        foreach($_SESSION as $name => $value){

            if($value > 0){

                if(substr($name, 0, 8 ) == "product_"){

                    $length = strlen($name) - 8;
                    $id = substr($name, 8 , $length);

                    //INSERT INTO ORDER QUERY
                    $send_order = query("INSERT INTO orders (order_amount, order_currency, order_transaction, order_status) VALUES('{$amount}','{$currency}','{$transaction}','{$status}') ");
                    $last_id = last_id();        

                    confirm($send_order);

                    $query = query("SELECT * FROM products WHERE product_id = " . escape_string($id) . " ");
                    confirm($query);
        
                    while($row = fetch_array($query)){

                        $product_price = $row['product_price'];                    
                        $product_title = $row['product_title'];                    
                        $sub = $row['product_price'] * $value;
                        $item_quantity += $value;                    

                        //INSERT INTO REPORTS QUERY
                        $insert_report = query("INSERT INTO reports (product_id, order_id, product_title, product_price, product_quantity) VALUES('{$id}','{$last_id}','{$product_title}','{$product_price}','{$value}') ");
                        confirm($insert_report);
        
                    }

    $total += $sub;
    $item_quantity;
    
            }
        }

    }
    session_destroy();

    }else{
        redirect("index.php");
    }

}


?>