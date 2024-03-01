<?php
session_start();

$host = "localhost";  
$user = "root";  
$password = '';  
$db='EventSphere';

$con = mysqli_connect($host, $user, $password, $db);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $passw = $_POST['password'];

    if($email == null || $email == '' || $passw == null || $passw == '') {
        $message[] = 'Username and password are required'; 
    } else {
        $sql = mysqli_query($con, "SELECT * FROM `usermaster` WHERE email='$email' AND password='$passw'");
        if(mysqli_num_rows($sql) > 0){
            echo "<script>alert('Login Successfully !');</script>";
            $_SESSION["username"] = $email;
            $_SESSION["password"] = $passw;
            header("Location: ../even.php");
            exit; // Exit the script after redirection
        } else {
            $message[] = 'Username or password is incorrect';
        }
    }
}
?>



<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Responsive Login and Signup Form </title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
             

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
            *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
.container{
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: gray;
    column-gap: 30px;
}
.form{
    position: absolute;
    max-width: 430px;
    width: 100%;
    padding: 30px;
    border-radius: 6px;
    background: #FFF;
}
.form.signup{
    opacity: 0;
    pointer-events: none;
}
.forms.show-signup .form.signup{
    opacity: 1;
    pointer-events: auto;
}
.forms.show-signup .form.login{
    opacity: 0;
    pointer-events: none;
}
header{
    font-size: 28px;
    font-weight: 600;
    color: #232836;
    text-align: center;
}
form{
    margin-top: 30px;
}
.form .field{
    position: relative;
    height: 50px;
    width: 100%;
    margin-top: 20px;
    border-radius: 6px;
}
.field input,
.field button{
    height: 100%;
    width: 100%;
    border: none;
    font-size: 16px;
    font-weight: 400;
    border-radius: 6px;
}
.field input{
    outline: none;
    padding: 0 15px;
    border: 1px solid#CACACA;
}
.field input:focus{
    border-bottom-width: 2px;
}
.eye-icon{
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    font-size: 18px;
    color: #8b8b8b;
    cursor: pointer;
    padding: 5px;
}
.field button{
    color: #fff;
    background: linear-gradient(135deg, rgb(255,145,0), #e66814);
    transition: all 0.3s ease;
    cursor: pointer;
}
.field button:hover{
    background: linear-gradient(-135deg, rgb(255,145,0), #e66814);
}
.form-link{
    text-align: center;
    margin-top: 10px;
}
.form-link span,
.form-link a{
    font-size: 14px;
    font-weight: 400;
    color: #232836;
}
.form a{
    color: #0171d3;
    text-decoration: none;
}
.form-content a:hover{
    text-decoration: underline;
}
.line{
    position: relative;
    height: 1px;
    width: 100%;
    margin: 36px 0;
    background-color: #d4d4d4;
}
.line::before{
    content: 'Or';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #FFF;
    color: #8b8b8b;
    padding: 0 15px;
}
.media-options a{
    display: flex;
    align-items: center;
    justify-content: center;
}
a.facebook{
    color: #fff;
    background-color: #4267b2;
}
a.facebook .facebook-icon{
    height: 28px;
    width: 28px;
    color: #0171d3;
    font-size: 20px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
}
.facebook-icon,
img.google-img{
    position: absolute;
    top: 50%;
    left: 15px;
    transform: translateY(-50%);
}
img.google-img{
    height: 20px;
    width: 20px;
    object-fit: cover;
}
a.google{
    border: 1px solid #CACACA;
}
a.google span{
    font-weight: 500;
    opacity: 0.6;
    color: #232836;
}
@media screen and (max-width: 400px) {
    .form{
        padding: 20px 10px;
    }
    
}
        </style>
    </head>
    <body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form action="" method="post">
                    <?php
                    if(isset($message)){
                        foreach($message as $msg){
                            echo '<div class="message"><span style="color: red;">'.$msg.'</span><i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i></div>';
                        }
                    }
                    ?>
                    <div class="field input-field">
                        <input type="email" name="email" placeholder="Email" class="input" required>
                    </div>
                    <div class="field input-field">
                        <input type="password" name="password" placeholder="Password" class="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <div class="field button-field">
                        <button name="login">Login</button>
                    </div>
					<div class="form-link">
						<span>Don't have an account? <a href="./createaccount.php" class="link signup-link">Create Account</a></span>
					</div>  
                </form>
                <br><br>
            </div>
        </div>
        <!-- Signup Form -->
        <div class="form signup">
            <!-- Your signup form content here -->
        </div>
    </section>
    <!-- JavaScript -->
    <script src="js/script.js"></script>
</body>
</html>