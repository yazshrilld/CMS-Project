<?php include("includes/header.php"); ?>
<?php include("includes/db.php"); ?>
    <!-- Navigation -->
    <?php include("includes/navigation.php"); ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
             <!-- Blog Entries Column -->
            <div class="col-md-8">
                <?php
                    $query = "SELECT * FROM posts";
                    $select_all_posts_query = mysqli_query($connection,$query);

                    while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                        $post_id = $row['post_id'];
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_status = $row['post_status'];
                        $post_content = substr($row['post_content'],0,100);

                        if ($post_status !== 'published') {
                            echo "";
                        } 
                        else {
                            
                            ?>

                                <h1 class="page-header">Page Heading<small>Secondary Text</small></h1>
                                <!-- First Blog Post -->
                                <h2>
                                    <a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a>
                                </h2>
                                <p class="lead">
                                    by <a href="author_post.php?author=<?php echo $post_author; ?>&p_id=<?php echo $post_id; ?>"><?php echo $post_author; ?></a>
                                </p>
                                <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date; ?></p>
                                <hr>
                                <a href="post.php?p_id=<?php echo $post_id; ?>"><img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="IMAGE">
                                </a>
                                <hr>
                                <p><?php echo $post_content; ?></p>
                                <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a><hr>
                            <?php 
                        } 
                    }    
                ?> 
            </div><!-- Blog Sidebar Widgets Column -->
           
            <?php include("includes/sidebar.php"); ?>
        </div><hr><?php include("includes/footer.php"); ?>
    </div> <!-- though this div is not neccessary, but in case i start having errors, i need to remove it -->