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
            Forgot Password!
        </title> 
          
        <!-- add icon link -->
        <link rel = "icon" href = "images\Nirma_University_Logo (1).png" type = "image/x-icon">   </head>
  <body>
<div class="header" style="height: 100px;width: 1500px;">
  <div class="row">
    <div class="col-md-12"><!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark primary-color navbar" style="height: 100px;width: 1536px;">
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
                    </li>
                    </li>&nbsp;
                    <li class="nav-item active">
                      <a class="nav-link" href="Magazine.php">Magazine
                        <span class="sr-only">=</span>
                      </a>
                    </li>&nbsp;
                    <li class="nav-item active">
                      <a class="nav-link" href="Institute.php">Institute
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

  <div class="middle" style="padding-top: 150px;padding-left: 35%;padding-right: 35%;" >

<!-- Material form login -->
<div class="card">

    <h5 class="card-header white-text text-center py-4" style="background-color: #4285F4;">
      <strong>Forgot Password?</strong>
    </h5>
  
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
  
      <!-- Form -->
      <form class="text-center" action='' style="color: #757575;" method="post">
  
        <!-- Email -->
        <div class="md-form">
          <input type="email" name="u_id" id="UserEmail" class="form-control">
          <label for="UserEmail">UserId</label>
        </div>
        <input class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="forgot-password" style="border-radius: 100px;" type="Submit">
      </form>
    </div>
  </div>
</div>


<?php
if(isset($_POST['forgot-password']))
{
    $user_id = $_POST['u_id'];
    $result = mysqli_query($con,"SELECT * FROM users where Email='" .$_POST['u_id'] . "'");
    $row = mysqli_fetch_assoc($result);
    $fetch_user_id=$row['UserID'];
    $email_id=$row['Email'];
	$password=$row['Password'];
	if($user_id==$email_id) {
				$to = $email_id;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: password@studentstutorial.com" . "\r\n" .
                "CC: somebodyelse@example.com";
                mail($to,$subject,$txt,$headers);
			}
				else{
					echo 'invalid userid';
				}
}

?>


<div class="footer" style="padding-top:199px;"  style="height: 100px;width: 1536px;">

<!-- Footer -->
<footer class="page-footer font-small" style="background-color: #4285F4;width: 1535px;">

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