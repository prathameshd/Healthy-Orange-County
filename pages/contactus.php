<?php include('../php/authController.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Contact Us</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Girassol&family=Lobster&display=swap" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="../css/style.css">
   <style>
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
   <nav class="test navbar navbar-expand-md bg-info navbar-dark fixed-top" >
      <a class="navbar-brand" href="../index.php">Healthy Orange County</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link " href="../index.php">Home</a>
            <a class="nav-item nav-link" href="./aboutus.php">About</a>
            <a class="nav-item nav-link" href="./directory.php">Directory</a>
            <a class="nav-item nav-link" href="./events.php">Events</a>
            <a class="nav-item nav-link active" href="#">Contact</a>
            <?php
               if (!isLoggedIn()) {
             ?>
            <a class="nav-item nav-link" href="login.php">Login</a>
            <?php } else { ?>
            <?php if (!isAdmin()) {?>
            <a class="nav-item nav-link" href="./user.php">Profile</a>
            <a class="nav-item nav-link" href="../index.php?logout='1'">Logout</a>
            <?php  } else {?>
            <a class="nav-item nav-link" href="admin.php">Profile</a>
            <a class="nav-item nav-link" href="../index.php?logout='1'">Logout</a>
            <?php } ?>
            <?php } ?>
         </div>
      </div>
   </nav>
   <br><br>
   
   <div class="container" style="margin-top: 50px">
   <!-- contact us form goes here-->
      <h2>Contact Us</h2>
      <div class="row" style="margin-top:30px;">
         <div class="column">
            <h5>Want to host an event? Want to be a part of our awesome team? Or have any other queries?</h5><br>
            <h5>Get in touch using the attached form or via email: healthyorangecountyin@gmail.com</h5>
         </div>
         <div class="column">
            <form action="../php/contactmsgs.php" method="POST">
               <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
               </div>
               <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
               </div>
               <div class="form-group">
                  <label for="date">Date</label>
                  <input type="date" class="form-control" id="date" placeholder="Date" name="date">
               </div>
               <div class="form-group">
                  <label for="title">Subject:</label>
                  <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
               </div>
               <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" rows="5" id="message" name="message"></textarea>
               </div>
               <button type="submit" name="event-btn" id="event-btn" class="btn btn-primary">Submit</button>
            </form>
         </div>
      </div>
   </div>
   <footer class="page-footer font-small success pt-4" style="padding-top: 0px !important;">
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
         <a href="index.php" style="color: chocolate !important">Healthy Orange County</a>
      </div>
   </footer>
</body>
</html>
