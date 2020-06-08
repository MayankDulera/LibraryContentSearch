<?php
  @session_start();
  include("includes/db.php");
?>


<!doctype html>
<html lang="en">
  <head>
  <script> 
            function checkPassword(form)
             { 
                password1 = form.Password.value; 
                password2 = form.Cpassword.value; 
  
                if (password1 == '')
                { 
                    alert ("Please enter Password"); 
                    return false; 
                }
                else if (password2 == '') 
                 {
                    alert ("Please enter confirm password"); 
                    return false; 
                 }
                else if (password1 != password2)
                { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                }
              } 
        </script> 
<style>
body {
  background-image: url('images/l1.jpg');
  width:100%;
  height:100%;
}
</style>
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
Register        </title> 
          
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
            
        
            <form class="form-inline my-2 my-lg-0 ml-auto" method="post">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home
                        <span class="sr-only">(current)</span>
                      </a>
                    </li>
                  </ul>&nbsp;&nbsp;
                  <!-- Links -->
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
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
      <strong>Sign Up</strong>
    </h5>
  
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
  
      <!-- Form -->
      <form class="text-center" style="color: #757575;" method="post" onSubmit = "return checkPassword(this)">

        
      <div class="md-form">
          <input type="text" id="materialLoginFormName" class="form-control" name="Fname">
          <label for="materialLoginFormName">FullName</label>
        </div>
  
        <!-- Email -->
        <div class="md-form">
          <input type="email" id="materialLoginFormEmail" class="form-control" name="Email">
          <label for="materialLoginFormEmail">Email</label>
        </div>
        <!-- ContactNumber -->
        <div class="md-form">
          <input type="tel" id="phone" name="ContactNumber" id="materialContactNumber"  class="form-control">
          <label for="materialContactNumber">ContactNumber</label>
        </div>
  
        <!-- Password -->
        <div class="md-form">
          <input type="password" id="materialLoginFormPassword" name="Password" class="form-control">
          <label for="materialLoginFormPassword">Password</label>
        </div>
        <div class="md-form">
          <input type="password" id="materialLoginFormCPassword" class="form-control" name="Cpassword">
          <label for="materialLoginFormCPassword">Confirm Password</label>
        </div>
  
        <!-- Sign Up button -->
        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" style="border-radius: 100px;" name="signup" type="submit">Sign Up</button>
        
        <!-- Social login -->
        <p>or sign in with:</p>
        <a type="button" class="btn-floating btn-fb btn-sm">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a type="button" class="btn-floating btn-tw btn-sm">
          <i class="fab fa-twitter"></i>
        </a>
        <a type="button" class="btn-floating btn-li btn-sm">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a type="button" class="btn-floating btn-git btn-sm">
          <i class="fab fa-github"></i>
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
    if(isset($_POST['signup']))
    {
      $Fname = $_POST['Fname'];
      $Email = $_POST['Email'];
      $ContactNumber = $_POST['ContactNumber'];
      $Password = $_POST['Password'];
      $pass = md5($Password);

      $insert_user = "insert into users(Name,Email,ContactNumber,Password) values('$Fname','$Email','$ContactNumber','$pass')";

      $run_user=mysqli_query($con,$insert_user);
     
      $_SESSION['Email']=$Email;
      echo "<script>alert('Account Created Successfilly')</script>";
      echo "<script>window.open('login.php','_self')</script>";
     
    }
?>

