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
            Updating...Article 
        </title> 
          
        <!-- add icon link -->
        <link rel = "icon" href = "images\Nirma_University_Logo (1).png" type = "image/x-icon">   </head>
  <body>
<div class="header" style="height: 100px;width: 1500px;">
  <div class="row">
    <div class="col-md-12"><!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark primary-color navbar" style="height: 100px;width: 1519px;">
          <!-- Collapse button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <!-- Collapsible content -->
          <div class="collapse navbar-collapse" id="basicExampleNav">
        
            <!-- Links -->
            
        
            <ul class="navbar-nav mr-auto my-2 my-lg-0 ml-auto " style="padding-left: 930px;">

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
                  <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
              </li>
          </ul>
        </nav>
        <!--/.Navbar--></div>
  </div>
</div>

  <div class="middle" style="padding-top: 50px;padding-left: 35%;padding-right: 35%;" >

<!-- Material form login -->
<div class="card">

    <h5 class="card-header white-text text-center py-4" style="background-color: #4285F4;">
      <strong>Update Article</strong>
    </h5>
  
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
    <?php 
          include("includes/db.php");
          if(isset($_GET['updateArticle']))
          {
            $edit_ID = $_GET['updateArticle'];
            $get_article = "select article.article_id,article.name,author.Name,Publication.P_Name,article.image,article.Content,article.Page_no,article.keywords,magazine.M_Name from article left join author ON article.Author_ID=author.Author_ID join Publication Publication on article.Publication_ID=Publication.Publication_ID join magazine magazine ON article.M_ID=magazine.M_ID AND article.article_id='$edit_ID'";
            $run_article = mysqli_query($con,$get_article) or die("Error: ".mysqli_error($con));            
            $row_article=mysqli_fetch_array($run_article);
              $Article_name = $row_article['name'];
              $Name = $row_article['Name'];
              $P_Name = $row_article['P_Name'];
              $Image = $row_article['image'];
              $Content = $row_article['Content'];
              $Page_no = $row_article['Page_no'];              
              $M_Name = $row_article['M_Name'];
              $keywords = $row_article['keywords'];
          }
          ?>
  
      <!-- Form -->
      <form class="text-center"  style="color: #757575;" method="post">
  
        <!-- Email -->
        <div class="md-form">
          <input type="text" name="Article_name" value ="<?php echo $Article_name;?>" class="form-control">
          <label for="Article_name">Article Name</label>
        </div>
        <div class="input-group">
  <div class="input-group-prepend" >
    <span class="input-group-text" id="inputGroupFileAddon01" style="background:#4285F4;color:white;">Image</span>
  </div>
  <div class="custom-file" >
    <input type="file" class="custom-file-input" name="Article_Image" id="inputGroupFile01" 
      aria-describedby="inputGroupFileAddon01" >
    <label class="custom-file-label" for="inputGroupFile01" >Choose file</label>
  </div>
</div></br>
<select class="custom-select custom-select-sm" name="Author_name">
<option value="Author_name" disabled selected>Author</option>
  <?php 
          include("includes/db.php");

            $get_auth = "select * from author";
            $run_auth = mysqli_query($con,$get_auth);
            while($row_auth=mysqli_fetch_array($run_auth)){
              $Author_ID = $row_auth['Author_ID'];
              $Name = $row_auth['Name'];
              echo  "<option value='$Author_ID'>$Name</option>";
            }
?>
</select></br></br>
<select class="custom-select custom-select-sm" name="Magazine_name">
  <option selected>Magzine</option>
  <?php 
          include("includes/db.php");

            $get_auth = "select * from magazine";
            $run_auth = mysqli_query($con,$get_auth);
            while($row_auth=mysqli_fetch_array($run_auth)){
              $M_ID = $row_auth['M_ID'];
              $M_Name = $row_auth['M_Name'];
              echo  "<option value='$M_ID'>$M_Name</option>";
            }
?>
</select></br></br>
<select class="custom-select custom-select-sm" name="Publication_name">
  <option selected>Publication</option>
  <?php 
          include("includes/db.php");

            $get_publi = "select * from publication";
            $run_publi = mysqli_query($con,$get_publi);
            while($row_publi=mysqli_fetch_array($run_publi)){
              $Publication_ID = $row_publi['Publication_ID'];
              $Name = $row_publi['P_Name'];
              echo  "<option value='$Publication_ID'>$Name</option>";

            }

          ?>

</select></br></br>
<div class="form-group">
  <textarea class="form-control rounded-0" name="wcontent" id="exampleFormControlTextarea2" placeholder="Write content here.." rows="3"><?php echo $Content; ?></textarea>
</div>
<div class="md-form">
          <input type="text" name="Page_no" id="page_no" value ="<?php echo $Page_no;?>" class="form-control">
          <label for="Page_no">Page No</label>
        </div>
        <div class="md-form">
          <input type="text" name="keywords" id="keywords" value ="<?php echo $keywords;?>" class="form-control">
          <label for="keywords">Key-words</label>
        </div>
        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="updateArticle" style="border-radius: 100px;" type="submit">Update</button>
      </form>
    </div>
  </div>
</div>
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
  if(isset($_POST['updateArticle']))
  {
    $Article_name = $_POST['Article_name'];
    $Article_Image = $_POST['image'];
    $Author_name = $_POST['Author_name'];
    $Publication_name = $_POST['Publication_name'];
    $Magazine_name = $_POST['Magazine_name'];
    $wcontent = $_POST['wcontent'];
    $Page_no = $_POST['Page_no'];
    $keywords = $_POST['keywords'];
    $update_article = "update article set name='$Article_name',Author_ID='$Author_name',Publication_ID='$Publication_ID',image='$Article_Image',Content='$wcontent',Page_no='$Page_no',M_ID='$Magazine_name',keywords='$keywords' where article_id='$edit_ID'";
    $run_user=mysqli_query($con,$update_article) or die("Error: ".mysqli_error($con));
     
      $_SESSION['article_id']=$article_id;
      echo "<script>alert('Article Updated Successfilly')</script>";
      echo "<script>window.open('Article.php','_self')</script>";
  }
?>