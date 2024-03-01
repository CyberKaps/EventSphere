<?php      
$host = "localhost";  
$user = "root";  
$password = '';  
$db='EventSphere';

  session_start();
  
$con = mysqli_connect($host, $user, $password,$db);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  
else{
    //echo"Connected to database";
}
    $first_name = $_REQUEST['fname'];
    $last_name=$_REQUEST['lname'];
		$email = $_REQUEST['email'];
		$number = $_REQUEST['pno'];
    $pass=$_REQUEST['psw'];
    $gender=$_REQUEST['gender'];
              
       
    $i=0;
    $select_accounts = mysqli_query($con, "SELECT * FROM `usermaster`");
 
    if(mysqli_num_rows($select_accounts) > 0){
       while($row=mysqli_fetch_assoc($select_accounts)){
         if($row['email']==$email){
         $message[] = 'You are already registered';
          header("Location: ./createaccount.php");
          break;
         }
         else
         {
             $i++;
         }
       } 

       if($i>=mysqli_num_rows($select_accounts))  {
        $sql = "INSERT INTO usermaster VALUES ('$first_name','$last_name','$email','$number','$pass','$gender')";
         
        $result = mysqli_query($con, $sql);  
       
         
          if($result)
          {
			  
			  $_SESSION["username"] = $email;
            $_SESSION["password"] = $pass;
            header("Location:../index.php");
          }
          else{
              echo "Data cannot be inserted";
          }
      }    
      
      
    }else{
      $sql = "INSERT INTO usermaster VALUES ('$first_name','$last_name','$email','$number','$pass','$gender')";
         
        $result = mysqli_query($con, $sql);  
       
         
          if($result)
          {
            header("Location:../index.php");
          }
          else{
              echo "Data cannot be inserted";
          }
 }
   


      

?>  