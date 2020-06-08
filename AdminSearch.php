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
AdminSearch        </title> 
        <script>
        $(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});

        </script>
          
<style>
table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
  bottom: .5em;
}
</style>

        <!-- add icon link -->
        <link rel = "icon" href = "images\Nirma_University_Logo (1).png" type = "image/x-icon"> 
  </head>
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
                  <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
              </li>
          </ul>
        </nav>
        <!--/.Navbar--></div>
  </div>
</div>
<!--Middle-->
<div class="middle" style="padding-top: 50px;padding-left: 1%;padding-right: 1%;width:100%;" >
<div class="card">
    <h3 class="card-header text-center float-center font-weight-bold text-uppercase py-4">Search Results
    <form class="form-inline my-2 my-lg-0 ml-auto float-right" method="get" action="AdminSearch.php">
    <span class="table-add float-right mb-3 mr-2">
      <input class="form-control" type="search" placeholder="Search" name="keywords"aria-label="Search"/></span>
      <span class="table-add float-right mb-3 mr-2">
      <input class="btn btn-primary float-right btn-md my-2 my-sm-0 ml-3" type="submit" name="search" value="Search"/>
      </span>
      
      </form>
    
    
    
    </h3>
    <div class="card-body">
      <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2">

        <a href="InsertArticle.php" name="insertauthor" class="text-success">
        <i class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
        <table class="table table-bordered table-responsive-md table-striped text-center">
          <thead>
            <tr>
              <th class="text-center">Article_ID</th>
              <th class="text-center">Image</th>
              <th class="text-center">Article Name</th>
              <th class="text-center">Date</th>
              <th class="text-center">Author</th>
              <th class="text-center">Publication</th>
              <th class="text-center">Magazine</th>
              <th class="text-center">Available At</th>
              <th class="text-center">Page</th>
              <th class="text-center">Content</th>
              <th class="text-center">Key-Words</th>
              <th class="text-center">Update</th>
              <th class="text-center">Remove</th>
            </tr>
          </thead>
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
              $keywords = $row_article['keywords'];
              $M_id = $row_article['M_ID'];
              $date = $row_article['date'];
              $I_Name = $row_article['I_Name'];

          ?>
              <td class="pt-3-half" contenteditable="false"><?php echo $Article_id; ?></td>
              <td class="pt-3-half" contenteditable="false"><?php echo "<img src='$image' width='180' height='180' /> "; ?></td>  
              <td class="pt-3-half" contenteditable="false" style="width:10%"><?php echo $Article_name; ?></td>
              <td class="pt-3-half" contenteditable="false" style="width:10%"><?php echo $date; ?></td>
              <td class="pt-3-half" contenteditable="false"><?php echo $Name; ?></td>
              <td class="pt-3-half" contenteditable="false"><?php echo $P_Name; ?></td>
              <td class="pt-3-half" contenteditable="false"><a href="MagazineResult.php?MagazineResult=<?php echo $M_id; ?>"><?php echo $M_Name; ?></a></td>
              <td class="pt-3-half" contenteditable="false"><?php echo $I_Name; ?></td>
              <td class="pt-3-half" contenteditable="false"><?php echo $Page_no; ?></td>
              <td class="pt-3-half" contenteditable="false"><?php echo $Content; ?></td>
              <td class="pt-3-half" contenteditable="false"><?php echo $keywords; ?></td>

              <td class="pt-3-half">
                <span class="table-down"><a type="button" href="updateArticle.php?updateArticle=<?php echo $Article_id; ?>" name="updateArticle" class="indigo-text"><i class="far fa-edit" style="color:green;"></i></a></span>
              </td>
              <td>
                <span class="table-remove"><a type="button" href="delete_article.php?delete_article=<?php echo $Article_id; ?>" name="remove"
                    class="btn btn-danger btn-rounded btn-sm my-0">Remove</a></span>
              </td>
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
