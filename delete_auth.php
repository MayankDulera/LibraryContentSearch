<?php
include("includes/db.php");

if(isset($_GET['delete_auth']))
{
        $delete_id=$_GET['delete_auth'];
        $delete_auth = "delete from author where Author_ID='$delete_id'";
        $run_delete=mysqli_query($con,$delete_auth) or die("Error: ".mysqli_error($con));

        if($run_delete)
        {
            echo "<script>alert('Author has been deleted!')</script>";
            echo "<script>window.open('Author.php','_self')</script>";
        }
}

?>
