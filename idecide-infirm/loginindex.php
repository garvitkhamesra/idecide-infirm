<?php
session_start();
$_SESSION['login']=false;

?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='css/cssfile.css' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/stylelogin.css">

    
    
    
  </head>

  <body style = "background : white	">

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up</h1>
          
          <form action="registration.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name = "firstname"/>
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name = "lastname" />
            </div>
          </div>
		  

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name = "email" />
          </div>
		  
		  <div class="field-wrap">
            <label>
              Username <span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name = "username" />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name = "password" />
          </div>

          <div class="field-wrap">
            <label>
              Select <span class="req">*</span>
            </label>
            <select style=" margin-left: 63% " class="frm-field required sect"  required autocomplete="off" name = "role"  >
          <option value="">Select Role</option>
          <option value="doctor">Doctor</option> 
          <option value="patient">Patient</option>          
          <option value="admin">Adminstrator</option>
                              
        </select>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome</h1>
          
          <form action="login.php" method="post">
          
            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name = "username"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name = "password"/>
          </div>
          
           <div class="field-wrap">
            <label>
              Select <span class="req">*</span>
            </label>
            <select style=" margin-left: 63% " class="frm-field required sect"  required autocomplete="off" name = "role"  >
          <option value="">Select Role</option>
          <option value="doctor">Doctor</option> 
          <option value="patient">Patient</option>          
          <option value="admin">Adminstrator</option>
                              
        </select>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='js/jsnew.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
