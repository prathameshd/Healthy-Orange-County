<?php include('../php/authController.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Directory page</title>
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
            <nav class="navbar navbar-expand-md bg-info navbar-dark fixed-top">
                <a class="navbar-brand" href="#">Healthy Orange County</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="../index.php">Home</a>
                    <a class="nav-item nav-link" href="#">About Us</a>
                    <a class="nav-item nav-link" href="directory.php">Directory</a>
                    <a class="nav-item nav-link" href="./events.php">Events</a>
                    <a class="nav-item nav-link" href="./contactus.php">Contact Us</a>
                    <?php 
                        if (!isLoggedIn()) { ?>
                        <a class="nav-item nav-link" href="./login.php">Login</a>
                    <?php } else { ?>

                        <?php if (!isAdmin()) {?>
                        <a class="nav-item nav-link" href="./user.php">Profile</a>
                        <a class="nav-item nav-link" href="../index.php?logout='1'">Logout</a>
                    <?php  } else {?>
                        <a class="nav-item nav-link" href="./admin.php">Profile</a>
                        <a class="nav-item nav-link" href="./index.php?logout='1'">Logout</a>
                    <?php } ?>
                    <?php    }
                    ?>
                    </div>
                </div>
            </nav>
<br>  
 
<div class="container" style="margin-top: 50px">
    <h2>Directory Page</h2>                  
    <br>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#med">Medical Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#soc">Social Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#wor">Worship Centers</a>
      </li>
    </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="med" class="tab-pane active"><br>
      <div class="row">
          <div class="col-sm-6">
            <div class="card" style="width: 18rem; margin: 20px;">
              <div class="card-body">
              <h5 class="card-title">Southern Indiana Health Center</h5>
              <h6 class="card-subtitle mb-2 text-muted">Yolanda Yoder, MD</h6>
              <p class="card-text">Address: 420 W Longest St. Paoli Indiana 47454</p> 
              <p class="card-text">Phone: 8127233944</p>
              <a href="#" class="card-link">Website</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card" style="width: 18rem; margin: 20px;">
              <div class="card-body">
              <h5 class="card-title">Comprehensive Health Care</h5>
              <h6 class="card-subtitle mb-2 text-muted">Shannon Dooley, FNP</h6>
              <p class="card-text">Address: 420 W Longest St. Paoli Indiana 47454</p> 
              <p class="card-text">Phone: 8127233944</p>
              <a href="#" class="card-link">Website</a>
              </div>
            </div>
          </div>  
          <div class="col-sm-6">
            <div class="card" style="width: 18rem; margin: 20px;">
              <div class="card-body">
              <h5 class="card-title">Orange County Family Dentistry</h5>
              <h6 class="card-subtitle mb-2 text-muted">Lisa J. Baker, DDS</h6>
              <p class="card-text">Address: 1570 W Hospital Rd Paoli Indiana 47454</p> 
              <p class="card-text">Phone: 8127233959</p>
              <a href="#" class="card-link">Website</a>
              </div>
            </div>
          </div>  
          <div class="col-sm-6">
            <div class="card" style="width: 18rem; margin: 20px;">
              <div class="card-body">
              <h5 class="card-title">SICHC- Valley Health</h5>
              <h6 class="card-subtitle mb-2 text-muted">Sean Sales, MD</h6>
              <p class="card-text">Address: 8163 Indiana 56 West Baden Indiana 47469</p> 
              <p class="card-text">Phone: 8127233959</p>
              <a href="#" class="card-link">Website</a>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div id="soc" class="tab-pane fade"><br>
    <div class="row">
          <div class="col-sm-6">
            <div class="card" style="width: 18rem; margin: 20px;">
              <div class="card-body">
              <h5 class="card-title">Orange County Transit Services</h5>
              <p class="card-text">Address: 986 W. Hospital Rd. Paoli Indiana 47454</p> 
              <p class="card-text">Phone: 8129369000</p>
              <a href="#" class="card-link">Website</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card" style="width: 18rem; margin: 20px;">
              <div class="card-body">
              <h5 class="card-title">Tall Guy Taxi</h5>
              <p class="card-text">Address: 1153 S Clay St French Lick Indiana 47432</p> 
              <p class="card-text">Phone: 8129369000</p>
              <a href="#" class="card-link">Website</a>
              </div>
            </div>
          </div>  
          <div class="col-sm-6">
            <div class="card" style="width: 18rem; margin: 20px;">
              <div class="card-body">
              <h5 class="card-title">Blanton & Pierce Law Office</h5>
              <h6 class="card-subtitle mb-2 text-muted">Larry Blanton</h6>
              <p class="card-text">Address: 40 N Court St. Paoli Indiana 47454</p> 
              <p class="card-text">Phone: 8127238400</p>
              <a href="#" class="card-link">Website</a>
              </div>
            </div>
          </div>  
          <div class="col-sm-6">
            <div class="card" style="width: 18rem; margin: 20px;">
              <div class="card-body">
              <h5 class="card-title">Indiana Legal Services</h5>
              <h6 class="card-subtitle mb-2 text-muted">John Paul Isom</h6>
              <p class="card-text">Address: 214 S College Ave. Bloomington Indiana 47421</p> 
              <p class="card-text">Phone: 8008224774</p>
              <a href="#" class="card-link">Website</a>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div id="wor" class="tab-pane fade"><br>
    <div class="row">
          <div class="col-sm-6">
            <div class="card" style="width: 18rem; margin: 20px;">
              <div class="card-body">
              <h5 class="card-title">Beechwood Christian Church</h5>
              <h6 class="card-subtitle mb-2 text-muted">Ashley Clark</h6>
              <p class="card-text">Address: 8535 W State Rd 56 French Lick Indiana 47432</p> 
              <p class="card-text">Phone: 8129364583</p>
              <a href="#" class="card-link">Website</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card" style="width: 18rem; margin: 20px;">
              <div class="card-body">
              <h5 class="card-title">Ames Chapel United Methodist</h5>
              <h6 class="card-subtitle mb-2 text-muted">Shannon Pope</h6>
              <p class="card-text">Address: 5368 W US Hwy 150 Paoli Indiana 47454</p> 
              <p class="card-text">Phone: 8129364441</p>
              <a href="#" class="card-link">Website</a>
              </div>
            </div>
          </div>  
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
