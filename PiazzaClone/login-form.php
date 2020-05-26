<?php 
if($_SERVER['REQUEST_METHOD']=="POST")
{
   
   	
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		lOGIN
 	</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 	<script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="index_Style.css">
 </head>
 <body>
 	<!--CREATE A SIGN-UP FORM-->
<center> <div id="signup-area">
 	<div id="sinup-form-title" style="font-size: 20px ; color: blue;" >SIGN IN  </div>
 	<div id="SignUp-form-area">
 		<form id="signup-form" action="" method="post">
 			
         <div id="signin-info">
         	<label>Email</label><br>
         	<input type="text" name="school-email"class="form-control" ><br>
         	<label>Password</label><br>
         	<input type="password" name="school-email-pass"class="form-control"><br>
         </div>	
         <input type="submit" name="submit-button" value="submit" class="btn btn-success btn-lg">	
 		</form>
 	</div>	
 </div>

</center>
 </body>
 
 </html>