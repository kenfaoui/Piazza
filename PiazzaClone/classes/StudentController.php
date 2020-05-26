<?php
require "Student.php";
class StudentController extends Student {
    

  function __construct($student_cin,$student_email,$email_pass,$class_name){
     $class_id=$this->get_class_id($class_name);
  	 parent::__construct($student_cin,$student_email,$email_pass,$class_id);

  }
   public  function student_signup(){
        $this->create_student();

   } 


}



 ?>