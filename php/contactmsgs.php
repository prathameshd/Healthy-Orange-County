<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "verifyuser";
    if (empty($_POST['name'])) {
        $errors['name'] = 'Name required';
    }
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email required';
    }
    if (empty($_POST['date'])) {
        $errors['date'] = 'Date required';
    }
    if (empty($_POST['title'])) {
        $errors['title'] = 'Title required';
    }
    if (empty($_POST['message'])) {
        $errors['message'] = 'Message required';
    }
if (count($errors) === 0){
$name=$_POST["name"];
$email=$_POST["email"];
$date=$_POST["date"];
$title=$_POST["title"];
$message=$_POST["message"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO msgs (name, email, ddate, title, message)
VALUES ('$name', '$email', '$date', '$title', '$message')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
header('location: ../pages/contactus.php');
?>

<html>
<body>

</body>
</html>
