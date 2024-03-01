<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html>
  <head>
    <script>
    
    function validate(){ 

      var fname =document.forms.cform.fname.value;
   
      var lname = document.forms.cform.lname.value; 
  
      var email =document.forms.cform.email.value; 
  
      var pno = document.forms.cform.pno.value; 
  
      var psw = document.forms.cform.psw.value; 
  
      var cp =  document.forms.cform.cp.value; 
      var gender =  document.forms.cform.gender.value;
  
      var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;  //Javascript reGex for Email Validation. 
  
      var regPhone=/^\d{10}$/;                                        // Javascript reGex for Phone Number validation. 
  
      var regName = /\d+$/g;                                    // Javascript reGex for Name validation 
  
      if (fname == "" || regName.test(fname)) { 
  
          window.alert("Please enter your name properly."); 

          return false; 
  
      } else
  
      if (lname == "" || regName.test(lname)) { 
  
      window.alert("Please enter your name properly."); 

     return false; 

    } else
  
      if (email == "" || !regEmail.test(email)) { 
  
          window.alert("Please enter a valid e-mail address."); 
  
          return false; 
  
      } else
  
      if (pno == "" || !regPhone.test(pno)) { 

        alert("Please enter valid phone number."); 

        return false; 

    } 
else
  
      if (psw == "" || psw.length <8) { 
  
          alert("Please enter valid password"); 
  
          return false; 
  
      } 

      else
  
      if (gender == "" || gender==null) { 
  
          alert("Please select gender"); 
  
          return false; 
  
      } 


      return true; 
  }


  
  </script>
      <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins',sans-serif;
}
body{
height: 100vh;
display: flex;
justify-content: center;
align-items: center;
padding: 10px;

background-color: gray;
}
.container{
max-width: 700px;
width: 100%;
background-color: #fff;
padding: 25px 30px;
border-radius: 5px;
box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
font-size: 25px;
font-weight: 500;
position: relative;
}
.container .title::before{
content: "";
position: absolute;
left: 0;
bottom: 0;
height: 3px;
width: 30px;
border-radius: 5px;
background: linear-gradient(135deg, #71b7e6, #9b59b6);
}




form .user-details .input-box{
margin-bottom: 15px;
width: calc(100% / 2 - 20px);
}
.content form .user-details{
display: flex;
flex-wrap: wrap;
justify-content: space-between;
margin: 20px 0 12px 0;
}
form .user-details .input-box{
margin-bottom: 15px;
width: calc(100% / 2 - 20px);
}
form .input-box span.details{
display: block;
font-weight: 500;
margin-bottom: 5px;
}
.user-details .input-box input{
height: 45px;
width: 100%;
outline: none;
font-size: 16px;
border-radius: 5px;
padding-left: 15px;
border: 1px solid #ccc;
border-bottom-width: 2px;
transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
border-color: #9b59b6;
}
form .gender-details .gender-title{
font-size: 20px;
font-weight: 500;
}
form .category{
display: flex;
width: 80%;
margin: 14px 0 ;
justify-content: space-between;
}
form .category label{
display: flex;
align-items: center;
cursor: pointer;
}
form .category label .dot{
height: 18px;
width: 18px;
border-radius: 50%;
margin-right: 10px;
background: #d9d9d9;
border: 5px solid transparent;
transition: all 0.3s ease;
}
#dot-1:checked ~ .category label .one,
#dot-2:checked ~ .category label .two,
#dot-3:checked ~ .category label .three{
background: #9b59b6;
border-color: #d9d9d9;
}
form input[type="radio"]{
display: none;
}
form .button{
height: 45px;
margin: 35px 0
}
form .button input{
height: 100%;
width: 100%;
border-radius: 5px;
border: none;
color: #fff;
font-size: 18px;
font-weight: 500;
letter-spacing: 1px;
cursor: pointer;
transition: all 0.3s ease;
   background: linear-gradient(135deg, rgb(255,145,0), #e66814);
}
form .button input:hover{
/* transform: scale(0.99); */

background: linear-gradient(-135deg, rgb(255,145,0), #e66814);
}
@media(max-width: 584px){
.container{
max-width: 100%;
}
form .user-details .input-box{
margin-bottom: 15px;
width: 100%;
}
form .category{
width: 100%;
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
.content form .user-details{
max-height: 300px;
overflow-y: scroll;
}
.user-details::-webkit-scrollbar{
width: 5px;
}
}
@media(max-width: 459px){
.container .content .category{
flex-direction: column;
}
}
.input-box input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}
.input-box select,
.input-box input[type="date"]{
    color: #707070;
}

</style>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
 
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
	<?php
                    if(isset($message)){
                        foreach($message as $msg){
                            echo '<div class="message"><span style="color: red;">'.$msg.'</span><i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i></div>';
                        }
                    }
                    ?>
      <form name='cform' action="./addaccount.php" method='post' onsubmit="return validate()">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name='fname' placeholder="Enter first name" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name='lname' placeholder="Enter last name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name='email' placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name='pno' placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name='psw' placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" name='cp' placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="male" id="dot-1">
          <input type="radio" name="gender" value="female" id="dot-2">
          <input type="radio" name="gender" value="other" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
        <div class="form-link">
            <span>Already have an account? <a href="./login.php" class="link signup-link">Login</a></span>
        </div>                      
      </form>
    </div>
  </div>

</body>
</html>