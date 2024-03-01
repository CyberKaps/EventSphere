<?php
$servername="localhost";
$uname="root";
$password="";
$db_name="EventSphere";
$conn=mysqli_connect($servername,$uname,$password,$db_name);
if(!$conn){
    echo"Connection failed";
}
else{
    //echo"Connected to database";
}
?>
