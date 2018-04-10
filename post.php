<?php include "includes/header.php";?>
<?php 
    //Create DB Object
    $db=new Database();
    
    $id=$_GET['id'];
    //Create query
    $query="SELECT * FROM post WHERE id=".$id;

    //Run Query
    $post=$db->select($query)->fetch_assoc();
    //Create query
    $query="SELECT * FROM categories";

    //Run Query
    $categories=$db->select($query);

?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $post['title'];?></h2>
            <p class="blog-post-meta"><?php echo formatDate($post['date']); ?> by <a href="#"><?php echo $post['author'];?></a></p>
           <?php echo $post['body'];?>
            </div><!-- /.blog-post -->
<?php include "includes/footer.php";?>