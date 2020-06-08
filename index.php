<?php
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
            Library Content Search 
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
                    <!-- Dropdown -->
                    &nbsp;&nbsp;   
                    
            <input class="form-control" type="search" placeholder="Search" name="keywords"aria-label="Search"/>
            <input class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit" name="search" value="Search"/>
            </form>&nbsp;&nbsp;

            </ul>
            <a style="color: white;" href="login.php"><i class="fas fa-user-alt fa-2x" ></i><br>Login</a>
                  </div>
          <!-- Collapsible content -->
        
        </nav>
        <!--/.Navbar--></div>
  </div>
</div>
<!--Middle-->
<div class="middle" style="background-color: lightcoral;height: 170px;;width: 1519px;padding-top: 0px;">
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img src="images\l1.jpg" alt="First slide" style="width:100%;height:670px;">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">All Resorces that you need</h3>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="images\library-home.jpg" style="width:100%;height:670px;" alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">35+ Magazines</h3>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="images\NUIM-1350x350-010.jpg" style="width:100%;height:670px;"  alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Everything At One Place</h3>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->



</div>
<!--Middle-->




<div class="footer" style="padding-top:500px;"  style="height: 100px;">
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