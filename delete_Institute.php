<?php
include("includes/db.php");

if(isset($_GET['delete_Institute']))
{
        $delete_id=$_GET['delete_Institute'];
        $delete_institute = "delete from institute where Institute_id='$delete_id'";
        $run_delete=mysqli_query($con,$delete_institute);

        if($run_delete)
        {
            echo "<script>alert('Institute has been deleted!')</script>";
            echo "<script>window.open('Institute.php','_self')</script>";
        }
}

?>
