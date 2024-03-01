<?php
session_start();

$host = "localhost";  
$user = "root";  
$password = '';  
$db='EventSphere';

$con = mysqli_connect($host, $user, $password, $db);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}

if (!isset($_SESSION["username"])) {
  // If not logged in, redirect to the login page
  header("Location: register/login.php");
  exit;
} else {
  $username = $_SESSION["username"];
  $password = $_SESSION["password"];
  $sql = mysqli_query($con, "SELECT * FROM `usermaster` where email='$username' and password='$password'");

  if(mysqli_num_rows($sql) > 0){
      $_SESSION["username"] = $username;
      $_SESSION["password"] = $password;
      $row = mysqli_fetch_assoc($sql);
  } else {
        echo "<script>alert('No data found !');</script>";
		//header("Location: Organiser/scheduled.php");
      exit;
  }
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color: white;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
<script>
function goBack() {
    window.history.back();
}
</script>
</head>
<body style="background-color: gray;">
<br>
<br>
<div class="card">
<br><br>
<h2 style="text-align:center">User Profile Card</h2>

  <img src="profile.jpg" alt="John" style="width:300">
  <h1><?php echo $row['fname']; ?></h1>
<p class="title"><?php echo $row['email']; ?></p>
<p>+<?php echo $row['pno']; ?></p>
<p><?php echo $row['gender']; ?></p>
  <br>
<br>
  <p><button onclick="goBack()">Back</button></p>
</div>

</body>
</html>


