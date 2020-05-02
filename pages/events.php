<?php include('../php/authController.php');
   if (!isLoggedIn()) {
      $_SESSION['msg'] = "You must log in first";
      header('location: login.php');
   }
?>
<?php

   if (isset($_POST['book-btn'])) {
      echo "       ";
      echo $_POST['book-btn'];
      //BookFunction();
   }

   function BookFunction() {
      $userid = getUserID();
      $eventid = $event['id'];
      $sql = "INSERT INTO rsvp (userid, eventid) VALUES ('$userid' , '$eventid')";
      if (mysqli_query($conn, $sql)) {
         echo "New record created successfully";
      } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Events</title>
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
<!--   <nav class="test navbar navbar-expand-md bg-info navbar-dark fixed-top" >
      <a class="navbar-brand" href="../index.php">Healthy Orange County</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link " href="../index.php">Home</a>
            <a class="nav-item nav-link" href="./aboutus.php">About</a>
            <a class="nav-item nav-link" href="./directory.php">Directory</a>
            <a class="nav-item nav-link active" href="#">Events</a>
            <a class="nav-item nav-link" href="./contactus.php">Contact</a>
            <?php if (!isLoggedIn()) { ?>
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
   </nav> -->
   <br><br>
   <div class="container" style="margin-top: 50px">
      <h2>Events</h2>
      <br>
      <!-- Nav tabs -->
      <ul class="nav ">
         <li style="width: 100%">
            <input class="form-control form-control-lg" id="myInput" type="text" placeholder="Search..">
         </li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
         <div id="home" class="tab-pane active"><br>
            <div id="spinner" class="spinner-border" style="display: none;"></div>
               <div class="card-columns" id="events">
                  <?php
                     $sql2 = "SELECT `id`, `title`, `description`,`contact`,`ddate` FROM `allevents`";
                     $result = mysqli_query($conn, $sql2);
                     while($event = mysqli_fetch_array($result)){
                   ?>
                  <form  method = "POST">
                  <div class="card" style="width: 18rem; margin: 20px;">
                     <div class="card-body">
                        <h5 class="card-title"><?php echo $event['title']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $event['ddate']; ?></h6>
                        <p class="card-text"><?php echo $event['description']; ?></p>
                        <!-- <a href="../php/rsvp.php" class="btn btn-outline-success">Bookmark</a> -->
                        <button type="submit" value = "<?php echo $event['id']; ?>" name="book-btn" id="book-btn" class="btn btn-outline-success">Bookmark</button>
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
         </div>
      </div>
      <script>
         $(document).ready(function(){
            $("#myInput").on("keyup", function() {
               var value = $(this).val().toLowerCase();
               $("#events div").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
               });
            });
            $("#myInput").on("keypress", function() {
               $("#spinner").toggle();
               setTimeout(
               function() {
                  $("#spinner").toggle();
               }, 750);
            });
         });
      </script>
   </div>
   <footer class="page-footer font-small success pt-4 fixed-bottom" style="padding-top: 0px !important;">
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
         <a href="index.php" style="color: chocolate !important">Healthy Orange County</a>
      </div>
   </footer>
</body>
</html>
