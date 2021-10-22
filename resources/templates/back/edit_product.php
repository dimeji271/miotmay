<?php 

update_product();

if(isset($_GET['id'])){
    $query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . " ");
    confirm($query);

    while($row = fetch_array($query)){
        $product_title = escape_string($row['product_title']);
        $product_category_id = escape_string($row['product_category_id']);
        $product_price = escape_string($row['product_price']);
        $product_description = escape_string($row['product_description']);
        $product_short_desc = escape_string($row['product_short_desc']);
        $product_quantity = escape_string($row['product_quantity']);
        $product_image = escape_string($row['product_image']);

        $product_image = display_image($row['product_image']);
    }
    
    update_product();

}

?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <h1 class="page-header">
                        Edit Product                        
                    </h1>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="col-md-8">
                        <!-- Product Title -->
                        <div class="form-group">
                            <label for="product-title">Product Title</label>
                            <input type="text" name="product_title" class="form-control" value="<?php echo $product_title; ?>">
                        </div>
                        <!-- Product Description -->
                        <div class="form-group">
                            <label for="product-title">Product Description</label>
                            <textarea name="product_description" id="" cols="30" rows="10" class="form-control"><?php echo $product_description; ?></textarea>
                        </div>
                        <!-- Product Short Description -->
                        <div class="form-group">
                            <label for="product-title">Product Short Description</label>
                            <input type="text" name="product_short_desc" id="" cols="30" rows="3" class="form-control" value="<?php echo $product_short_desc; ?>">
                        </div>
                        <!-- Product Price -->
                        <div class="form-group row">
                            <label for="product-title">Product Price</label>
                            <input type="text" name="product_price" cols="10" rows="1" class="form-control" size="60" value="<?php echo $product_price; ?>">
                        </div>
                    </div>
                    <aside id="admin_sidebar" class="col-md-4">
                        <div class="form-group">
                            <input type="submit" name="update" class="btn btn-wprimary btn-lg" value="Update">
                        </div>
                        <hr>
                        <!-- Product Category -->
                        <div class="form-group">
                            <label for="product-title">Product Category</label>                            
                            <select name="product_category_id" id="" class="form-control">
                                <option value="<?php echo $product_category_id; ?>"><?php echo show_product_category_title($product_category_id); ?></option>    
                                <?php get_categories_add_product(); ?>
                            </select>
                        </div>
                        <!-- Product Brand -->
                        <div class="form-group">
                            <label for="product-title">Product Quantity</label>
                            <input type="number" name="product_quantity" class="form-control" value="<?php echo $product_quantity; ?>">
                        </div>
                        <!-- Product Keywords -->
                        <div class="form-group">
                            <label for="product-title">Product Keywords</label>                            
                            <input type="text" name="product_tags" class="form-control">
                        </div>
                        <!-- Product Image -->
                        <div class="form-group">
                            <label for="product-title">Product Image</label>
                            <input type="file" name="file"><br>
                            <img src="../../resources/<?php echo $product_image; ?>" alt="" width="200">
                        </div>
                    </aside>
                </form>
            </div>
        </div>
    </div>
</section>