<?php include '../php/authController.php' ?>
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
   <link rel="stylesheet" href="../css/style.css">
   <style>
       .image-text {
            position: absolute;
            top: 20%;
            left: 35%;
            text-align: center;
        }

        .image-text h3 {
            margin-top: 60px;
            font-weight: 900;
        }

        .column {
            float: left;
            width: 50%;
            margin-top: 6px;
            padding: 20px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both; 
        }

        @media screen and (max-width: 600px) {
            .column, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }        
   </style>
</head>
<body>
   <!-- Navigation Bar -->
   <nav class="test navbar navbar-expand-md bg-info navbar-dark fixed-top">
      <a class="navbar-brand" href="../index.php">Healthy Orange County</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="../index.php">Home</a>
            <a class="nav-item nav-link active" href="aboutus.php">About</a>
            <a class="nav-item nav-link" href="./directory.php">Directory</a>
            <a class="nav-item nav-link" href="./events.php">Events</a>
            <a class="nav-item nav-link" href="./contactus.php">Contact</a>
            <?php if (!isLoggedIn()) { ?>
            <a class="nav-item nav-link" href="./login.php">Login</a>
            <?php } else { ?>
            <?php if (!isAdmin()) {?>
            <a class="nav-item nav-link" href="./user.php">Profile</a>
            <a class="nav-item nav-link" href="./index.php?logout='1'">Logout</a>
            <?php  } else {?>
            <a class="nav-item nav-link" href="./admin.php">Profile</a>
            <a class="nav-item nav-link" href="./index.php?logout='1'">Logout</a>
            <?php } ?>
            <?php } ?>
         </div>
      </div>
   </nav>

<!-- About us content -->
   <div class="about-image">
        <img class="d-block w-100" src="../images/about.jpg" style="opacity: 0.4">
        <div class="image-text">
            <h1>Our Mission</h1>
            <h3>To connect residents and visitors</h3>
            <h3> to all health and wellness providers</h3>
            <h3> and practitioners in Orange County.</h3>
        </div>             
   </div>

   <div class="container" style="margin-top: 100px;">
      <div class="row">
         <div class="column">
            <h2>Our Inspiration</h2>
            <h5 style="margin-top: 40px;">This idea was born from the desire for local people in Orange County to have one place they could go, or refer another, that hosts all of the health and wellness services/ providers within the county.</h5><br>
            <h5>We know people are looking for this information, but don’t know where to find it, and we know that there are many services being offered in this small community ranging from medical care to supplemental care, such as massages or Zumba class, but not everyone knows where to find it.</h5>
         </div>
         <div class="column">
            <h2>Why Healthy Orange County?</h2>
            <h5 style="margin-top: 40px;">We want everyone to have access to all the services they are looking for that would assist in taking care of themselves physically, mentally, and emotionally. There are many individuals and families looking for the resources they need and, in an effort to promote healthy living, we will provide it for them.</h5>
         </div>
      </div>
   </div>

   <div class="container" style="margin-top: 100px;">
      <h3>Key Contributors</h3>
          
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
                     <a href="../index.php">Home</a>
                  </li>
                  <li>
                     <a href="./aboutus.php">About Us</a>
                  </li>
                  <li>
                     <a href="./directory.php">Directory</a>
                  </li>
                  <li>
                     <a href="./events.php">Events</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
         <a href="../index.php">Healthy Orange County</a>
      </div>
   </footer>
</body>
</html>
