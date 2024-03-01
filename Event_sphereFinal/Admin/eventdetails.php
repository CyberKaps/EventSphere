<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "EventSphere";

$con = mysqli_connect($host, $user, $password, $db);
if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}

$selectedEvent = $_POST['eventname'];
$selecteddttime = $_POST['datetime'];


$query = "SELECT * FROM eventmaster WHERE eventname = '$selectedEvent' AND datetime = '$selecteddttime'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
	
	$row = mysqli_fetch_assoc($result);
	
    
echo '<table>
    <tbody>
		<tr>
		  <td>Event Name :
		  </td>
		  <td>' . $row['eventname'] . '</td>
		</tr>
		<tr>
		  <td>Date And Time :
		  </td>
		  <td>' . $row['datetime'] . '</td>
		</tr>
		<tr>
		  <td>Venue :
		  </td>
		  <td>' . $row['venue'] . '</td>
		</tr>
		<tr>
		  <td>Organiser :
		  </td>
		  <td>' . $row['commiteename'] . '</td>
		</tr>
		<tr>
		  <td>Contact Person :
		  </td>
		  <td>' . $row['contactperson'] . '</td>
		</tr>
		<tr>
		  <td>Contact Email :
		  </td>
		  <td>' . $row['contactemail'] . '</td>
		</tr>
		<tr>
		  <td>Contact No. :
		  </td>
		  <td>' . $row['contactphone'] . '</td>
		</tr>
		<tr>
		  <td>Event Details :
		  </td>
		  <td>' . $row['eventdetails'] . '</td>
		</tr>
		<tr>
		  <td>Attendence :
		  </td>
		  <td>' . $row['attendence'] . '</td>
		</tr>
		<tr>
		  <td>Budget :
		  </td>
		  <td>' . $row['budget'] . '</td>
		</tr>
		<tr>
		  <td>Funding Sources :
		  </td>
		  <td>' . $row['fundingsources'] . '</td>
		</tr>
		<tr>
		  <td>Promotion Plan :
		  </td>
		  <td>' . $row['promotionplan'] . '</td>
		</tr>
		<tr>
		  <td>Target Audience :
		  </td>
		  <td>' . $row['targetaudience'] . '</td>
		</tr>
		
    </tbody>
</table>';
	
	
} else {
   
   echo 'No Details Found';
   
}

?>
