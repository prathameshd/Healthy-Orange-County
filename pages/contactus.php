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
<div id="menu1" class="tab-pane active"><br>
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
<br><br>
<a href="../index.html">Home</a>
</body>
</html>
