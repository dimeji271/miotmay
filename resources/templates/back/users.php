<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Users
                </h1>

                <a href="index.php?add_user" class="btn btn-primary">Add an admin</a>

                <div class="col-md-12">
                    <h4 class="bg-success"><?php display_message(); ?> </h4>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Last Name</th>
                            </tr>
                        </thead>

                        <tbody>                            
                            <?php display_users(); ?>                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>