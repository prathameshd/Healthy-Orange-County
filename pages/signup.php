<?php include '../php/authController.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Sign Up</title>
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
      </nav>
   </div>
   <br><br> 
   <div class="container" style="margin-top: 50px">
      <div class="row">
         <div class="col-md-4 offset-md-4 form-wrapper auth">
            <h3 class="text-center form-title">Register</h3>
            <form action="signup.php" method="post">
               <?php if (count($errors) > 0): ?>
               <div class="alert alert-danger">
                  <?php foreach ($errors as $error): ?>
                  <li> <?php echo $error; ?> </li>
                  <?php endforeach;?>
               </div>
               <?php endif;?>
               <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control form-control-lg" value="<?php echo $username; ?>">
               </div>
               <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control form-control-lg" value="<?php echo $email; ?>">
               </div>
               <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control form-control-lg">
               </div>
               <div class="form-group">
                  <label>Password Confirm</label>
                  <input type="password" name="passwordConf" class="form-control form-control-lg">
               </div>
               <div class="form-group">
                  <button type="submit" name="signup-btn" class="btn btn-outline-secondary btn-lg btn-block">Sign Up</button>
               </div>
            </form>
            <p>Already have an account? <a href="login.php" style="color: orangered">Login</a></p>
         </div>
      </div>
   </div>
</body>
</html>
