<?php
session_start();

$host = "localhost";  
$user = "root";  
$password = '';  
$db = 'EventSphere';

$con = mysqli_connect($host, $user, $password, $db);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: " . mysqli_connect_error());  
}

if (!isset($_SESSION["username"])) {
    // If not logged in, redirect to the login page
    header("Location: ../register/login3.php");
    exit;
} else {
    $username = $_SESSION["username"];
    $password = $_SESSION["password"];
    $sql = mysqli_query($con, "SELECT * FROM `adminmaster` where username='$username' and password='$password'");

    if(mysqli_num_rows($sql) > 0){
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
    } else {
        header("Location: ../register/login3.php");
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Event.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk&family=Nabla&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Honk&family=Nabla&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="main">
    <img src="./bgimg.jpg">
    <div class="imp">
        <div class="upper">
            <div class="nav">
                <img style="height: 5vw; width: 4.3%;" src="./logo.jpg" alt="">
                <h4 style="margin-left: 5vw;">GHRIEBM<br>JALGAON.</h4>
                <ul style="margin-right: 9vw;" class="list">
                    <li id="li1"><a href="index.php">Home</a></li>
                    <li id="li2"><a href="">Events</a></li>
                    <li id="li3"><a href="../gallery/gallery1.php">Gallery</a></li>
                    <!-- <li id="li4"><i style="font-size: 2vw;" class="ri-account-circle-line"></i></li> -->
                    <!-- <li id="li4"><a href="#">Venue</a></li> -->
                    <!-- <li id="li5"><a href="#"><button>Login</button></a></li> -->
                    <!-- <div style="height: 2.5vw; width: fit-content; margin-top: 0vw; margin-right: 1.5vw; padding-right: 0vw;" 
                    id="button-87" role="button"><i style="font-size: 2vw;" class="ri-account-circle-line"></i></div> -->
                </ul>
                <!-- <button style="height: 2vw; width: 5.5vw; margin-top: 0.4vw;" id="button-87" role="button">Login<i class="ri-arrow-right-line"></i></button> -->
                <!-- HTML !-->
                <!-- <div style="height: 2.5vw; width: fit-content; margin-top: 0.4vw; margin-right: 1.5vw; padding-right: 5vw;" 
                    id="button-87" role="button"><i style="font-size: 2vw;" class="ri-account-circle-line"></i></div> -->
            </div>
        </div>
        <div class="container">
            <h1>GHRIEBM'S<span style="color: rgb(255, 145,0);"> EVENTS</span></h1>
            <br>
            <p> Welcome to GHRIEBM's Events Page! 🌟

                Get ready to embark on a journey of unparalleled excellence and grandeur as GHRIEBM proudly presents its extraordinary Events page! At GHRIEBM, we redefine the standards of excellence, crafting events that are not just good but truly exceptional, setting us apart as the best in the industry.</p>
            <p>Prepare to be captivated by the fascinating world of GHRIEBM's events! Each gathering is a mesmerizing tapestry woven with creativity, innovation, and a relentless pursuit of excellence. From the moment you step into the venue, you'll find yourself immersed in an enchanting atmosphere where every detail has been carefully curated to evoke awe and wonder. The sheer magnitude of our events is nothing short of spectacular, leaving attendees with a sense of exhilaration and a treasure trove of unforgettable memories. Whether it's the cutting-edge technology employed, the world-class entertainment, or the seamless execution, GHRIEBM's events redefine fascination, creating an experience that transcends the ordinary and lingers in the hearts and minds of all who have the privilege of attending. Get ready to be swept away by the sheer enchantment of GHRIEBM's events – where fascination knows no bounds!</p>
        </div>
        <div class=""></div>

    </div>
  </div>
    <div id="section">
        <div class="card" style="width: 18rem;">
            <img src="./assets/pexels-mark-angelo-sampan-1587927.jpg" class="card-img-top" alt="">
            <div class="card-body">
            <h5 class="card-title">Antaragni: GHRIEBM Jalgaon's Annual Extravaganza!</h5>
            <p class="card-text">Experience the pulse-pounding excitement at Antaragni, where dance, singing, and drama converge in a grand celebration of GHRIEBM's vibrant talent. Join us for a night of electrifying performances, creating unforgettable memories and fostering a sense of unity within our dynamic community. 🎉💃🎤</p>
            <a href="./antaragni.php" class="btn btn-primary">Know More</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="./assets/pexels-summer-15254462.jpg" class="card-img-top" alt="">
            <div class="card-body">
            <h5 class="card-title">Kashti: GHRIBM Jalgaon's Annual Gala!</h5>
            <p class="card-text">Kashti, our annual extravaganza, sets sail with breathtaking dance, soul-stirring singing, and captivating drama. Immerse yourself in the excitement of this grand event, where every performance crafts a memorable voyage through the talents of GHRIBM's vibrant community. 🚢</p>
            <a href="./kashti.php" class="btn btn-primary">Know More</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="./assets/tech.jpg" class="card-img-top" alt="">
            <div class="card-body">
            <h5 class="card-title">TechCrunch: Igniting Tomorrow's Tech Today at GHRIEBM Jalgaon!</h5>
            <p class="card-text">Experience the forefront of innovation as GHRIEBM Jalgaon presents TechCrunch—a powerhouse of tech events shaping the future. Join us in unraveling the possibilities, connecting with industry leaders, and immersing yourself in the technological revolution! 🔧🔍</p>
            <a href="./techcrunch.php" class="btn btn-primary">Know More</a>
            </div>
        </div>
      
    <div>
