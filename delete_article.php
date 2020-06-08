<?php
include("includes/db.php");

if(isset($_GET['delete_article']))
{
        $delete_id=$_GET['delete_article'];
        $delete_article = "delete from article where article_id='$delete_id'";
        $run_delete=mysqli_query($con,$delete_article) or die("Error: ".mysqli_error($con));

        if($run_delete)
        {
            echo "<script>alert('Article has been deleted!')</script>";
            echo "<script>window.open('Article.php','_self')</script>";
        }
}

?>
