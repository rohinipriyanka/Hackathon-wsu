<?php
   require_once("config.php");
   session_start();
  
   $error = '';
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($mysqli,$_POST['username']);
      $mypassword = mysqli_real_escape_string($mysqli,$_POST['password']);
      
      $sql = "SELECT id, username FROM subscribers WHERE username = '$myusername' and password = '$mypassword'";
      $result = $mysqli->query($sql);
      if ($result) {
                $row = $result->fetch_object();
      }
      
      if (isset($row) && $row->id) {
         $_SESSION['login_user'] = $row->username;

         header("location: index.php");
      } else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      
      <style type = "text/css">
         body {
             background-image: url('https://images.pond5.com/relaxing-green-background-light-rays-footage-023178912_prevstill.jpeg'); 
             background-color: #abf5f7;
            font-family:Arial, Helvetica, sans-serif;
            font-size:18px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:18px;
         }
         
         .box {
            border:#666666 solid 2px;
         }
      </style>
      
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>User Name  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password   :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  
                  <input type = "submit" value = " Submit "/><br />
           
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>
       
       <div class="module">
           <div align = "center">
    <h1>Create an account</h1>
    <div align = "center">
    <form class="form" action="signup.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <input type="submit" value="Sign up" name="Log in" class="btn btn-block btn-primary" />
      
    </form>
  </div>

   </body>
</html>


