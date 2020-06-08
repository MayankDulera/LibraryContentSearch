<?php

@session_start();
include("includes/db.php");
?>


<!doctype html>
<html lang="en">
  <head>

  <style>
body {
  background-image: url('images/NUIM-1350x350-010.jpg');
  width:100%;
  height:100%;
}
</style>


<script>
function myFunction() {
  var x = document.getElementById("UserPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
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
            Login 
        </title> 
          
        <!-- add icon link -->
        <link rel = "icon" href = "images\Nirma_University_Logo (1).png" type = "image/x-icon">   </head>
  <body>
<div class="header" style="height: 100px;width: 1500px;">
  <div class="row">
    <div class="col-md-12"><!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark primary-color" style="height: 100px;width: 1519px;">
          <!-- Collapse button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <!-- Collapsible content -->
          <div class="collapse navbar-collapse" id="basicExampleNav">
        
            <!-- Links -->
            
        
            <form class="form-inline my-2 my-lg-0 ml-auto" method="get" action="Result.php">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home
                        <span class="sr-only">(current)</span>
                      </a>
                    </li>
                    
                  </ul>&nbsp;&nbsp;
                  <!-- Links -->
                  <input class="form-control" type="search" placeholder="Search" name="keywords"aria-label="Search"/>
            <input class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit" name="search" value="Search"/>
            </form>
          <!-- Collapsible content -->
        
        </nav>
        <!--/.Navbar--></div>
  </div>
</div>
<!--Middle-->
<div class="middle" style="padding-top: 50px;padding-left: 35%;padding-right: 35%;" >

<!-- Material form login -->
<div class="card">

    <h5 class="card-header white-text text-center py-4" style="background-color: #4285F4;">
      <strong>Sign in</strong>
    </h5>
  
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
  
      <!-- Form -->
      <form class="text-center"  style="color: #757575;" method="post">
  
        <!-- Email -->
        <div class="md-form">
          <input type="email" name="u_id" id="UserEmail" class="form-control">
          <label for="UserEmail">UserId</label>
        </div>
  
        <!-- Password -->
        <div class="md-form">
          <input type="password" name="u_pass" id="UserPassword" class="form-control">
          <label for="UserPassword">Password</label>
        </div>
        <input type="checkbox" onclick="myFunction()">Show Password
        <div class="d-flex justify-content-around">
          <div>
          

            <!-- Remember me -->
            <div class="form-check">
            
              <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
              <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
            </div>
          </div>
          <div>
            <!-- Forgot password -->
            <a href="forgotpassword.php">Forgot password?</a>
          </div>
        </div>
  
        <!-- Sign in button -->
        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="u_login" style="border-radius: 100px;" type="submit">Sign in</button>
  
        <!-- Register -->
        <p>Not a member?
          <a href="Register.php">Register</a>
        </p>
  
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
  
      </form>
      <!-- Form -->
  
    </div>
  
  </div>
  <!-- Material form login -->
    
</div>
<!--Middle-->




<div class="footer" style="padding-top:50px;"  style="height: 100px;">

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

<?php
    if(isset($_POST['u_login']))
    {
      $Email =  $_POST['u_id'];
      $Password =  $_POST['u_pass'];
      $pass = md5($Password);

      $sel_user = "select * from users where Email='$Email' AND Password='$pass'";

      $run_user = mysqli_query($con,$sel_user);
      if(mysqli_num_rows($run_user)>0)
      {
        $_SESSION['Email']=$Email;
        echo "<script>window.open('Admin.php','_self')</script>";
      }
      else
      {
        echo "<script>alert('Email or Password is wrong,try again!')</script>" ;
      }


    }
?>