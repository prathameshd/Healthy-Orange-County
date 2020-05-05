<?php
   include('../php/authController.php');
   if (!isLoggedIn()) {
      $_SESSION['msg'] = "You must log in first";
      header('location: login.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>User Profile</title>
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
               <a class="nav-item nav-link" href="./admin.php">Profile</a>
               <a class="nav-item nav-link" href="../index.php?logout='1'">Logout</a>
               <?php } ?>
               <?php } ?>
            </div>
         </div>
      </nav>
   </div>
   <br><br>
   <div class="container" style="margin-top: 50px">
      <h2>Hello <?php echo $_SESSION['username']; ?></h2>
      <?php
          if( isVerified() ) {
             echo "<i><b>Verified</b></i>";
          } else {
             echo "<i>Unverified(Check your email)</i>";
          }
       ?>
      <br><br>
      <div class="row">
            <div class="col-sm-2">
               <img src="../images/avatar.png" class="img-thumbnail" alt="Cinque Terre">
            </div>
            <div class="col-sm-9">
               <!-- Update form  -->
               <form action="user.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
                  <div class="form-group">
                     <label for="name">Name</label>
                     <input type="text" class="form-control" id="name" name="username" value="<?php echo $_SESSION['username']; ?>">
                  </div>
                  <div class="form-group">
                     <label for="email">Email:</label>
                     <input type="email" class="form-control" id="email" value="<?php echo $_SESSION['email']; ?>" name="email">
                  </div>
                  <button type="submit" name="update-btn" class="btn btn-outline-success">Update</button>
               </form>
            </div>
         </div>
      </div>
   </div>

   <!-- My Event cards -->
   <div class="container" style="margin-top: 7%">
      <h2>Saved Events</h2>
      <br>
      <div class="card-columns" id="events">
         <?php
            $userid = getUserID();
            $sql2 = "SELECT allevents.title, allevents.description, allevents.contact, allevents.ddate FROM rsvp INNER JOIN allevents ON rsvp.eventid = allevents.id WHERE rsvp.userid = $userid";
            $result = mysqli_query($conn, $sql2);
            while($event = mysqli_fetch_array($result)){
          ?>
         <form  method = "POST">
            <div class="card" style="width: 18rem; margin: 20px;">
               <div class="card-body">
                  <h5 class="card-title"><?php echo $event['title']; ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $event['ddate']; ?></h6>
                  <p class="card-text"><?php echo $event['description']; ?></p>
               </div>
            </div>
         </form>
         <?php }
            if (!$result) {
               printf("Error: %s\n", mysqli_error($conn));
               exit();
            }
          ?>
      </div>
   </div>
   <div class= "container" style = "margin-top: 7%">
      <h2>Admin Messages</h2>
      <?php
          $useremail = $_SESSION['email'];
          $sql2 = "SELECT title , message FROM adminmsgs where email = '$useremail'";
          $result = mysqli_query($conn, $sql2);
       ?>
      <table class="table table-hover">
         <tr><th>Title</th><th>Message</th></tr>
         <?php
             while($event = mysqli_fetch_array($result)){
                echo '<tr>';
                echo '<td>'.$event['title'].'</td>';
                echo '<td>'.$event['message'].'</td>';
                echo '</tr>';
             }
          ?>
      </table>
   </div>
   <br>

</body>
</html>
