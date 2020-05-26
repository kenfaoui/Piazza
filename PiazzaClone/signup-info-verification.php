<?php 
require "classes/StudentController.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
//Get the input value using post methode 
$univ_name=$_POST['school-name'];
$class_name=$_POST['class-name'];
$student_cin=$_POST['student-cin'];
$student_email=$_POST['student-email'];
$email_pass=$_POST['email-pass'];
//print values 
echo "university name is : <b>".$univ_name."</b><br>class name :  <b>".$class_name."</b><br>Student cin : <b>".$student_cin."</b><br>Student Email : <b>".$student_email."</b>";
//sanitizing  data 

//create 
$student_c=new StudentController($student_cin,$student_email,$email_pass,$class_name);
$student_c->student_signup();
}





?>
