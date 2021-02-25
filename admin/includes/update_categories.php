<form action="" method="post">
    <div class="form-group">
        <label for="cat-title">Edit Category</label>
            <?php
                
                if(isset($_GET['edit'])){

                    $cat_id = $_GET['edit'];
                    $query = "SELECT * FROM categories WHERE cat_id = {$cat_id} ";
                    $select_categories = mysqli_query($connection,$query);

                    while ($row = mysqli_fetch_assoc($select_categories)) {
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];
            ?>
                    <input value="<?php if(isset($cat_title)) {echo $cat_title;} ?>" type="text" name="cat_title" class="form-control">
                    <?php
                            }
                        }  
                    ?>
            <?php
                    if (isset($_POST['update_category'])) {
                    $the_cat_title = $_POST['cat_title'];

                    $query = "UPDATE categories SET cat_title = '{$the_cat_title}' WHERE cat_id = {$cat_id} ";
                    $update_query = mysqli_query($connection,$query);
                    if (!$update_query) {
                        die('Query Failed'.mysqli_error($connection));
                    }
                }

            ?>
    </div>
    <div class="form-group">
        <?php
                
            // if(isset($_POST['Update_Category'])){

            //     $cat_id = $_GET['edit'];
            //     $cat_title = $_POST['cat_title'];
            //     $query = "UPDATE SET cat_title($cat_title) = $cat_title WHERE cat_id = {$cat_id} ";
            //     $select_categories = mysqli_query($connection,$query);

            //     while ($row = mysqli_fetch_assoc($select_categories)) {
            //         $cat_id = $row['cat_id'];
            //         $cat_title = $row['cat_title'];
        ?>
                
        <?php
            //     }
            // }  
        ?>
        <input type="submit" name="update_category" class="btn btn-primary" value="Update Category">
    </div>
</form>