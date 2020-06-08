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
            Magazine
        </title> 
          
        <!-- add icon link -->
        <link rel = "icon" href = "images\Nirma_University_Logo (1).png" type = "image/x-icon">   </head>
  <body>
  <div class="header" style="height: 100px;width: 1500px;">
  <div class="row">
    <div class="col-md-12"><!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark primary-color" style="height: 100px;width: 1536px;">
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
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarAuthorLink" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">Author</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarAuthorLink">
                    <?php
                        $get_auths = "select * from author";
                        $run_auths = mysqli_query($con,$get_auths);    
                    while ($row_auths=mysqli_fetch_array($run_auths))
                    {
                      $a_id = $row_auths['Author_ID'];
                      $a_name = $row_auths['Name'];
                          echo "<a class='dropdown-item' href='index.php?author=$a_id'>$a_name</a>";
                    }
                    ?>
                          </div>
                      </li>
                    
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarMagazineLink" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">Magazine</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarMagazineLink">
                        <?php
                        $get_mags = "select * from magazine";
                        $run_mags = mysqli_query($con,$get_mags);    
                    while ($row_mags=mysqli_fetch_array($run_mags))
                    {
                      $m_id = $row_mags['M_ID'];
                      $m_name = $row_mags['M_Name'];
                          echo "<a class='dropdown-item' href='index.php?magazine=$m_id'>$m_name</a>";
                    }
                    ?>
                          </div>
                      </li>
                    
                  
                  <!-- Links -->
                
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
<div class="middle" style="padding-top: 50px;padding-left: 10%;padding-right: 10%;" >
<!-- Editable table -->
<div class="card">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Magazine table</h3>
    <div class="card-body">
      <div id="table" class="table-editable">
        
        <table class="table table-bordered table-responsive-md table-striped text-center">
          <thead>
            <tr>
              <th class="text-center">Magazine Name</th>
              <th class="text-center">Publication Name</th>
              <th class="text-center">Available At</th>
            </tr>
          </thead>
         
          <tbody>
          
            <tr>
            <?php 
          include("includes/db.php");
          if(isset($_GET['MagazineResult']))
          {
            $M_ID=$_GET['MagazineResult'];
            $get_mag = "select magazine.M_ID,magazine.M_Name,publication.P_Name,institute.I_Name from magazine left join publication ON magazine.Publication_ID = publication.Publication_ID join institute institute on magazine.Institute_id=Institute.Institute_id where M_ID='$M_ID'" ;

            $run_mag = mysqli_query($con,$get_mag) or die("Error: ".mysqli_error($con));
            while($row_mag=mysqli_fetch_array($run_mag))
            {
              $M_Name = $row_mag['M_Name'];
              $P_Name = $row_mag['P_Name'];
              $I_Name = $row_mag['I_Name'];
            
           }
          ?>
              <td class="pt-3-half" contenteditable="false"><?php echo $M_Name; ?></td>
              <td class="pt-3-half" contenteditable="false"><?php echo $P_Name; ?></td>
              <td class="pt-3-half" contenteditable="false"><?php echo $I_Name; ?></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Editable table -->

    
</div>
<!--Middle-->




<div class="footer" style="padding-top:165px;"  style="height: 100px;">

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