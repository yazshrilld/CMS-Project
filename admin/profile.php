<?php  include("includes/admin_header.php"); ?>
<?php
    if (isset($_SESSION['username'])) {
       $username = $_SESSION['username'];

        $query = "SELECT * FROM users WHERE username = '{$username}'";
        $select_users_profile_query = mysqli_query($connection,$query);
        confirmQuery($select_users_profile_query);

        while ($row = mysqli_fetch_array($select_users_profile_query)) {
            
            $user_id = $row['user_id'];
            $username = $row['username'];
            $user_password = $row['user_password'];
            $user_firstname = $row['user_firstname'];
            $user_lastname = $row['user_lastname'];
            $user_email = $row['user_email'];
            $user_image = $row['user_image'];
            $user_role = $row['user_role'];
        }
    }

    if (isset($_POST['update_user'])) {

        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];
        $user_role = $_POST['user_role'];

        // $post_image = $_FILES['image']['name'];
        // $post_image_temp = $_FILES['image']['tmp_name'];


        $username = $_POST['username'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];

        // $post_date = date('d-m-y');
        $post_comment_count = 4;

        // move_uploaded_file($post_image_temp, "../images/$post_image");

        $query = "UPDATE users SET ";
        $query .= "user_firstname       = '{$user_firstname}', ";
        $query .= "user_lastname        = '{$user_lastname}', ";
        $query .= "user_role            = '{$user_role}', ";
        $query .= "username             = '{$username}', ";
        $query .= "user_email           = '{$user_email}', ";
        $query .= "user_password        = '{$user_password}' ";
        $query .= "WHERE username        = '{$username}' ";

        $edit_user_query = mysqli_query($connection,$query);
        confirmQuery($edit_user_query);

    }
?>

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
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="author">First Name</label>
                                    <input type="text" name="user_firstname" class="form-control" value="<?php echo $user_firstname; ?>" id="">
                                </div>
                                <div class="form-group">
                                    <label for="post_status">Last Name</label>
                                    <input type="text" name="user_lastname" class="form-control" value="<?php echo $user_lastname; ?>" id="">
                                </div>
                                <div class="form-group">
                                    <select name="user_role" id="">
                                        <option value='subscriber'><?php echo $user_role; ?></option>
                                        <?php
                                            if ($user_role == 'Admin') {
                                                echo "<option value='subscriber'>Subscriber</option>";
                                            }
                                            else {
                                                echo "<option value='admin'>Admin</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="author">Username</label>
                                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" id="">
                                </div>
                                <div class="form-group">
                                    <label for="post_status">Email</label>
                                    <input type="email" name="user_email" class="form-control" value="<?php echo $user_email; ?>" id="">
                                </div>
                                <!-- <div class="form-group">
                                    <label for="post_image">Post Image</label>
                                    <input type="file" name="image">
                                </div> -->
                                <div class="form-group">
                                    <label for="post_tags">Password</label>
                                    <input type="password" name="user_password" class="form-control" value="<?php echo $user_password; ?>" id="">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="update_user" class="btn btn-primary" value="Update Profile" id="">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        <?php  include("includes/admin_footer.php"); ?>
    