<?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db = 'EventSphere';

$con = mysqli_connect($host, $user, $password, $db);  
if (mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: " . mysqli_connect_error());  
}  

$events = array();

$result = mysqli_query($con, "SELECT * FROM eventmaster WHERE flag = 'Approved'");
  
while ($row = mysqli_fetch_assoc($result)) {
    // Construct the event text
    $eventText = 'Event: ' . $row['eventname'] . '<br>';
    $eventText .= 'Venue: ' . $row['venue'] . '<br>';
    $eventText .= 'Timing: ' . $row['datetime'];

    // Create the key for the events object using the date field
    $date = date('Y-m-d', strtotime($row['datetime']));

    // Assign the event text to the events object with the date as the key
    $events[$date] = $eventText;
}
?>

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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Honk&family=Nabla&family=Oswald:wght@200..700&display=swap" rel="stylesheet">

    <style> 
    #calendar-container {
        text-align: center; 
        margin-top: 50px;
    }
    #calendar {
        background-color:bisque;
        padding: 30px;
        border-radius: 18px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    th, td {
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }
    th {
        background-color: #000;
        color: #FFF;
    }
    date {
        font-weight: bold;
    }
    .event {
        color: #FF4500;
        font-style: italic;
        height: 40px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        height: 80px;
        white-space: normal;
    }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function () {
        var events = <?php echo json_encode($events); ?>;

        var calendarHTML = generateCalendar(events);
        $('#month').change(function() {
            var calendarHTML = generateCalendar(events);
            $('#calendar').html(calendarHTML);
        });
        $('#year').change(function() {
            var calendarHTML = generateCalendar(events);
            $('#calendar').html(calendarHTML);
        });
        $('#calendar').html(calendarHTML);
    });

    function generateCalendar(events) {
        var currentMonth = $('#month').val();
        var currentYear = $('#year').val();
        var numDays = new Date(currentYear, currentMonth, 0).getDate();
        var calendar = '<table>';
        calendar += '<thead><tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thur</th><th>Fri</th><th>Sat</th></tr></thead>';
        calendar += '<tbody><tr>';
        for (var i = 1; i <= numDays; i++) {
            var dateString = currentYear + '-' + ('0' + currentMonth).slice(-2) + '-' + ('0' + i).slice(-2);
            var dayOfWeek = new Date(dateString).getDay();
            var eventText = events[dateString] ? '<div class="event">' + events[dateString] + '</div>' : '';
            if (dayOfWeek == 0 && i != 1) {
                calendar += '</tr><tr>';
            }
            calendar += '<td>';
            calendar += '<div class="date">' + i + '</div>';
            calendar += eventText;
            calendar += '</td>';
        }
        calendar += '</tr></tbody>';
        calendar += '</table>';
        return calendar;
    }
    </script>
</head>
<body>
  <div class="main">
    <img src="./bgimg.jpg">
    <div class="imp">
        <div class="upper" style="margin-bottom: 8vw;">
            <div class="nav">
                <img style="height: 3vw; width: 4.3%;" src="./logo.jpg" alt="">
                <h4 style="margin-left: 5vw;">GHRIEBM<br>JALGAON.</h4>
                <ul class="list">
                    <li id="li1"><a href="../index.php">Home</a></li>
                    <li id="li2"><a href="../even2.php">Events</a></li>
                    <li id="li3"><a href="../gallery/gallery1.php">Gallery</a></li>
                </ul>
            </div>
        </div>
        <br>
        <br>
        <br>
        <section style="margin-bottom: 3vw;">
            
            <div id="calendar-container">


            <h2 style="color: rgb(255, 145, 0); font-weight: 400;font-family: 'Anton ';"><span style="color: white;">EVENTS</span> CALENDAR </h2>
            <label for="month" style="color: rgb(255, 145, 0); font-weight: 400;margin-left:20px;margin-right:20px">  Select Month:  </label>
            <select id="month">
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <label for="year" style="color: white; font-weight: 400;margin-left:20px;margin-right:20px">  Select Year:  </label>
            <select id="year">
                <?php for ($i = 2020; $i <= 2030; $i++) { ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>

            <br>
        <br>
            <br>
                <div id="calendar"></div>
            </div>
        </section>
    </div>
  </div>
</body>
</html>
