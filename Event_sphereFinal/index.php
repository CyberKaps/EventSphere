<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENT_SPHERE</title>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anta&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Dancing+Script:wght@400..700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">


  </head>

<body>
    <div class="main">
        <img class="bgimg" src="./bgimg.jpg"></img>
        <div class="content">
            <div class="upper">
                <div class="nav">
                    <img style="height: 2.9vw; width: 4.3%;" src="./logo.webp" alt="">
                    <h4>GHRIEBM JALGAON.</h4>
                    <ul class="list">
                        <li id="li1"><a href="./index.php"><b>Home</b></a></li>
                        <li id="li2"><a href="even.php">Events</a></li>
						<li id="li4"><a href="gallery/gallery1.php">Gallery</a></li>
                        <li style="margin-top: 0.5px;" id="li3" class="dropdown">
                          <button class="dropbtn" style="font-family: 'Courier New', Courier, monospace; font-weight: 700;">Admin</button>
                          <div class="dropdown-content">
                          <a href="Organiser\org.php">Club</a>
                              <a href="Admin\authority.php">Authority</a>
                          
                          </div>
                        </li>
                        <li style="margin-top: 0.5px;" id="li3" class="dropdown">
                          <button class="dropbtn" style="font-family: 'Courier New', Courier, monospace; font-weight: 700;">Join Us</button>
                          <div class="dropdown-content">
                              <a href="register/Login.php">Login</a>
                              <a href="register/createaccount.php">Register</a>
                          
                          </div>
                        </li>
                        <!-- <li id="li4"><a href="#">Venue</a></li> -->
                        <!-- <li id="li5"><a href="#"><button>Login</button></a></li> -->
                    </ul>
					
                    <!-- <button style="height: 2vw; width: 5.5vw;" id="button-87" role="button">Join Us<i class="ri-arrow-right-line"></i></button> -->
                    <!-- HTML !-->
                </div>
            </div>
            <div class="title">
                <h1>EVENT_SPHERE</h1>
                <h5>Your one-stop Hub for Events, Approvals and Student Connectivity</h5>
            </div>
            <div class="frame">
                <div class="box">
                  <img src="./Slider/photo-1533174072545-7a4b6ad7a6c3.avif">
                </div>
                <div class="box">
                  <img src="./Slider/traditional.jpeg">
                  <!-- <div class="text">Shivjaynti</div>
                  <div class="text">Mahotsav</div> -->
                </div>
                <div class="box">
                  <img src="./Slider/seminar.jpg">
                  <!-- <div style="color: white; position: absolute; ;">ROCK NIGHT</div> -->
                </div>
                <div class="box">
                  <img src="./Slider/codingcomp.jpg">
                </div>
              </div>
            <div class="center">
                <h1>EXPLORE MORE EVENTS</h1>
                <!-- <h5>Be part of a thriving community that celebrates the diversity of campus life. Connect,<br> engage, and make the most of your college experience with Event_sphere</h5> -->
                <button class="bt"><a href="Even.php">Click Here</a></button>
            </div>
        </div>
    </div>



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
    
