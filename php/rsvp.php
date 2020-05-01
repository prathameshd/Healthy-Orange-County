<?php
include('../pages/events.php');
$userid = getUserID();
$eventid = $event['id'];
$sql = "INSERT INTO rsvp (userid, eventid)
VALUES ('$userid' , '$eventid')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header('location: ../pages/events.php');
?>

<html>
<body>
</body>
</html>
