<?php include "includes/header.php";?>
<?php
    $id=$_GET['id'];
    //Create DB Object
    $db=new Database();
    
    //Create Query
    $query="SELECT * FROM categories WHERE id=".$id;
    
    //Run Query
    $categories=$db->select($query)->fetch_assoc();
?>
<?php
    if(isset($_POST['submit'])){
        //Assign Variables
        $name=mysqli_real_escape_string($db->link,$_POST['name']);
        //Simple Validation
        if($name==''){
            //set Error
            $error='Please fill out all required fields';
        }else{
            $query="UPDATE categories SET name='$name' WHERE id=".$id;
            $update_row=$db->update($query);
        }
    }
?>
<?php
    if(isset($_POST['delete'])){
        //Call Delete Method
        $query="DELETE FROM categories WHERE id=".$id;
        $delete_row=$db->delete($query);
    }
?>

<form role="form" action="edit_category.php?id=<?php echo $id;?>" method="post">
    <div class="form-group">
        <label>Category Name</label>
        <input type="text" class="form-control" placeholder="Enter Category" name="name" value="<?php echo $categories['name']; ?>">
    </div>
    <div>
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
    <a href="index.php" class="btn btn-default">Cancel</a>
    <input type="submit" class="btn btn-danger" name="delete" value="Delete" />
    </div>
    <br>
</form>


<?php include "includes/footer.php";?>