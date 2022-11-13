<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Moodle 2.0</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <style>

   
    </style>
  <body class="p-3 m-0 border-0 bd-example">

  <?php include "about.php" ?>
    <!-- Example Code -->
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Moodle 2.0</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="userinfo.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php">Upcoming Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home Page</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Main Manu
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Updates</a></li>
                <li><a class="dropdown-item" href="#">Holidays</a></li>
                <li><a class="dropdown-item" href="#">Examination</a></li>
                <li><a class="dropdown-item" href="#"> Terms & conditions</a></li>
                <li><a class="dropdown-item" href="#">Gallery</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="report.php" color="text-color-red" >Report</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
      
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="images/intro.jpg" class="card-img-top" alt="..." width="800" height="600"  role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">   </text> 
        </div>
        <div class="carousel-item">
          <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">New Update</text></svg> -->
          <img src="images/img1.jpg" class="card-img-top" alt="..." width="800" height="600"  role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">   </text> 
        </div>
        <div class="carousel-item">
        <img src="images/img2.jpg" class="card-img-top" alt="..." width="800" height="600"  role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">   </text> 
    
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type= "button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <p>

    </p>
  <div>
    <p>
      
    
</p>
<section class="my-5">
    <div class="py-5">
    <h2 class ="text-center">About us</h2>
    </div>
    <div class='container-fluid'>
<div class='row' >
    <div class="col-lg-6 col-md-6 col-12">
    <img src="images/intro.jpg" class="rounded float-left" alt="..." height="300",width="400" >
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4"></h2>
 <p class="display-9"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, quam saepe aliquid nulla illum iusto praesentium ipsa, earum labore magnam excepturi? Eveniet ratione nesciunt ea earum illo tenetur corporis a aliquid consectetur quo esse cum dolor, quibusdam ipsam assumenda expedita ipsum rerum. Rem vero nihil unde? Voluptates, laudantium? Consequuntur deserunt magnam sunt tempora odio minus atque, nostrum quo modi eum! Sequi iusto omnis illo aut sapiente voluptas officia ipsam, necessitatibus quaerat pariatur, unde neque veniam minima explicabo, similique reprehenderit quas inventore enim esse consequuntur laboriosam eaque exercitationem asperiores in. Laborum perspiciatis fuga impedit? Corporis temporibus accusantium, reprehenderit quisquam ad quos debitis, beatae unde quasi dignissimos eum facere facilis a provident dolorum itaque deserunt, doloribus id. Eum vitae eveniet ullam nemo.</p>
  <a herf="about.php" class="btn btn-success"> Check More !</a>
</div>
  </div>
  </div>
</section>

</p>
<h2 class ="text-center">Course !</h2>
<h6 class ="text-center">Under Graduate Courses !</h6>
        <p></p>
        <div class="container-fluid" >
            <div class="row">
                <div class="col -lg-3 col-md-3 col-12">
                <div class="card" style="width: 19rem;">
                <!-- <img src="images/img1.jpg"> -->
                <img src="images/img1.jpg" class="card-img-top" alt="...">
    
      <div class="card-body">
        <h5 class="card-title">B Tech - CSE </h5>
        <p class="card-text"></p>
      </div>
      <ul class="list-group list-group-flush">
        
        <div class="list-group-item">
            <button type="submit" class="btn btn-success btn-block">View !
            <a  href="btechlogin.php" class="btn btn-success"></a>
            
            </button>
            <p></p>
        </div>
        
      </ul>
      
    </div>
    </div>
          
    <div class="col -lg-3 col-md-3 col-12">
                <div class="card" style="width: 19rem;">
                <!-- <img src="images/img1.jpg"> -->
                <img src="images/img1.jpg" class="card-img-top" alt="...">
    
      <div class="card-body">
        <h5 class="card-title">B . C . A</h5>
      </div>
      <ul class="list-group list-group-flush">
      <div class="list-group-item">
            <button type="submit" class="btn btn-success btn-block">View !
            <a  href="bcalogin.php" class="btn btn-success"></a>
            
            </button>
            <p></p>
        </div>
      </ul>
      
    </div>
    </div>
    <div class="col -lg-3 col-md-3 col-12">
                <div class="card" style="width: 19rem;">
                <!-- <img src="images/img1.jpg"> -->
                <img src="images/img1.jpg" class="card-img-top" alt="...">
    
      <div class="card-body">
        <h5 class="card-title"> B. Des</h5>
        
      </div>
      <ul class="list-group list-group-flush">
      <div class="list-group-item">
            <button type="submit" class="btn btn-success btn-block">View !
            <a  href="bdeslogin.php" class="btn btn-success"></a>
            
            </button>
            <p></p>
        </div>
      </ul>
      
    </div>
    </div>
    <div class="col -lg-3 col-md-3 col-12">
                <div class="card" style="width: 19rem;">
                <!-- <img src="images/img1.jpg"> -->
                <img src="images/img1.jpg" class="card-img-top" alt="...">
    
      <div class="card-body">
        <h5 class="card-title">B . B . A</h5>
       
      </div>
      <ul class="list-group list-group-flush">
      <div class="list-group-item">
            <button type="submit" class="btn btn-success btn-block">View !
            <a  href="bba.php" class="btn btn-success"></a>
            
            </button>
            <p></p>
        </div>
      </ul>
      
    </div>
    </div>
    <p>

    </p>

    <div class="col -lg-3 col-md-3 col-12">
                <div class="card" style="width: 19rem;">
                <!-- <img src="images/img1.jpg"> -->
                <img src="images/img1.jpg" class="card-img-top" alt="...">
    
      <div class="card-body">
        <h5 class="card-title">B. Tech - BioEngineering</h5>
       
      </div>
      <ul class="list-group list-group-flush">
      <div class="list-group-item">
            <button type="submit" class="btn btn-success btn-block">View !
            <a  href="btechbioenglogin.php" class="btn btn-success"></a>
            
            </button>
            <p></p>
        </div>
      </ul>
      
      
    </div>
    </div>
    <div class="col -lg-3 col-md-3 col-12">
                <div class="card" style="width: 19rem;">
                <!-- <img src="images/img1.jpg"> -->
                <img src="images/img1.jpg" class="card-img-top" alt="...">
    
      <div class="card-body">
        <h5 class="card-title">B. A - JMC</h5>
        
      </div>
      <ul class="list-group list-group-flush">
      <div class="list-group-item">
            <button type="submit" class="btn btn-success btn-block">View !
            <a  href="bajmslogin.php" class="btn btn-success"></a>
            
            </button>
            <p></p>
        </div>
      </ul>
      
    </div>
    </div>
   
    <p>






    </p>

    

    <p>

