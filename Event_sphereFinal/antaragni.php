
<?php
    session_start();

    if (!isset($_SESSION["username"]) ) {
        // If not logged in, redirect to the login page
        header("Location: register/login.php");
        exit;
    }
    $username = $_SESSION["username"];

    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db='EventSphere';

    $con = mysqli_connect($host, $user, $password,$db);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

    if(isset($_POST['register'])){
        $eventname = $_POST['eventname'];

        $sql = mysqli_query($con , "SELECT * FROM `registrationmaster` where username='$username' and eventname='$eventname'");

        if(mysqli_num_rows($sql) > 0){
            echo "<script>alert('You are already registered !' );</script>";
        }
        else{
            $record = mysqli_query($con, "SELECT * FROM `usermaster` where email='$username'");
            $row = mysqli_fetch_assoc($record);
            $fname = $row['fname'];
            $lname = $row['lname'];

            $sql = "INSERT INTO registrationmaster (username, fname, lname, eventname) 
            VALUES ('$username','$fname','$lname','$eventname')";

            if(mysqli_query($con, $sql)) {
                echo "<script>alert('You are registered successfully !');</script>";
            } else {
                echo "<script>alert('Error!');</script>";
            } 
        }
    }
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antaragini</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="kashti.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk&family=Nabla&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <style>
        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: all 0.3s ease;
            cursor: pointer;
            background-color: orange;
        }

        .btn:hover {
            opacity: 0.8;
            background-color: white;
        }
    </style>
</head>
<body>
<div class="main">
       
       <img class="bgimg" src="./bgimg.jpg"></img>
   <div class="imp">
       <div class="upper">
           <div class="nav">
               <img style="height: 2.9vw; width: 4.3%;" src="./logo.webp" alt="">
               <h4 style="margin-left: 0vw;">GHRIEBM <br>JALGAON.</h4>
               <ul class="list">
                   <li id="li1"><a href="index.php">Home</a></li>
                   <li id="li2"><a href="Even.php">Events</a></li>
                   <li id="li3"><a href="gallery/gallery1.php">Gallery</a></li>
                   <!-- <li id="li4"><a href="#">Venue</a></li> -->
                   <!-- <li id="li5"><a href="#"><button>Login</button></a></li> -->
               </ul>
               <div style="height: 2.5vw; width: fit-content; margin-top: 0.4vw; margin-right: 1.5vw; padding-right: 5vw;" 
                id="button-87" role="button"><a style="text-decoration: none;" href="../profile.php"><i style="font-size: 2vw;color:white" class="ri-account-circle-line"></i></a></div>
               <!-- <button style="height: 2vw; width: 5.5vw; margin-top: 0.3vw;" id="button-87" role="button">Login<i class="ri-arrow-right-line"></i></button> -->
               <!-- HTML !-->
           </div>
       </div>
    <section style="padding-top: 4vw;">
    <div class="container">
            <h1 style="font-size: 5vw;"><B>Antaragni 2024</B></h1>
            <p style="font-size: 2vw; color: white;">A journey towards excellence.
            </p>
            <br>
        </div>
    </section>
    <section>
        <div id="kashti">
            <div class="card" style="width: 18rem;">
                <img src="./assets/pexels-mark-angelo-sampan-1587927.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <form method="post">
                        <h5 class="card-title"><b>Days Celebration</b></h5>
                        <p class="card-text">Date: 26th & 28th Feb 2024</p>
                        <p class="card-text">Time: 10:00AM</p>
                        <p class="card-text">Venue: Badminton Court, Main Building</p>
                        <p class="card-text">Coordinators: Swapnil Shrawane, Kartik Deshmukh</p>
                        <p class="card-text"><b>Theme</b>: <br>26th Feb - Kids Day / Mismatch Day <br>28th Feb - Traditional Day / Group Day</p>
                        <input type="hidden" name="eventname" value="Days Celebration">
                        <button class="btn" type="submit" name="register">Register</button>
                    </form>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                    <img src="./assets/pexels-mark-angelo-sampan-1587927.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                    <form method="post">
                        <h5 class="card-title"><b>Antakshari</b></h5>
                        <p class="card-text">Date : 1st march 2024</p>
                        <pre class="card-text">Time: 11AM</pre>
                        <p class="card-text">Venue: Ampetheatre, Management Building</p>
                        <p class="card-text">Co-ordinators: Yashraj Patil, Mohit Mali</p>
                        <!-- <p class="card-text">Round 1: Quiz Competition</p>
                        <p class="card-text">Round 2: Product AD Presentation</p>
                        <p class="card-text">Round 3: Jingle for your Ad</p> -->
                        <input type="hidden" name="eventname" value="Antakshari">
                    <button class="btn" type="submit" name="register">Register</button>
                </form>
                 
                    </div>
            </div>
            <div class="card" style="width: 18rem;">
                    <img src="./assets/pexels-mark-angelo-sampan-1587927.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                    <form method="post">
                        <h5 class="card-title"><b>Personality Contest</b></h5>
                        <p class="card-text">Date - 1st March 2024</p>
                        <p class="card-text">Time - 2:00PM</p>
                        <p class="card-text">Venue: Ampitheatre, Management Building</p>
                        <p class="card-text">Co-ordinators: Dr. Saroj Patil</p>
                        <input type="hidden" name="eventname" value="Personality Contest">
                    <button class="btn" type="submit" name="register">Register</button>
                </form>
                   
                    </div>
            </div>


        </div>
        <div id="kashti1">
            <div class="card" style="width: 18rem;">
                <img src="./assets/pexels-mark-angelo-sampan-1587927.jpg" class="card-img-top" alt="">
                <div class="card-body">
                <form method="post">
                    <h5 class="card-title"><b>Rock Night</b></h5>
                    <p class="card-text">Date - 29th Feb 2024</p>
                    <p class="card-text">Time - 06:00PM</p>
                    <p class="card-text">Venue - Main Ground</p>
                    <p class="card-text">Co-ordinators: Akshaya Dani , Kanhaiya Patil</p>
                    <p class="card-text">Guest: Ameya Date</p>
                    <input type="hidden" name="eventname" value="Rock Night">
                    <button class="btn" type="submit" name="register">Register</button>
                </form>
                    
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="./assets/pexels-mark-angelo-sampan-1587927.jpg" class="card-img-top" alt="">
                <div class="card-body">
                <form method="post">
                    <h5 class="card-title"><b>Annual Gathering</b></h5>
                    <p class="card-text">Date - 02nd March 2024</p>
                    <p class="card-text">Time - 04:00PM</p>
                    <p class="card-text">Performance - Dance or Singing</p>
                    <p class="card-text">Co-ordinators:  Dr.Vishal Rana , Prof. Shriya Kogta</p>
                    <input type="hidden" name="eventname" value="Annual Gathering">
                    <button class="btn" type="submit" name="register">Register</button>
                </form>
                  
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="./assets/pexels-mark-angelo-sampan-1587927.jpg" class="card-img-top" alt="">
                <div class="card-body">
                <form method="post">
                    <h5 class="card-title"><B>Drama</B></h5>
                    <p class="card-text">Date - 02nd March 2024</p>
                    <p class="card-text">Time - 10:00AM</p>
                    <p class="card-text">Categories: Maximum Team 4</p>
                    <p class="card-text">Co-ordinators: Jyoti Jakhete, Jitendra Jamadar</p>
                    <p class="card-text">Theme: GenZ </p>
                    <input type="hidden" name="eventname" value="Drama">
                    <button class="btn" type="submit" name="register">Register</button>
                </form>
                    
                </div>
            </div>  
        </div>
    </section>
</body>
</html>





