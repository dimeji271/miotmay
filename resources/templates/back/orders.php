<section class="orders">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <h1 class="page-header">
                        All Orders
                    </h1>
                    <h4 class="bg-success"><?php display_message(); ?></h4>
                </div>
            </div>
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <!-- <th>Product Name</th> -->
                            <th>Amount</th>
                            <th>Transaction ID</th>
                            <th>Currency</th>
                            <!-- <th>Invoice Number</th>
                            <th>Order Date</th> -->
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php display_orders(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
