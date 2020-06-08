<?php
@session_start();
include("includes/db.php");
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">
    <title> 
            Updating...Author 
        </title> 
          
        <!-- add icon link -->
        <link rel = "icon" href = "images\Nirma_University_Logo (1).png" type = "image/x-icon">   </head>
  <body>
<div class="header" style="height: 100px;width: 1500px;">
  <div class="row">
    <div class="col-md-12"><!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark primary-color navbar" style="height: 100px;width: 1535px;">
          <!-- Collapse button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <!-- Collapsible content -->
          <div class="collapse navbar-collapse" id="basicExampleNav">
        
            <!-- Links -->
            
        
            <ul class="navbar-nav mr-auto my-2 my-lg-0 ml-auto " style="padding-left: 900px;">

<li class="nav-item active">
                      <a class="nav-link" href="Admin.php">Home
                        <span class="sr-only">(current)</span>
                      </a>
                    </li>&nbsp;
                    <li class="nav-item active">
                      <a class="nav-link" href="Author.php">Author
                        <span class="sr-only">=</span>
                      </a>
                    </li>&nbsp;
                    <li class="nav-item active">
                      <a class="nav-link" href="Article.php">Article
                        <span class="sr-only">=</span>
                      </a>
                    </li>&nbsp;
                    <li class="nav-item active">
                      <a class="nav-link" href="Publication.php">Publication
                        <span class="sr-only">=</span>
                      </a>
                    </li>&nbsp;
                    <li class="nav-item active">
                      <a class="nav-link" href="Magazine.php">Magazine
                        <span class="sr-only">=</span>
                      </a>
                    </li>
                  </ul>
                  <?php


                  ?>
          <!-- Collapsible content -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false" style="color: white;"><i class="fas fa-user-alt fa-2x" ></i></br>
                  <?php
                    if(!isset($_SESSION['Email']))
                    {
                      echo "<b>User</b>";
                    }
                    else
                    {
                      echo "<b>". $_SESSION['Email'] ."</br>";
                    }
                  ?>
                  </a>
                <div class="dropdown-menu dropdown-primary dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
              </li>
          </ul>
        </nav>
        <!--/.Navbar--></div>
  </div>
</div>
<!--Middle-->
<div class="middle" style="padding-top: 50px;padding-left: 10%;padding-right: 10%;" >
<!-- Editable table -->
<div class="card">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Author table</h3>
    <div class="card-body">
      <div id="table" class="table-editable">
        <span class="table-add float-right mb-3 mr-2"><a href="InsertAuthor.php" name="insertauthor" class="text-success">
        <i class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
        <table class="table table-bordered table-responsive-md table-striped text-center">
          <thead>
            <tr>
              <th class="text-center">AthorID</th>
              <th class="text-center">Author Name</th>
              <th class="text-center">Update</th>
            </tr>
          </thead>
         
          <tbody>
          
            <tr>
            <?php 
          include("includes/db.php");
          if(isset($_GET['updateAuthor']))
          {
            $edit_ID = $_GET['updateAuthor'];
            $get_auth = "select * from author where Author_ID='$edit_ID'";
            $run_auth = mysqli_query($con,$get_auth);
            $row_auth=mysqli_fetch_array($run_auth);
            $Author_ID=$row_auth['Author_ID'];
            $Name = $row_auth['Name'];  
          }
           ?>
              <td class="pt-3-half" contenteditable="true"><?php echo $edit_ID; ?></td>
              <td class="pt-3-half" contenteditable="true">
              <form class="text-center" method="post">
              <input type="text" name="AuthorName" value="<?php echo $Name; ?>" id="mname" class="form-control">
              </td>
              <td class="pt-3-half">
                <input type="submit" name="updateAuthor" value="Update" class="btn btn-primary btn-rounded btn-sm my-0">
              </td>
              </form>
              
            </tr>
            
            <?php         
     if(isset($_POST['updateAuthor']))
  {
    $AName = $_POST['AuthorName'];
    $update_author = "update author set Name='$AName' where Author_ID='$Author_ID'";
    $run_update = mysqli_query($con,$update_author) or die("Error: ".mysqli_error($con));
    if($run_update)
    {
        echo "<script>alert('Author has Been Updated')</script>";
        echo "<script>window.open('Author.php','_self')</script>";
    }
  }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Editable table -->

    
</div>
<!--Middle-->




<div class="footer" style="padding-top:130px;"  style="height: 100px;">

<!-- Footer -->
<footer class="page-footer font-small" style="background-color: #4285F4;">

    <!-- Footer Elements -->
    <div class="container"  style="height: 100px;">
  
      <!-- Grid row-->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-12 py-6">
          <div class="mb-5 flex-center">
  
            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Pinterest-->
            <a class="pin-ic">
              <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
            </a>
          </div>
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row-->
  
    </div>
    <!-- Footer Elements -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/"> www.LCS.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->

</div>




    <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
  </body>
</html>
