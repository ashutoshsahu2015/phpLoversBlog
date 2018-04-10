<?php include "includes/header.php";?>
<?php
    $id=$_GET['id'];
    //Create DB Object
    $db=new Database();
    
    //Create Query
    $query="SELECT * FROM post where id=".$id;
    
    //Run Query
    $post=$db->select($query)->fetch_assoc();
    
    //Create Query
    $query="SELECT * FROM categories";
    
    //Run Query
    $categories=$db->select($query);
?>
<?php
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
            $query="UPDATE post SET title='$title',body='$body',category='$category',author='$author',tags='$tags' WHERE id=".$id;
            $update_row=$db->update($query);
        }
    }
?>
<?php
    if(isset($_POST['delete'])){
        //Call Delete Method
        $query="DELETE FROM post WHERE id=".$id;
        $delete_row=$db->delete($query);
    }
?>
<form role="form" action="edit_post.php?id=<?php echo $id;?>" method="post">
    <div class="form-group">
        <label>Post Title</label>
        <input type="text" class="form-control" value="<?php echo $post['title'];?>" name="title">
    </div>
    <div class="form-group">
        <label>Post Body</label>
        <textarea type="text" class="form-control" name="body"><?php echo $post['body'];?></textarea>
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
            <option value="<?php echo $row['id'];?>"<?php echo $selected;?>><?php echo $row['name'];?></option>
            <?php endwhile;?> 
        </select>        
    </div>
    <div class="form-group">
        <label>Author</label>
        <input type="text" class="form-control" value="<?php echo $post['author'];?>" name="author">
    </div>
    <div class="form-group">
        <label>Tags</label>
        <input type="text" class="form-control" value="<?php echo $post['tags'];?>" name="tags">
    </div>
    <div>
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
    <a href="index.php" class="btn btn-default">Cancel</a>
    <input type="submit" class="btn btn-danger" name="delete" value="Delete" />
    </div>
    <br>
</form>
<?php include "includes/footer.php";?>