<?php
include("includes/db.php");

if(isset($_GET['delete_Magazine']))
{
        $M_ID=$_GET['delete_Magazine'];
        $delete_Magazine = "delete from magazine where M_ID='$M_ID'";
        $run_delete=mysqli_query($con,$delete_Magazine);

        if($run_delete)
        {
            echo "<script>alert('Magazine has been deleted!')</script>";
            echo "<script>window.open('Magazine.php','_self')</script>";
        }
}

?>
