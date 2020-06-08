<?php
include("includes/db.php");

if(isset($_GET['delete_publication']))
{
        $delete_id=$_GET['delete_publication'];
        $delete_auth = "delete from publication where Publication_ID='$delete_id'";
        $run_delete=mysqli_query($con,$delete_auth);

        if($run_delete)
        {
            echo "<script>alert('Publication has been deleted!')</script>";
            echo "<script>window.open('Publication.php','_self')</script>";
        }
}

?>
