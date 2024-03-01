<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "EventSphere";

$con = mysqli_connect($host, $user, $password, $db);
if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}

$selectedVenue = $_POST['venue'];
$selecteddttime = $_POST['datetime'];


$query = "SELECT * FROM eventmaster WHERE venue = '$selectedVenue' AND datetime = '$selecteddttime' AND flag='Approved'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<p style='color: red;'>This venue is already booked for an event.</p>";
} else {
    echo "<p style='color: green;'></p>";
}

?>
