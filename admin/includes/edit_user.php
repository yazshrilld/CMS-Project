<?php
if (isset($_GET['edit_user'])) {
    $the_user_id = $_GET['edit_user'];

    $query = "SELECT * FROM users WHERE user_id = $the_user_id";
    $select_users = mysqli_query($connection,$query);
    confirmQuery($select_users);

    while ($row = mysqli_fetch_assoc($select_users)) {
        $user_id = $row['user_id'];
        $username = $row['username'];
        $user_password = $row['user_password'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_email = $row['user_email'];
        $user_image = $row['user_image'];
        $user_role = $row['user_role'];
    }

    if (isset($_POST['edit_user'])) {

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

        $query = "SELECT randSalt FROM users";
        $select_randSalt_query = mysqli_query($connection, $query);
        confirmQuery($select_randSalt_query);

        $row = mysqli_fetch_array($select_randSalt_query);
        $salt = $row['randSalt'];
        $hashed_password = crypt($user_password, $salt);

        $query = "UPDATE users SET ";
        $query .= "user_firstname       = '{$user_firstname}', ";
        $query .= "user_lastname        = '{$user_lastname}', ";
        $query .= "user_role            = '{$user_role}', ";
        $query .= "username             = '{$username}', ";
        $query .= "user_email           = '{$user_email}', ";
        $query .= "user_password        = '{$hashed_password}' ";
        $query .= "WHERE user_id        = {$the_user_id} ";

        $edit_user_query = mysqli_query($connection,$query);
        confirmQuery($edit_user_query);

    }
}
    
?>

<!-- hello -->

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
            <option value='<?php echo $user_role; ?>'><?php echo $user_role; ?></option>
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
        <input type="submit" name="edit_user" class="btn btn-primary" value="Update User" id="">
    </div>
</form>