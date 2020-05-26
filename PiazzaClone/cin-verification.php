
<?php
require "classes/StudentView.php";
$cin;
//get the cin value sended from the signup-form
$cin=$_POST['cin'];
$univ=$_POST['univ'];

echo $univ;
$error_in_cin=false;
$univvv=false;
//chech cin value 
if(empty($cin)){
	echo "<span>please fill in your cin  </span>";
	$error_in_cin=true;
}
else
{
  //check the existence of cin in database 
  $student_v=new StudentView();
  if(!$student_v->check_for_cin($cin,$univ)){
        $univvv=true;
        $error_in_cin=true;
        echo "<span> cin doesn't exist in this univ</span>";

  }else{ 
    echo "<span> alright </span>"; 
  }	  
}

?>
<script >
  
  var cin_error="<?php echo $error_in_cin; ?>";
    
  if(cin_error==true ){
    $("#indice").val("0");
    alert("Invalid Cin");
  	$(".form-message").addClass("input-error");
  }else{
   alert("yeees");
    $("#indice").val("1");
  	$("#c").hide();
  	 $("#signup-info").show();
     
  }
</script>