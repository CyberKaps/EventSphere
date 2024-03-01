<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="org.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk&family=Nabla&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
    rel="stylesheet"
/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Honk&family=Nabla&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>


<?php
     
     $host = "localhost";  
     $user = "root";  
     $password = '';  
     $db='EventSphere';
     
       
     $con = mysqli_connect($host, $user, $password,$db);  
     if(mysqli_connect_errno()) {  
         die("Failed to connect with MySQL: ". mysqli_connect_error());  
     }  
     else{
         //echo"Connected to database";
     }
     
session_start();

if (!isset($_SESSION["username"]) ) {
    header("Location: ../register/login2.php");
    exit;
}
else{
  $username = $_SESSION["username"];
  $password = $_SESSION["password"];
  $sql = mysqli_query($con , "SELECT * FROM `clubmaster` where username='$username' and password='$password'");

  if(mysqli_num_rows($sql) > 0){
      $_SESSION["username"] = $username;
      $_SESSION["password"] = $password;
  }
  else{
    header("Location: ../register/login2.php");
    exit;
  }

}
?>


<body>
  <div class="main">
    <img src="./bgimg.jpg">
    <div class="imp">
  <div class="upper">
    <div class="nav">
        <img style="height: 3vw; width: 4.3%;" src="./logo.jpg" alt="">
        <h4 style="margin-left: 5vw;">GHRIEBM<br>JALGAON.</h4>
        <ul class="list">
            <li id="li1"><a href="../index.php">Home</a></li>
            <li id="li2"><a href="../even2.php">Events</a></li>
            <li id="li3"><a href="../gallery/gallery1.php">Gallery</a></li>
            <!-- <li id="li4"><a href="#">Venue</a></li> -->
            <!-- <li id="li5"><a href="#"><button>Login</button></a></li> -->
        </ul>
        <div style="height: 2.5vw; width: fit-content; margin-top: 0.4vw; margin-right: 1.5vw; padding-right: 5vw;" 
        id="button-87" role="button"><a style="text-decoration: none;" href="../profile.php"><i style="font-size: 2vw;color:white" class="ri-account-circle-line"></i></a></div>
    </div>
</div>
   <div>
        <div class="container">
        <h1>Craft with <span style="color: rgb(255, 145,0);">EVENT_SPHERE</span></h1>
        <br>
        <p style="font-weight: bold; font-family: 'Courier New', Courier, monospace;">Introducing Event Sphere, GHRIEBM's innovative Jalgaon platform designed to
             streamline the event creation process for organizing committees and clubs. 
            This digital solution allows users to submit event proposals online and obtain approvals 
            seamlessly from respective faculties, Heads of Departments (HODs), and Deans.</p>
        </div>
    </div>

<section style="margin-bottom: 8vw;">
    <div class="create">
        <div class="card" style="width: 18rem ">
            <div class="card-body">
              <h5 class="card-title">CREATE EVENT</h5>
              <p class="card-text" style="font-family: 'Courier New', Courier, monospace; font-weight: bold;">Create your event seamlessly with Event Sphere, simplifying the process and ensuring 
                quick approvals from relevant authorities..</p>
              <a href="createevent.php" class="card-link" style="color:red;"><B>Create</B></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">SCHEDULED EVENT</h5>
              <p class="card-text" style="font-family: 'Courier New', Courier, monospace;font-weight: bold">Create your event seamlessly with Event Sphere, simplifying the process and ensuring 
                quick approvals from relevant authorities..</p>
              <a href="./scheduled.php" class="card-link" style="color:red;"><b>Check Out</b></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">EVENT CALENDER</h5>
              <p class="card-text" style="font-family: 'Courier New', Courier, monospace;font-weight: bold">Discover the latest pre-approved or to be approved events conveniently listed on Event Sphere,
                offering a diverse array of engaging activities for the GHRIEBM community.</p>
              <a href="./calender.php" class="card-link" style="color:red;"><b>Venue Availability</b></a>
            </div>
        </div>
    </div>

</section>
</div>
</div>
</body>
</html>