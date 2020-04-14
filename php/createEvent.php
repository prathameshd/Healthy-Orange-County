<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "abcd";

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

$sql = "INSERT INTO allevents (title, description, ddate,contact)
VALUES ('$eventTitle', '$eventDescription', '$eventDate','$eventContact')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
header('location: ../pages/admin.php');

?>

<html>
<body>

</body>
</html>