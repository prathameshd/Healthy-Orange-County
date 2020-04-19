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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<br>

<div class="container">
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
      <a class="nav-link" data-toggle="tab" href="#menu2">Users</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="admin.php?logout='1'">Logout</a>
    </li>

  </ul>

<!-- Tab panes -->
<div class="tab-content">
<div id="home" class="tab-pane active"><br>
<?php
    $sql2 = "SELECT `title`, `description`,`contact`,`ddate` FROM `allevents`";
    $result = mysqli_query($conn, $sql2);?>
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
  <h4>Event Details</h4>
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

<div id="menu2" class="container tab-pane fade"><br>
  <h4>All Registered Users</h4>
	<?php
		$sql = "SELECT `username`, `email` FROM `users`  ORDER BY `username` ASC";
		$result = mysqli_query($conn, $sql);?>
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
</body>
</html>
