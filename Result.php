<?php
  include("includes/db.php");
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
body {
  background-image: url('images/l1.jpg');
  width:100%;
  height:100%;
}
</style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">
    <title> 
            Result 
        </title> 
          
        <!-- add icon link -->
        <link rel = "icon" href = "images\Nirma_University_Logo (1).png" type = "image/x-icon"> 
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
<div class="middle" style="padding-top: 50px;padding-left: 10%;padding-right: 10%;">
<div class="card">
<?php 

          if(isset($_GET['search']))

            $keywords = $_GET['keywords'];
            ?>
    <h1 style="color:#4285F4;" class="card-header text-left">Showing Results for &nbsp;"<?php echo $keywords; ?>"</h1>
    <div class="card-body">
      <div id="table" class="table-editable">
        <table class="table table-bordered table-responsive-md table-striped text-center" style="border:none;">
          <!--<thead>
            <tr>
              <th class="text-center">Image</th>
              <th class="text-center">Article Name</th>
              <th class="text-center">Date</th>
              <th class="text-center">Author</th>
              <th class="text-center">Publication</th>
              <th class="text-center">Magazine</th>
              <th class="text-center">Available At</th>
              <th class="text-center">Page</th>
              <th class="text-center">Content</th>
            </tr>
          </thead>-->
         <?php 

          if(isset($_GET['search']))

            $keywords = $_GET['keywords'];
            $get_article = "select article.article_id,article.name,article.date,author.Name,Publication.P_Name,article.image,article.Content,article.Page_no,article.keywords,magazine.M_Name,magazine.M_ID,institute.I_Name from article left join author ON article.Author_ID=author.Author_ID join Publication Publication on article.Publication_ID=Publication.Publication_ID join magazine magazine ON article.M_ID=magazine.M_ID join institute institute ON article.institute_id=institute.institute_id where article.keywords like '%$keywords%'";
            
            $run_article = mysqli_query($con,$get_article) or die("Error: ".mysqli_error($con));            
            while($row_article=mysqli_fetch_array($run_article))
            {
              $Article_id = $row_article['article_id'];
              $Article_name = $row_article['name'];
              $Name = $row_article['Name'];
              $P_Name = $row_article['P_Name'];
              $image = $row_article['image'];
              $Content = $row_article['Content'];
              $Page_no = $row_article['Page_no'];              
              $M_Name = $row_article['M_Name'];
              $M_id = $row_article['M_ID'];
              $date = $row_article['date'];
              $I_Name = $row_article['I_Name'];

          ?>
              <td class="pt-3-half" contenteditable="false" style="border:none;"><?php echo "<img src='$image' width='auto' height='400' /> "; ?></td>  
              
              
              <td class="pt-3-half" contenteditable="false" style="width:50%;border:none;">
              <ul class="list-group" style="list-style-type: disc;">
              <li class="list-group-item list-group-item-light"><b>Article Name:</b>&nbsp;<?php echo $Article_name; ?></li>
              <li class="list-group-item list-group-item-light"><b>Date:</b>&nbsp;<?php echo $date; ?></li>
              <li class="list-group-item list-group-item-light"><b>Author:</b>&nbsp;<?php echo $Name; ?></li>
              <li class="list-group-item list-group-item-light"><b>Publication:</b>&nbsp;<?php echo $P_Name; ?></li>
              <li class="list-group-item list-group-item-light"><b>Magazine:</b>&nbsp;<a href="MagazineResult.php?MagazineResult=<?php echo $M_id; ?>"><?php echo $M_Name; ?></a></li>
              <li class="list-group-item list-group-item-light"><b>Available At:</b>&nbsp;<?php echo $I_Name; ?></li>
              <li class="list-group-item list-group-item-light"><b>Page:</b>&nbsp;<?php echo $Page_no; ?></li>
              <li class="list-group-item list-group-item-light"><b>Content:</b>&nbsp;<?php echo $Content; ?>
              </ul>
              </td></li>
              
            </tr>
            <?php }
            ?>
            
          <tbody>            
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Editable table -->

    
</div>



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
