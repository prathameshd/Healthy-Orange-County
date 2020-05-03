<?php include('../php/authController.php');?>
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
   <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Girassol&family=Lobster&display=swap" rel="stylesheet">
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
               <a class="nav-item nav-link" href="../index.php">Home</a>
               <a class="nav-item nav-link" href="./aboutus.php">About</a>
               <a class="nav-item nav-link active" href="directory.php">Directory</a>
               <a class="nav-item nav-link" href="./events.php">Events</a>
               <a class="nav-item nav-link" href="./contactus.php">Contact</a>
               <?php if (!isLoggedIn()) { ?>
               <a class="nav-item nav-link" href="./login.php">Login</a>
               <?php } else { ?>
               <?php if (!isAdmin()) {?>
               <a class="nav-item nav-link" href="./user.php">Profile</a>
               <a class="nav-item nav-link" href="../index.php?logout='1'">Logout</a>
               <?php  } else {?>
               <a class="nav-item nav-link" href="./admin.php">Profile</a>
               <a class="nav-item nav-link" href="./index.php?logout='1'">Logout</a>
               <?php } ?>
               <?php } ?>
            </div>
         </div>
      </nav>
   </div>
   <br><br>
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
         <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#eld">Elderly Care</a>
         </li> 
         <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#sup">Support Groups</a>
         </li> 
         <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#help">Help-lines</a>
         </li>         
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
         <div id="med" class="tab-pane active"><br>
            <div class="card-deck">
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">Southern Indiana Health Center</h5>
                     <h6 class="card-subtitle mb-2 text-muted">Yolanda Yoder, MD</h6>
                     <p class="card-text">Address: 420 W Longest St. Paoli Indiana 47454</p> 
                     <p class="card-text">Phone: 8127233944</p>
                     <a href="#" class="btn btn-outline-info">Website</a>
                  </div>
               </div>
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">Comprehensive Health Care</h5>
                     <h6 class="card-subtitle mb-2 text-muted">Shannon Dooley, FNP</h6>
                     <p class="card-text">Address: 420 W Longest St. Paoli Indiana 47454</p> 
                     <p class="card-text">Phone: 8127233944</p>
                     <a href="#" class="btn btn-outline-info">Website</a>
                  </div>
               </div>
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">Orange County Family Dentistry</h5>
                     <h6 class="card-subtitle mb-2 text-muted">Lisa J. Baker, DDS</h6>
                     <p class="card-text">Address: 1570 W Hospital Rd Paoli Indiana 47454</p> 
                     <p class="card-text">Phone: 8127233959</p>
                     <a href="#" class="btn btn-outline-info">Website</a>
                  </div>
               </div>
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">SICHC- Valley Health Center</h5>
                     <h6 class="card-subtitle mb-2 text-muted">Sean Sales, MD</h6>
                     <p class="card-text">Address: 8163 Indiana 56 West Baden Indiana 47469</p> 
                     <p class="card-text">Phone: 8127233959</p>
                     <a href="#" class="btn btn-outline-info">Website</a>
                  </div>
               </div>
            </div>
         </div>
         <div id="soc" class="tab-pane fade"><br>
            <div class="card-deck">
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">Blanton & Pierce Law Office</h5>
                     <h6 class="card-subtitle mb-2 text-muted">Larry Blanton</h6>
                     <p class="card-text">Address: 40 N Court St. Paoli Indiana 47454</p> 
                     <p class="card-text">Phone: 8127238400</p>
                     <a href="#" class="btn btn-outline-info">Website</a>
                  </div>
               </div>
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">Indiana Legal Services</h5>
                     <h6 class="card-subtitle mb-2 text-muted">John Paul Isom</h6>
                     <p class="card-text">Address: 214 S College Ave. Bloomington Indiana 47421</p> 
                     <p class="card-text">Phone: 8008224774</p>
                     <a href="#" class="btn btn-outline-info">Website</a>
                  </div>
               </div>
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">Orange County Transit Services</h5>
                     <p class="card-text">Address: 986 W. Hospital Rd. Paoli Indiana 47454</p> 
                     <p class="card-text">Phone: 8129369000</p>
                     <a href="#" class="btn btn-outline-info">Website</a>
                  </div>
               </div>
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">Tall Guy Taxi</h5>
                     <p class="card-text">Address: 1153 S Clay St French Lick Indiana 47432</p> 
                     <p class="card-text">Phone: 8129369000</p>
                     <a href="#" class="btn btn-outline-info">Website</a>
                  </div>
               </div>
            </div>
         </div>
         <div id="wor" class="tab-pane fade"><br>
            <div class="card-deck">
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">Beechwood Christian Church</h5>
                     <h6 class="card-subtitle mb-2 text-muted">Ashley Clark</h6>
                     <p class="card-text">Address: 8535 W State Rd 56 French Lick Indiana 47432</p> 
                     <p class="card-text">Phone: 8129364583</p>
                     <a href="#" class="btn btn-outline-info">Website</a>
                  </div>
               </div>
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">Ames Chapel United Methodist</h5>
                     <h6 class="card-subtitle mb-2 text-muted">Shannon Pope</h6>
                     <p class="card-text">Address: 5368 W US Hwy 150 Paoli Indiana 47454</p> 
                     <p class="card-text">Phone: 8129364441</p>
                     <a href="#" class="btn btn-outline-info">Website</a>
                  </div>
               </div>
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">Paoli United Methodist Church</h5>
                     <h6 class="card-subtitle mb-2 text-muted">John Maddison</h6>
                     <p class="card-text">Address: 794 IN-56, Paoli, Indiana 47454</p> 
                     <p class="card-text">Phone: 81272329651</p>
                     <a href="#" class="btn btn-outline-info">Website</a>
                  </div>
               </div>
            </div>
         </div>
         <div id="eld" class="tab-pane fade"><br>
            <div class="card-deck">
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">Orange County Senior Citizens</h5>
                     <p class="card-text">Address: 8497 W Main St, French Lick, Indiana 47432</p> 
                     <p class="card-text">Phone: 8129362257</p>
                     <a href="#" class="btn btn-outline-info">Website</a>
                  </div>
               </div>
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">Home Instead Senior Care</h5>
                     <p class="card-text">Address: 216 W 6th St #106, Jasper, Indiana 47454</p> 
                     <p class="card-text">Phone: 8124823311</p>
                     <a href="#" class="btn btn-outline-info">Website</a>
                  </div>
               </div>
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">Springs Valley Meadows</h5>
                     <p class="card-text">Address: 457 IN-145, French Lick, Indiana 47454</p> 
                     <p class="card-text">Phone: 8129369991</p>
                     <a href="#" class="btn btn-outline-info">Website</a>
                  </div>
               </div>
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">Senior Helpers</h5>
                     <p class="card-text">Address: 822 W 1st St Suite 3, Bloomington, Indiana 47454</p> 
                     <p class="card-text">Phone: 8122483173</p>
                     <a href="#" class="btn btn-outline-info">Website</a>
                  </div>
               </div>   
            </div>
         </div>  
         <div id="sup" class="tab-pane fade"><br>
            <div class="card-deck">
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">NAMI Indiana</h5>
                     <p class="card-text">Address: 921 E 86th St #130, Indianapolis, IN 46240</p> 
                     <p class="card-text">Phone: 8129364583</p>
                     <a href="#" class="btn btn-outline-info">Website</a>
                  </div>
               </div>
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">Cancer Support Community Central Indiana</h5>
                     <p class="card-text">Address: 5150 W 71st St, Indianapolis, IN 46268</p> 
                     <p class="card-text">Phone: 8122571505</p>
                     <a href="#" class="btn btn-outline-info">Website</a>
                  </div>
               </div>
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">Support Group of Indiana</h5>
                     <p class="card-text">Address: 1736 N Wells St, Fort Wayne, Indiana 47454</p> 
                     <p class="card-text">Phone: 81242429441</p>
                     <a href="#" class="btn btn-outline-info">Website</a>
                  </div>
               </div>
            </div>
         </div>  
         <div id="help" class="tab-pane fade"><br>
               <div class="alert alert-danger">
                  <li>In case of an emergency call: 911</li>
               </div>      
            <div class="card-deck">
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">IU Health Bedford Hospital</h5>
                     <p class="card-text">Phone: 812-279-6545</p>
                  </div>
               </div>
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">IU Health Paoli Hospital</h5>
                     <p class="card-text">Phone: 812-723-7455</p>
                  </div>
               </div>
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">French Lick Police Department</h5>
                     <p class="card-text">Phone: 812-936-9811</p>
                  </div>
               </div>
               <div class="card" style="width: 18rem; margin: 20px;">
                  <div class="card-body">
                     <h5 class="card-title">Orange County Sherif</h5>
                     <p class="card-text">Phone: 812-723-2417</p>
                  </div>
               </div>
            </div>
         </div>     
      </div>
   </div> 
   <footer class="page-footer font-small success pt-4 fixed-bottom" style="padding-top: 0px !important;">
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
         <a href="index.php" style="color: chocolate !important">Healthy Orange County</a>
      </div>
   </footer>
</body>
</html>
