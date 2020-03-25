<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$eventTitle=$_POST["title"]
$eventDescription=$_POST["description"]
$eventDate=$_POST["date"]
$eventContact=$_POST["contact"]

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO events (title, description, ddate,contact)
VALUES ('$eventTitle', '$eventDescription', '$eventDate','$eventContact')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>