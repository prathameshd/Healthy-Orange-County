<?php include('../php/authController.php'); 
      if (!isAdmin()) {
         $_SESSION['msg'] = "You must log in first";
	 header('location: login.php');
       }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Admin</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Girassol&family=Lobster&display=swap" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="../css/style.css">
</head> 
<body>
   <div class="container">
      <nav class="test navbar navbar-expand-md bg-info navbar-dark fixed-top">
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
               <a class="nav-item nav-link" href="./contactus.php">Contact</a>
               <?php if (!isLoggedIn()) { ?>
               <a class="nav-item nav-link" href="./login.php">Login</a>
               <?php } else { ?>
               <?php if (!isAdmin()) {?>
               <a class="nav-item nav-link active" href="./user.php">Profile</a>
               <a class="nav-item nav-link" href="../index.php?logout='1'">Logout</a>
               <?php  } else {?>
               <a class="nav-item nav-link active" href="./admin.php">Profile</a>
               <a class="nav-item nav-link" href="../index.php?logout='1'">Logout</a>
               <?php } ?>
               <?php } ?>
            </div>
         </div>
      </nav>
   </div>
   <br><br> 
   <div class="container" style="margin-top: 50px">
      <h2>Welcome Admin</h2>
      <br>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
         <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Events</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Create New Event</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu3">Messages</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Users</a>
         </li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
         <div id="home" class="tab-pane active"><br>
            <?php
               $sql2 = "SELECT `title`, `description`,`contact`,`ddate` FROM `allevents`";
               $result = mysqli_query($conn, $sql2);
             ?>
            <table class="table table-hover">
               <tr><th>Title</th><th>Description</th><th>Contact</th><th>Date</th></tr>
               <?php
                  while($event = mysqli_fetch_array($result)){
                     echo '<tr>';
                     echo '<td>'.$event['title'].'</td>';
                     echo '<td>'.$event['description'].'</td>';
                     echo '<td>'.$event['contact'].'</td>';
                     echo '<td>'.$event['ddate'].'</td>';
                     echo '</tr>';
                  }
                ?>
            </table>
         </div>
         <div id="menu1" class="tab-pane fade"><br>
            <!-- create event form goes here-->
            <form action="../php/createEvent.php" method="POST">
               <div class="form-group">
                  <label for="title">Title:</label>
                  <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
               </div>
               <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" rows="5" id="description" name="description"></textarea>
               </div>
               <div class="form-group">
                  <label for="date">Date</label>
                  <input type="date" class="form-control" id="date" placeholder="Date" name="date">
               </div>
               <div class="form-group">
                  <label for="contact">Contact:</label>
                  <input type="email" class="form-control" id="contact" placeholder="Enter email" name="contact">
               </div>
               <button type="submit" class="btn btn-primary" name="event-btn" id="event-btn">Submit</button>
            </form>
         </div>
         <div id="menu3" class="tab-pane fade"><br>
            <?php
               $sql2 = "SELECT `name`, `email`,`ddate`,`title`,`message` FROM `msgs`";
               $result = mysqli_query($conn, $sql2);
             ?>
            <table class="table table-hover">
               <tr><th>Name</th><th>Email</th><th>Date</th><th>Title</th><th>Message</th></tr>
               <?php
                  while($event = mysqli_fetch_array($result)){
                     echo '<tr>';
                     echo '<td>'.$event['name'].'</td>';
                     echo '<td>'.$event['email'].'</td>';
                     echo '<td>'.$event['ddate'].'</td>';
                     echo '<td>'.$event['title'].'</td>';
                     echo '<td>'.$event['message'].'</td>';
                     echo '</tr>';
                  }
                ?>
            </table>
         </div>
         <div id="menu2" class="container tab-pane fade"><br>
            <?php
               $sql = "SELECT `username`, `email` FROM `users`  ORDER BY `username` ASC";
               $result = mysqli_query($conn, $sql);
             ?>
            <table class="table table-hover">
               <tr><th>Username</th><th>Email</th></tr>
               <?php
                  while($user = mysqli_fetch_array($result)){
                     echo '<tr>';
                     echo '<td>'.$user['username'].'</td>';
                     echo '<td>'.$user['email'].'</td>';
                     echo '</tr>';
                  }
                ?>
         </div>
      </div>
   </div>
</body>
</html>
