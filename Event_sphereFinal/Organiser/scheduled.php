<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend Data Display</title>
    <link rel="stylesheet" href="scheduled.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk&family=Nabla&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Honk&family=Nabla&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            /* padding: 20px; */
            background-color: #f4f4f4;
        }

        table { 
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }
        .tablediv{
            height: fit-content;
            width: 80vw;
            margin-left: 10%;
        }
        .title{
            text-align: center;
            font-family: "Anton", sans-serif;
            font-weight: 200;
            font-style: normal;
            padding-top: 5%;
            font-size: 2vw;

        }
        .main{
            height: 100%;
            width: 100%;
            position: relative;
        }
        .main img{
            height: 111vh;
            width: 100%;
            object-fit: cover;
            position: absolute;
        }
        .imp{
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>
    <div class="main">
        <img src="./bgimg.jpg">
        <div class="imp">
            <div class="upper">
                <div class="nav">
                    <img style="height: 3vw; width: 4.3%;" src="./logo.jpg" alt="">
                    <h4 style="margin-left: 5vw; margin-top: 0vw;">GHRIEBM<br>JALGAON.</h4>
                    <ul class="list">
                        <li id="li1"><a href="../index.php">Home</a></li>
                        <li id="li2"><a href="../even2.php">Events</a></li>
                        <li id="li3"><a href="../gallery/gallery1.php">Gallery</a></li>
                        <!-- <li id="li4"><a href="#">Venue</a></li> -->
                        <!-- <li id="li5"><a href="#"><button>Login</button></a></li> -->
                    </ul>
                    <div style="height: 2.5vw; width: fit-content; margin-top: 0.4vw; margin-right: 1.5vw; padding-right: 5vw;" 
                    id="button-87" role="button"><a href="../profile.php"><i style="font-size: 2vw;color:white" class="ri-account-circle-line"></i></a></div>
                    <!-- HTML !-->
                </div>
            </div>
    <div class="title">
        <h2 style="color: rgb(255, 145, 0); font-weight: 400;"><span style="color: white;">SCHEDULED</span> EVENTS</h2>
    </div>
    <!-- Assuming your backend data is in a structure like this -->
    <!-- Replace the below table structure with your actual data -->
    <div class="tablediv">
    <?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db='EventSphere';

    $con = mysqli_connect($host, $user, $password, $db);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: " . mysqli_connect_error());  
    }
?>

<table style="color: white;">
    <thead>
        <tr>
            <th>Event Name </th>
            <th>Club/Committee</th>
            <th>Date And Time</th>
            <th>Status</th>
            <!-- Add more columns as needed -->
        </tr>
    </thead>
    <tbody>
    <?php
        $select_events = mysqli_query($con, "SELECT * FROM `eventmaster`");
        if(mysqli_num_rows($select_events) > 0) {
            while($row = mysqli_fetch_assoc($select_events)) {
                echo '<tr>';
                echo '<td>' . $row['eventname'] . '</td>';
                echo '<td>' . $row['commiteename'] . '</td>';
                echo '<td>' . $row['datetime'] . '</td>';
                echo '<td>' . $row['flag'] . '</td>';
                echo '</tr>';
            }
        }
    ?>
    </tbody>
</table>

    </div>
    </div>
</div>
</body>
</html>