?>

    <div style="background-color: rgb(67, 67, 67);" id="down">
        <div style="padding-left: 2vw; padding-top: 1.2vw; padding-bottom: 1.2vw; font-size: 2vw; color: rgb(255, 145, 0) ;" class="upc"><h2>Upcoming Events:</h2></div>
        
              
      <?php 
      $select_events = mysqli_query($con, "SELECT * FROM `eventmaster` WHERE flag = 'Approved' ORDER BY datetime DESC LIMIT 3");
      
          if(mysqli_num_rows($select_events) > 0){
            while($row=mysqli_fetch_assoc($select_events)){
              
              echo '<hr style="border: 2px solid;">';
            echo '<div style="display: flex;" class="up-events">
              <div>
                <h4 style="font-size: 1.2vw; padding-left: 6vw; padding-top: 2vw; color: white ;">'.$row['datetime'].'</h4>
                <h1 style="padding-left: 6vw; padding-bottom: 2vw; color: white;">'.$row['eventname'].'</h1>
              </div>
              <div style="margin-left: 10vw; margin-top: 3vw;"><button style="
                padding: 0.5vw 1.1vw;
                text-align: center;
                text-transform: uppercase;
                transition: 0.5s;
                background-size: 200% auto;
                color: white;
                border-radius: 10px;
                display: block;
                border: 0px;
                font-weight: 700;
                box-shadow: 0px 0px 14px -7px #f09819;
                background-image: linear-gradient(45deg, rgb(255, 145, 0) 0%, #F09819  51%, #FF512F  100%);
                cursor: pointer;
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
              "><a href="Even.php">Know More </a></button></div>
            </div>';
            
              }
            
          }else{
          
          echo '<hr style="border: 2px solid;">
            <div style="display: flex;" class="up-events">
              <div>
                <h4 style="font-size: 1.2vw; padding-left: 6vw; padding-top: 2vw; color: white ;">No Events Here!</h4>
              </div>
            </div>';
           
      }
        
      ?>  
       
            <hr style="border: 2px solid;">
        </div>
    </div>
   
    <div style="display: flex;" class="footer">
      <div style="padding-top: 3.5vw; padding-left: 8vw;" class="contact">
        <h2 style="color: white;">Contact us</h2>
        <div style="display: flex; margin-top: 2vw;">
          <h4 style="color: rgb(255, 145, 0); font-size: 2vw;"><i class="ri-phone-fill"></i></h4>
          <h4 style="color: white; margin-left: 2vw; margin-top: 0vw;">+91-0257-2264881</h4>
        </div>
        <div style="display: flex;">
          <h4 style="color: rgb(255, 145, 0); margin-top: 0vw; font-size: 2vw;"><i class="ri-school-fill"></i></h4>
          <h4 style="color: white; margin-left: 2vw;">G H Raisoni Institute of Engineering & Business <br> Management Gat No.57, Shirsoli Road, Mohadi <br> Jalgaon - 425002</h4>
        </div>
        <div style="display: flex;">
          <h4 style="color: rgb(255, 145, 0); margin-top: 0.5vw; font-size: 2vw;"><i class="ri-mail-fill"></i></h4>
          <h4 style="color: white; margin-left: 2vw; margin-top: 1.2vw;"><a style="text-decoration: none; color: white;" href="mailto:ghribmjal@raisoni.net">ghribmjal@raisoni.net</a></h4>
        </div>
        <div style="display: flex; gap: 2vw; padding-top: 1vw; margin-left: 5vw;">
          <a style="text-decoration: none;" href="https://www.instagram.com/ghriebm_official?igsh=MXUxZ25saXJrNHhibA==" target="_blank"><h4 style="color: rgb(255, 145, 0); margin-top: 0.8vw; font-size: 2vw;"><i class="ri-instagram-fill"></i></h4></a>
          <a style="text-decoration: none;" href="https://www.facebook.com/jalgaonghribm?mibextid=ZbWKwL" target="_blank"><h4 style="color: rgb(255, 145, 0); margin-top: 0.8vw; font-size: 2vw;"><i class="ri-facebook-circle-fill"></i></h4></a>
         <a style="text-decoration: none;" href="https://www.linkedin.com/school/ghrefs%27s-g.h.-raisoni-institute-of-information-technology-jalgaon./" target="_blank"><h4 style="color: rgb(255, 145, 0); margin-top: 0.8vw; font-size: 2vw;"><i class="ri-linkedin-box-fill"></i></h4></a>
        </div>
      </div>
      <div style="padding-left: 8vw; " class="committee">
        <h2 style="color: white; padding-top: 3.5vw; ">Our Committies</h2>
        <!-- <ul style="font-size: 1.2vw; color: white; padding-top: 1.9vw;"> -->
          <h4 style="color: white; margin-top: 1.3vw"><i style="color: rgb(255, 145, 0);" class="ri-arrow-right-up-line"></i>Ecell GHREBM</h4>
          <h4 style="color: white; margin-top: 1.3vw"><i style="color: rgb(255, 145, 0);" class="ri-arrow-right-up-line"></i>Coder's Club</h4>
          <h4 style="color: white; margin-top: 1.3vw"><i style="color: rgb(255, 145, 0);" class="ri-arrow-right-up-line"></i>Student Council</h4>
          <h4 style="color: white; margin-top: 1.3vw"><i style="color: rgb(255, 145, 0);" class="ri-arrow-right-up-line"></i>CSITA</h4>
        <!-- </ul> -->
        
      </div> 
      <div style="margin-left: 18vw; margin-top: 5vw;">
        <img style="margin-left: 1.1vw; margin-top: 1vw; height: 6vw;" src="./ghribmjal-logo.webp" alt="">
        <div style="color: rgb(255, 145, 0); margin-left: 1.3vw; font-size: 1.5vw;"><b>Raisoni Group of Institution</b></div>
        <!-- <img style="height: 10vw; width: 15vw; margin-top: 2vw;" src="./logo.webp" alt="G H Raisoni Institute of Engineering and Business Management, Jalgaon"> -->
        
      </div>
      <div style="color: white; margin-top: 25vw; margin-left: 5vw;">Created by - CodeSprout</div>
    </div>
    <!-- <script src="./script.js"></script> -->
</body>
</html>