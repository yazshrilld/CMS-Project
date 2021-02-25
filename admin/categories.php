<?php  include("includes/admin_header.php"); ?>

    <div id="wrapper">
        <?php  include("includes/admin_navigation.php"); ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Welcome To Admin
                                <small>Author</small>
                            </h1>
                            <div class="col-xs-6">
                                <?php  
                                   insert_categories();
                                ?>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="cat-title">Add Category</label>
                                        <input type="text" name="cat_title" class="form-control">
                                    </div>
                                    <div class="form-group">
                                     <input type="submit" name="submit" class="btn btn-primary" value="Category">
                                    </div>
                                </form>
                                <?php
                                    if (isset($_GET['edit'])) {
                                        $cat_id = $_GET['edit'];
                                        include "includes/update_categories.php";
                                    }
                                ?>
                            </div>
                            <div class="col-xs-6">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Title</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php //TO VIEW THE DATABASE ON CATEGORY PAGE
                                           findAllCategories();

                                            //TO DELETE A RECORD FROM THE CATEGORY PAGE & DATABASE TABLE

                                            deleteCategories();

                                        ?>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        <?php  include("includes/admin_footer.php"); ?>
    