</p>
<h2 class ="text-center">Course !</h2>
<h6 class ="text-center">Post Graduate Courses !</h6>
        <p></p>
        <div class="container-fluid" >
            <div class="row">
                <div class="col -lg-3 col-md-3 col-12">
                <div class="card" style="width: 19rem;">
                <!-- <img src="images/img1.jpg"> -->
                <img src="images/img1.jpg" class="card-img-top" alt="...">
    
      <div class="card-body">
        <h5 class="card-title">M. Tech - CSE</h5>
        <p class="card-text"></p>
      </div>
      <ul class="list-group list-group-flush">
        
        <div class="list-group-item">
            <button type="submit" class="btn btn-success btn-block">View !
            <a  href="btechlogin.php" class="btn btn-success"></a>
            
            </button>
            <p></p>
        </div>
        
      </ul>
      
    </div>
    </div>
          
    <div class="col -lg-3 col-md-3 col-12">
                <div class="card" style="width: 19rem;">
                <!-- <img src="images/img1.jpg"> -->
                <img src="images/img1.jpg" class="card-img-top" alt="...">
    
      <div class="card-body">
        <h5 class="card-title">M . B . A- Digital Business </h5>
      </div>
      <ul class="list-group list-group-flush">
      <div class="list-group-item">
            <button type="submit" class="btn btn-success btn-block">View !
            <a  href="bcalogin.php" class="btn btn-success"></a>
            
            </button>
            <p></p>
        </div>
      </ul>
      
    </div>
    </div>
    <div class="col -lg-3 col-md-3 col-12">
                <div class="card" style="width: 19rem;">
                <!-- <img src="images/img1.jpg"> -->
                <img src="images/img1.jpg" class="card-img-top" alt="...">
    
      <div class="card-body">
        <h5 class="card-title">M.Sc- Medical-Biotechnology</h5>
        
      </div>
      <ul class="list-group list-group-flush">
      <div class="list-group-item">
            <button type="submit" class="btn btn-success btn-block">View !
            <a  href="bdeslogin.php" class="btn btn-success"></a>
            
            </button>
            <p></p>
        </div>
      </ul>
      
    </div>
    </div>
    <div class="col -lg-3 col-md-3 col-12">
                <div class="card" style="width: 19rem;">
                <!-- <img src="images/img1.jpg"> -->
                <img src="images/img1.jpg" class="card-img-top" alt="...">
    
      <div class="card-body">
        <h5 class="card-title">Master of Computer Application</h5>
       
      </div>
      <ul class="list-group list-group-flush">
      <div class="list-group-item">
            <button type="submit" class="btn btn-success btn-block">View !
            <a  href="bba.php" class="btn btn-success"></a>
            
            </button>
            <p></p>
        </div>
      </ul>
      
    </div>
    </div>
    <p>

    </p>





    </p>

    

  </body>


<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
      
    </div>  
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</html>