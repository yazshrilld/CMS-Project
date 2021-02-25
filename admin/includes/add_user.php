<?php
    if (isset($_POST['create_user'])) {

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

        $query = "INSERT INTO users(user_firstname,user_lastname,user_role,username,user_email,user_password) ";
        $query.= "VALUES('{$user_firstname}','{$user_lastname}','{$user_role}','{$username}','{$user_email}','{$user_password}')";

        $create_user_query = mysqli_query($connection,$query);

        confirmQuery($create_user_query);
        echo "User Created : " . " " . " <a href='users.php'>View Added User On Admin Table</a>" . "<br />";
        echo "<br />";

    }
?>

<!-- hello -->

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="author">First Name</label>
        <input type="text" name="user_firstname" class="form-control" id="">
    </div>
    <div class="form-group">
        <label for="post_status">Last Name</label>
        <input type="text" name="user_lastname" class="form-control" id="">
    </div>
    <div class="form-group">
        <select name="user_role" id="">
            <option value="subscriber">Select Options</option>
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>
        </select>
    </div>
    <div class="form-group">
        <label for="author">Username</label>
        <input type="text" name="username" class="form-control" id="">
    </div>
    <div class="form-group">
        <label for="post_status">Email</label>
        <input type="email" name="user_email" class="form-control" id="">
    </div>
    <!-- <div class="form-group">
        <label for="post_image">Post Image</label>
        <input type="file" name="image">
    </div> -->
    <div class="form-group">
        <label for="post_tags">Password</label>
        <input type="password" name="user_password" class="form-control" id="">
    </div>
   <div class="form-group">
        <input type="submit" name="create_user" class="btn btn-primary" value="Add User" id="">
    </div>
</form>