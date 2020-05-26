
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		SignUp
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
<center>
   <div id="signup-area">
 	<div id="sinup-form-title" style="font-size: 20px ; color: blue;" >SignUp Here </div>
 	<div id="SignUp-form-area">
 		<form id="signup-form" action="signup-info-verification.php" method="POST" >
 			<div id="school-info">
 	     <label>School name</label><br>
         <input type="text" name="school-name" placeholder="school name..." id="school-name" class="form-control" autocomplete="none" required="" ><br>
         <label>Class name</label><br>
         <input type="text" name="class-name" placeholder="class name..." class="form-control" id="class-name"  ><br>
         </div>	
         <div id="c">
            <label>CIN</label><br>
            <input type="text" name="student-cin"class="form-control" id="student-cin"  ><br>  
            <p class="form-message"></p>      
         </div> 
         <div id="signup-info">
            <label>Email</label><br>
            <input type="text" id="email" name="student-email"class="form-control" placeholder="Enter Your Email.." ><br>
            <label>Password</label><br>
            <input type="password"  name="email-pass"   class="form-control"  placeholder="Enter Your Password..." ><br>
         </div> 
         <input type="text" name="indicator" id="indice" value="0" hidden="">
         <input type="submit" name="submit" value="submit" class="btn btn-success btn-lg"  >	
 		</form>
 	</div>	
 </div>

</center>
 </body>
 <script type="text/javascript">
      $("#c").hide();
  var signup=0;
	$("#signup-form").submit(function(event){
        
		 if(signup==0){
          event.preventDefault();
			$("#school-info").hide();
            $("#signup-info").hide();
            $("#c").show();
			signup=signup+1;
		}else if(signup==1 && ($("#indice").val()=="0")){
          event.preventDefault();
            var cin=$("#student-cin").val();
            var univ=$("#school-name").val();
            $(".form-message").load("cin-verification.php",{
                cin:cin,
                univ:$("#school-name").val()
                

            });
           
            
        }else if($("#indice").val()==1){
           if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($("#email").val()))
                 {
                   
                 }else {

                    event.preventDefault(); 
                    alert("invalid email format !!");
                 }
                
        }
	         
	});
	
</script>
 </html>