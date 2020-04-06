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
<div id="home" class="container tab-pane active"><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

<div class="card-columns">
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Some text inside the first card</p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
Some text inside the second card</p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Some text inside the third card</p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Some text inside the third card</p>
      </div>
    </div>
    
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Some text inside the fourth card</p>
      </div>
    </div>  
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Some text inside the fifth card</p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Some text inside the sixth card</p>
      </div>
    </div>
  </div>

</div>

<div id="menu1" class="container tab-pane fade"><br>
  <!-- create event form goes here-->
  <h4>Event Details</h4>
  <form action="../php/createEvent.php">
  <div class="form-group">
  <label for="title">Title:</label>
  <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
  </div>
  <div class="form-group">
  <label for="description">Description</label>
  <textarea class="form-control" rows="5" id="description"></textarea>
<!--  <input type="text" class="form-control" id="description" placeholder="Description" name="description">-->
  </div>
  <div class="form-group">
  <label for="date">Date</label>
  <input type="date" class="form-control" id="date" placeholder="Date" name="date">
  </div>
  <div class="form-group">
  <label for="email">Contact:</label>
  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
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
