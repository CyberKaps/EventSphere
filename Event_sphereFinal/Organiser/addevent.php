<?php
$host = "localhost";
$user = "root";
$password = '';
$db = 'EventSphere';

session_start();

$con = mysqli_connect($host, $user, $password, $db);
if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
} else {
    //echo "Connected to database";
}

$eventName = $_REQUEST['eventName'];
$dateTime = $_REQUEST['dateTime'];
$venue = $_REQUEST['venue'];
$attendance = $_REQUEST['attendance'];
$clubCommittee = $_REQUEST['clubCommittee'];
$contactPerson = $_REQUEST['contactPerson'];
$contactEmail = $_REQUEST['contactEmail'];
$contactPhone = $_REQUEST['contactPhone'];
$eventOverview = $_REQUEST['eventOverview'];
$estimatedBudget = $_REQUEST['estimatedBudget'];
$fundingSources = $_REQUEST['fundingSources'];
$resourceRequirements = $_REQUEST['resourceRequirements'];
$targetAudience = $_REQUEST['targetAudience'];
$promotionPlan = $_REQUEST['promotionPlan'];
$approvers = $_REQUEST['approvers'];
$detailfile = $_REQUEST['detailfile'];

$sql = "INSERT INTO eventmaster (eventname, datetime, venue, attendence, commiteename, contactperson, contactemail, contactphone, eventdetails, budget, fundingsources, promotionplan, targetaudience, approver, detailfile,flag) 
        VALUES ('$eventName','$dateTime','$venue','$attendance','$clubCommittee','$contactPerson','$contactEmail','$contactPhone','$eventOverview','$estimatedBudget','$fundingSources','$promotionPlan','$targetAudience','$approvers','$detailfile','Pending')";

$result = mysqli_query($con, $sql);

if ($result) {
    $_SESSION["username"] = $email;
            $_SESSION["password"] = $passw;
    header("Location: ./scheduled.php");
} else {
    echo "Data cannot be inserted";
}
?>
