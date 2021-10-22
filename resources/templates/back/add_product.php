<section>
<?php 

if(isset($_POST['create_post'])){

    $product_title = escape_string($_POST['product_title']);
    $product_category_id = escape_string($_POST['product_category_id']);
    $product_price = escape_string($_POST['product_price']);
    $product_description = escape_string($_POST['product_description']);
    $product_short_desc = escape_string($_POST['product_short_desc']);
    $product_quantity = escape_string($_POST['product_quantity']);
    $post_image = escape_string($_FILES['image']['name']);
    $post_image_temp = escape_string($_FILES['image']['tmp_name']);


    move_uploaded_file($post_image_temp, "../img/$post_image");

    $query = "INSERT INTO products(product_title, product_category_id, product_price, product_description, product_short_desc, product_image, product_quantity) ";

    $query .= "VALUES('{$product_title}','{$product_category_id}','{$product_price}','{$product_description}','{$product_short_desc}','{$post_image}','{$product_quantity}' ) ";

    $create_post_query = mysqli_query($connection, $query);

    confirm($create_post_query);

}



?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <h1 class="page-header">
                        Add Product                        
                    </h1>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="col-md-8">
                        <!-- Product Title -->
                        <div class="form-group">
                            <label for="product-title">Product Title</label>
                            <input type="text" name="product_title" class="form-control">
                        </div>
                        <!-- Product Description -->
                        <div class="form-group">
                            <label for="product-title">Product Description</label>
                            <textarea name="product_description" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <!-- Product Short Description -->
                        <div class="form-group">
                            <label for="product-title">Product Short Description</label>
                            <input type="text" name="product_short_desc" id="" cols="30" rows="3" class="form-control">
                        </div>
                        <!-- Product Price -->
                        <div class="form-group row">
                            <label for="product-title">Product Price</label>
                            <input type="text" name="product_price" cols="10" rows="1" class="form-control" size="60">
                        </div>
                    </div>
                    <aside id="admin_sidebar" class="col-md-4">
                        <div class="form-group">
                            <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">
                            <input type="submit" name="create_post" class="btn btn-wprimary btn-lg" value="Publish">
                        </div>
                        <hr>
                        <!-- Product Category -->
                        <div class="form-group">
                            <label for="product-title">Product Category</label>                            
                            <select name="product_category_id" id="" class="form-control">
                                <option value="">Select Category</option>    
                                <?php get_categories_add_product(); ?>
                            </select>
                        </div>
                        <!-- Product Brand -->
                        <div class="form-group">
                            <label for="product-title">Product Quantity</label>
                            <input type="number" name="product_quantity" class="form-control">
                        </div>
                        <!-- Product Keywords -->
                        <div class="form-group">
                            <label for="product-title">Product Keywords</label>                            
                            <input type="text" name="product_tags" class="form-control">
                        </div>
                        <!-- Product Image -->
                        <div class="form-group">
                            <label for="product-title">Product Image</label>
                            <input type="file" name="image">
                        </div>
                    </aside>
                </form>
            </div>
        </div>
    </div>
</section>