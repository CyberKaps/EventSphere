<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="authority.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Honk&family=Nabla&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<?php
session_start();

$host = "localhost";  
$user = "root";  
$password = '';  
$db='EventSphere';

$con = mysqli_connect($host, $user, $password,$db);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  
else {
    //echo"Connected to database";
}

if (!isset($_SESSION["username"])) {
    // If not logged in, redirect to the login page
    header("Location: ../register/login3.php");
    exit;
} else {
    $username = $_SESSION["username"];
    $password = $_SESSION["password"];
    $sql = mysqli_query($con , "SELECT * FROM `adminmaster` where username='$username' and password='$password'");

    if(mysqli_num_rows($sql) > 0){
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
    } else {
        header("Location: ../register/login3.php");
        exit;
    }
}

if(isset($_POST['approve'])){
    $datetime = $_POST['datetime'];
    $eventname = $_POST['eventname'];
    $sql = "UPDATE eventmaster SET flag = 'Approved' WHERE eventname = '$eventname' AND datetime = '$datetime'";
    if(mysqli_query($con, $sql)) {
        echo "<script>alert('Event Approved!');</script>";
    } else {
        echo "<script>alert('Error!');</script>";
    }
}

if(isset($_POST['reject'])){
    $datetime = $_POST['datetime'];
    $eventname = $_POST['eventname'];
    $sql = "UPDATE eventmaster SET flag = 'Rejected' WHERE eventname = '$eventname' AND datetime = '$datetime'";
    if(mysqli_query($con, $sql)) {
        echo "<script>alert('Event Rejected!');</script>";
    } else {
        echo "<script>alert('Error!');</script>";
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
                <li id="li1"><a href="..\index.php">Home</a></li>
                <li id="li2"><a href="..\Even3.php">Events</a></li>
                <li id="li3"><a href="..\gallery/gallery1.php">Gallery</a></li>
            </ul>
            <div style="height: 2.5vw; width: fit-content; margin-top: 0.4vw; margin-right: 1.5vw; padding-right: 5vw;" 
                id="button-87" role="button"><a style="text-decoration: none;" href="../profile.php"><i style="font-size: 2vw;color:white" class="ri-account-circle-line"></i></a></div>
		
        </div>
      </div>
      <div>
          <div class="container">
              <h1 style="margin-top: 0vw;">Approve with <span style="color: rgb(255, 145,0);">EVENT_SPHERE</span></h1>
              <br>
              <p style="font-weight: bold; font-family: 'Courier New', Courier, monospace;">Introducing Event Sphere, GHRIEBM's innovative Jalgaon platform designed to streamline the event creation process for organizing committees and clubs. This digital solution allows users to submit event proposals online and obtain approvals seamlessly from respective faculties, Heads of Departments (HODs), and Deans.</p>
          </div>
      </div>
	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
      <div id="down">
          <div style="padding-left: 2vw; padding-top: 1.2vw; padding-bottom: 1.2vw;  color: rgb(255, 145, 0); margin-top: 2vw;" class="upc"><h2 style="font-size: 3vw;">Events for Approvals:</h2></div>
          <?php              
          $select_events = mysqli_query($con, "SELECT * FROM `eventmaster` WHERE flag = 'Pending'");
      
          if(mysqli_num_rows($select_events) > 0){
              while($row=mysqli_fetch_assoc($select_events)){
                  echo '<hr style="border: 2px solid white;">
                  <div style="display: flex;" class="up-events">
                    <div>
                      <h4  id="datetime" style="font-size: 1.2vw; padding-left: 6vw; padding-top: 2vw; color: white ;">'.$row['datetime'].'</h4>
                      <h1  id="eventname" style="padding-left: 6vw; padding-bottom: 2vw; color: white; font-size: 2vw;">'.$row['eventname'].'</h1>
                    </div>
					
					<div style="margin-left: 10vw; margin-top: 3vw;">
                      
                        <button id="openModalBtn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#eventDetailsModal" type="button" name="showmore" style="
                          padding: 0.5vw 1.6vw;
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
                          
                          cursor: pointer;
                          user-select: none;
                          -webkit-user-select: none;
                          touch-action: manipulation;
                        ">Show More</button>
                    
                    </div>
					<div style="margin-left: 10vw; margin-top: 3vw;">
                      <form method="post">
                        <input type="hidden" name="datetime" value="'.$row['datetime'].'">
                        <input type="hidden" name="eventname" value="'.$row['eventname'].'">
                        <button type="submit" name="approve" style="
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
                          background-color: green;
                          cursor: pointer;
                          user-select: none;
                          -webkit-user-select: none;
                          touch-action: manipulation;
                        ">Approved</button>
                      </form>
                    </div>
                    <div style="margin-left: 10vw; margin-top: 3vw;">
                      <form method="post">
                        <input type="hidden" name="datetime" value="'.$row['datetime'].'">
                        <input type="hidden" name="eventname" value="'.$row['eventname'].'">
                        <button type="submit" name="reject" style="
                          padding: 0.5vw 1.6vw;
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
                          background-color: red;
                          cursor: pointer;
                          user-select: none;
                          -webkit-user-select: none;
                          touch-action: manipulation;
                        ">Reject</button>
                      </form>
                    </div>
                  </div>';
              }
          }
          ?>
          <hr style="border: 2px solid white;">
      </div>
    </div>
  </div>
   <div class="modal fade" id="eventDetailsModal" tabindex="-1" aria-labelledby="eventDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventDetailsModalLabel">Event Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="eventDetailsBody">
                    <!-- Event details will be displayed here -->
                </div>
            </div>
        </div>
    </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery (required for Bootstrap JS) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            // Button click event handler
            $('#openModalBtn').click(function(){
                // AJAX request to fetch event details
				
				var datetime = $('#datetime').text().trim();
				var eventname = $('#eventname').text().trim();
		
                $.ajax({
                    url: 'eventdetails.php', // PHP script that retrieves event details
                    method: 'POST',
                    data: {
                        eventname: eventname, // Replace with selected event name
                        datetime: datetime // Replace with selected date and time
                    },
                    success: function(response){
                        // Display event details in the modal body
                        $('#eventDetailsBody').html(response);
                    },
                    error: function(xhr, status, error){
                        // Handle error
                        console.error(error);
                    }
                });
            });
        });
    </script>
	
</body>
</html>
