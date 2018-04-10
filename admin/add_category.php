<?php include "includes/header.php";?>


<?php
    $db=new Database();
if(isset($_POST['submit'])){
        //Assign Variables
        $name=mysqli_real_escape_string($db->link,$_POST['name']);
        //Simple Validation
        if($name==''){
            //set Error
            $error='Please fill out all required fields';
        }else{
            $query="INSERT INTO categories (name) VALUES('$name')";
            $insert_row=$db->insert($query);
        }
        
    }
?>

<form role="form" action="add_category.php" method="post">
    <div class="form-group">
        <label>Category Name</label>
        <input type="text" class="form-control" placeholder="Enter Category" name="name">
    </div>
    <div>
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
    <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
    <br>
</form>


<?php include "includes/footer.php";?>