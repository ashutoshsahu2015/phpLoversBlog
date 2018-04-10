<?php include "includes/header.php";?>
<?php
    //Create DB Object
    $db=new Database();

    if(isset($_POST['submit'])){
        //Assign Variables
        $title=mysqli_real_escape_string($db->link,$_POST['title']);
        $body=mysqli_real_escape_string($db->link,$_POST['body']);
        $category=mysqli_real_escape_string($db->link,$_POST['category']);
        $author=mysqli_real_escape_string($db->link,$_POST['author']);
        $tags=mysqli_real_escape_string($db->link,$_POST['tags']);
        //Simple Validation
        if($title==''||$body==''||$category==''||$author==''){
            //set Error
            $error='Please fill out all required fields';
        }else{
            $query="INSERT INTO post (title,body,category,author,tags) VALUES('$title','$body','$category','$author','$tags')";
            
            $insert_row=$db->insert($query);
        }
        
    }
    //Create Query
    $query="SELECT * FROM categories";
    
    //Run Query
    $categories=$db->select($query);
?>

<form role="form" action="add_post.php" method="post">
    <div class="form-group">
        <label>Post Title</label>
        <input type="text" class="form-control" placeholder="Enter Title" name="title">
    </div>
    <div class="form-group">
        <label>Post Body</label>
        <textarea type="text" class="form-control" placeholder="Enter Post Body" name="body"></textarea>
    </div>
    <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="category">
           <?php while($row=$categories->fetch_assoc()):?>
            <?php if($row['id']==$post['category']){
                 $selected='selected';
                }else{
                $selected='';
                } ?>
            <option value="<?php echo $row['id'];?>" <?php echo $selected;?>><?php echo $row['name'];?></option>
            <?php endwhile;?> 
        </select>        
    </div>
    <div class="form-group">
        <label>Author</label>
        <input type="text" class="form-control" placeholder="Enter Author Name" name="author">
    </div>
    <div class="form-group">
        <label>Tags</label>
        <input type="text" class="form-control" placeholder="Enter Title" name="tags">
    </div>
    <div>
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
    <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
    <br>
</form>


<?php include "includes/footer.php";?>