<?php
   include('../php/authController.php');
   $servername = "localhost";
   $username = "newuser";
   $password = "password";
   $dbname = "verifyuser";
   if (empty($_POST['title'])) {
      $errors['title'] = 'Title required';
   }
   if (empty($_POST['description'])) {
      $errors['Description'] = 'Description required';
   }
   if (empty($_POST['date'])) {
      $errors['date'] = 'Date required';
   }
   if (empty($_POST['contact'])) {
      $errors['contact'] = 'Contact required';
   }

   if (count($errors) === 0){
      $eventTitle=$_POST["title"];
      $eventDescription=$_POST["description"];
      $eventDate=$_POST["date"];
      $eventContact=$_POST["contact"];

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "INSERT INTO allevents (title, description, ddate, contact) VALUES ('$eventTitle', '$eventDescription', '$eventDate','$eventContact')";
      if (mysqli_query($conn, $sql)) {
         echo "New record created successfully";
      } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      mysqli_close($conn);
   }
   header('location: ../pages/admin.php');
?>

<html>
<body>
</body>
</html>
