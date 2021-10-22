<?php add_user(); ?>
<section>
    <div class="container">
        <div class="row">
            <h1 class="page-header">
                Add an admin
            </h1>

            <div class="col-md-6 user_image_box">
                <span id="user_admin" class="fa fa-user fa-4x"></span>
            </div>

            <form action="" method="post" enctype="multipart/form-data">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="file" name="file">
                    </div>
                    <div class="form-group">
                        <label for="product-title">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="product-title">Email</label>
                        <input type="text" name="user_email" class="form-control">
                    </div>
                    <!-- <div class="form-group">
                        <label for="product-title">First Name</label>
                        <input type="text" name="first_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="product-title">Last Name</label>
                        <input type="text" name="last_name" class="form-control" value="">
                    </div> -->
                    <div class="form-group">
                        <label for="product-title">Password</label>
                        <input type="password" name="user_password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="add_user" class="btn btn-primary btn-lg" value="Add Admin">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>