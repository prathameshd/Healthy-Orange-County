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
   <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Girassol&family=Lobster&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="./css/style.css">
   <style>

      html {
      scroll-behavior: smooth;
      }

      body{
      margin:0;
      font-size:1rem;
      font-weight:normal;
      line-height:1.5;
      overflow-x:hidden;
      }

      .card-body {
         margin: 50px;
         font-size: 18px;
      }

      .card {
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;
      }
   </style>
</head>
<body>
   <!-- Navigation Bar -->
   <nav class="test navbar navbar-expand-md bg-info navbar-dark fixed-top">
      <a class="navbar-brand" href="index.php">Healthy Orange County</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="index.php">Home</a>
            <a class="nav-item nav-link" href="./pages/aboutus.php">About</a>
            <a class="nav-item nav-link" href="./pages/directory.php">Directory</a>
            <a class="nav-item nav-link" href="./pages/events.php">Events</a>
            <a class="nav-item nav-link" href="./pages/contactus.php">Contact</a>
            <?php if (!isLoggedIn()) { ?>
            <a class="nav-item nav-link" href="./pages/login.php">Login</a>
            <?php } else { ?>
            <?php if (!isAdmin()) {?>
            <a class="nav-item nav-link" href="./pages/user.php">Profile</a>
            <a class="nav-item nav-link" href="./index.php?logout='1'">Logout</a>
            <?php  } else {?>
            <a class="nav-item nav-link" href="./pages/admin.php">Profile</a>
            <a class="nav-item nav-link" href="./index.php?logout='1'">Logout</a>
            <?php } ?>
            <?php } ?>
         </div>
      </div>
   </nav>

<!-- Video Cover -->
<header class="v-header container">
    <div class="fullscreen-video-wrap">
      <video src="./images/video1.mp4" autoplay="true" loop="true">
    </video>
    </div>
    <div class="header-overlay"></div>
    <div class="header-content text-md-center">
      <h1>Welcome to Healthy Orange County</h1>
      <br>
      <p>We provides resources to help you find health professionals, services and facilities. We also organize and showcase events for social welfare.</p>
      <a class="btn btn-success" href="#content">Find Out More About Us</a>
    </div>
  </header>


<!-- Home content -->
   <div style="" id="content">
      <div class="card mb-3 bg-light maincard">
         <div class="row no-gutters">
            <div class="col-md-6">
              <img src="./images/carousel3.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-6">
              <div class="card-body" style="padding: 80px !important;">
                <h3 class="card-title">Healthy Orange County</h3>
                <p class="card-text">We connect you to the right providers who can help you with your needs. From traditional medicine to support groups to nutrition to life coaching, our directory has the services you are looking for in Orange County. You can select the category of service that you require. If you don't see what you are looking for, try filtering by subcategory to narrow the results further.</p>
                <a href="./pages/directory.php" class="btn btn-outline-success" style="float: right;">Directory</a>
              </div>
            </div>
         </div>
      </div>

      <div class="card mb-3 bg-light maincard">
         <div class="row no-gutters">
            <div class="col-md-6">
              <div class="card-body" style="padding: 80px !important;">
                <h3 class="card-title">Attend Local Events</h3>
                <p class="card-text">View the events page for local gatherings in the Orange County area and plan for a fun day of community bonding. Featured events include farmers markets, food festivals, county parades and much more. Click here to make new friends and join the community!</p>
                <a href="./pages/events.php" class="btn btn-outline-success" style="float: right;">Events</a>
              </div>
            </div>
            <div class="col-md-6">
              <img src="./images/event.jpg" class="card-img" alt="...">
            </div>
         </div>
      </div> 

      <div class="card mb-3 bg-light maincard">
         <div class="row no-gutters">
            <div class="col-md-6">
              <img src="./images/carousel1.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-6">
              <div class="card-body" style="padding: 80px !important;">
                <h3 class="card-title">About us</h3>
                <p class="card-text">Click here to learn more about the great minds behind the Healthy Orange County and how they were inspired to develop this resource for the Orange County community.</p>
                <a href="./pages/aboutus.php" class="btn btn-outline-success" style="float: right;">Learn More</a>
              </div>
            </div>
         </div>
      </div>
   </div>




   <!-- Footer -->
   <footer class="page-footer font-small success pt-4 navbar-fixed-bottom" style="padding-top: 0px !important;">
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
         <a href="index.php" style="color: chocolate !important">Healthy Orange County</a>
      </div>
   </footer>
</body>
</html>
