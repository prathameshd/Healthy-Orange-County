<?php include './php/authController.php' ?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Healthy Orange County</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <style>
            .carousel-inner img {
                width: auto;
                height: 100vh;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-md bg-info navbar-dark fixed-top">
            <a class="navbar-brand" href="#">Healthy Orange County</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="index.php">Home</a>
                <a class="nav-item nav-link" href="#">About Us</a>
                <a class="nav-item nav-link" href="./pages/directory.php">Directory</a>
                <a class="nav-item nav-link" href="./pages/events.php">Events</a>
                
                <?php 
                    if (!isLoggedIn()) { ?>
                      <a class="nav-item nav-link" href="./pages/login.php">Login</a>
                <?php } else { ?>

                    <?php if (!isAdmin()) {?>
                      <a class="nav-item nav-link" href="./pages/user.php">Profile</a>
                      <a class="nav-item nav-link" href="./index.php?logout='1'">Logout</a>
                  <?php  } else {?>
                      <a class="nav-item nav-link" href="./pages/admin.php">Profile</a>
                      <a class="nav-item nav-link" href="./index.php?logout='1'">Logout</a>
                  <?php } 
                  }
                ?>


                </div>
            </div>
        </nav>



        <!-- Image Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="./images/carousel1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First</h5>
                    <p>...</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./images/carousel2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second</h5>
                    <p>...</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./images/carousel3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third</h5>
                    <p>...</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>


        <!-- Footer -->
        <footer class="page-footer font-small success pt-4">
            <div class="container-fluid text-center text-md-left">
              <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                  <h5 class="text-uppercase">Healthy Orange County</h5>
                  <p></p>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-6 mb-md-0 mb-3">
                  <h5 class="text-uppercase">Quick Links</h5>
                  <ul class="list-unstyled">
                    <li>
                      <a href="index.php">Home</a>
                    </li>
                    <li>
                      <a href="#">About Us</a>
                    </li>
                    <li>
                      <a href="#">Directory</a>
                    </li>
                    <li>
                      <a href="./pages/events.php">Events</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
              <a href="#">Healthy Orange County</a>
            </div>
          </footer>
        
    </body>
</html>