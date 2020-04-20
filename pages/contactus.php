<?php include('../php/authController.php'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
          <nav class="navbar navbar-expand-md bg-info navbar-dark fixed-top" >
            <a class="navbar-brand" href="#">Healthy Orange County</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="../index.php">Home</a>
                <a class="nav-item nav-link" href="#">About Us</a>
                <a class="nav-item nav-link" href="./directory.php">Directory</a>
                <a class="nav-item nav-link" href="./events.php">Events</a>
                <a class="nav-item nav-link" href="#">Contact Us</a>
                <?php 
                    if (!isLoggedIn()) { ?>
                      <a class="nav-item nav-link" href="login.php">Login</a>
                <?php } else { ?>

                    <?php if (!isAdmin()) {?>
                      <a class="nav-item nav-link" href="./user.php">Profile</a>
                      <a class="nav-item nav-link" href="../index.php?logout='1'">Logout</a>
                  <?php  } else {?>
                      <a class="nav-item nav-link" href="admin.php">Profile</a>
                      <a class="nav-item nav-link" href="../index.php?logout='1'">Logout</a>
                  <?php } ?>
                <?php    }
                ?>
                </div>
            </div>
          </nav>
<br>

<div class="container" style="margin-top: 50px"><br>
  <!-- contact us form goes here-->
  <h4>Contact Us</h4>
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
<!--  <input type="text" class="form-control" id="description" placeholder="Description" name="description">-->
  </div>
  <button type="submit" name="event-btn" id="event-btn" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>
