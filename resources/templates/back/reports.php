<section class="orders">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <h1 class="page-header">
                        All Products
                    </h1>
                    <h4 class="bg-success"><?php display_message(); ?></h4>
                </div>
            </div>
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product ID</th>
                            <!-- <th>Product Name</th> -->
                            <th>Order ID</th>
                            <th>Price</th>
                            <th>Product Title</th>                                                    
                            <th>Item Quantity</th>
                            <!-- <th>Order Date</th> -->
                            <!-- <th>Status</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php get_reports(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>